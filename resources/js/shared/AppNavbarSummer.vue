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

// Main navigation items based on the provided structure
const mainItems: { title: string, href: string, description: string }[] = [
  {
    title: "Léto",
    href: "/leto",
    description: "Letní aktivity a služby v areálu.",
  },
  {
    title: "Region Kunčice",
    href: "/region-kuncice",
    description: "Informace o regionu Kunčice pod Ondřejníkem.",
  },
]

// Vacation tips for different groups
const vacationTips: { title: string, href: string, description: string }[] = [
  {
    title: "Tipy na dovolenou pro rodiny s dětmi",
    href: "/tipy-rodiny-deti",
    description: "Doporučení pro rodinnou dovolenou s dětmi.",
  },
  {
    title: "Tipy na dovolenou pro seniory",
    href: "/tipy-seniory",
    description: "Speciální nabídka pro starší návštěvníky.",
  },
  {
    title: "Tipy na dovolenou pro zamilovaný pár",
    href: "/tipy-zamilovany-par",
    description: "Romantické tipy pro páry.",
  },
  {
    title: "Tipy na dovolenou pro partu mladých",
    href: "/tipy-partu-mladych",
    description: "Aktivity pro skupiny mladých lidí.",
  },
]

// Additional services and activities
const additionalServices: { title: string, href: string, description: string }[] = [
  {
    title: "Webkamery",
    href: "/webkamery",
    description: "Živé záběry z webkamer v areálu.",
  },
  {
    title: "Kalendář akcí",
    href: "/kalendar-akci",
    description: "Letní akce a události v areálu.",
  },
  {
    title: "Aktivity",
    href: "/aktivity",
    description: "Všechny dostupné letní aktivity.",
  },
  {
    title: "Zajímavé cíle v regionu",
    href: "/zajimave-cile-regionu",
    description: "Turistické atrakce v okolí.",
  },
  {
    title: "Cyklovýlety",
    href: "/cyklovylety",
    description: "Cyklistické trasy a výlety.",
  },
  {
    title: "Koloběžky",
    href: "/kolobezky",
    description: "Půjčovna a trasy pro koloběžky.",
  },
  {
    title: "Agroturistika",
    href: "/agroturistika",
    description: "Agroturistické služby a farma.",
  },
  {
    title: "Cyklocentrum",
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
            Úvod
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
        <NavigationMenuTrigger>Tipy na dovolenou</NavigationMenuTrigger>
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
        <NavigationMenuTrigger>Služby a aktivity</NavigationMenuTrigger>
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
            Ubytování
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>

      <!-- Restaurants -->
      <NavigationMenuItem>
        <NavigationMenuLink as-child>
          <Link href="/restaurace" :class="navigationMenuTriggerStyle()">
            Restaurace
          </Link>
        </NavigationMenuLink>
      </NavigationMenuItem>

      <!-- Contact -->
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