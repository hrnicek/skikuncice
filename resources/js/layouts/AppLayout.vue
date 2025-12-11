<script setup lang="ts">
import TopNavbar from '@/shared/TopNavbar.vue'
import AppHeader from '@/shared/AppHeader.vue'
import AppFooter from '@/shared/AppFooter.vue'
import Head from '@/components/Head.vue';
import SnowEffect from '@/components/SnowEffect.vue';
import { ref, onMounted, onUnmounted } from 'vue';
import { Ticket } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import {
  Tooltip,
  TooltipContent,
  TooltipProvider,
  TooltipTrigger,
} from '@/components/ui/tooltip'
import { trans } from 'laravel-vue-i18n';

const showScrollButton = ref(false);

const handleScroll = () => {
  showScrollButton.value = window.scrollY > 200;
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <Head />
    <SnowEffect />
    <TopNavbar />
    <AppHeader />
    <slot />
    <AppFooter />

    <div class="fixed left-6 bottom-6 z-50 transition-all duration-300" :class="showScrollButton ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10 pointer-events-none'">
        <TooltipProvider>
            <Tooltip>
                <TooltipTrigger as-child>
                    <Link :href="route('pricing')" class="flex h-14 w-14 items-center justify-center rounded-full bg-primary text-white shadow-xl hover:bg-brand-primary/90 transition-transform hover:scale-105">
                        <Ticket class="h-7 w-7" />
                    </Link>
                </TooltipTrigger>
                <TooltipContent side="right">
                    <p>{{ trans('navbar.pricing') }}</p>
                </TooltipContent>
            </Tooltip>
        </TooltipProvider>
    </div>
</template>