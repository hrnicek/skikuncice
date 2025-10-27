<script setup lang="ts">
// Placeholder for language state - you may need to integrate with i18n library
import { ref } from 'vue'
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select'
import SeasonToggle from '@/components/SeasonToggle.vue';

const currentLanguage = ref('CZ')

// TODO: Implement actual language switching logic
</script>

<template>
  <div class="w-full bg-muted py-1">
    <div class="flex justify-between items-center container">
      <div class="flex space-x-6 text-sm">
        <div>
          <SeasonToggle />
        </div>
        <a href="mailto:info@skikuncice.cz" class="text-gray-700 hover:text-gray-900">
          info@skikuncice.cz
        </a>
        <a href="tel:+420123456789" class="text-gray-700 hover:text-gray-900">
          +420 123 456 789
        </a>
      </div>

      <!-- Right side: Language Switcher -->
      <Select v-model="currentLanguage">
        <SelectTrigger class="w-[70px]">
          <SelectValue />
        </SelectTrigger>
        <SelectContent>
          <SelectItem value="CZ">CZ</SelectItem>
          <SelectItem value="PL">PL</SelectItem>
        </SelectContent>
      </Select>
    </div>
  </div>
</template>