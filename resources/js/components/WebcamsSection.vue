<script setup lang="ts">
import { type PropType, ref, computed, onMounted, onUnmounted } from 'vue'
import { trans } from 'laravel-vue-i18n'
import { Camera, CameraOff, Radio } from 'lucide-vue-next'

interface Webcam {
  name: string
  url: string | null
}

const props = defineProps({
  webcams: {
    type: Array as PropType<Webcam[]>,
    default: () => []
  },
  showTitle: {
    type: Boolean,
    default: true
  },
  intervalMs: {
    type: Number,
    default: 5000
  }
})

const tick = ref(0)
let timer: number | undefined

onMounted(() => {
  timer = window.setInterval(() => {
    tick.value++
  }, props.intervalMs)
})

onUnmounted(() => {
  if (timer) window.clearInterval(timer)
})

const srcWithArg = (url: string | null) => {
  if (!url) return null
  try {
    const u = new URL(url)
    u.searchParams.set('arg', String(tick.value))
    return u.toString()
  } catch {
    return `${url}${url.includes('?') ? '&' : '?'}arg=${tick.value}`
  }
}

const cardRefs = ref<HTMLElement[]>([])

const scrollToCamera = (index: number) => {
  const el = cardRefs.value[index]
  if (el) {
    el.scrollIntoView({ behavior: 'smooth', block: 'center' })
  }
}

const hasWebcams = computed(() => props.webcams && props.webcams.length > 0)
</script>

<template>
  <div class="space-y-8">
    <div v-if="props.showTitle" class="text-center space-y-4">
      <h2 class="text-3xl font-bold text-primary">
        {{ trans('webcams_section.title') }}
      </h2>
      <p class="text-gray-600 dark:text-gray-400">
        {{ trans('webcams_section.subtitle') }}
      </p>
      
      <!-- Anchor Navigation -->
      <div v-if="hasWebcams" class="flex flex-wrap items-center justify-center gap-2 pt-2">
        <button
          v-for="(webcam, index) in props.webcams"
          :key="index"
          @click="scrollToCamera(index)"
          class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:border-primary hover:text-primary transition-colors shadow-sm"
        >
          <Camera class="w-4 h-4" />
          {{ webcam.name }}
        </button>
      </div>
    </div>

    <div v-if="hasWebcams" class="space-y-8">
      <div 
        v-for="(webcam, index) in props.webcams" 
        :key="index" 
        :ref="(el) => { if (el) cardRefs[index] = el as HTMLElement }"
        class="group bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"
      >
        <div class="p-6 space-y-4">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
              <div class="relative p-3 rounded-lg bg-primary/10">
                <Camera class="w-6 h-6 text-primary" />
                <div v-if="webcam.url" class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-white shadow-sm animate-pulse"></div>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-primary">{{ webcam.name }}</h3>
                <div v-if="webcam.url" class="flex items-center gap-2 mt-1">
                  <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                  </span>
                  <span class="text-sm font-medium text-green-600 dark:text-green-400">
                    {{ trans('webcams_section.online') }}
                  </span>
                </div>
              </div>
            </div>
            
            <div v-if="webcam.url" class="px-3 py-1.5 rounded-full bg-red-600 text-white text-xs font-bold uppercase flex items-center gap-1.5 shadow-md">
              <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
              </span>
              {{ trans('webcams_section.live') }}
            </div>
          </div>

          <div class="relative w-full rounded-lg overflow-hidden shadow-md ring-1 ring-black/5 dark:ring-white/10">
            <div class="relative w-full" style="padding-bottom: 56.25%;">
              <img
                v-if="webcam.url"
                :src="srcWithArg(webcam.url)"
                class="absolute inset-0 w-full h-full object-cover"
                alt=""
                decoding="async"
                loading="lazy"
              />
              <div v-else class="absolute inset-0 flex flex-col items-center justify-center gap-3 bg-gray-100 dark:bg-gray-700">
                <CameraOff class="w-12 h-12 text-gray-400 dark:text-gray-500" />
                <span class="text-sm font-medium text-gray-600 dark:text-gray-400">
                  {{ trans('webcams_section.camera_unavailable') }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div v-else class="text-center py-16 text-gray-500 bg-white dark:bg-gray-800 rounded-lg shadow-md">
      <CameraOff class="w-16 h-16 mx-auto mb-4 text-gray-400" />
      <p class="text-lg font-medium">{{ trans('webcams_section.no_webcams') }}</p>
    </div>
  </div>
</template>
