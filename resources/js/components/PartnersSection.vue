<script setup lang="ts">
interface Logo {
  name: string;
  logo: string;
  className: string;
}

interface PartnersSectionProps {
  title?: string;
  subtitle?: string;
  logos?: Logo[];
}

const props = withDefaults(defineProps<PartnersSectionProps>(), {
  title: "Partneři areálu",
  subtitle: "Spolupracujeme s předními společnostmi v oboru",
  logos: () => [
    {
      name: "ELEKTROURBANEK",
      logo: "/img/partners/ELEKTROURBANEK-logo_1.png",
      className: "h-12 w-auto",
    },
    {
      name: "Jeseníky JSCR",
      logo: "/img/partners/jeseniky+jscr_barevne_logo.jpg",
      className: "h-12 w-auto",
    },
    {
      name: "Kudy z nudy",
      logo: "/img/partners/Kudy-z-nudy-barevne.png",
      className: "h-12 w-auto",
    },
  ],
});
</script>

<template>
    <div class="container my-16">
        <div class="text-center flex items-center">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-2">
                {{ title }}
            </h2>
            <div class="flex flex-wrap mx-auto justify-center gap-x-8 gap-y-6 lg:gap-24">
                <img
                    v-for="(logo, index) in logos"
                    :key="index"
                    :src="logo.logo"
                    :alt="`${logo.name} logo`"
                    width="109"
                    height="48"
                    :class="logo.className"
                />
            </div>
        </div>
    </div>
</template>