<script setup lang="ts">
import AppNavbar from './AppNavbar.vue';
import { Button } from '@/components/ui/button';
import { Link } from '@inertiajs/vue3';


</script>

<template>
    <header class="w-full sticky top-0 border-b py-6 z-50 bg-white">
      <div class="flex justify-between items-center row px-12!">
        <div class="flex space-x-16">
            <Link href="/">
                <img src="/img/logo.png" alt="Logo" class="h-8"></img>
            </Link>
        <div>
            <AppNavbar />
        </div>
            
        </div>
            <Button size="lg" as-child>
                <Link href="/cenik">
                    Ceník 
                </Link>
            </Button>
      </div>
    </header>
</template>