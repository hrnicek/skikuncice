<script lang="ts" setup>
import { Button } from '@/components/ui/button';
import { Calendar, Clock } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import type { Event } from '@/types';

defineProps<{
  event: Event;
}>();

const formatDate = (dateString: string) => {
  const date = new Date(dateString);
  return date.toLocaleDateString('cs-CZ', {
    day: 'numeric',
    month: 'long',
    year: 'numeric'
  });
};

const formatTime = (dateString: string) => {
  const date = new Date(dateString);
  return date.toLocaleTimeString('cs-CZ', {
    hour: '2-digit',
    minute: '2-digit'
  });
};

const route = (window as any).route;
</script>

<template>
  <section class="py-12 bg-background">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold text-primary mb-6 text-center">
          Nejbližší akce
        </h2>

        <div class="bg-card rounded-4xl border p-6 shadow-sm hover:shadow-md transition-shadow">
          <div class="flex flex-col md:flex-row gap-6">
            <!-- Obrázek -->
            <div class="flex-shrink-0">
              <div class="aspect-square w-24 h-24 bg-gradient-to-br from-[#081f54]/5 to-[#da383a]/5 rounded-2xl overflow-hidden shadow-inner">
                <img
                  :src="(event as any).media?.[0]?.original_url || 'https://skikuncice.cz/data/filecache/46/AND02942.jpg'"
                  :alt="event.title"
                  class="w-full h-full object-cover"
                />
              </div>
            </div>

            <!-- Obsah -->
            <div class="flex-grow min-w-0">
              <h3 class="text-lg font-semibold text-primary mb-2 line-clamp-2">
                {{ event.title }}
              </h3>

              <div class="text-sm text-muted-foreground space-y-1 mb-3">
                <p class="flex items-center">
                  <Calendar class="w-4 h-4 mr-2 text-[#081f54]" />
                  <span class="font-medium">Datum:</span>
                  {{ formatDate(event.date_from) }}
                </p>
                <p class="flex items-center">
                  <Clock class="w-4 h-4 mr-2 text-[#081f54]" />
                  <span class="font-medium">Čas:</span>
                  {{ formatTime(event.date_from) }} - {{ formatTime(event.date_to) }}
                </p>
              </div>

              <p class="text-muted-foreground text-sm leading-relaxed line-clamp-2 mb-4">
                {{ event.perex || 'Popis akce není k dispozici.' }}
              </p>
            </div>

            <!-- Tlačítko -->
            <div class="flex-shrink-0 flex items-end">
              <Button size="sm" as-child>
                <Link :href="route('events.show', { event: event.slug })">
                  Zobrazit více
                </Link>
              </Button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>