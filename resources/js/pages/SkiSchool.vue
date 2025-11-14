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

      <div class="bg-white rounded-md shadow-lg p-8 md:p-12">
        <h2 class="text-3xl font-semibold text-primary mb-6">O výuce</h2>
        <div class="space-y-4">
          <p class="text-gray-700 leading-relaxed">
            Výuka v lyžařském areálu Kunčice probíhá podle nejnovějších metod. Účastníci se bezpečně naučí základy lyžování a snowboardingu nebo zdokonalí své stávající schopnosti. Rozvinete u nás například své dosavadní dovednosti snowboardingu nebo carvingu.
          </p>
          <p class="text-gray-700 leading-relaxed">
            V případě zájmu volejte na telefon
            <a href="tel:+420724837139" class="underline text-primary">+420 724 837 139</a>
            nebo pište na
            <a href="mailto:kuncice@newmanschool.cz" class="underline text-primary">kuncice@newmanschool.cz</a>.
          </p>
          <p class="text-gray-700 leading-relaxed">
            Naším cílem je neustále se zdokonalovat v poskytování služeb a Vaše spokojenost je u nás na prvním místě. Pokud nás chcete pochválit, případně máte ke službám lyžařské školy výhrady či připomínky sdělte nám je prosím prostřednictvím kontaktního formuláře na konci stránky.
          </p>
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Skupinová výuka</h3>
          <p class="text-primary-foreground/90">
            Instruktoři se věnují celé skupině. Je zde ale možnost výuky celé rodiny či skupiny přátel.
          </p>
        </div>
        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Individuální výuka</h3>
          <p class="text-primary-foreground/90">
            Žákovi se bude věnovat instruktor, který může lépe reagovat na jeho schopnosti, dovednosti a pokroky.
          </p>
        </div>
      </div>

      <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-md p-8 md:p-12">
        <h3 class="text-2xl font-semibold text-primary mb-4">Lyžařská školka pro děti</h3>
        <p class="text-gray-700 leading-relaxed mb-3">
          Pro nejmenší začínající lyžaře máme připravený dětský areál se spoustou hraček a zvířátek. Výuka lyžařské školky probíhá na bezpečném místě a je ideální pro nacvičování lyžařských dovedností. Prvními lyžařskými krůčky vaše ratolesti zodpovědně provedou naši kvalifikovaní lektoři.
        </p>
        <p class="text-gray-700 leading-relaxed mb-3">Lyžařská školka je vhodná již od 3 let. Délku výuky si zvolíte sami.</p>
        <p class="text-gray-700">
          Telefon <a href="tel:+420724837139" class="underline text-primary">+420 724 837 139</a>, mail: <a href="mailto:kuncice@newmanschool.cz" class="underline text-primary">kuncice@newmanschool.cz</a>
        </p>
      </div>

      <div class="text-center bg-primary text-white rounded-md p-8 md:p-12">
        <h3 class="text-2xl font-semibold mb-4">Rezervace</h3>
        <p class="text-lg mb-6 text-primary-foreground/90">Prohlédněte si ceník naší lyžařské školy a rezervujte si kurz.</p>
        <a
          href="https://newmanschool.einstruktor.cz/kurzy"
          target="_blank"
          rel="noopener noreferrer"
          class="inline-flex items-center gap-2 px-6 py-3 rounded-md font-semibold text-white shadow hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-brand-secondary focus:ring-brand-secondary"
        >
          Rezervovat kurz
        </a>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-md shadow-lg p-6 space-y-4">
          <h4 class="text-xl font-semibold text-primary">Individuální výuka</h4>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <div class="text-sm text-gray-600">1 hodina</div>
              <div class="text-lg font-bold">990 Kč</div>
            </div>
            <div>
              <div class="text-sm text-gray-600">2 hodiny</div>
              <div class="text-lg font-bold">1 900 Kč</div>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-md shadow-lg p-6 space-y-4">
          <h4 class="text-xl font-semibold text-primary">Skupinová výuka (min. pro 2 osoby)</h4>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <div class="text-sm text-gray-600">1 hodina (cena za osobu)</div>
              <div class="text-lg font-bold">750 Kč</div>
            </div>
            <div>
              <div class="text-sm text-gray-600">2 hodiny (cena za osobu)</div>
              <div class="text-lg font-bold">1 400 Kč</div>
            </div>
          </div>
          <div class="text-sm font-medium text-brand-secondary">Skupinová výuka pouze pro pokročilé</div>
        </div>
      </div>

      <div class="bg-white rounded-md shadow-lg p-8">
        <ul class="list-disc pl-6 space-y-2 text-sm text-gray-700">
          <li>Uvedené ceny jsou včetně příslušného DPH.</li>
          <li>1 hodina výuky je 50 minut.</li>
          <li>2 hodiny jsou 110 minut výuky v celku.</li>
          <li>Lanový vlek pro klienty školy v rámci výuky ZDARMA.</li>
          <li>Ostatní vleky dle ceníku ski areálu, skipas není zahrnut v ceně výuky.</li>
          <li>Klienti lyžařské školy mají přednost na vleku.</li>
        </ul>
      </div>
    </div>
  </AppLayout>
</template>
