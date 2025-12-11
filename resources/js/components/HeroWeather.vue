<script setup lang="ts">
import { ref } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { trans } from 'laravel-vue-i18n'

interface CurrentUnits {
  temperature: string
  time: string
  windspeed: string
}

interface CurrentData {
  time: string | null
  isobserveddata: number | null
  metarid: string | null
  isdaylight: number | null
  windspeed: number
  zenithangle: number | null
  pictocode_detailed: number | null
  pictocode: number | null
  temperature: number
}

interface CurrentWeather {
  units: CurrentUnits
  data_current: CurrentData
}

const page = usePage()
const weather = ref<CurrentWeather>(page.props.weather as CurrentWeather)
</script>

<template>
  <div class="grid grid-cols-1 gap-2 w-full h-full">
    <!-- Temperature -->
    <a :href="route('weather')" class="rounded-2xl p-3 bg-glass flex flex-row items-center justify-between group hover:bg-white/5 transition-colors h-full block">
      <div class="flex items-center gap-3">
        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-white/20 transition-colors">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
        </div>
        <div class="text-white text-xs font-bold uppercase tracking-wide">{{ trans('hero_weather.temperature_short') }}</div>
      </div>
      <div class="text-xl font-bold text-white">{{ weather?.data_current?.temperature != null ? Math.round(weather.data_current.temperature) + '°' : '--' }}</div>
    </a>

    <!-- Wind -->
    <a :href="route('weather')" class="rounded-2xl p-3 bg-glass flex flex-row items-center justify-between group hover:bg-white/5 transition-colors h-full block">
      <div class="flex items-center gap-3">
        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-white/20 transition-colors">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l.707.707A1 1 0 0012.414 11H15m-3-3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <div class="text-white text-xs font-bold uppercase tracking-wide">{{ trans('hero_weather.wind_short') }}</div>
      </div>
      <div class="text-xl font-bold text-white">{{ weather?.data_current?.windspeed != null ? Math.round(weather.data_current.windspeed) : '--' }} <span class="text-xs font-normal text-white">km/h</span></div>
    </a>
  </div>
</template>
