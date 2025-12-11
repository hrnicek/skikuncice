<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import Hero from '@/components/Hero.vue';
import PhilosophySection from '@/components/PhilosophySection.vue';
import type { RestaurantMenu } from '@/types';
import HomeServiceList from '@/components/HomeServiceList.vue';
import EventsSection from '@/components/EventsSection.vue';
import HomeRestaurantSection from '@/components/HomeRestaurantSection.vue';
import NearnestEventSection from '@/components/NearnestEventSection.vue';
import CallToActionScholl from '@/components/CallToActionScholl.vue';
import InstaGrid from '@/components/InstaGrid.vue';
import PartnersSection from '@/components/PartnersSection.vue';
defineOptions({
  layout: AppLayout
})

defineProps<{
  events: Array<any>;
  nearestEvent: any;
  foodMenu?: RestaurantMenu | null;
  drinksMenu?: RestaurantMenu | null;
}>();

</script>

<template>
    <Hero />
    <PhilosophySection />
    <NearnestEventSection v-if="nearestEvent" :event="nearestEvent" />
    <HomeServiceList />
    <EventsSection :events="events" />
    <HomeRestaurantSection :food-menu="foodMenu" :drinks-menu="drinksMenu" />
    <CallToActionScholl />
    <InstaGrid />
    <PartnersSection />
</template>

