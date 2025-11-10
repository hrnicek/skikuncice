<script setup lang="ts">
import { ref } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { Dialog, DialogContent, DialogDescription, DialogHeader, DialogTitle, DialogTrigger } from '@/components/ui/dialog'

interface Post {
  id: number
  title: string
  content: string
  published_at: string
}

const page = usePage()
const latestPost = ref<Post | null>(page.props.latestPost as Post || null)
const dialogOpen = ref(false)
</script>

<template>
  <div class="h-full">
    <Dialog v-model:open="dialogOpen">
      <DialogTrigger as-child>
        <div v-if="latestPost" class="rounded-2xl p-4 bg-glass hover:bg-white/5 transition-all duration-200 cursor-pointer group h-full">
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center flex-shrink-0 group-hover:from-cyan-500/30 group-hover:to-blue-500/30 transition-colors">
              <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-white text-sm font-semibold line-clamp-2 group-hover:text-cyan-200 transition-colors">{{ latestPost.title }}</h4>
              <p class="text-white text-xs mt-1 line-clamp-3 font-medium">{{ latestPost.content }}</p>
              <div class="flex items-center justify-between mt-2">
                <span class="text-white/70 text-xs hover:text-cyan-200 transition-colors cursor-pointer">více informace</span>
                <span class="text-white/50 text-xs">{{ new Date(latestPost.published_at).toLocaleDateString('cs-CZ') }}</span>
              </div>
            </div>
          </div>
        </div>
      </DialogTrigger>

      <DialogContent class="max-w-2xl">
        <DialogHeader>
          <DialogTitle>{{ latestPost?.title }}</DialogTitle>
          <DialogDescription>
            Publikováno {{ new Date(latestPost?.published_at || '').toLocaleDateString('cs-CZ') }}
          </DialogDescription>
        </DialogHeader>
        <div class="mt-4">
          <div class="prose prose-sm max-w-none text-foreground" v-html="latestPost?.content"></div>
        </div>
      </DialogContent>
    </Dialog>

    <!-- Empty state -->
    <div class="rounded-2xl p-4 bg-glass h-full">
      <div class="flex items-center gap-3 h-full">
        <div class="w-10 h-10 rounded-full bg-gray-500/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
          </svg>
        </div>
        <div class="flex-1">
          <h4 class="text-white text-sm font-medium">Žádné novinky</h4>
          <p class="text-white/70 text-xs mt-1">Aktuálně nejsou k dispozici žádné příspěvky.</p>
        </div>
      </div>
    </div>
  </div>
</template>