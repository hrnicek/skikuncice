<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { trans } from 'laravel-vue-i18n';

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

interface WeatherSettings {
  piste_snow_depth_cm: number
  off_piste_snow_depth_cm: number
  new_snowfall_cm: number
  show_stats: number
}

const page = usePage()
const weather = ref<WeatherData>(page.props.weather as WeatherData || {})
const weatherSettings = ref<WeatherSettings>(page.props.weatherSettings as WeatherSettings || {
  piste_snow_depth_cm: 0,
  off_piste_snow_depth_cm: 0,
  new_snowfall_cm: 0,
  show_stats: 0,
})

const weatherIcon = ref('')

onMounted(() => {
  if (weather.value?.weather?.[0]?.icon) {
    weatherIcon.value = `https://openweathermap.org/img/wn/${weather.value.weather[0].icon}@2x.png`
  }
})
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-3 w-full h-full">
    <!-- Teplota karta -->
    <div class="rounded-2xl p-4 bg-glass flex-1">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center">
            <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </div>
          <span class="text-white text-xs font-semibold">{{ trans('hero_weather.temperature') }}</span>
        </div>
      </div>
      <div class="mt-2">
        <div class="text-2xl font-bold text-white">{{ weather?.main?.temp ? Math.round(weather.main.temp) + '°C' : '--°C' }}</div>
        <div class="text-white text-xs font-medium">{{ weather?.weather?.[0]?.description || trans('hero_weather.loading') }}</div>
      </div>
    </div>

    <!-- Vlhkost karta -->
    <div class="rounded-2xl p-4 bg-glass flex-1">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center">
            <svg class="w-4 h-4 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
          </div>
          <span class="text-white text-xs font-semibold">{{ trans('hero_weather.humidity') }}</span>
        </div>
      </div>
      <div class="mt-2">
        <div class="text-2xl font-bold text-white">{{ weather?.main?.humidity || '--' }}%</div>
        <div class="text-white text-xs font-medium">{{ trans('hero_weather.relative_humidity') }}</div>
      </div>
    </div>

    <!-- Vítr karta -->
    <div class="rounded-2xl p-4 bg-glass flex-1">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-purple-500/20 flex items-center justify-center">
            <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l.707.707A1 1 0 0012.414 11H15m-3-3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <span class="text-white text-xs font-semibold">{{ trans('hero_weather.wind') }}</span>
        </div>
      </div>
      <div class="mt-2">
        <div class="text-2xl font-bold text-white">{{ weather?.wind?.speed ? Math.round(weather.wind.speed * 3.6) + ' km/h' : '-- km/h' }}</div>
        <div class="text-white text-xs font-medium">{{ trans('hero_weather.wind_speed') }}</div>
      </div>
    </div>
  </div>
</template>
