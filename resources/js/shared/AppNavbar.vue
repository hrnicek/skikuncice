<script setup lang="ts">
import { useSeason } from '@/composables/useSeason'
import AppNavbarWinter from './AppNavbarWinter.vue'
import AppNavbarSummer from './AppNavbarSummer.vue'

const { isWinter } = useSeason()
</script>

<template>
  <AppNavbarWinter v-if="isWinter" />
  <AppNavbarSummer v-else />
</template>