<script setup lang="ts">
import PageHeader from '@/components/PageHeader.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import CardEvent from '@/components/CardEvent.vue';
import { Button } from '@/components/ui/button';

defineProps<{
    events: Array<any>;
}>();

</script>

<template>
    <AppLayout>
        <PageHeader title="Kalendář akcí" subtitle="Přehled všech našich akcí a událostí" />
        <div class="container py-12">
            <div class="flex justify-between mb-8">
                <div></div>
                <div>
                    <Button as-child variant="outline">
                        <a href="/events/past">Zobrazit minulé akce</a>
                    </Button>
                </div>
               
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <CardEvent
                    v-for="(event, index) in events"
                    :key="event.id"
                    :event="event" />
            </div>
        </div>
    </AppLayout>
</template>