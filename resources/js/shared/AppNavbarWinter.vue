<script setup lang="ts">
import { trans, wTrans } from 'laravel-vue-i18n'
import { Link } from '@inertiajs/vue3'
import {
  NavigationMenu,
  NavigationMenuContent,
  NavigationMenuItem,
  NavigationMenuLink,
  NavigationMenuList,
  NavigationMenuTrigger,
  navigationMenuTriggerStyle,
} from "@/components/ui/navigation-menu"

const arealItems: { title: string, href: string, description: string }[] = [
   {
    title: wTrans('navbar.about_us'),
    href: route('about'),
    description: wTrans('navbar.about_area_desc'),
  },
  {
    title: wTrans('navbar.operating_hours'),
    href: route('operating-hours'),
    description: wTrans('navbar.operating_hours_desc'),
  },
    {
    title: wTrans('navbar.events_calendar'),
    href: route('events.index'),
    description: wTrans('navbar.events_calendar_desc'),
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
    title: wTrans('navbar.weather'),
    href: route('weather'),
    description: wTrans('navbar.weather_desc'),
  }
]

const services: { title: string, href: string, description: string, image: string }[] = [
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
  // {
  //   title: wTrans('navbar.evening_skiing'),
  //   href: route('evening-skiing'),
  //   description: wTrans('navbar.evening_skiing_desc'),
  //   image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  // },
]
</script>

<template>
  <NavigationMenu>
    <NavigationMenuList>
      <NavigationMenuItem>
        <NavigationMenuTrigger>{{ trans('navbar.about_area') }}</NavigationMenuTrigger>
        <NavigationMenuContent>
          <ul class="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2 lg:w-[600px] justify-items-start">
            <li v-for="item in arealItems" :key="item.title">
              <NavigationMenuLink as-child>
                <Link
                  :href="item.href"
                  class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                >
                  <div class="text-sm font-medium leading-none">{{ item.title }}</div>
                  <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                    {{ item.description }}
                  </p>
                </Link>
              </NavigationMenuLink>
            </li>
          </ul>
        </NavigationMenuContent>
      </NavigationMenuItem>
      
<NavigationMenuItem>
  <NavigationMenuTrigger>{{ trans('navbar.winter_services') }}</NavigationMenuTrigger>
  <NavigationMenuContent>
    <ul class="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2 lg:w-[600px] ">
      <li v-for="service in services" :key="service.title">
        <Link
          :href="service.href"
          class="flex items-center gap-3 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
        >
          <img :src="service.image" alt="" class="h-12 w-12 rounded-2xl flex-shrink-0">
          <div class="flex-1">
            <div class="text-sm font-medium leading-none">{{ service.title }}</div>
            <p class="line-clamp-2 text-sm leading-snug text-muted-foreground mt-1">
              {{ service.description }}
            </p>
          </div>
        </Link>
      </li>
    </ul>
  </NavigationMenuContent>
</NavigationMenuItem>
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link :href="route('restaurant')" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.restaurant') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.accommodation') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
        <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link :href="route('weather')" :class="navigationMenuTriggerStyle()">
           {{ trans('navbar.weather') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link :href="route('contact')" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.contact') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
    </NavigationMenuList>
  </NavigationMenu>
</template>
