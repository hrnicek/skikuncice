<template>
  <Sheet v-model:open="isOpen">
    <SheetTrigger as-child>
      <Button
        variant="ghost"
        size="icon"
        class="md:hidden"
        @click="isOpen = true"
        aria-label="Otevřít mobilní menu"
      >
        <Menu class="h-5 w-5" />
      </Button>
    </SheetTrigger>
    <SheetContent side="left" class="w-[300px] sm:w-[350px] flex flex-col">
      <SheetHeader class="text-left flex-shrink-0">
        <SheetTitle class="flex items-center gap-2">
          <img src="/img/logo.png" alt="Logo" class="h-6 w-6" />
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
            Úvod
          </Link>
        </nav>

        <Separator />

        <!-- About Section -->
        <div class="space-y-3">
          <h3 class="text-sm font-semibold text-muted-foreground uppercase tracking-wide">
            O areálu
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
            {{ isWinter ? 'Zimní služby' : 'Letní služby' }}
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
            Léto
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
            Tipy na dovolenou
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
            href="/ubytovani"
            class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
            @click="closeMenu"
          >
            <Bed class="h-4 w-4" />
            Ubytování
          </Link>
          <Link
            href="/kontakt"
            class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
            @click="closeMenu"
          >
            <Mail class="h-4 w-4" />
            Kontakt
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

const services = [
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

// Summer navigation items
const summerMainItems = [
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

const vacationTips = [
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

const summerServices = [
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

// Close menu function
const closeMenu = () => {
  isOpen.value = false
}
</script>