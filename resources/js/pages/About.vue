<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="O areálu"
      subtitle="Skiareál Kunčice patří mezi areály s nejdelší historií v Králickém Sněžníku. Ročně přivítá tisíce lyžařů, běžkařů, freestylistů a snowboardistů. Lyžování bez front si oblíbíte i vy. Přijeďte se podívat."
    />
    <div class="container my-16 space-y-12">
      <!-- Hero Section -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">O Skiareálu Kunčice</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
          <strong>Skiareál Kunčice</strong> najdete na úpatí masivu <strong>Králického Sněžníku</strong>, 3 km za obcí <strong>Staré Město pod Sněžníkem</strong>, v nadmořské výšce <strong>600 až 800 metrů</strong>.<br>
          <em>Provozní doba lanovky a vleků: 8:30 - 16:00.</em>
        </p>
      </div>

      <!-- Main Content Card -->
      <div class="bg-white rounded-md shadow-lg p-8 md:p-12">
        <h2 class="text-3xl font-semibold text-primary mb-6">Moderní skiareál na úpatí Králického Sněžníku</h2>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="space-y-4">
            <p class="text-gray-700 leading-relaxed">
              Čeká vás až 4,5 km perfektně upravených sjezdovek. Jednotlivé tratě jsou dlouhé od 600 do 1 000 metrů. Dominují široké, nepřeplněné, modře a červeně značené tratě, které vyhoví začátečníkům i pokročilým lyžařům.
            </p>
            <p class="text-gray-700 leading-relaxed">
              Čtyřsedačková lanovka, dva vleky a bezkontaktní odbavovací systém vám zajistí rychlé a pohodlné lyžování bez dlouhého čekání. Pro děti tu máme dětský vlek, dětský koutek a hřiště s lanovou pyramidou, houpačkami, skluzavkami a trampolínou.
            </p>
          </div>
          <div class="space-y-4">
            <p class="text-gray-700 leading-relaxed">
              Zaparkujete u nás bezplatně na zpevněném parkovišti přímo u nástupních stanic lanovky a vleků.
            </p>
            <p class="text-gray-700 leading-relaxed">
              Zkrátka nepřijdou ani běžkaři, protože na vrcholu lanovky Triangl vede lyžařská stopa, po které se dostanete na Králický Sněžník, Paprsek nebo třeba do Starého Města.
            </p>
            <p class="text-gray-700 leading-relaxed font-medium">
              Spokojeni by u nás měli být hlavně zákazníci upřednostňující klid, pohodu a prostor před ruchem a shonem velkokapacitních středisek a také rodiny s dětmi.
            </p>
          </div>
        </div>
      </div>

      <!-- Services Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Lyžování bez front</h3>
          <p class="text-primary-foreground/90">Odbavíme až 4 200 lyžařů za hodinu. U nás nečekáte, prostě lyžujete. Svůj skipas tak využijete naplno!</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Lyžařská škola i pro ty nejmenší</h3>
          <p class="text-primary-foreground/90">Snowboardisté a nejmenší lyžaři se mohou učit v naší lyžařské škole na speciálním dětském vleku.</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Půjčovna lyží</h3>
          <p class="text-primary-foreground/90">Nemáte vlastní lyže? Nevadí, rádi vám půjčíme lyže, běžky nebo snowboard, které budou seřízené přesně pro vás.</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Výkonné zasněžování</h3>
          <p class="text-primary-foreground/90">Zahajujeme provoz jako jedni z prvních. Díky výkonnému zasněžovacímu systému u nás lyžařská sezóna trvá přes 3 měsíce.</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Centrum služeb</h3>
          <p class="text-primary-foreground/90">Moderní centrum služeb pro lyžaře i karavanisty - občerstvení, úschovna lyží, toalety, sprchy, teplé posezení, dětský koutek, slunná terasa, převlékárny a zázemí pro karavanisty.</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Ubytování v Kunčicích</h3>
          <p class="text-primary-foreground/90">Zařídíme vám ubytování pár kroků od sjezdovky. Spolupracujeme s penziony a hotely v Kunčicích.</p>
        </div>
      </div>

      <!-- Restaurant Section -->
      <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-md p-8 md:p-12">
        <h3 class="text-2xl font-semibold text-primary mb-4">Restaurace a občerstvení</h3>
        <p class="text-gray-700 leading-relaxed mb-4">
          Hospoda U Rumařů, bufet na Hájovně nebo Skibar Kulaťák vám nabídnou slunečnou terasu, dostatek míst k sezení a hlavně něco vynikajícího na posilněnou!
        </p>
        <p class="text-gray-700 leading-relaxed">
          Náš skiareál má 2 výchozí body Triangl a Hájovna. U každého z nich můžete zdarma využít zpevněná, udržovaná parkoviště. V areálu Hájovna jsme pro vás nově otevřeli centrum služeb. V lyžařské sezóně si tu můžete půjčit lyže, občerstvit se v přilehlém bufetu s širokou nabídkou jídel a nápojů, odpočinout si v teple, nebo na slunečné terase, naplánovat si výuku lyžování nebo snowboardingu.
        </p>
      </div>

      <!-- Call to Action -->
      <div class="text-center bg-primary text-white rounded-md p-8 md:p-12">
        <h3 class="text-2xl font-semibold mb-4">CHCI SE UBYTOVAT V KUNČICÍCH</h3>
        <p class="text-lg mb-6 text-primary-foreground/90">
          Naším cílem je neustále se zdokonalovat v poskytování služeb a Vaše spokojenost je u nás na prvním místě. Pokud nás chcete pochválit, případně máte ke službám skiareálu výhrady či připomínky sdělte nám je prosím prostřednictvím kontaktního formuláře na konci stránky.
        </p>
        <p class="text-xl font-medium">Děkujeme</p>
        <p class="mt-4 text-primary-foreground/80">Prohlédněte si skiareál Kunčice a vyrazte k nám co nejdříve!</p>
      </div>
    </div>
  </AppLayout>
</template>