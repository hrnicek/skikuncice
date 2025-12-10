<script setup lang="ts">
import { ref, watch } from 'vue'
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select'
import { Mail } from 'lucide-vue-next'
import { router, usePage } from '@inertiajs/vue3'

// 1. Získání props s typovou kontrolou (pokud používáte TS)
const page = usePage()
const currentLocale = page.props.locale as string // Přetypování, pokud TS hlásí chybu

const currentLanguage = ref(currentLocale)

const languages = [
  {
    code: 'cs',
    name: 'Čeština',
    flag: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600"><rect width="900" height="600" fill="#d7141a"/><rect width="900" height="300" fill="#fff"/><path d="M 450,300 0,0 V 600 z" fill="#11457e"/></svg>`
  },
  {
    code: 'en',
    name: 'English',
    flag: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30"><rect width="60" height="30" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M30,0 V30 M0,15 H60" stroke="#fff" stroke-width="10"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#c8102e" stroke-width="4"/><path d="M30,0 V30 M0,15 H60" stroke="#c8102e" stroke-width="6"/></svg>`
  }
]

// Sledování změny v Selectu
watch(currentLanguage, (newLang) => {
  if (newLang !== currentLocale) {
      switchLanguage(newLang)
  }
})

const switchLanguage = (language: string) => {
   // 2. Volání backendu
   // Používáme router.get, protože backend nám vrátí Inertia::location(),
   // což Inertia frontend automaticky zpracuje jako "Hard Redirect" (window.location.href).
   router.get(`/lang/${language}`, {}, {
     preserveState: false, // Důležité: Chceme kompletní reset stavu při změně jazyka
     preserveScroll: true, // Zachová pozici na stránce
   })
}
</script>

<template>
  <div class="w-full bg-white border-b py-1">
    <div class="flex justify-between items-center container px-4 sm:px-6 lg:px-8">
      <div class="flex items-center gap-3 md:gap-6 text-xs md:text-sm">
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
        <SelectTrigger class="w-[110px] h-8 border-gray-200 hover:border-gray-300 focus:outline-none transition-colors">
          <SelectValue>
             <div class="flex items-center gap-2">
                 <div
                    class="w-5 h-auto rounded-sm overflow-hidden"
                    v-html="languages.find(lang => lang.code === currentLanguage)?.flag"
                  ></div>
                 <span class="text-sm font-medium">{{ languages.find(lang => lang.code === currentLanguage)?.name }}</span>
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
                class="w-5 h-auto rounded-sm overflow-hidden"
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