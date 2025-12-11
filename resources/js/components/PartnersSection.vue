<script setup lang="ts">
import { wTrans } from 'laravel-vue-i18n';

interface Logo {
  name: string;
  logo: string;
  className: string;
}

interface PartnersSectionProps {
  logos?: Logo[];
}

const props = withDefaults(defineProps<PartnersSectionProps>(), {
  logos: () => [
    {
      name: "ELEKTROURBANEK",
      logo: "/img/partners/ELEKTROURBANEK-logo_1.webp",
      className: "h-12 w-auto",
    },
    {
      name: "Jeseníky JSCR",
      logo: "/img/partners/jeseniky+jscr_barevne_logo.webp",
      className: "h-12 w-auto",
    },
    {
      name: "Kudy z nudy",
      logo: "/img/partners/Kudy-z-nudy-barevne.webp",
      className: "h-12 w-auto",
    },
  ],
});
</script>

<template>
  <div class="border-t py-16">
    <div class="container">
        <div class="text-center flex items-center">
            <h2 class="text-3xl font-bold text-foreground mb-2">
                {{ wTrans('partners_section.title') }}
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
    </div>
</template>
