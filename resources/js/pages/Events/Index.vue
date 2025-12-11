<script setup lang="ts">
import PageHeader from '@/components/PageHeader.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import CardEvent from '@/components/CardEvent.vue';
import { Button } from '@/components/ui/button';
import { Grid, List, Calendar } from 'lucide-vue-next';
import { trans } from 'laravel-vue-i18n';
import { ref, computed } from 'vue';
import { usePage, Link } from '@inertiajs/vue3';

const props = defineProps<{
    events: Array<any>;
}>();

const viewMode = ref<'card' | 'list' | 'timeline'>('timeline');
const page = usePage();

const groupedEvents = computed(() => {
    const groups: Record<string, typeof props.events> = {};
    const locale = (page.props as any).app?.locale || 'cs';

    props.events.forEach(event => {
        const date = new Date(event.date_from);
        const key = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}`;
        if (!groups[key]) {
            groups[key] = [];
        }
        groups[key].push(event);
    });

    const sortedKeys = Object.keys(groups).sort();

    return sortedKeys.map(key => {
        const [year, month] = key.split('-');
        const date = new Date(parseInt(year), parseInt(month) - 1);
        
        const formatter = new Intl.DateTimeFormat(locale, { month: 'long', year: 'numeric' });
        let title = formatter.format(date);
        title = title.charAt(0).toUpperCase() + title.slice(1);

        return {
            title,
            events: groups[key]
        };
    });
});

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
                            :variant="viewMode === 'timeline' ? 'default' : 'ghost'"
                            size="sm"
                            @click="viewMode = 'timeline'"
                            class="rounded-r-none"
                        >
                            <Calendar class="w-4 h-4" />
                        </Button>
                        <Button
                            :variant="viewMode === 'card' ? 'default' : 'ghost'"
                            size="sm"
                            @click="viewMode = 'card'"
                            class="rounded-none border-l border-r"
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
                        <Link :href="route('events.past')">{{ trans('events.index.show_past_events') }}</Link>
                    </Button>
                </div>

            </div>
            
            <div v-if="viewMode === 'timeline'" class="space-y-10">
                <div v-for="group in groupedEvents" :key="group.title">
                    <div class="relative pl-8 border-l-2 border-brand-primary/20 pb-8 last:pb-0 last:border-0">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-brand-primary"></div>
                        <h2 class="text-2xl font-bold mb-6 text-foreground">{{ group.title }}</h2>
                        <div class="space-y-4">
                            <CardEvent
                                v-for="(event, index) in group.events"
                                :key="event.id"
                                :event="event"
                                view-mode="list" />
                        </div>
                    </div>
                </div>
            </div>

            <div v-else :class="viewMode === 'card' ? 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6' : 'space-y-4'">
                <CardEvent
                    v-for="(event, index) in events"
                    :key="event.id"
                    :event="event"
                    :view-mode="viewMode" />
            </div>
        </div>
    </AppLayout>
</template>
