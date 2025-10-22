<script setup lang="ts">
import TopNavbar from '@/shared/TopNavbar.vue'
import AppHeader from '@/shared/AppHeader.vue'
import AppFooter from '@/shared/AppFooter.vue'


</script>

<template>
    <TopNavbar />
    <AppHeader />
    <slot />
    <AppFooter />
</template>