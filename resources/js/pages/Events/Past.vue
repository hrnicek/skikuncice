<script setup lang="ts">
import PageHeader from '@/components/PageHeader.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import CardEvent from '@/components/CardEvent.vue';

defineProps<{
    events: Array<any>;
}>();

</script>

<template>
    <AppLayout>
        <PageHeader title="Kalendář akcí - archiv" subtitle="Přehled všech probělých akcí a událostí" />
        <div class="container py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <CardEvent
                    v-for="(event, index) in events"
                    :key="event.id"
                    :event="event" />
            </div>
        </div>
    </AppLayout>
</template>