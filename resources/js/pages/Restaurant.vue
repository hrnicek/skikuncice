<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Restaurace"
      subtitle="Stravování v areálu"
    />

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <!-- Jídelní lístek -->
      <Card class="mb-8">
        <CardHeader>
          <CardTitle class="text-2xl text-primary">Jídelní lístek</CardTitle>
        </CardHeader>
        <CardContent>
          <div class="grid gap-6">
            <!-- Položky jídla -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Svíčková s knedlíkem</h3>
                  <p class="text-sm text-muted-foreground mb-3">Klasická česká svíčková s knedlíkem, smetanovou omáčkou a brusinkami</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alergeny: 1,7</span>
                  <span class="font-bold text-lg">145 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Klobása s hořčicí</h3>
                  <p class="text-sm text-muted-foreground mb-3">Grilovaná klobása s hořčicí, křenem a chlebem</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alergeny: 1,7,9</span>
                  <span class="font-bold text-lg">95 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Goulash s knedlíkem</h3>
                  <p class="text-sm text-muted-foreground mb-3">Hovězí guláš s knedlíkem a cibulí</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alergeny: 1,7</span>
                  <span class="font-bold text-lg">125 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Hamburger</h3>
                  <p class="text-sm text-muted-foreground mb-3">Hovězí burger s hranolkami, salátem a rajčetem</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alergeny: 1,3,7</span>
                  <span class="font-bold text-lg">135 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Pizza Margherita</h3>
                  <p class="text-sm text-muted-foreground mb-3">Pizza s rajčaty, mozzarellou a bazalkou</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alergeny: 1,7</span>
                  <span class="font-bold text-lg">115 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Kuřecí řízek s bramborem</h3>
                  <p class="text-sm text-muted-foreground mb-3">Kuřecí řízek s bramborem a zeleninovým salátem</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alergeny: 1,3,7</span>
                  <span class="font-bold text-lg">120 Kč</span>
                </div>
              </div>
            </div>
          </div>
        </CardContent>
      </Card>

      <!-- Nápojový lístek -->
      <Card>
        <CardHeader>
          <CardTitle class="text-2xl text-primary">Nápojový lístek</CardTitle>
        </CardHeader>
        <CardContent>
          <div class="grid gap-6">
            <!-- Položky nápojů -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Pivo Pilsner Urquell</h3>
                  <p class="text-sm text-muted-foreground mb-3">Světlé pivo 0,5l</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alkohol: 4,2%</span>
                  <span class="font-bold text-lg">35 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Víno Ryzlink rýnský</h3>
                  <p class="text-sm text-muted-foreground mb-3">Bílé víno 0,2l</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Alkohol: 12%</span>
                  <span class="font-bold text-lg">45 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Káva espresso</h3>
                  <p class="text-sm text-muted-foreground mb-3">Espresso káva</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Bez kofeinu</span>
                  <span class="font-bold text-lg">25 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Cola</h3>
                  <p class="text-sm text-muted-foreground mb-3">Coca-Cola 0,33l</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Nealkoholický</span>
                  <span class="font-bold text-lg">30 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Džus pomerančový</h3>
                  <p class="text-sm text-muted-foreground mb-3">Přirozený pomerančový džus 0,2l</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Nealkoholický</span>
                  <span class="font-bold text-lg">35 Kč</span>
                </div>
              </div>

              <div class="flex flex-col justify-between p-4 border rounded-lg">
                <div>
                  <h3 class="font-semibold text-lg mb-2">Minerální voda</h3>
                  <p class="text-sm text-muted-foreground mb-3">Perlivá minerální voda 0,33l</p>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-muted-foreground">Nealkoholický</span>
                  <span class="font-bold text-lg">20 Kč</span>
                </div>
              </div>
            </div>
          </div>
        </CardContent>
      </Card>
    </div>
  </AppLayout>
</template>