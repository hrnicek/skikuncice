<script setup lang="ts">
import { ref } from 'vue';
import { Button } from '@/components/ui/button';
import { Calendar, Clock, MapPin } from 'lucide-vue-next';

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
    <div class="container">
      <div class="mt-16 mb-16 bg-muted p-8 rounded-4xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
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
                class="bg-card rounded-lg border p-6 shadow-sm"
            >
                <div class="mb-4">
                    <div class="aspect-video bg-gradient-to-br from-[#081f54]/5 to-[#da383a]/5 rounded-lg mb-4 overflow-hidden shadow-inner">
                    <img
                        v-if="event.image"
                        :src="event.image"
                        :alt="event.title"
                        class="w-full h-full object-cover"
                        @error="handleImageError"
                    />
                    <div v-else class="image-placeholder w-full h-full flex items-center justify-center bg-gradient-to-br from-[#081f54]/10 to-[#da383a]/10">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-2 bg-[#081f54]/20 rounded-full flex items-center justify-center shadow-sm">
                                <svg class="w-8 h-8 text-[#081f54]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <p class="text-[#081f54] font-medium text-sm">Událost</p>
                        </div>
                    </div>
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
            <a href="/kalendar-akci" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 px-6 py-2">
                Zobrazit všechny akce
            </a>
        </div>
    </div>
    </div>
</template>