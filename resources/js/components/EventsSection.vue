<script setup lang="ts">
import { ref } from 'vue';
import { Button } from '@/components/ui/button';
import { ArrowRight, Calendar, Clock } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';

interface Event {
  id: number;
  title: string;
  date_from: string;
  date_to: string;
  published: boolean;
  note?: string;
  image?: string;
}

// Mock data for now - in real app this would come from API
const events = ref<Event[]>([
  {
    id: 1,
    title: "Lyžovačka pro začátečníky",
    date_from: "2025-01-15T09:00:00",
    date_to: "2025-01-15T16:00:00",
    published: true,
    note: "Ideální akce pro ty, kteří se učí lyžovat",
    image: "/img/events/skiing-beginners.jpg"
  },
  {
    id: 2,
    title: "Noční sáňkování",
    date_from: "2025-01-20T18:00:00",
    date_to: "2025-01-20T22:00:00",
    published: true,
    note: "Zábava pro celou rodinu pod hvězdami",
    image: "/img/events/night-sledding.jpg"
  },
  {
    id: 3,
    title: "Závody ve slalomu",
    date_from: "2025-02-01T10:00:00",
    date_to: "2025-02-01T15:00:00",
    published: true,
    note: "Soutěž pro zkušené lyžaře",
    image: "/img/events/slalom-race.jpg"
  }
]);

const formatDate = (dateString: string) => {
  const date = new Date(dateString);
  return date.toLocaleDateString('cs-CZ', {
    day: 'numeric',
    month: 'long',
    year: 'numeric'
  });
};

const formatTime = (dateString: string) => {
  const date = new Date(dateString);
  return date.toLocaleTimeString('cs-CZ', {
    hour: '2-digit',
    minute: '2-digit'
  });
};

const handleImageError = (event: Event) => {
  const img = event.target as HTMLImageElement;
  img.style.display = 'none';
  const placeholder = img.parentElement?.querySelector('.image-placeholder') as HTMLElement;
  if (placeholder) {
    placeholder.style.display = 'flex';
  }
};
</script>

<template>
  <section class="py-16 my-16 bg-muted relative 

  ">
    <img src="/img/bg-ice.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover pointer-events-none" />
    <div class="container relative z-10">
      <div class="rounded-md">
        <div class="text-left mb-6">
            <h2 class="text-3xl font-bold text-foreground mb-2">
                Nadcházející akce
            </h2>
            <p class="text-muted-foreground text-lg">
                Podívejte se na naše plánované události a aktivity
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                v-for="event in events"
                :key="event.id"
                class="bg-card rounded-md border p-6 shadow-sm"
            >
                <div class="mb-4">
                    <div class="aspect-video bg-gradient-to-br from-[#081f54]/5 to-[#da383a]/5 rounded-md mb-4 overflow-hidden shadow-inner">
                    <img
                        src="https://skikuncice.cz/data/filecache/46/AND02942.jpg"
                        :alt="event.title"
                        class="w-full h-full object-cover"
                    />

                </div>
                    <h3 class="text-xl font-semibold text-primary mb-2">
                        {{ event.title }}
                    </h3>
                    <div class="text-sm text-muted-foreground space-y-1">
                        <p class="flex items-center">
                            <Calendar class="w-4 h-4 mr-2 text-[#081f54]" />
                            <span class="font-medium">Datum:</span>
                            {{ formatDate(event.date_from) }}
                        </p>
                        <p class="flex items-center">
                            <Clock class="w-4 h-4 mr-2 text-[#081f54]" />
                            <span class="font-medium">Čas:</span>
                            {{ formatTime(event.date_from) }} - {{ formatTime(event.date_to) }}
                        </p>
                    </div>
                </div>

                <div v-if="event.note" class="text-muted-foreground text-sm leading-relaxed mb-4">
                    {{ event.note }}
                </div>

                <Button variant="outline" size="sm" class="w-full hover:bg-[#081f54] hover:text-white transition-colors">
                    Zobrazit více
                </Button>
            </div>
        </div>

        <div class="text-center mt-12">
            <Button size="lg" as-child>
              <Link :href="route('events.index')">
                    Zobrazit všechny akce
                    <ArrowRight class="w-5 h-5 ml-2" />
              </Link>
            </Button>
        </div>
    </div>
    </div>
    </section>
</template>