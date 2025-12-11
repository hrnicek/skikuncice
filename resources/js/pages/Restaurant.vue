<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
import type { RestaurantMenu } from '@/types';
import { Download, Clock, Phone, Mail, Soup, UtensilsCrossed, Baby, Wine } from 'lucide-vue-next';

defineProps<{
  foodMenu?: RestaurantMenu | null;
  drinksMenu?: RestaurantMenu | null;
}>();

const navigation = [
  { name: 'restaurant.nav.rumaru', href: '#rumaru' },
  { name: 'restaurant.nav.hajovna', href: '#hajovna' },
  { name: 'restaurant.nav.kulatak', href: '#kulatak' },
  { name: 'restaurant.nav.hours', href: '#hours' },
];

const scrollToSection = (href: string) => {
  const element = document.querySelector(href);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
  }
};
</script>

<template>
  <AppLayout>
    <PageHeader
      :background-image="'/img/home/restaurace.webp'"
      :title="trans('restaurant.page_header.title')"
      :subtitle="trans('restaurant.page_header.subtitle')"
    />

    <!-- Sticky Navigation -->
    <div class="sticky top-0 z-30 w-full bg-background/80 backdrop-blur-md border-b border-border/40">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-center gap-1 overflow-x-auto py-3 no-scrollbar md:gap-4">
          <button
            v-for="item in navigation"
            :key="item.name"
            @click.prevent="scrollToSection(item.href)"
            class="whitespace-nowrap rounded-full px-4 py-1.5 text-sm font-medium text-muted-foreground hover:bg-muted hover:text-foreground transition-colors"
          >
            {{ trans(item.name) }}
          </button>
        </nav>
      </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 space-y-24">
      
      <!-- Intro Section -->
      <section class="max-w-3xl mx-auto text-center space-y-6">
        <div class="inline-flex items-center justify-center p-3 rounded-full bg-primary/5 text-primary mb-4">
           <img src="/img/icons/restaurace.webp" alt="Restaurace" class="h-8 w-8" />
        </div>
        <h2 class="text-3xl md:text-4xl font-light text-primary">
          {{ trans('restaurant.intro.title') }}
        </h2>
        <p class="text-lg md:text-xl text-muted-foreground leading-relaxed">
          {{ trans('restaurant.intro.p1') }}
        </p>
      </section>

      <!-- Hospoda u Rumařů Section -->
      <section id="rumaru" class="scroll-mt-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div class="order-2 lg:order-1 space-y-8">
            <div class="space-y-4">
              <h3 class="text-3xl md:text-4xl font-sans text-primary">
                {{ trans('restaurant.rumaru.title') }}
              </h3>
              <p class="text-lg text-muted-foreground leading-relaxed">
                {{ trans('restaurant.rumaru.p1') }}
              </p>
            </div>

            <!-- Special Offer / Menu Highlights -->
            <div class="bg-gradient-to-br from-muted/20 to-muted/40 rounded-2xl p-6 border border-border/50">
              <h4 class="font-medium text-foreground mb-6 font-sans text-lg">
                {{ trans('restaurant.rumaru.menu.title') }}
              </h4>
              <div class="grid gap-4">
                <!-- Polévky a hlavní jídla -->
                <div class="flex items-start gap-3 group">
                  <div class="flex-shrink-0 p-2 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                    <Soup class="w-5 h-5 text-brand-secondary" />
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-foreground">{{ trans('restaurant.rumaru.menu.i1') }}</p>
                  </div>
                </div>

                <!-- Speciality z udírny -->
                <div class="flex items-start gap-3 group">
                  <div class="flex-shrink-0 p-2 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                    <UtensilsCrossed class="w-5 h-5 text-brand-secondary" />
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-foreground">{{ trans('restaurant.rumaru.menu.i2') }}</p>
                  </div>
                </div>

                <!-- Dětské menu -->
                <div class="flex items-start gap-3 group">
                  <div class="flex-shrink-0 p-2 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                    <Baby class="w-5 h-5 text-brand-secondary" />
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-foreground">{{ trans('restaurant.rumaru.menu.i3') }}</p>
                  </div>
                </div>

                <!-- Nápoje -->
                <div class="flex items-start gap-3 group">
                  <div class="flex-shrink-0 p-2 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                    <Wine class="w-5 h-5 text-brand-secondary" />
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-foreground">{{ trans('restaurant.rumaru.menu.i4') }}</p>
                  </div>
                </div>
              </div>
            </div>

            <p class="text-muted-foreground leading-relaxed">
               {{ trans('restaurant.rumaru.p2') }}
            </p>

            <!-- Menus Downloads -->
            <div class="flex flex-wrap gap-4 pt-4 border-t border-border/40">
               <a 
                 v-if="foodMenu?.download_url" 
                 :href="foodMenu.download_url" 
                 target="_blank" 
                 download 
                 class="group flex items-center gap-3 pl-4 pr-5 py-3 rounded-xl bg-white border border-border shadow-sm hover:shadow-md hover:border-brand-secondary/30 transition-all duration-300"
               >
                 <div class="p-2 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                  <Download class="w-5 h-5 text-brand-secondary" />
                 </div>
                 <div class="text-left">
                   <div class="text-xs font-medium text-muted-foreground uppercase tracking-wide">PDF Menu</div>
                   <div class="font-semibold text-foreground group-hover:text-brand-secondary transition-colors">{{ trans('restaurant.buttons.food_menu') }}</div>
                 </div>
               </a>
               
               <a 
                 v-if="drinksMenu?.download_url" 
                 :href="drinksMenu.download_url" 
                 target="_blank" 
                 download
                 class="group flex items-center gap-3 pl-4 pr-5 py-3 rounded-xl bg-white border border-border shadow-sm hover:shadow-md hover:border-brand-secondary/30 transition-all duration-300"
               >
                 <div class="p-2 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                  <Download class="w-5 h-5 text-brand-secondary" />
                 </div>
                 <div class="text-left">
                   <div class="text-xs font-medium text-muted-foreground uppercase tracking-wide">PDF Menu</div>
                   <div class="font-semibold text-foreground group-hover:text-brand-secondary transition-colors">{{ trans('restaurant.buttons.drinks_menu') }}</div>
                 </div>
               </a>
            </div>
          </div>

          <div class="order-1 lg:order-2 grid gap-4">
            <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-lg">
              <img src="/img/services/restaurace.webp" :alt="trans('restaurant.alt.rumaru')" class="w-full h-full object-cover hover:scale-105 transition duration-700" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-md">
                 <img src="/img/home/restaurace.webp" :alt="trans('restaurant.alt.interior')" class="w-full h-full object-cover hover:scale-105 transition duration-700" />
              </div>
              <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-md flex items-center justify-center bg-muted/50 p-6 text-center">
                 <div class="space-y-2">
                    <Clock class="w-8 h-8 mx-auto text-brand-secondary" />
                    <p class="text-sm font-medium text-foreground">{{ trans('restaurant.hours.rumaru.title') }}</p>
                    <p class="text-sm text-muted-foreground">{{ trans('restaurant.hours.rumaru.value') }}</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr class="border-border/40" />

      <!-- Hájovna & Kulaták -->
      <section id="venues" class="grid lg:grid-cols-2 gap-16">
        <!-- Hájovna -->
        <article id="hajovna" class="space-y-6 scroll-mt-24">
           <div class="aspect-video rounded-2xl overflow-hidden shadow-md mb-6 relative group">
              <img src="/img/hero-winter.webp" :alt="trans('restaurant.alt.terasa_hajovna')" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                 <h3 class="text-2xl font-bold text-white">{{ trans('restaurant.hajovna.title') }}</h3>
              </div>
           </div>
           
           <div class="prose prose-gray max-w-none text-muted-foreground">
             <p>{{ trans('restaurant.hajovna.p1') }}</p>
             <p>{{ trans('restaurant.hajovna.p2') }}</p>
           </div>
           
           <div class="flex items-center gap-3 text-sm text-foreground font-medium bg-muted/30 p-3 rounded-lg w-fit">
              <Clock class="w-5 h-5 text-brand-secondary" />
              {{ trans('restaurant.hours.hajovna.title') }}: <span class="text-muted-foreground">{{ trans('restaurant.hours.hajovna.value') }}</span>
           </div>
        </article>

        <!-- Kulaták -->
        <article id="kulatak" class="space-y-6 scroll-mt-24">
           <div class="aspect-video rounded-2xl overflow-hidden shadow-md mb-6 relative group">
              <img src="/img/hero-summer.webp" :alt="trans('restaurant.alt.kulatak_summer')" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" />
               <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                 <h3 class="text-2xl font-bold text-white">{{ trans('restaurant.kulatak.title') }}</h3>
              </div>
           </div>
           
           <div class="prose prose-gray max-w-none text-muted-foreground">
             <p>{{ trans('restaurant.kulatak.p1') }}</p>
             <p>{{ trans('restaurant.kulatak.p2') }}</p>
           </div>
           
           <div class="flex items-center gap-3 text-sm text-foreground font-medium bg-muted/30 p-3 rounded-lg w-fit">
              <Clock class="w-5 h-5 text-brand-secondary" />
              {{ trans('restaurant.hours.kulatak.title') }}: <span class="text-muted-foreground">{{ trans('restaurant.hours.kulatak.value') }}</span>
           </div>
        </article>
      </section>

      <div id="hours" class="scroll-mt-48"></div> <!-- Scroll anchor -->

      <!-- Facilities & Contact -->
      <section class="bg-primary/5 rounded-3xl p-8 md:p-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div class="space-y-6">
            <h3 class="text-2xl md:text-3xl font-sans text-primary">
              {{ trans('restaurant.facilities.title') }}
            </h3>
            <p class="text-lg text-muted-foreground">
              {{ trans('restaurant.facilities.p1') }}
            </p>
            <p class="text-muted-foreground">
              {{ trans('restaurant.facilities.p2') }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 pt-4">
              <a href="tel:+420777719579" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-brand-secondary text-white font-medium hover:bg-brand-secondary/90 transition-colors shadow-sm">
                <Phone class="w-5 h-5" />
                +420 777 719 579
              </a>
              <a href="mailto:info@skikuncice.cz" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-white text-foreground border border-border font-medium hover:bg-muted transition-colors shadow-sm">
                <Mail class="w-5 h-5 text-gray-500" />
                info@skikuncice.cz
              </a>
            </div>
          </div>
          
          <div class="grid grid-cols-2 gap-4">
             <img src="/img/services/restaurace.webp" :alt="trans('restaurant.alt.facility_station')" class="rounded-xl shadow-lg w-full h-48 object-cover" />
             <img src="/img/pizza.avif" :alt="trans('restaurant.alt.food')" class="rounded-xl shadow-lg w-full h-48 object-cover translate-y-8" />
          </div>
        </div>
      </section>

    </div>
  </AppLayout>
</template>
