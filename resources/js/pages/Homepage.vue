<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import Hero from '@/components/Hero.vue';
import EventsSection from '@/components/EventsSection.vue';
import HomeServiceList from '@/components/HomeServiceList.vue';
import PartnersSection from '@/components/PartnersSection.vue';
import HomeRestaurantSection from '@/components/HomeRestaurantSection.vue';
import InstaGrid from '@/components/InstaGrid.vue';
import CallToActionScholl from '@/components/CallToActionScholl.vue';

defineProps<{
  events: Array<any>;
}>();

</script>

<template>
  <AppLayout>
    <Hero />
    <HomeServiceList />
    <EventsSection :events="events" />
    <HomeRestaurantSection />
    <CallToActionScholl />
    <InstaGrid />
    <PartnersSection />
  </AppLayout>
</template>

