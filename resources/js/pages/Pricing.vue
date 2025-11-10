<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Ceník"
      subtitle="Informace o našich cenách a službách"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

      <!-- Ceník skipasů sezona 2024/2025 -->
      <Card>
        <CardHeader>
          <CardTitle class="text-2xl text-primary">Ceník skipasů - sezona 2025/2026</CardTitle>
          <p class="text-muted-foreground">Ceník skipasů platný od 1. 12. 2025</p>
        </CardHeader>
        <CardContent>
          <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
              <thead>
                <tr class="bg-gray-50">
                  <th class="border border-gray-300 px-4 py-2 text-left font-semibold"></th>
                  <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Děti 7 až 12 let</th>
                  <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Dospělí</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 font-medium">4 hod.</td>
                  <td class="border border-gray-300 px-4 py-2">450 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">600 Kč</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 px-4 py-2 font-medium">Denní (8:30 - 16:00)</td>
                  <td class="border border-gray-300 px-4 py-2">500 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">700 Kč</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 font-medium">50 bodů</td>
                  <td class="border border-gray-300 px-4 py-2">400 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">500 Kč</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 px-4 py-2 font-medium">od 14 -16 hod.</td>
                  <td class="border border-gray-300 px-4 py-2">300 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">400 Kč</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 font-medium">Večerní (17:30 - 20:00)</td>
                  <td class="border border-gray-300 px-4 py-2">300 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">450 Kč</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 px-4 py-2 font-medium">2 dny</td>
                  <td class="border border-gray-300 px-4 py-2">900 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">1300 Kč</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 font-medium">3 dny</td>
                  <td class="border border-gray-300 px-4 py-2">1250 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">1950 Kč</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 px-4 py-2 font-medium">5 dnů ze 7</td>
                  <td class="border border-gray-300 px-4 py-2">1900 Kč</td>
                  <td class="border border-gray-300 px-4 py-2">2800 Kč</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="mt-4 space-y-2 text-sm text-muted-foreground">
            <p><strong>Děti do 6ti let včetně lyžují zdarma</strong>, senioři od 65 let včetně lyžují za jízdné pro děti od 7 do 12 let</p>
          </div>
        </CardContent>
      </Card>

      <!-- Dětský lyžařský park -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-primary">Dětský lyžařský park</CardTitle>
        </CardHeader>
        <CardContent>
          <div class="space-y-2">
            <p><strong>Vstup do dětského lyžařského parku - dětský vlek:</strong></p>
            <ul class="list-disc list-inside space-y-1 ml-4">
              <li>Celý den: 150 Kč</li>
              <li>12.00 - 16.00: 100 Kč</li>
            </ul>
            <p class="text-sm text-muted-foreground mt-2">Platba v lyžařské škole</p>
          </div>
        </CardContent>
      </Card>

      <!-- Rodinné skipasy -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-primary">Rodinné skipasy</CardTitle>
          <p class="text-muted-foreground">Dospělí + děti od 7 do 12 let</p>
        </CardHeader>
        <CardContent>
          <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
              <thead>
                <tr class="bg-gray-50">
                  <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Typ</th>
                  <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Cena</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 font-medium">Denní - 1 Dospělý + 2 Děti</td>
                  <td class="border border-gray-300 px-4 py-2">1500 Kč</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 px-4 py-2 font-medium">Denní - 2 Dospělí + 1 Dítě</td>
                  <td class="border border-gray-300 px-4 py-2">1700 Kč</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 font-medium">Denní - 2 Dospělí + 2 Děti</td>
                  <td class="border border-gray-300 px-4 py-2">2100 Kč</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 px-4 py-2 font-medium">Denní - 2 Dospělí + 3 Děti</td>
                  <td class="border border-gray-300 px-4 py-2">2400 Kč</td>
                </tr>
              </tbody>
            </table>
          </div>
        </CardContent>
      </Card>

      <!-- Lyžařské kurzy sezona 2025/2026 -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-primary">Lyžařské kurzy - sezona 2025/2026</CardTitle>
          <p class="text-muted-foreground">Jmenný seznam s razítkem školy podmínkou. Na každých 10 žáků 1 skipas pro instruktora zdarma. Uzamykatelné lyžárny zdarma.</p>
        </CardHeader>
        <CardContent>
          <div class="grid md:grid-cols-2 gap-6">
            <!-- Bez skibusu -->
            <div>
              <h3 class="text-lg font-semibold mb-4 text-primary">Cena bez skibusu</h3>
              <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                  <thead>
                    <tr class="bg-gray-50">
                      <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Typ kurzu</th>
                      <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Cena</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 1 den</td>
                      <td class="border border-gray-300 px-4 py-2">450 Kč</td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 2 dny</td>
                      <td class="border border-gray-300 px-4 py-2">850 Kč</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 3 dny</td>
                      <td class="border border-gray-300 px-4 py-2">1180 Kč</td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 4 dny</td>
                      <td class="border border-gray-300 px-4 py-2">1480 Kč</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 5 dnů</td>
                      <td class="border border-gray-300 px-4 py-2">1810 Kč</td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 6 dnů</td>
                      <td class="border border-gray-300 px-4 py-2">1920 Kč</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- S skibusem -->
            <div>
              <h3 class="text-lg font-semibold mb-4 text-primary">Cena včetně skibusu</h3>
              <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                  <thead>
                    <tr class="bg-gray-50">
                      <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Typ kurzu</th>
                      <th class="border border-gray-300 px-4 py-2 text-left font-semibold">Cena</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 1 den</td>
                      <td class="border border-gray-300 px-4 py-2">530 Kč</td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 2 dny</td>
                      <td class="border border-gray-300 px-4 py-2">1010 Kč</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 3 dny</td>
                      <td class="border border-gray-300 px-4 py-2">1420 Kč</td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 4 dny</td>
                      <td class="border border-gray-300 px-4 py-2">1800 Kč</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 5 dnů</td>
                      <td class="border border-gray-300 px-4 py-2">2210 Kč</td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="border border-gray-300 px-4 py-2 font-medium">Lyžařský kurz (ZŠ,SŠ) - 6 dnů</td>
                      <td class="border border-gray-300 px-4 py-2">2400 Kč</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </CardContent>
      </Card>

      <!-- Důležité informace -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-primary">Důležité informace</CardTitle>
        </CardHeader>
        <CardContent class="space-y-4">
          <div class="space-y-2">
            <p><strong>Skipasy zakoupíte na čipové kartě.</strong> Vratná záloha na kartu je 100 Kč</p>
            <p><strong>Bodový systém:</strong></p>
            <ul class="list-disc list-inside space-y-1 ml-4">
              <li>LD Triangl 1 jízda = 7 bodů</li>
              <li>vlek H130 = 6 bodů</li>
              <li>vlek Hájovna = 5 bodů</li>
            </ul>
            <p>Zbylé body je možné použít na poslední jízdu na lanovce i vlecích.</p>
          </div>

          <div class="space-y-2">
            <p><strong>Dětské jízdné platí pro děti od 7 do 12ti let a seniory od 65 let</strong></p>
            <p><strong>Děti do 6ti let včetně lyžují zdarma</strong>, senioři od 65 let včetně lyžují za dětské jízdné</p>
          </div>

          <div class="space-y-2">
            <p><strong>Platba možná v hotovosti, nebo platební kartou</strong></p>
          </div>
        </CardContent>
      </Card>

    </div>
  </AppLayout>
</template>