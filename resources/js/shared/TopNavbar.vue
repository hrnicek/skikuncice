<script setup lang="ts">
import { ref, watch } from 'vue'
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select'
import SeasonToggle from '@/components/SeasonToggle.vue';
import { Mail } from 'lucide-vue-next'
import { router, usePage } from '@inertiajs/vue3'

const currentLocale = usePage().props.locale

const currentLanguage = ref(currentLocale)

const languages = [
  {
    code: 'cs',
    name: 'Čeština',
    flag: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600">
      <rect width="900" height="600" fill="#d7141a"/>
      <rect width="900" height="300" fill="#fff"/>
      <path d="M 450,300 0,0 V 600 z" fill="#11457e"/>
    </svg>`
  },
  {
    code: 'pl',
    name: 'Polski',
    flag: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 10">
      <rect width="16" height="10" fill="#fff"/>
      <rect width="16" height="5" fill="#dc143c"/>
    </svg>`
  }
]

watch(currentLanguage, () => {
  switchLanguage(currentLanguage.value)
})

const switchLanguage = (language: string) => {
   router.visit(`/set-lang/${language}`)
}

</script>

<template>
  <div class="w-full bg-white border-b py-1">
    <div class="flex justify-between items-center container px-4 sm:px-6 lg:px-8">
      <div class="flex items-center gap-3 md:gap-6 text-xs md:text-sm">
        <div class="flex-shrink-0">
          <SeasonToggle />
        </div>
        <a
          href="mailto:info@skikuncice.cz"
          class="text-gray-700 hover:text-gray-900 hidden sm:flex items-center gap-1 transition-colors"
        >
          <Mail class="w-4 h-4" />
          info@skikuncice.cz
        </a>
       
      </div>

      <!-- Right side: Language Switcher -->
      <Select v-model="currentLanguage">
        <SelectTrigger class="w-[70px] h-8 border-gray-200 hover:border-gray-300 focus:outline-none transition-colors">
          <SelectValue>
              <div
                class="size-4 border border-gray-100"
                v-html="languages.find(lang => lang.code === currentLanguage)?.flag"
              >
            </div>
          </SelectValue>
        </SelectTrigger>
        <SelectContent>
          <SelectItem
            v-for="language in languages"
            :key="language.code"
            :value="language.code"
            class="cursor-pointer"
          >
            <div class="flex items-center gap-2">
              <div
                class="w-5 h-4 rounded-sm overflow-hidden border border-gray-200"
                v-html="language.flag"
              ></div>
              <span class="text-sm">{{ language.name }}</span>
            </div>
          </SelectItem>
        </SelectContent>
      </Select>
    </div>
  </div>
</template>