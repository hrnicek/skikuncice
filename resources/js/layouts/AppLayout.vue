<script setup lang="ts">
import TopNavbar from '@/shared/TopNavbar.vue'
import AppHeader from '@/shared/AppHeader.vue'
import AppFooter from '@/shared/AppFooter.vue'
import Head from '@/components/Head.vue';
import SnowEffect from '@/components/SnowEffect.vue';

</script>

<template>
    <Head />
    <SnowEffect />
    <TopNavbar />
    <AppHeader />
    <slot />
    <AppFooter />
</template>