<script setup lang="ts">
import { ref } from 'vue';
import { Button } from '@/components/ui/button';
import { ArrowRight, Calendar, Clock } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
// import { route } from 'ziggy-js';
import CardEvent from '@/components/CardEvent.vue';
import type { Event } from '@/types';
import { trans } from 'laravel-vue-i18n';

// Mock data for now - in real app this would come from API
defineProps<{
  events: Array<Event>;
}>();

</script>

<template>
  <section class="py-16 my-16 bg-muted relative">
    <img src="/img/bg-ice-1280.webp" alt="Background" class="absolute inset-0 w-full h-full object-cover pointer-events-none" />
    <div class="container relative z-10">
      <div class="rounded-md">
        <div class="text-left mb-6">
            <h2 class="text-3xl font-bold text-foreground mb-2">
                {{ trans('events_section.title') }}
            </h2>
            <p class="text-muted-foreground text-lg">
                {{ trans('events_section.subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <CardEvent
            v-for="(event, index) in events"
            :key="event.id"
            :event="event" />
        </div>

        <div class="text-center mt-12">
            <Button size="lg" as-child>
              <Link :href="route('events.index')">
                    {{ trans('events_section.show_all_events') }}
                    <ArrowRight class="w-5 h-5 ml-2" />
              </Link>
            </Button>
        </div>
    </div>
    </div>
    </section>
</template>
