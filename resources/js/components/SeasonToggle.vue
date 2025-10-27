<script setup lang="ts">
import { ref, computed } from 'vue'
import { usePage, router } from '@inertiajs/vue3'
import { Switch } from '@/components/ui/switch'
import { Snowflake, Sun } from 'lucide-vue-next'

// Props z Inertia
const page = usePage()
const season = computed(() => page.props.season as {
  current: string
  label: string
  isWinter: boolean
  isSummer: boolean
  available: Record<string, string>
})

// State
const isLoading = ref(false)

// Metody
const toggleSeason = async () => {
  if (isLoading.value) return
  
  const newSeason = season.value.isSummer ? 'winter' : 'summer'
  setSeason(newSeason)
}

// Metoda pro nastavení konkrétní sezóny
const setSeason = async (seasonType: 'winter' | 'summer') => {
  if (isLoading.value || season.value.current === seasonType) return
  
  isLoading.value = true
  
  router.visit('/api/season/set', {
    method: 'post',
    data: { season: seasonType },
    preserveState: true,
    preserveScroll: true,
    only: ['season'],
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
      {{ season.label }}
    </span>
    
    <Switch 
      :model-value="season.isSummer" 
      @update:model-value="toggleSeason"
      :disabled="isLoading"
      class="data-[state=checked]:bg-yellow-500 data-[state=unchecked]:bg-blue-500"
    >
      <template #thumb>
        <Snowflake v-if="season.isWinter" class="size-3 text-white" />
        <Sun v-else class="size-3 text-white" />
      </template>
    </Switch>
  </div>
</template>
