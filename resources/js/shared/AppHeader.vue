<script setup lang="ts">
import AppNavbar from './AppNavbar.vue';
import MobileMenuSheet from './MobileMenuSheet.vue';
import { Button } from '@/components/ui/button';
import { Link } from '@inertiajs/vue3';
import { trans } from 'laravel-vue-i18n';


</script>

<template>
    <header class="w-full sticky top-0 border-b py-4 md:py-6 z-50 bg-white">
      <div class="flex justify-between items-center container px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between w-full md:w-auto md:space-x-16">
            <Link :href="route('home')" class="shrink-0" prefetch>
                <img src="/img/logo.webp" alt="Logo SKI Kunčice" class="h-6 md:h-8">
            </Link>

            <!-- Mobile Menu -->
            <div class="md:hidden">
                <MobileMenuSheet />
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <AppNavbar />
            </div>
        </div>

         <div class="flex space-x-4 ">
            <Button variant="secondary" size="lg" as-child class="hidden md:inline-flex">
                <Link :href="route('events.index')" prefetch>
                    <span class="text-sm font-medium text-gray-700">{{ trans('navbar.events_calendar') }}</span>
                    <span class="text-xs font-medium px-2 py-1 rounded-full bg-primary text-white">{{ $page.props.count_events }}</span>
                </Link>
            </Button>
         <Button size="lg" as-child class="hidden md:inline-flex">
             <Link href="/cenik">
                 {{ trans('navbar.pricing') }}
             </Link>
         </Button>
         </div>
       
      </div>
    </header>
</template>