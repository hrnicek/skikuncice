<script setup>
import { Button } from '@/components/ui/button'
import { Link } from '@inertiajs/vue3'
import { Motion } from 'motion-v'
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <section class="relative overflow-hidden bg-gradient-to-br from-white to-gray-50">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-12 lg:px-8">
      
      <Motion
        :initial="{ opacity: 0, y: 40 }"
        :whileInView="{ opacity: 1, y: 0 }"
        :transition="{ duration: 0.6, ease: 'easeOut' }"
        :viewport="{ once: true }"
        class="lg:w-1/2"
      >
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
          {{ trans('call_to_action_scholl.title') }}
        </h2>
        <p class="mt-6 text-lg text-gray-600 leading-relaxed" v-html="trans('call_to_action_scholl.subtitle')"></p>

        <div class="mt-10 flex flex-wrap items-center gap-4">
          <Button as-child size="lg" class="shadow-md hover:shadow-lg transition-all duration-300">
            <Link :href="route('contact')">{{ trans('call_to_action_scholl.contact_us') }}</Link>
          </Button>
          <Link 
            :href="route('about')"
            class="text-sm font-medium text-gray-900 hover:text-gray-600 transition-colors"
          >
            {{ trans('call_to_action_scholl.more_about_us') }}
          </Link>
        </div>
      </Motion>

      <!-- Image -->
      <Motion
        :initial="{ opacity: 0, scale: 0.95 }"
        :whileInView="{ opacity: 1, scale: 1 }"
        :transition="{ duration: 0.6, delay: 0.2, ease: 'easeOut' }"
        :viewport="{ once: true }"
        class="relative mt-16 lg:mt-0 lg:w-1/2"
      >
        <div class="relative overflow-hidden rounded-2xl shadow-lg ring-1 ring-gray-200">
          <img 
            :src="('/img/cta-skoly.jpg')"
            :alt="trans('call_to_action_scholl.image_alt')"
            class="h-80 w-full object-cover lg:h-full"
            loading="lazy"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-gray-900/20 to-transparent"></div>
        </div>
      </Motion>

    </div>
  </section>
</template>
