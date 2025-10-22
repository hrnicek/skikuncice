<script setup lang="ts">
import AppNavbar from './AppNavbar.vue';

</script>

<template>
    <header class="w-full px-4 sticky top-0 lg:px-16 border-b py-6 z-50 bg-white">
      <div class="flex justify-between items-center row">
        <div class="flex space-x-16">
            <div>
                <img src="/img/logo.png" alt="Logo" class="h-8"></img>
            </div>
        <div>
            <AppNavbar />
        </div>
        </div>
      </div>
    </header>
</template>