import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

interface SeasonData {
  current: string
  label: string
  isWinter: boolean
  isSummer: boolean
  available: Record<string, string>
}

/**
 * Composable for season-related functionality
 * Provides reactive helpers to check current season
 */
export function useSeason() {
  const page = usePage()
  
  // Get season data from page props
  const seasonData = computed(() => page.props.season as SeasonData)
  
  // Get current season string
  const season = computed(() => seasonData.value?.current || 'winter')
  
  // Helper to check if current season is winter
  const isWinter = computed(() => {
    if (!seasonData.value) return season.value === 'winter'
    return seasonData.value.isWinter
  })
  
  // Helper to check if current season is summer
  const isSummer = computed(() => {
    if (!seasonData.value) return season.value === 'summer'
    return seasonData.value.isSummer
  })
  
  // Get season label
  const seasonLabel = computed(() => {
    if (!seasonData.value) return 'Zimní sezóna'
    return seasonData.value.label || 'Zimní sezóna'
  })
  
  // Get available seasons
  const availableSeasons = computed(() => seasonData.value?.available || {})
  
  return {
    season,
    seasonData,
    isWinter,
    isSummer,
    seasonLabel,
    availableSeasons
  }
}