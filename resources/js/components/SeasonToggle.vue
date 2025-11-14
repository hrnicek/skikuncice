<script setup lang="ts">
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
import { Switch } from '@/components/ui/switch'
import { Snowflake, Sun } from 'lucide-vue-next'
import { useSeason } from '@/composables/useSeason'

// Use season composable
const { seasonData, isWinter, isSummer, seasonLabel } = useSeason()

// State
const isLoading = ref(false)

// Metody
const toggleSeason = async () => {
  if (isLoading.value) return
  
  const newSeason = isSummer.value ? 'winter' : 'summer'
  setSeason(newSeason)
}

// Metoda pro nastavení konkrétní sezóny
const setSeason = async (seasonType: 'winter' | 'summer') => {
  if (isLoading.value || seasonData.value?.current === seasonType) return
  
  isLoading.value = true
  
  router.visit('/api/season/set', {
    method: 'post',
    data: { season: seasonType },
    preserveState: false,
    preserveScroll: true,
    onSuccess: () => {
      console.log('Sezóna změněna na:', seasonType)
    },
    onError: (errors) => {
      console.error('Chyba při změně sezóny:', errors)
    },
    onFinish: () => {
      isLoading.value = false
    }
  })
}

// Exportovat metody pro použití z rodiče
defineExpose({
  setSeason,
  toggleSeason,
})
</script>



<template>
  <div class="flex items-center space-x-3 font-medium bg-white/10 backdrop-blur-sm rounded-lg border border-white/20">
    <span class="text-sm font-medium text-gray-700">
      {{ seasonLabel || 'Zimní sezóna' }}
    </span>
    
    <Switch 
      :model-value="isSummer" 
      @update:model-value="toggleSeason"
      :disabled="isLoading"
      class="data-[state=checked]:bg-yellow-500 data-[state=unchecked]:bg-blue-500"
    >
      <template #thumb>
        <Snowflake v-if="isWinter" class="size-3 text-white" />
        <Sun v-else class="size-3 text-white" />
      </template>
    </Switch>
  </div>
</template>
