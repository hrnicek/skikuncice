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

// Main navigation items based on the provided structure
const mainItems: { title: string, href: string, description: string }[] = [
  {
    title: wTrans('navbar.summer'),
    href: "/leto",
    description: wTrans('navbar.summer_desc'),
  },
]

// Vacation tips for different groups
const vacationTips: { title: string, href: string, description: string }[] = [
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

// Additional services and activities
const additionalServices: { title: string, href: string, description: string }[] = [
  {
    title: wTrans('navbar.webcams'),
    href: "/webkamery",
    description: wTrans('navbar.webcams_desc'),
  },
  {
    title: wTrans('navbar.events_calendar'),
    href: "/kalendar-akci",
    description: wTrans('navbar.events_calendar_desc'),
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
    href: "/agroturistika",
    description: wTrans('navbar.agrotourism_desc'),
  },
  {
    title: wTrans('navbar.bike_center'),
    href: "/cyklocentrum",
    description: wTrans('navbar.bike_center_desc'),
  },
]
</script>

<template>
  <NavigationMenu>
    <NavigationMenuList>
      <!-- Home -->
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.home') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>

      <!-- Main Items (Léto, Region Kunčice) -->
      <NavigationMenuItem v-for="item in mainItems" :key="item.title">
        <NavigationMenuLink as-child>
          <Link :href="item.href" :class="navigationMenuTriggerStyle()">
            {{ item.title }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>

      <!-- Vacation Tips -->
      <NavigationMenuItem>
        <NavigationMenuTrigger>{{ trans('navbar.vacation_tips') }}</NavigationMenuTrigger>
        <NavigationMenuContent>
          <ul class="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-1 lg:w-[600px]">
            <li v-for="tip in vacationTips" :key="tip.title">
              <NavigationMenuLink as-child>
                <Link
                  :href="tip.href"
                  class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                >
                  <div class="text-sm font-medium leading-none">{{ tip.title }}</div>
                  <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                    {{ tip.description }}
                  </p>
                </Link>
              </NavigationMenuLink>
            </li>
          </ul>
        </NavigationMenuContent>
      </NavigationMenuItem>

      <!-- Additional Services & Activities -->
      <NavigationMenuItem>
        <NavigationMenuTrigger>{{ trans('navbar.services_and_activities') }}</NavigationMenuTrigger>
        <NavigationMenuContent>
          <ul class="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2 lg:w-[600px]">
            <li v-for="service in additionalServices" :key="service.title">
              <NavigationMenuLink as-child>
                <Link
                  :href="service.href"
                  class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                >
                  <div class="text-sm font-medium leading-none">{{ service.title }}</div>
                  <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                    {{ service.description }}
                  </p>
                </Link>
              </NavigationMenuLink>
            </li>
          </ul>
        </NavigationMenuContent>
      </NavigationMenuItem>

      <!-- Accommodation -->
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/ubytovani" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.accommodation') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>

      <!-- Restaurants -->
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/restaurace" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.restaurant') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>

      <!-- Contact -->
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/kontakt" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.contact') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
    </NavigationMenuList>
  </NavigationMenu>
</template>
