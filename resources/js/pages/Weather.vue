<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import { type PropType } from 'vue'

interface DailyForecast {
  date: string
  max_temperature: number
  min_temperature: number
  precipitation_probability: number
  weather_code: number
}

interface WeatherForecast {
  temperature: number
  min_temperature: number
  max_temperature: number
  wind_speed: number
  weather_code: number
  weather_description: string
  daily: DailyForecast[]
}

const props = defineProps({
  forecast: {
    type: Object as PropType<WeatherForecast | null>,
    default: null
  }
})

const formatTemp = (temp: number) => Math.round(temp)
const formatDate = (date: string) => {
  return new Date(date).toLocaleDateString('cs-CZ', {
    weekday: 'long',
    day: 'numeric',
    month: 'numeric'
  })
}
</script>

<template>
  <Head title="Počasí" />
  
  <AppLayout>
    <div class="container py-12">
      <div class="max-w-6xl mx-auto space-y-12">
        <div class="text-center space-y-4">
          <h1 class="text-4xl font-bold">Počasí ve Skiareálu Kunčice</h1>
          <p class="text-gray-500">Aktuální předpověď a výhled na další dny</p>
        </div>

        <div v-if="props.forecast" class="space-y-12">
          <!-- Current Weather Hero -->
          <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-3xl p-8 md:p-12 text-white shadow-xl overflow-hidden relative">
              <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                  <div class="text-center md:text-left">
                      <div class="text-lg font-medium text-blue-200 mb-2">Právě teď</div>
                      <div class="text-7xl md:text-9xl font-bold tracking-tighter">{{ formatTemp(props.forecast.temperature) }}°</div>
                      <div class="text-2xl mt-2 font-medium">{{ props.forecast.weather_description }}</div>
                      
                      <div class="flex flex-wrap gap-6 mt-8">
                          <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 flex items-center gap-3">
                              <UIcon name="i-heroicons-wind" class="w-6 h-6 text-blue-200" />
                              <div>
                                  <div class="text-xs text-blue-200 uppercase font-bold tracking-wider">Vítr</div>
                                  <div class="font-semibold">{{ props.forecast.wind_speed }} km/h</div>
                              </div>
                          </div>
                          <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 flex items-center gap-3">
                              <UIcon name="i-heroicons-arrow-trending-down" class="w-6 h-6 text-blue-200" />
                              <div>
                                  <div class="text-xs text-blue-200 uppercase font-bold tracking-wider">Min</div>
                                  <div class="font-semibold">{{ formatTemp(props.forecast.min_temperature) }}°C</div>
                              </div>
                          </div>
                          <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 flex items-center gap-3">
                              <UIcon name="i-heroicons-arrow-trending-up" class="w-6 h-6 text-blue-200" />
                              <div>
                                  <div class="text-xs text-blue-200 uppercase font-bold tracking-wider">Max</div>
                                  <div class="font-semibold">{{ formatTemp(props.forecast.max_temperature) }}°C</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <div class="shrink-0">
                      <UIcon name="i-heroicons-sun" class="w-48 h-48 text-yellow-400 drop-shadow-2xl" />
                  </div>
              </div>
              
              <!-- Decorative background elements -->
              <div class="absolute top-0 right-0 -mr-16 -mt-16 w-96 h-96 bg-blue-500 rounded-full blur-3xl opacity-30"></div>
              <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 bg-blue-400 rounded-full blur-3xl opacity-30"></div>
          </div>

          <!-- 7 Day Forecast Grid -->
          <div>
              <h2 class="text-2xl font-bold mb-6">Předpověď na další dny</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                  <UCard v-for="day in props.forecast.daily" :key="day.date" class="hover:border-blue-500/50 transition-colors duration-300 group">
                      <div class="space-y-4">
                          <div class="flex justify-between items-start">
                              <div>
                                  <div class="font-semibold capitalize text-lg group-hover:text-blue-600 transition-colors">
                                      {{ formatDate(day.date).split(' ')[0] }}
                                  </div>
                                  <div class="text-sm text-gray-500">
                                      {{ formatDate(day.date).split(' ').slice(1).join(' ') }}
                                  </div>
                              </div>
                              <!-- Small icon for the day -->
                              <UIcon name="i-heroicons-sun" class="w-8 h-8 text-yellow-500" />
                          </div>
                          
                          <div class="flex items-baseline gap-2">
                              <span class="text-3xl font-bold">{{ formatTemp(day.max_temperature) }}°</span>
                              <span class="text-xl text-gray-400 font-medium">/ {{ formatTemp(day.min_temperature) }}°</span>
                          </div>
                          
                          <div class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center justify-between text-sm">
                              <div class="flex items-center gap-1.5 text-gray-600 dark:text-gray-400" title="Pravděpodobnost srážek">
                                  <UIcon name="i-heroicons-umbrella" class="w-4 h-4 text-blue-500" />
                                  {{ day.precipitation_probability }}%
                              </div>
                          </div>
                      </div>
                  </UCard>
              </div>
          </div>
        </div>

        <div v-else class="text-center py-24">
          <UIcon name="i-heroicons-cloud-slash" class="w-20 h-20 text-gray-300 mx-auto mb-6" />
          <h3 class="text-lg font-medium text-gray-900">Data nejsou k dispozici</h3>
          <p class="text-gray-500">Bohužel se nepodařilo načíst aktuální předpověď počasí.</p>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
