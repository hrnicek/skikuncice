<script lang="ts" setup>
import { Button } from '@/components/ui/button';
import { Calendar, Clock } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import type { Event } from '@/types';
import { trans } from 'laravel-vue-i18n';

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

</script>
<template>
    <div class="bg-card rounded-md border p-6 shadow-sm flex flex-col h-full">
        <div class="mb-4">
            <div class="aspect-video bg-gradient-to-br from-[#081f54]/5 to-[#da383a]/5 rounded-md mb-4 overflow-hidden shadow-inner">
                <img
                    src="https://skikuncice.cz/data/filecache/46/AND02942.jpg"
                    :alt="event.title"
                    class="w-full h-full object-cover"
                />
            </div>
            <h3 class="text-xl font-semibold text-primary mb-2">
                {{ event.title }}
            </h3>
            <div class="text-sm text-muted-foreground space-y-1">
                <p class="flex items-center">
                    <Calendar class="w-4 h-4 mr-2 text-[#081f54]" />
                    <span class="font-medium">{{ trans('card_event.date') }}:</span>
                    {{ formatDate(event.date_from) }}
                </p>
                <p class="flex items-center">
                    <Clock class="w-4 h-4 mr-2 text-[#081f54]" />
                    <span class="font-medium">{{ trans('card_event.time') }}:</span>
                    {{ formatTime(event.date_from) }} - {{ formatTime(event.date_to) }}
                </p>
            </div>
        </div>

        <div class="text-muted-foreground text-sm leading-relaxed flex-grow min-h-[3rem]">
            {{ event.perex || trans('card_event.no_description') }}
        </div>

        <Button class="w-full mt-4" size="sm" as-child>
            <Link :href="route('events.show', { event: event.slug })">
                {{ trans('card_event.show_more') }}
            </Link>
        </Button>
    </div>
</template>
