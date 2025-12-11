<template>
  <Sheet v-model:open="isOpen">
    <SheetTrigger as-child>
      <Button
        variant="ghost"
        size="icon"
        class="md:hidden"
        @click="isOpen = true"
        :aria-label="wTrans('navbar.open_mobile_menu')"
      >
        <Menu class="h-5 w-5" />
      </Button>
    </SheetTrigger>
    <SheetContent side="left" class="w-[300px] sm:w-[350px] flex flex-col">
      <SheetHeader class="text-left flex-shrink-0">
        <SheetTitle class="flex items-center gap-2">
          <img src="/img/logo.webp" alt="Logo" class="h-6 w-6" />
          SKI Kunčice
        </SheetTitle>
      </SheetHeader>

      <div class="flex-1 overflow-y-auto py-4">
        <div class="flex flex-col gap-4">
        <!-- Main Navigation -->
        <nav class="space-y-1">
          <Link
            href="/"
            class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
            @click="closeMenu"
          >
            <Home class="h-4 w-4" />
            {{ wTrans('navbar.home') }}
          </Link>
        </nav>

        <Separator />

        <!-- About Section -->
        <div class="space-y-3">
          <h3 class="text-sm font-semibold text-muted-foreground uppercase tracking-wide">
            {{ wTrans('navbar.about_area') }}
          </h3>
          <nav class="space-y-1">
            <Link
              v-for="item in arealItems"
              :key="item.title"
              :href="item.href"
              class="flex flex-col gap-1 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent hover:text-accent-foreground"
              @click="closeMenu"
            >
              <span class="font-medium">{{ item.title }}</span>
              <span class="text-xs text-muted-foreground line-clamp-1">{{ item.description }}</span>
            </Link>
          </nav>
        </div>

        <Separator />

        <!-- Services Section -->
        <div class="space-y-3">
          <h3 class="text-sm font-semibold text-muted-foreground uppercase tracking-wide">
            {{ isWinter ? wTrans('navbar.winter_services') : wTrans('navbar.summer_services') }}
          </h3>
          <nav class="space-y-1">
            <Link
              v-for="service in isWinter ? services : summerServices"
              :key="service.title"
              :href="service.href"
              class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent hover:text-accent-foreground"
              @click="closeMenu"
            >
              <div v-if="service.image" class="h-6 w-6 rounded bg-primary/10 flex items-center justify-center flex-shrink-0">
                <span class="text-xs">🏔️</span>
              </div>
              <div class="flex-1 min-w-0">
                <span class="font-medium block">{{ service.title }}</span>
                <span class="text-xs text-muted-foreground line-clamp-1">{{ service.description }}</span>
              </div>
            </Link>
          </nav>
        </div>

        <!-- Summer Main Items (only in summer) -->
        <div v-if="!isWinter" class="space-y-3">
          <Separator />
          <h3 class="text-sm font-semibold text-muted-foreground uppercase tracking-wide">
            {{ wTrans('navbar.summer') }}
          </h3>
          <nav class="space-y-1">
            <Link
              v-for="item in summerMainItems"
              :key="item.title"
              :href="item.href"
              class="flex flex-col gap-1 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent hover:text-accent-foreground"
              @click="closeMenu"
            >
              <span class="font-medium">{{ item.title }}</span>
              <span class="text-xs text-muted-foreground line-clamp-1">{{ item.description }}</span>
            </Link>
          </nav>
        </div>

        <!-- Vacation Tips (only in summer) -->
        <div v-if="!isWinter" class="space-y-3">
          <h3 class="text-sm font-semibold text-muted-foreground uppercase tracking-wide">
            {{ wTrans('navbar.vacation_tips') }}
          </h3>
          <nav class="space-y-1">
            <Link
              v-for="tip in vacationTips"
              :key="tip.title"
              :href="tip.href"
              class="flex flex-col gap-1 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent hover:text-accent-foreground"
              @click="closeMenu"
            >
              <span class="font-medium">{{ tip.title }}</span>
              <span class="text-xs text-muted-foreground line-clamp-1">{{ tip.description }}</span>
            </Link>
          </nav>
        </div>

        <Separator />

        <!-- Additional Links -->
        <nav class="space-y-1">
          <Link
            :href="route('accommodation.index')"
            class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
            @click="closeMenu"
          >
            <Bed class="h-4 w-4" />
            {{ wTrans('navbar.accommodation') }}
          </Link>
          <Link
            :href="route('contact')"
            class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
            @click="closeMenu"
          >
            <Mail class="h-4 w-4" />
            {{ wTrans('navbar.contact') }}
          </Link>
        </nav>
        </div>
      </div>
    </SheetContent>
  </Sheet>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import { Menu, Home, Bed, Mail } from 'lucide-vue-next'
import { useSeason } from '@/composables/useSeason'
import { wTrans } from 'laravel-vue-i18n'
import {
  Sheet,
  SheetContent,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from '@/components/ui/sheet'
import { Button } from '@/components/ui/button'
import { Separator } from '@/components/ui/separator'

const { isWinter } = useSeason()

// Reactive state for sheet visibility
const isOpen = ref(false)

// Winter navigation items
const arealItems = [
  {
    title: wTrans('navbar.operating_hours'),
    href: route('operating-hours'),
    description: wTrans('navbar.operating_hours_desc'),
  },
  {
    title: wTrans('navbar.weather'),
    href: route('weather'),
    description: wTrans('navbar.weather_desc'),
  },
  {
    title: wTrans('navbar.area_map'),
    href: route('area-map'),
    description: wTrans('navbar.area_map_desc'),
  },
  {
    title: wTrans('navbar.webcams'),
    href: route('webcams'),
    description: wTrans('navbar.webcams_desc'),
  },
  {
    title: wTrans('navbar.photo_gallery'),
    href: "/fotogalerie",
    description: wTrans('navbar.photo_gallery') + " z areálu a zimních aktivit.",
  },
  {
    title: wTrans('navbar.videos'),
    href: "/videa",
    description: wTrans('navbar.videos') + " z lyžování a zimních aktivit.",
  },
  {
    title: wTrans('navbar.events_calendar'),
    href: route('events.index'),
    description: wTrans('navbar.events_calendar_desc'),
  },
]

const services = [
  {
    title: wTrans('navbar.ski_school'),
    href: route('ski-school'),
    description: wTrans('navbar.ski_school_desc'),
    image: "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.ski_rental'),
    href: route('ski-rental'),
    description: wTrans('navbar.ski_rental_desc'),
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.skibus'),
    href: route('ski-bus'),
    description: "Doprava do areálu v zimní sezóně.",
    image: "https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.restaurant'),
    href: route('restaurant'),
    description: wTrans('navbar.restaurant_desc'),
    image: "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.tourist_service_center'),
    href: route('tourist-services-center'),
    description: wTrans('navbar.tourist_service_center_desc'),
    image: "https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.children_snowpark'),
    href: route('kids-paradise'),
    description: wTrans('navbar.children_snowpark_desc'),
    image: "https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.cross_country_skiing'),
    href: route('cross-country-skiing'),
    description: wTrans('navbar.cross_country_skiing_desc'),
    image: "https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.snowpark'),
    href: "/snowpark",
    description: "Snowpark pro freeride a freestyle.",
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.evening_skiing'),
    href: "/vecerni-lyzovani",
    description: wTrans('navbar.evening_skiing_desc'),
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
]

// Summer navigation items
const summerMainItems = [
  {
    title: wTrans('navbar.summer'),
    href: "/leto",
    description: wTrans('navbar.summer_desc'),
  },
  {
    title: wTrans('navbar.region_kuncice'),
    href: "/region-kuncice",
    description: "Informace o regionu Kunčice pod Ondřejníkem.",
  },
]

const vacationTips = [
  {
    title: wTrans('navbar.tips_for_families'),
    href: "/tipy-rodiny-deti",
    description: wTrans('navbar.tips_for_families_desc'),
  },
  {
    title: wTrans('navbar.tips_for_seniors'),
    href: "/tipy-seniory",
    description: wTrans('navbar.tips_for_seniors_desc'),
  },
  {
    title: wTrans('navbar.tips_for_couples'),
    href: "/tipy-zamilovany-par",
    description: wTrans('navbar.tips_for_couples_desc'),
  },
  {
    title: wTrans('navbar.tips_for_youth'),
    href: "/tipy-partu-mladych",
    description: wTrans('navbar.tips_for_youth_desc'),
  },
]

const summerServices = [
  {
    title: wTrans('navbar.webcams'),
    href: route('webcams'),
    description: wTrans('navbar.webcams_desc'),
  },
  {
    title: wTrans('navbar.events_calendar'),
    href: route('events.index'),
    description: "Letní akce a události v areálu.",
  },
  {
    title: wTrans('navbar.activities'),
    href: "/aktivity",
    description: wTrans('navbar.activities_desc'),
  },
  {
    title: wTrans('navbar.interesting_places'),
    href: "/zajimave-cile-regionu",
    description: wTrans('navbar.interesting_places_desc'),
  },
  {
    title: wTrans('navbar.bike_trips'),
    href: "/cyklovylety",
    description: wTrans('navbar.bike_trips_desc'),
  },
  {
    title: wTrans('navbar.scooters'),
    href: "/kolobezky",
    description: wTrans('navbar.scooters_desc'),
  },
  {
    title: wTrans('navbar.agrotourism'),
    href: route('agrotourism'),
    description: wTrans('navbar.agrotourism_desc'),
  },
  {
    title: wTrans('navbar.bike_center'),
    href: "/cyklocentrum",
    description: wTrans('navbar.bike_center_desc'),
  },
]

// Close menu function
const closeMenu = () => {
  isOpen.value = false
}
</script>