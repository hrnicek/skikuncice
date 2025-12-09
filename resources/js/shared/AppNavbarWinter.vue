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
    href: "/o-arealu",
    description: "Nejdelší historie v Králickém Sněžníku.",
  },
  {
    title: wTrans('navbar.operating_hours'),
    href: "/provozni-doba",
    description: "Informace o otevíracích hodinách areálu.",
  },
    {
    title: wTrans('navbar.events_calendar'),
    href: "/kalendar-akci",
    description: "Zimní akce a události v areálu.",
  },
  {
    title: wTrans('navbar.area_map'),
    href: "/mapa-arealu",
    description: "Interaktivní mapa lyžařského areálu.",
  },
  {
    title: wTrans('navbar.webcams'),
    href: "/webkamery",
    description: "Živé záběry z webkamer v areálu.",
  },
  {
    title: 'Aktuální počasí',
    href: "/pocasi",
    description: "Aktuální počasí v areálu.",
  }
]

const services: { title: string, href: string, description: string, image: string }[] = [
  {
    title: wTrans('navbar.ski_school'),
    href: "/lyzarska-skola",
    description: "Kurzy lyžování pro všechny úrovně.",
    image: "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.ski_rental'),
    href: "/pujcovna-lyzi",
    description: "Pronájem lyží a zimního vybavení.",
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.restaurant'),
    href: "/restaurace",
    description: "Teplé občerstvení po lyžování.",
    image: "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.tourist_service_center'),
    href: "/centrum-sluzeb-turistum",
    description: "Informace a služby pro zimní turisty.",
    image: "https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.children_snowpark'),
    href: "/detsky-raj",
    description: "Zimní aktivity pro děti.",
    image: "https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.cross_country_skiing'),
    href: "/bezky",
    description: "Běžecké lyžování a trasy.",
    image: "https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: wTrans('navbar.evening_skiing'),
    href: "/vecerni-lyzovani",
    description: "Lyžování pod umělým osvětlením.",
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
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
          <Link href="/restaurace" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.restaurant') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/ubytovani" :class="navigationMenuTriggerStyle()">
            {{ trans('navbar.accommodation') }}
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
        <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/pocasi" :class="navigationMenuTriggerStyle()">
           Počasí
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
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