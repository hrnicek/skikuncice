<script setup lang="ts">
import { ref } from 'vue';
import { Button } from '@/components/ui/button';

interface Event {
  id: number;
  title: string;
  date_from: string;
  date_to: string;
  published: boolean;
  note?: string;
}

// Mock data for now - in real app this would come from API
const events = ref<Event[]>([
  {
    id: 1,
    title: "Lyžovačka pro začátečníky",
    date_from: "2025-01-15T09:00:00",
    date_to: "2025-01-15T16:00:00",
    published: true,
    note: "Ideální akce pro ty, kteří se učí lyžovat"
  },
  {
    id: 2,
    title: "Noční sáňkování",
    date_from: "2025-01-20T18:00:00",
    date_to: "2025-01-20T22:00:00",
    published: true,
    note: "Zábava pro celou rodinu pod hvězdami"
  },
  {
    id: 3,
    title: "Závody ve slalomu",
    date_from: "2025-02-01T10:00:00",
    date_to: "2025-02-01T15:00:00",
    published: true,
    note: "Soutěž pro zkušené lyžaře"
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
                class="bg-card rounded-lg border p-6 shadow-sm hover:shadow-md transition-shadow duration-200"
            >
                <div class="mb-4">
                    <h3 class="text-xl font-semibold text-primary mb-2">
                        {{ event.title }}
                    </h3>
                    <div class="text-sm text-muted-foreground space-y-1">
                        <p>
                            <span class="font-medium">Datum:</span>
                            {{ formatDate(event.date_from) }}
                        </p>
                        <p>
                            <span class="font-medium">Čas:</span>
                            {{ formatTime(event.date_from) }} - {{ formatTime(event.date_to) }}
                        </p>
                    </div>
                </div>

                <div v-if="event.note" class="text-muted-foreground text-sm leading-relaxed mb-4">
                    {{ event.note }}
                </div>

                <Button variant="outline" size="sm" class="w-full">
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