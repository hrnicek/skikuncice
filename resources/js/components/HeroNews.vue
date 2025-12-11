<script setup lang="ts">
import { ref, computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { Dialog, DialogContent, DialogDescription, DialogHeader, DialogTitle } from '@/components/ui/dialog'
import { trans } from 'laravel-vue-i18n';
import { Badge } from '@/components/ui/badge'

interface News {
  id: number
  title: string
  content: string
  published_at: string
}

const page = usePage()
const news = computed(() => (page.props.news as unknown as News[]) || [])
// Take only the first item as the main highlight
const highlightedNews = computed(() => news.value.length > 0 ? news.value[0] : null)

const selectedNews = ref<News | null>(null)
const dialogOpen = ref(false)

function openNews(item: News) {
  selectedNews.value = item
  dialogOpen.value = true
}
</script>

<template>
  <div v-if="highlightedNews" class="h-full">
    <div 
      @click="openNews(highlightedNews)"
      class="rounded-2xl p-4 bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/15 transition-all duration-300 cursor-pointer h-full flex flex-col justify-between group relative overflow-hidden"
    >
      <!-- Background Abstract Shape -->
      <div class="absolute -right-8 -top-8 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:bg-white/20 transition-all duration-500"></div>

      <div>
        <div class="flex items-center justify-between mb-3">
          <Badge variant="outline" class="bg-white/10 text-white border-white/30 px-2 py-0.5 text-[10px] uppercase tracking-wider font-bold">
            {{ trans('hero_news.title') }}
          </Badge>
          <span class="text-white text-[10px] font-medium">{{ new Date(highlightedNews.published_at).toLocaleDateString('cs-CZ') }}</span>
        </div>
        
        <h3 class="text-white text-base font-bold leading-tight line-clamp-2 mb-2">
          {{ highlightedNews.title }}
        </h3>
        
        <div class="text-white text-xs line-clamp-2 leading-relaxed" v-html="highlightedNews.content"></div>
      </div>

      <div class="mt-3 flex items-center text-white text-xs font-bold uppercase tracking-wide transition-colors">
        {{ trans('hero_news.more_info') }}
        <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </div>
    </div>
  </div>

  <div v-else class="h-full rounded-2xl p-4 bg-glass flex items-center justify-center text-white text-sm">
    {{ trans('hero_news.no_news') }}
  </div>

  <Dialog v-model:open="dialogOpen">
    <DialogContent class="max-w-2xl">
      <DialogHeader>
        <DialogTitle>{{ selectedNews?.title }}</DialogTitle>
        <DialogDescription>
          {{ trans('hero_news.published') }} {{ selectedNews?.published_at ? new Date(selectedNews.published_at).toLocaleDateString('cs-CZ') : '' }}
        </DialogDescription>
      </DialogHeader>
      <div class="mt-4">
        <div class="prose prose-sm max-w-none text-foreground" v-html="selectedNews?.content"></div>
      </div>
    </DialogContent>
  </Dialog>
</template>
