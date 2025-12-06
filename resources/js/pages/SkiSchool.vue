<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('ski_school.page_header.title')"
      :subtitle="trans('ski_school.page_header.subtitle')"
    />
    <div class="container my-16 space-y-12">
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">Mějte lyžování pod palcem.</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Pro malé i velké začínající lyžaře je tu lyžařská škola Skiareál Kunčice. Kunčická lyžařská škola disponuje vlastním lanovým vlekem a pro ty nejmenší i bezpečnou sjezdovkou se spoustou zvířátkových prolézaček.
        </p>
      </div>

      <!-- Ski Kindergarten -->
      <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-md p-8 md:p-12">
        <h2 class="text-3xl font-semibold text-primary mb-6">Lyžařská školka</h2>
        <div class="space-y-6">
          <p class="text-gray-700 leading-relaxed text-lg">
            Učíme děti už od 3 let, a to zábavnou formou, tak aby si jízdu užily a zároveň se bezpečně naučily základní dovednosti na sněhu.
          </p>
          <div class="bg-white/60 p-4 rounded-md border border-green-100">
            <p class="text-gray-800 font-medium">✨ Nově máme pojízdný pás pro děti, takže první kroky na lyžích nebo snowboardu jsou pohodlné a bezpečné.</p>
          </div>
          
          <div class="mt-8">
            <h3 class="text-xl font-semibold text-primary mb-3">Uzavřená část areálu – Dětský výukový park</h3>
            <p class="text-gray-700 mb-4">
              Pro úplné začátečníky a nejmenší děti máme uzavřenou část areálu, kde si mohou zkoušet první sklouznutí, učit se stát na lyžích nebo snowboardu a bezpečně padat a vstávat.
            </p>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Rovinka a nejmírnější kopeček</li>
                <li>Hravé prvky pro malé děti</li>
            </ul>
          </div>

          <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
            <div class="flex text-yellow-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                 <span class="font-bold">Tip od instruktora:</span> Děti si na tomto prostoru osvojují základní rovnováhu a pohybové návyky, které jim pak výrazně usnadní jízdu na sjezdovce.
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- Adult Lessons -->
      <div class="bg-white rounded-md shadow-lg p-8 md:p-12">
        <h2 class="text-3xl font-semibold text-primary mb-6">Lekce pro dospělé</h2>
        <div class="space-y-6">
          <p class="text-gray-700 leading-relaxed text-lg">
            Učíme i dospělé, ať už jsou začátečníci nebo chtějí zlepšit svůj styl.
            Dokážeme vylepšit techniku každému – od základních oblouků až po závodní carving.
          </p>
          <p class="text-gray-700 leading-relaxed">
             Ihned poznáte rozdíl na svahu, ať už na lyžích nebo snowboardu.
          </p>

           <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mt-4">
            <div class="flex text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                 <span class="font-bold">Tip od instruktora:</span> I pár lekcí s instruktorem výrazně zrychlí vaše zlepšení – a hlavně vás učí jezdit bezpečně.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Group Lessons -->
      <div class="bg-primary text-white rounded-md p-8 md:p-12 shadow-lg">
         <h2 class="text-2xl font-semibold mb-4">Skupinové lekce</h2>
          <p class="text-primary-foreground/90 mb-4 text-lg">
            Pokud jsou účastníci na stejné úrovni, nabízíme skupinové lekce, kde se učí společně.
          </p>
          <ul class="list-disc pl-5 space-y-2 text-primary-foreground/90 mb-4">
              <li>Vhodné pro pokročilé děti a dospělé</li>
              <li>Musí umět bez cizí pomoci zastavit, kontrolovaně spadnout, vstát a jet na vleku</li>
          </ul>
      </div>

      <!-- Pricing & Reservation CTA -->
       <div class="text-center bg-gray-50 rounded-md p-8 md:p-12 border border-gray-200">
        <h3 class="text-2xl font-semibold mb-4 text-gray-900">Rezervace a Ceník</h3>
        <p class="text-lg mb-6 text-gray-600">Prohlédněte si ceník naší lyžařské školy a rezervujte si kurz.</p>
        
        <div class="grid md:grid-cols-2 gap-6 mb-8 text-left max-w-4xl mx-auto">
             <div class="bg-white p-6 rounded shadow-sm">
                <h4 class="font-bold text-gray-900 mb-2">Individuální výuka</h4>
                <div class="flex justify-between border-b py-2"><span>1 hodina</span> <span class="font-bold">990 Kč</span></div>
                <div class="flex justify-between py-2"><span>2 hodiny</span> <span class="font-bold">1 900 Kč</span></div>
             </div>
             <div class="bg-white p-6 rounded shadow-sm">
                <h4 class="font-bold text-gray-900 mb-2">Skupinová výuka (min. 2 os.)</h4>
                 <div class="flex justify-between border-b py-2"><span>1 hodina / os.</span> <span class="font-bold">750 Kč</span></div>
                <div class="flex justify-between py-2"><span>2 hodiny / os.</span> <span class="font-bold">1 400 Kč</span></div>
             </div>
        </div>

        <a
          href="https://newmanschool.einstruktor.cz/kurzy"
          target="_blank"
          rel="noopener noreferrer"
          class="inline-flex items-center gap-2 px-8 py-4 rounded-md font-bold text-white shadow-lg hover:opacity-90 transition-opacity bg-brand-secondary text-lg"
        >
          Rezervovat kurz
        </a>
      </div>

      <!-- Info for Parents -->
      <div class="bg-white rounded-md shadow-lg p-8 md:p-12">
        <h2 class="text-3xl font-semibold text-primary mb-6">Informace pro rodiče</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="bg-gray-100 p-2 rounded-full mr-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <span>Přijďte raději 10 minut před lekcí, aby děti měly čas se připravit a rodiče mohli zaplatit.</span>
                </div>
                 <div class="flex items-start">
                    <div class="bg-gray-100 p-2 rounded-full mr-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                    <span>Platba hotově nebo QR.</span>
                </div>
                 <div class="flex items-start">
                    <div class="bg-gray-100 p-2 rounded-full mr-4 text-primary">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    </div>
                    <span>Rezervace musí být provedena na našem rezervačním odkazu.</span>
                </div>
            </div>
             <div class="space-y-4">
                 <div class="flex items-start">
                    <div class="bg-gray-100 p-2 rounded-full mr-4 text-primary">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </div>
                    <span>Při půjčení vybavení doporučujeme přijít 15–20 minut před lekcí.</span>
                </div>
                 <div class="flex items-start">
                    <div class="bg-gray-100 p-2 rounded-full mr-4 text-primary">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <span>Helma je povinná – zapůjčit si ji můžete přímo v naší půjčovně.</span>
                </div>
            </div>
        </div>

         <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-8 space-y-4">
            <div class="flex text-yellow-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                 <span class="font-bold">Tip od instruktora:</span> Pokud chcete konkrétního instruktora, je dobré se objednat včas – pokud má volno, můžete si ho rovnou vybrat.
              </div>
            </div>
             <div class="flex text-yellow-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                 <span class="font-bold">Tip od instruktora:</span> Pohodlné a správně padnoucí vybavení výrazně zrychlí učení a zlepší zážitek z jízdy. Navštivte naši půjčovnu.
              </div>
            </div>
          </div>
      </div>
    </div>
  </AppLayout>
</template>
