<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { ArrowRight } from 'lucide-vue-next';
import { trans } from 'laravel-vue-i18n';
import { Link } from '@inertiajs/vue3';
// import { route } from 'ziggy-js';
import type { RestaurantMenu } from '@/types';

defineProps<{
  foodMenu?: RestaurantMenu | null;
  drinksMenu?: RestaurantMenu | null;
}>();

</script>

<template>
    <section class="mt-16">
        <div class="container mb-6">
            <h2 class="text-3xl font-bold text-left mb-6">{{ trans('home_restaurant_section.title') }}</h2>
        </div>
        <div class="container">
        <div class="grid grid-cols-12 gap-8">
            <div class="lg:col-span-4 col-span-12">
                <div class="h-[500px] relative bg-primary rounded-md flex flex-col items-start text-base font-base text-foreground">
                    <img src="/img/pizza.avif" alt="Pizza" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-md" />
                    <div class="absolute bottom-0 left-0 bg-overlay w-full text-white p-8">
                       <p class="font-bold mb-3 text-xl">{{ trans('home_restaurant_section.opening_hours') }}</p>
                        <p>{{ trans('home_restaurant_section.opening_hours_value') }}</p>
                    </div>
                    <div class="relative m-8 z-20">
                    <a 
                        v-if="foodMenu?.download_url" 
                        :href="foodMenu.download_url" 
                        target="_blank"
                        download
                        class="p-4 text-white flex items-center bg-primary hover:bg-primary/90 rounded-md mb-4 transition-colors cursor-pointer"
                    >
                        <p>{{ trans('home_restaurant_section.menu') }}</p>
                        <ArrowRight class="w-6 h-6 ml-4" />
                    </a>
                    <div 
                        v-else
                        class="p-4 text-white/50 flex items-center bg-primary/50 rounded-md mb-4 cursor-not-allowed"
                    >
                        <p>{{ trans('home_restaurant_section.menu') }}</p>
                        <ArrowRight class="w-6 h-6 ml-4" />
                    </div>

                    <a 
                        v-if="drinksMenu?.download_url" 
                        :href="drinksMenu.download_url" 
                        target="_blank"
                        download
                        class="p-4 text-white flex items-center bg-primary hover:bg-primary/90 rounded-md w-full transition-colors cursor-pointer"
                    >
                        <p>{{ trans('home_restaurant_section.drinks_menu') }}</p>
                        <ArrowRight class="w-6 h-6 ml-4" />
                    </a>
                    <div 
                        v-else
                        class="p-4 text-white/50 flex items-center bg-primary/50 rounded-md w-full cursor-not-allowed"
                    >
                        <p>{{ trans('home_restaurant_section.drinks_menu') }}</p>
                        <ArrowRight class="w-6 h-6 ml-4" />
                    </div>
                   
                   </div>
                </div>
            </div>
            <div class="lg:col-span-8 col-span-12">
            <div class="relative h-[500px] rounded-md container overflow-hidden mb-16">
                <img src="/img/home/restaurace.jpg" alt="Restaurace" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-md" />
                <div class="absolute bottom-0 left-0 right-0 px-4 lg:px-16 px- py-8 text-white bg-overlay">
                    <div>
                        <p class="font-bold text-xl mb-3">
                            {{ trans('home_restaurant_section.restaurant_name') }}
                        </p>
                    </div>
                    <div class="max-w-xl">
                        {{ trans('home_restaurant_section.restaurant_description') }}
                    </div>
                    <div class="mt-3">
                        <Button variant="outline" as-child>
                            <Link :href="route('restaurant')">
                                {{ trans('home_restaurant_section.more_info') }}
                            </Link>
                        </Button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</template>
