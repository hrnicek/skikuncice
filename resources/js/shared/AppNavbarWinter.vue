<script setup lang="ts">
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
    title: "Provozní doba",
    href: "/provozni-doba",
    description: "Informace o otevíracích hodinách areálu.",
  },
  {
    title: "Aktuální počasí a sněhové podmínky",
    href: "/aktualni-pocasi",
    description: "Aktuální počasí a stav sněhu v areálu.",
  },
  {
    title: "Mapa areálu",
    href: "/mapa-arealu",
    description: "Interaktivní mapa lyžařského areálu.",
  },
  {
    title: "Webkamery",
    href: "/webkamery",
    description: "Živé záběry z webkamer v areálu.",
  },
  {
    title: "Fotogalerie",
    href: "/fotogalerie",
    description: "Fotografie z areálu a zimních aktivit.",
  },
  {
    title: "Videa",
    href: "/videa",
    description: "Videa z lyžování a zimních aktivit.",
  },
  {
    title: "Kalendář akcí",
    href: "/kalendar-akci",
    description: "Zimní akce a události v areálu.",
  },
]

const services: { title: string, href: string, description: string, image: string }[] = [
  {
    title: "Lyžařská škola",
    href: "/lyzarska-skola",
    description: "Kurzy lyžování pro všechny úrovně.",
    image: "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Půjčovna lyží",
    href: "/pujcovna-lyzi",
    description: "Pronájem lyží a zimního vybavení.",
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Skibus",
    href: "/skibus",
    description: "Doprava do areálu v zimní sezóně.",
    image: "https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Restaurace",
    href: "/restaurace",
    description: "Teplé občerstvení po lyžování.",
    image: "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Centrum služeb turistům",
    href: "/centrum-sluzeb-turistum",
    description: "Informace a služby pro zimní turisty.",
    image: "https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Dětský ráj",
    href: "/detsky-raj",
    description: "Zimní aktivity pro děti.",
    image: "https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Běžky",
    href: "/bezky",
    description: "Běžecké lyžování a trasy.",
    image: "https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Snowpark",
    href: "/snowpark",
    description: "Snowpark pro freeride a freestyle.",
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=32&h=32&fit=crop&crop=center",
  },
  {
    title: "Večerní lyžování",
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
        <NavigationMenuLink as-child>
          <Link href="/" :class="navigationMenuTriggerStyle()">
            Úvod
          </Link>
        </NavigationMenuLink>
            </NavigationMenuItem>
      <NavigationMenuItem>
        <NavigationMenuTrigger>O areálu</NavigationMenuTrigger>
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
  <NavigationMenuTrigger>Zimní služby</NavigationMenuTrigger>
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
          <Link href="/ubytovani" :class="navigationMenuTriggerStyle()">
            Ubytování
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/kontakt" :class="navigationMenuTriggerStyle()">
            Kontakt
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>
    </NavigationMenuList>
  </NavigationMenu>
</template>