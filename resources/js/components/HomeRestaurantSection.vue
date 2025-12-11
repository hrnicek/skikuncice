<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Download, Clock, ArrowRight } from 'lucide-vue-next';
import { trans } from 'laravel-vue-i18n';
import { Link } from '@inertiajs/vue3';
import type { RestaurantMenu } from '@/types';

defineProps<{
  foodMenu?: RestaurantMenu | null;
  drinksMenu?: RestaurantMenu | null;
}>();

</script>

<template>
  <section class="py-16 md:py-24 bg-gradient-to-b from-background to-muted/10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-sans text-primary mb-4">
          {{ trans('home_restaurant_section.title') }}
        </h2>
        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
          {{ trans('home_restaurant_section.restaurant_description') }}
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-8 items-stretch">
        <!-- Left Column: Restaurant Image & Info -->
        <div class="relative rounded-2xl overflow-hidden shadow-xl group min-h-[500px]">
          <img 
            src="/img/home/restaurace.webp" 
            alt="Restaurace" 
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105" 
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
          
          <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8 text-white">
            <h3 class="text-2xl md:text-3xl font-bold mb-3">
              {{ trans('home_restaurant_section.restaurant_name') }}
            </h3>
            
            <!-- Opening Hours Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-lg px-4 py-2 mb-4">
              <Clock class="w-5 h-5" />
              <div>
                <p class="text-xs font-medium opacity-80">{{ trans('home_restaurant_section.opening_hours') }}</p>
                <p class="text-sm font-semibold">{{ trans('home_restaurant_section.opening_hours_value') }}</p>
              </div>
            </div>

            <Button variant="outline" as-child class="bg-white/10 backdrop-blur-md border-white/30 text-white hover:bg-white/20 ml-4">
              <Link :href="route('restaurant')" class="inline-flex items-center gap-2">
                {{ trans('home_restaurant_section.more_info') }}
                <ArrowRight class="w-4 h-4" />
              </Link>
            </Button>
          </div>
        </div>

        <!-- Right Column: Menu Downloads & Pizza Image -->
        <div class="space-y-6">
          <!-- Menu Download Cards -->
          <div class="bg-white rounded-2xl shadow-lg border border-border p-6 space-y-4">
            <h4 class="text-xl font-semibold text-foreground mb-4">Menu ke stažení</h4>
            
            <!-- Food Menu -->
            <a 
              v-if="foodMenu?.download_url" 
              :href="foodMenu.download_url" 
              target="_blank"
              download
              class="group flex items-center gap-4 p-4 rounded-xl bg-gradient-to-r from-brand-secondary/5 to-brand-secondary/10 border border-brand-secondary/20 hover:border-brand-secondary/40 hover:shadow-md transition-all duration-300"
            >
              <div class="flex-shrink-0 p-3 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                <Download class="w-6 h-6 text-brand-secondary" />
              </div>
              <div class="flex-1">
                <p class="font-semibold text-foreground group-hover:text-brand-secondary transition-colors">
                  {{ trans('home_restaurant_section.menu') }}
                </p>
                <p class="text-sm text-muted-foreground">Stáhnout jako PDF</p>
              </div>
              <ArrowRight class="w-5 h-5 text-brand-secondary opacity-0 group-hover:opacity-100 transition-opacity" />
            </a>
            <div 
              v-else
              class="flex items-center gap-4 p-4 rounded-xl bg-muted/50 border border-border opacity-50"
            >
              <div class="flex-shrink-0 p-3 rounded-lg bg-muted">
                <Download class="w-6 h-6 text-muted-foreground" />
              </div>
              <div class="flex-1">
                <p class="font-semibold text-muted-foreground">
                  {{ trans('home_restaurant_section.menu') }}
                </p>
                <p class="text-sm text-muted-foreground">Momentálně nedostupné</p>
              </div>
            </div>

            <!-- Drinks Menu -->
            <a 
              v-if="drinksMenu?.download_url" 
              :href="drinksMenu.download_url" 
              target="_blank"
              download
              class="group flex items-center gap-4 p-4 rounded-xl bg-gradient-to-r from-brand-secondary/5 to-brand-secondary/10 border border-brand-secondary/20 hover:border-brand-secondary/40 hover:shadow-md transition-all duration-300"
            >
              <div class="flex-shrink-0 p-3 rounded-lg bg-brand-secondary/10 group-hover:bg-brand-secondary/20 transition-colors">
                <Download class="w-6 h-6 text-brand-secondary" />
              </div>
              <div class="flex-1">
                <p class="font-semibold text-foreground group-hover:text-brand-secondary transition-colors">
                  {{ trans('home_restaurant_section.drinks_menu') }}
                </p>
                <p class="text-sm text-muted-foreground">Stáhnout jako PDF</p>
              </div>
              <ArrowRight class="w-5 h-5 text-brand-secondary opacity-0 group-hover:opacity-100 transition-opacity" />
            </a>
            <div 
              v-else
              class="flex items-center gap-4 p-4 rounded-xl bg-muted/50 border border-border opacity-50"
            >
              <div class="flex-shrink-0 p-3 rounded-lg bg-muted">
                <Download class="w-6 h-6 text-muted-foreground" />
              </div>
              <div class="flex-1">
                <p class="font-semibold text-muted-foreground">
                  {{ trans('home_restaurant_section.drinks_menu') }}
                </p>
                <p class="text-sm text-muted-foreground">Momentálně nedostupné</p>
              </div>
            </div>
          </div>

          <div class="relative rounded-2xl overflow-hidden shadow-md aspect-[4/3]">
            <img 
              src="/img/services/restaurace.webp" 
              alt="Restaurace" 
              class="absolute inset-0 w-full h-full object-cover" 
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
