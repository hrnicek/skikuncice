<script setup lang="ts">
import { ref, computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { Dialog, DialogContent, DialogDescription, DialogHeader, DialogTitle } from '@/components/ui/dialog'
import { trans } from 'laravel-vue-i18n';

interface News {
  id: number
  title: string
  content: string
  published_at: string
}

const page = usePage()
const news = computed(() => (page.props.news as unknown as News[]) || [])
const selectedNews = ref<News | null>(null)
const dialogOpen = ref(false)

function openNews(item: News) {
  selectedNews.value = item
  dialogOpen.value = true
}
</script>

<template>
  <div class="h-full overflow-y-auto pr-1 custom-scrollbar">
    <div v-if="news.length === 0" class="h-full flex items-center justify-center text-white/50 text-sm">
      <!-- Optional: Empty state -->
    </div>

    <div v-else class="flex flex-col gap-3">
        <div 
            v-for="item in news" 
            :key="item.id"
            @click="openNews(item)"
            class="rounded-2xl p-4 bg-glass hover:bg-white/5 transition-all duration-200 cursor-pointer group"
        >
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center flex-shrink-0 group-hover:from-cyan-500/30 group-hover:to-blue-500/30 transition-colors">
              <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-white text-sm font-semibold line-clamp-2 group-hover:text-cyan-200 transition-colors">{{ item.title }}</h4>
              <p class="text-white text-xs mt-1 line-clamp-3 font-medium">{{ item.content }}</p>
              <div class="flex items-center justify-between mt-2">
                <span class="text-white/70 text-xs hover:text-cyan-200 transition-colors cursor-pointer">{{ trans('hero_news.more_info') }}</span>
                <span class="text-white/50 text-xs">{{ new Date(item.published_at).toLocaleDateString('cs-CZ') }}</span>
              </div>
            </div>
          </div>
        </div>
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
  </div>
</template>
