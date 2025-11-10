<script setup lang="ts">
import TopNavbar from '@/shared/TopNavbar.vue'
import AppHeader from '@/shared/AppHeader.vue'
import AppFooter from '@/shared/AppFooter.vue'
import Head from '@/components/Head.vue';
</script>

<template>
    <Head />
    <TopNavbar />
    <AppHeader />
    <slot />
    <AppFooter />
</template>