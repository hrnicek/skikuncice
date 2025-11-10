<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { ArrowRight } from 'lucide-vue-next';

</script>

<template>
    <section class="mt-16">
        <div class="container mb-6">
            <h2 class="text-3xl font-bold text-left mb-6">Restaurace & Bar</h2>
        </div>
        <div class="container">
        <div class="grid grid-cols-12 gap-8">
            <div class="lg:col-span-4 col-span-12">
                <div class="h-[500px] relative bg-primary rounded-md flex flex-col items-start text-base font-base text-foreground">
                    <img src="/img/pizza.avif" alt="Pizza" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-md" />
                    <div class="absolute bottom-0 left-0 bg-overlay w-full text-white p-8">
                       <p class="font-bold mb-3 text-xl">Otevírací doba</p>
                        <p>Pondělí - Neděle: 9:00 - 20:00</p>
                    </div>
                    <div class="relative m-8 z-20">
                    <div class="p-4 text-white flex items-center bg-primary hover:bg-primary rounded-md mb-4">
                        <p>Jídelní lístek</p>
                        <ArrowRight class="w-6 h-6 ml-4" />
                    </div>
                     <div class="p-4 text-white flex items-center bg-primary hover:bg-primary rounded-md w-full">
                        <p>
                            Nápojový lístek
                        </p>
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
                            Hospoda U Rumařů
                        </p>
                    </div>
                    <div class="max-w-xl">
                        Během dne stráveného na svahu budete potřebovat nabrat síly a dostatečně se osvěžit. Využijte některé z našich gastro zařízení, které máte ve skiareálu Kunčice přímo u sjezdovek!
                    </div>
                    <div class="mt-3">
                        <Button variant="outline" as-child>
                            <Link :href="route('restaurant')">
                                Více informací
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