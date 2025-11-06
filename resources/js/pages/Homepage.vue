<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import Hero from '@/components/Hero.vue';
import EventsSection from '@/components/EventsSection.vue';
import HomeServiceList from '@/components/HomeServiceList.vue';
import PartnersSection from '@/components/PartnersSection.vue';
import HomeRestaurantSection from '@/components/HomeRestaurantSection.vue';

</script>

<template>
  <AppLayout>
    <Hero />
    <HomeServiceList />
    <EventsSection />
    <HomeRestaurantSection />
    <PartnersSection />
  </AppLayout>
</template>

