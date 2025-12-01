<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('restaurant.page_header.title')"
      :subtitle="trans('restaurant.page_header.subtitle')"
    />

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <nav aria-label="Navigace sekcí" class="sticky top-2 z-20 mb-6">
        <div class="flex flex-wrap gap-2 rounded-full bg-card/80 p-2 shadow ring-1 ring-black/5 border">
          <a href="#rumaru" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Hospoda U Rumařů</a>
          <a href="#hajovna" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Restaurace Hájovna</a>
          <a href="#kulatak" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Skibar Kulaťák</a>
          <a href="#hours" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Otevírací doba</a>
          <a href="#facilities" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Zázemí</a>
        </div>
      </nav>

      <Card id="downloads" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
        <CardHeader>
          <CardTitle class="text-xl font-semibold text-foreground">Menu ke stažení</CardTitle>
        </CardHeader>
        <CardContent>
          <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-lg border p-4">
              <div class="text-sm font-semibold text-foreground">Hospoda U Rumařů</div>
              <div class="mt-3 flex flex-wrap gap-2">
                <a aria-label="Jídelní lístek U Rumařů" href="#" class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Jídelní lístek (PDF)</a>
                <a aria-label="Nápojový lístek U Rumařů" href="#" class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Nápojový lístek (PDF)</a>
              </div>
            </div>
            <div class="rounded-lg border p-4">
              <div class="text-sm font-semibold text-foreground">Restaurace Hájovna</div>
              <div class="mt-3 flex flex-wrap gap-2">
                <a aria-label="Nápojový lístek Hájovna" href="#" class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Nápojový lístek (PDF)</a>
              </div>
            </div>
            <div class="rounded-lg border p-4">
              <div class="text-sm font-semibold text-foreground">Skibar Kulaťák</div>
              <div class="mt-3 flex flex-wrap gap-2">
                <a aria-label="Nápojový lístek Kulaťák" href="#" class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Nápojový lístek (PDF)</a>
              </div>
            </div>
          </div>
        </CardContent>
      </Card>
      <div class="rounded-lg bg-card/80 shadow-xl ring-1 ring-black/5 p-6 md:p-8 border">
        <div class="flex items-center gap-4">
          <img src="/img/icons/restaurace.png" alt="Restaurace" class="h-10 w-10" />
          <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground">Restaurace a občerstvení ve Skiareálu Kunčice</h2>
        </div>
        <p class="mt-4 text-lg leading-relaxed text-foreground/80">Během dne stráveného na svahu budete potřebovat nabrat síly a dostatečně se osvěžit. Využijte některé z našich gastro zařízení, které máte ve skiareálu Kunčice přímo u sjezdovek.</p>
        <div class="mt-6 overflow-hidden rounded-lg ring-1 ring-border">
          <img src="/img/services/restaurace.jpg" alt="Restaurace ve skiareálu Kunčice" class="h-64 w-full object-cover" />
        </div>
      </div>

      <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <Card id="rumaru" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">Hospoda u Rumařů</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>Nabízí 100 míst k sezení v příjemném, dřevem obloženém interiéru s výhledem na sjezdovky a slunečnou terasu. Najdete ji přímo u nástupní stanice lanové dráhy.</p>
            <div class="mt-3">
              <p class="font-medium text-foreground">Na jídelním lístku najdete:</p>
              <ul class="mt-2 space-y-1">
                <li>Polévky, hotová jídla a minutky</li>
                <li>Speciality z klasické udírny a grilu</li>
                <li>Pochoutky pro děti: palačinky, borůvkové knedlíky, párek v rohlíku, hranolky, langoše, kukuřice a další</li>
                <li>Široký výběr teplých i chlazených alko i nealko nápojů</li>
              </ul>
            </div>
            <p class="mt-3">Jednou za čas si můžete na terase pochutnat i na grilovaném selátku.</p>
            <div class="mt-4 flex flex-wrap gap-3">
              <a aria-label="Jídelní lístek U Rumařů" href="#" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Jídelní lístek (PDF)</a>
              <a aria-label="Nápojový lístek U Rumařů" href="#" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Nápojový lístek (PDF)</a>
            </div>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/services/restaurace.jpg" alt="Hospoda u Rumařů" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/home/restaurace.jpg" alt="Interiér restaurace" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
          </CardContent>
        </Card>

        <Card id="hajovna" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">Restaurace u vleku Hájovna</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>Stravování a osvěžení na Hájovně zajišťuje restaurace s obsluhou s 50 místy k sezení.</p>
            <p class="mt-3">Za příznivého počasí potěší slunečná terasa se závětřím a výhledem na hřebeny hor, dětské hřiště a dětský vlek.</p>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/hero-winter.jpg" alt="Terasa u Hájovny" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/cta-skoly.jpg" alt="Výhled na dětský vlek" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
            <div class="mt-4 flex flex-wrap gap-3">
              <a aria-label="Nápojový lístek Hájovna" href="#" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Nápojový lístek (PDF)</a>
            </div>
          </CardContent>
        </Card>

        <Card id="kulatak" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">Skibar Kulaťák</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>Panoramatický skibar nacházející se asi 100 metrů pod výstupní stanicí lanovky. Nabízí teplé i studené, alko i nealko nápoje a lehkou svačinku.</p>
            <p class="mt-3">Za příznivého počasí se můžete těšit na neopakovatelné výhledy na okolní panoramata našich krásných hor.</p>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/hero-winter.jpg" alt="Skibar Kulaťák zima" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/hero-summer.jpg" alt="Skibar Kulaťák léto" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
            <div class="mt-4 flex flex-wrap gap-3">
              <a aria-label="Nápojový lístek Kulaťák" href="#" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary opacity-50 pointer-events-none">Nápojový lístek (PDF)</a>
            </div>
          </CardContent>
        </Card>

        <Card id="hours" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 md:col-span-2 lg:col-span-3 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">Otevírací doba</CardTitle>
          </CardHeader>
          <CardContent>
            <div class="grid gap-4 md:grid-cols-3">
              <div class="rounded-lg bg-card ring-1 ring-border p-4">
                <p class="font-semibold text-foreground">Hospoda U Rumařů</p>
                <p class="mt-1 text-foreground/80">Pondělí – pátek: 11:00 – 15:00</p>
              </div>
              <div class="rounded-lg bg-card ring-1 ring-border p-4">
                <p class="font-semibold text-foreground">Restaurace na Hájovně</p>
                <p class="mt-1 text-foreground/80">Zavřeno</p>
              </div>
              <div class="rounded-lg bg-card ring-1 ring-border p-4">
                <p class="font-semibold text-foreground">Skibar Kulaťák</p>
                <p class="mt-1 text-foreground/80">Zavřeno</p>
              </div>
            </div>
          </CardContent>
        </Card>

        <Card id="facilities" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 md:col-span-2 lg:col-span-3 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">Vyhřívané převlékárny a toalety</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>Lyžárna a vyhřívaná šatna jsou v našem skiareálu opravdu praktické. V teple se zde převlečete a do uzamykatelné skříňky si uložíte cennosti. Můžete se zde také ohřát u topení.</p>
            <p class="mt-3">Dobře fungující zázemí doplňují vyhřívané a udržované toalety s teplou vodou. Jsou přístupné u dolní stanice lanovky Triangl a vleku Hájovna a dojedete k nim i na lyžích, protože nemusíte nikam do schodů.</p>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/services/restaurace.jpg" alt="Zázemí u nástupních stanic" class="h-56 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/pizza.avif" alt="Občerstvení" class="h-56 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="tel:+420777719579" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">+420&nbsp;777&nbsp;719&nbsp;579</a>
              <a href="mailto:info@skikuncice.cz" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">info@skikuncice.cz</a>
            </div>
          </CardContent>
        </Card>
      </div>
      
      </div>
  </AppLayout>
</template>
