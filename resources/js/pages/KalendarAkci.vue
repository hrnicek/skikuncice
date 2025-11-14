<script setup lang="ts">
import { ref } from 'vue';
import { trans } from 'laravel-vue-i18n';

interface Event {
  id: number;
  title: string;
  date_from: string;
  date_to: string;
  published: boolean;
  note?: string;
}

interface Props {
  events: Event[];
}

const props = defineProps<Props>();

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
  <div class="min-h-screen bg-background">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4">
          {{ trans('kalendar_akci.title') }}
        </h1>
        <p class="text-muted-foreground text-lg">
          {{ trans('kalendar_akci.subtitle') }}
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-for="event in events"
          :key="event.id"
          class="bg-card rounded-lg border p-6 shadow-sm hover:shadow-md transition-shadow duration-200"
        >
          <div class="mb-4">
            <h3 class="text-xl font-semibold text-foreground mb-2">
              {{ event.title }}
            </h3>
            <div class="text-sm text-muted-foreground space-y-1">
              <p>
                <span class="font-medium">{{ trans('kalendar_akci.date') }}:</span>
                {{ formatDate(event.date_from) }}
              </p>
              <p>
                <span class="font-medium">{{ trans('kalendar_akci.time') }}:</span>
                {{ formatTime(event.date_from) }} - {{ formatTime(event.date_to) }}
              </p>
            </div>
          </div>

          <div v-if="event.note" class="text-muted-foreground text-sm leading-relaxed">
            {{ event.note }}
          </div>
        </div>
      </div>

      <div v-if="events.length === 0" class="text-center py-12">
        <p class="text-muted-foreground text-lg">
          {{ trans('kalendar_akci.no_events') }}
        </p>
      </div>
    </div>
  </div>
</template>
