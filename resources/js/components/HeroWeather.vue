<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { usePage } from '@inertiajs/vue3'

interface WeatherData {
  coord?: {
    lon: number
    lat: number
  }
  weather?: Array<{
    id: number
    main: string
    description: string
    icon: string
  }>
  base?: string
  main?: {
    temp: number
    feels_like: number
    temp_min: number
    temp_max: number
    pressure: number
    humidity: number
    sea_level?: number
    grnd_level?: number
  }
  visibility?: number
  wind?: {
    speed: number
    deg: number
    gust?: number
  }
  clouds?: {
    all: number
  }
  dt?: number
  sys?: {
    type: number
    id: number
    country: string
    sunrise: number
    sunset: number
  }
  timezone?: number
  id?: number
  name?: string
  cod?: number
}

const page = usePage()
const weather = ref<WeatherData>(page.props.weather as WeatherData || {})

const weatherIcon = ref('')

onMounted(() => {
  if (weather.value?.weather?.[0]?.icon) {
    weatherIcon.value = `https://openweathermap.org/img/wn/${weather.value.weather[0].icon}@2x.png`
  }
})
</script>

<template>
  <div class="max-w-lg mx-auto w-full">
    <div class="rounded-4xl p-4 bg-glass">
      <!-- Kompaktní hlavička s lokací -->
      <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-2">
          <div class="w-1.5 h-1.5 bg-red-400 rounded-full"></div>
          <span class="text-white text-xs font-medium">{{ weather?.name || 'Kunčice' }}</span>
        </div>
        <div class="text-white text-xs font-medium">Aktuální počasí</div>
      </div>

      <!-- Hlavní řádek s informacemi -->
      <div class="flex items-center justify-between mb-4">
        <!-- Levá strana - Resort info -->
        <div class="flex items-center gap-3">
          <div class="relative">
            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-blue-300/50">
              <img v-if="weatherIcon" :src="weatherIcon" alt="Weather icon" class="w-full h-full object-cover">
              <div v-else class="w-full h-full bg-blue-500/20 flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
              </div>
            </div>
            <div class="absolute -bottom-0.5 -right-0.5 w-4 h-4 bg-pink-400 rounded-full flex items-center justify-center">
              <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
          </div>
          <div class="text-white">
            <h3 class="text-sm font-semibold">Ski Kunčice</h3>
            <p class="text-white text-xs font-medium">{{ weather?.weather?.[0]?.description || 'Počasí se načítá...' }}</p>
          </div>
        </div>

        <!-- Pravá strana - Teplota -->
        <div class="text-white text-right">
          <div class="text-2xl font-bold">{{ weather?.main?.temp ? Math.round(weather.main.temp) + '°C' : '--°C' }}</div>
          <div class="flex items-center gap-1 justify-end">
            <svg class="w-3 h-3 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
            </svg>
          </div>
        </div>
      </div>

      <!-- Kompaktní řádek s počasím -->
      <div class="flex items-center justify-between text-white text-xs font-medium border-t border-white/20 pt-3">
        <div class="flex items-center gap-1">
          <svg class="w-3 h-3 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
          <span>Vlhkost {{ weather?.main?.humidity || '--' }}%</span>
        </div>

        <div class="flex items-center gap-1">
          <svg class="w-3 h-3 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l.707.707A1 1 0 0012.414 11H15m-3-3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <span>Vítr {{ weather?.wind?.speed ? Math.round(weather.wind.speed * 3.6) + ' km/h' : '-- km/h' }}</span>
        </div>

        <button class="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full text-xs font-medium transition-all duration-200 backdrop-blur-sm border border-white/20 flex items-center gap-1">
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          Mapa
        </button>
      </div>
    </div>
  </div>
</template>