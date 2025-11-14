<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Calendar, Clock, MapPin, Info } from 'lucide-vue-next';
import { trans } from 'laravel-vue-i18n';

interface Event {
    id: number;
    title: string;
    perex?: string;
    date_from: string;
    date_to: string;
    published: boolean;
    content?: string;
    note?: string;
    slug: string;
}

const { event } = defineProps<{
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


const isSameDay = () => {
    const start = new Date(event.date_from);
    const end = new Date(event.date_to);
    return start.toDateString() === end.toDateString();
};

</script>

<template>
<AppLayout>
    <!-- Content Section -->
    <div class="max-w-5xl mx-auto px-6 py-12">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-primary mb-4">
                {{ event.title }}
            </h1>
            <div class="flex flex-wrap items-center gap-6 text-lg text-muted-foreground">
                <div class="flex items-center gap-2">
                    <Calendar class="w-5 h-5 text-[#081f54]" />
                    <span>{{ formatDate(event.date_from) }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <Clock class="w-5 h-5 text-[#081f54]" />
                    <span>
                        {{ formatTime(event.date_from) }}
                        <template v-if="!isSameDay()">
                            - {{ formatDate(event.date_to) }}
                        </template>
                        {{ isSameDay() ? ' - ' + formatTime(event.date_to) : '' }}
                    </span>
                </div>
            </div>
        </div>
        <div>
            <img :src="event?.image_url"  :alt="event?.title" class="w-full rounded-md mb-8 object-cover" />
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Perex -->
                <div v-if="event.perex" class="text-xl text-muted-foreground leading-relaxed">
                    {{ event.perex }}
                </div>

                <!-- Content -->
                <div v-if="event.content" class="prose prose-lg max-w-none">
                    <div v-html="event.content" class="text-foreground leading-relaxed"></div>
                </div>

                <!-- Note -->
                <div v-if="event.note" class="bg-amber-50 dark:bg-amber-950/20 border border-amber-200 dark:border-amber-800 rounded-xl p-6">
                    <div class="flex items-start gap-3">
                        <Info class="w-5 h-5 text-amber-600 dark:text-amber-400 mt-0.5 shrink-0" />
                        <div>
                            <h3 class="font-semibold text-amber-800 dark:text-amber-200 mb-2">
                                {{ trans('events.show.important_info') }}
                            </h3>
                            <div v-html="event.note" class="text-amber-700 dark:text-amber-300 leading-relaxed"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Event Info Card -->
                <div class="bg-card rounded-xl border p-6 shadow-sm">
                    <h3 class="text-lg font-semibold mb-4 text-primary">{{ trans('events.show.event_info') }}</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <Calendar class="w-5 h-5 text-[#081f54] mt-0.5 shrink-0" />
                            <div>
                                <div class="font-medium">{{ trans('events.show.date') }}</div>
                                <div class="text-sm text-muted-foreground">
                                    {{ formatDate(event.date_from) }}
                                    <template v-if="!isSameDay()">
                                        - {{ formatDate(event.date_to) }}
                                    </template>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <Clock class="w-5 h-5 text-[#081f54] mt-0.5 shrink-0" />
                            <div>
                                <div class="font-medium">{{ trans('events.show.time') }}</div>
                                <div class="text-sm text-muted-foreground">
                                    {{ formatTime(event.date_from) }}
                                    <template v-if="isSameDay()">
                                        - {{ formatTime(event.date_to) }}
                                    </template>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <MapPin class="w-5 h-5 text-[#081f54] mt-0.5 shrink-0" />
                            <div>
                                <div class="font-medium">{{ trans('events.show.place') }}</div>
                                <div class="text-sm text-muted-foreground">
                                    {{ trans('events.show.place_value') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</AppLayout>
</template>
