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
    description: "Letní aktivity a služby v areálu.",
  },
]

// Vacation tips for different groups
const vacationTips: { title: string, href: string, description: string }[] = [
  {
    title: wTrans('navbar.tips_for_families'),
    href: "/tipy-rodiny-deti",
    description: "Doporučení pro rodinnou dovolenou s dětmi.",
  },
  {
    title: wTrans('navbar.tips_for_seniors'),
    href: "/tipy-seniory",
    description: "Speciální nabídka pro starší návštěvníky.",
  },
  {
    title: wTrans('navbar.tips_for_couples'),
    href: "/tipy-zamilovany-par",
    description: "Romantické tipy pro páry.",
  },
  {
    title: wTrans('navbar.tips_for_youth'),
    href: "/tipy-partu-mladych",
    description: "Aktivity pro skupiny mladých lidí.",
  },
]

// Additional services and activities
const additionalServices: { title: string, href: string, description: string }[] = [
  {
    title: wTrans('navbar.webcams'),
    href: "/webkamery",
    description: "Živé záběry z webkamer v areálu.",
  },
  {
    title: wTrans('navbar.events_calendar'),
    href: "/kalendar-akci",
    description: "Letní akce a události v areálu.",
  },
  {
    title: wTrans('navbar.activities'),
    href: "/aktivity",
    description: "Všechny dostupné letní aktivity.",
  },
  {
    title: wTrans('navbar.interesting_places'),
    href: "/zajimave-cile-regionu",
    description: "Turistické atrakce v okolí.",
  },
  {
    title: wTrans('navbar.bike_trips'),
    href: "/cyklovylety",
    description: "Cyklistické trasy a výlety.",
  },
  {
    title: wTrans('navbar.scooters'),
    href: "/kolobezky",
    description: "Půjčovna a trasy pro koloběžky.",
  },
  {
    title: wTrans('navbar.agrotourism'),
    href: "/agroturistika",
    description: "Agroturistické služby a farma.",
  },
  {
    title: wTrans('navbar.bike_center'),
    href: "/cyklocentrum",
    description: "Centrum pro cyklisty a servis.",
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