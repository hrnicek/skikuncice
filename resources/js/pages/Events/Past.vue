<script setup lang="ts">
import PageHeader from '@/components/PageHeader.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import CardEvent from '@/components/CardEvent.vue';
import { trans } from 'laravel-vue-i18n';

defineProps<{
    events: Array<any>;
}>();

</script>

<template>
    <AppLayout>
        <PageHeader :title="trans('events.past.page_header.title')" :subtitle="trans('events.past.page_header.subtitle')" />
        <div class="container py-12">
            <div v-if="events.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <CardEvent
                    v-for="(event, index) in events"
                    :key="event.id"
                    :event="event" />
            </div>
            <div v-else class="text-center">
                {{ trans('events.past.no_events') }}
            </div>
        </div>
    </AppLayout>
</template>
