<script setup lang="ts">
// Placeholder for language state - you may need to integrate with i18n library
import { ref } from 'vue'
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select'
import SeasonToggle from '@/components/SeasonToggle.vue';
import { Mail, Phone } from 'lucide-vue-next'

const currentLanguage = ref('CZ')

// TODO: Implement actual language switching logic
</script>

<template>
  <div class="w-full bg-white border-b py-1">
    <div class="flex justify-between items-center container px-4 sm:px-6 lg:px-8">
      <div class="flex items-center gap-3 md:gap-6 text-xs md:text-sm">
        <div class="flex-shrink-0">
          <SeasonToggle />
        </div>
        <a
          href="mailto:info@skikuncice.cz"
          class="text-gray-700 hover:text-gray-900 hidden sm:flex items-center gap-1 transition-colors"
        >
          <Mail class="w-4 h-4" />
          info@skikuncice.cz
        </a>
       
      </div>

      <!-- Right side: Language Switcher -->
      <Select v-model="currentLanguage">
        <SelectTrigger class="w-[60px] md:w-[70px] h-8">
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