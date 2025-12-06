<script setup lang="ts">
import PageHeader from '@/components/PageHeader.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import CardEvent from '@/components/CardEvent.vue';
import { Button } from '@/components/ui/button';
import { Grid, List } from 'lucide-vue-next';
import { trans } from 'laravel-vue-i18n';
import { ref } from 'vue';

defineProps<{
    events: Array<any>;
}>();

const viewMode = ref<'card' | 'list'>('card');

</script>

<template>
    <AppLayout>
        <PageHeader :title="trans('events.index.page_header.title')" :subtitle="trans('events.index.page_header.subtitle')" />
        <div class="container py-12">
            <div class="flex justify-between mb-8">
                <div></div>
                <div class="flex items-center gap-2">
                    <div class="flex border rounded-md">
                        <Button
                            :variant="viewMode === 'card' ? 'default' : 'ghost'"
                            size="sm"
                            @click="viewMode = 'card'"
                            class="rounded-r-none"
                        >
                            <Grid class="w-4 h-4" />
                        </Button>
                        <Button
                            :variant="viewMode === 'list' ? 'default' : 'ghost'"
                            size="sm"
                            @click="viewMode = 'list'"
                            class="rounded-l-none"
                        >
                            <List class="w-4 h-4" />
                        </Button>
                    </div>
                    <Button as-child variant="outline">
                        <a href="/events/past">{{ trans('events.index.show_past_events') }}</a>
                    </Button>
                </div>

            </div>
            <div :class="viewMode === 'card' ? 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6' : 'space-y-4'">
                <CardEvent
                    v-for="(event, index) in events"
                    :key="event.id"
                    :event="event"
                    :view-mode="viewMode" />
            </div>
        </div>
    </AppLayout>
</template>
