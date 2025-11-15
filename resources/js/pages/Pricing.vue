<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('pricing.page_header.title')"
      :subtitle="trans('pricing.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

      <!-- Ceník skipasů sezona 2024/2025 -->
      <Card>
        <CardHeader>
          <CardTitle class="text-2xl text-foreground">{{ trans('pricing.skipass.title') }}</CardTitle>
          <p class="text-foreground/80">{{ trans('pricing.skipass.subtitle') }}</p>
        </CardHeader>
        <CardContent>
          <div class="overflow-x-auto">
            <table class="w-full border-collapse border">
              <thead>
                <tr class="bg-card">
                  <th class="border px-4 py-2 text-left font-semibold"></th>
                  <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.skipass.table.h1') }}</th>
                  <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.skipass.table.h2') }}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r1.c1') }}</td>
                  <td class="border px-4 py-2">450 Kč</td>
                  <td class="border px-4 py-2">600 Kč</td>
                </tr>
                <tr class="bg-card">
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r2.c1') }}</td>
                  <td class="border px-4 py-2">500 Kč</td>
                  <td class="border px-4 py-2">700 Kč</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r3.c1') }}</td>
                  <td class="border px-4 py-2">400 Kč</td>
                  <td class="border px-4 py-2">500 Kč</td>
                </tr>
                <tr class="bg-card">
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r4.c1') }}</td>
                  <td class="border px-4 py-2">300 Kč</td>
                  <td class="border px-4 py-2">400 Kč</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r5.c1') }}</td>
                  <td class="border px-4 py-2">300 Kč</td>
                  <td class="border px-4 py-2">450 Kč</td>
                </tr>
                <tr class="bg-card">
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r6.c1') }}</td>
                  <td class="border px-4 py-2">900 Kč</td>
                  <td class="border px-4 py-2">1300 Kč</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r7.c1') }}</td>
                  <td class="border px-4 py-2">1250 Kč</td>
                  <td class="border px-4 py-2">1950 Kč</td>
                </tr>
                <tr class="bg-card">
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.skipass.table.r8.c1') }}</td>
                  <td class="border px-4 py-2">1900 Kč</td>
                  <td class="border px-4 py-2">2800 Kč</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="mt-4 space-y-2 text-sm text-foreground/80">
            <p><strong v-html="trans('pricing.skipass.note')"></strong></p>
          </div>
        </CardContent>
      </Card>

      <!-- Dětský lyžařský park -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-foreground">{{ trans('pricing.kids_park.title') }}</CardTitle>
        </CardHeader>
        <CardContent>
          <div class="space-y-2 text-foreground/80">
            <p><strong>{{ trans('pricing.kids_park.subtitle') }}</strong></p>
            <ul class="list-disc list-inside space-y-1 ml-4">
              <li>{{ trans('pricing.kids_park.o1') }}: 150 Kč</li>
              <li>{{ trans('pricing.kids_park.o2') }}: 100 Kč</li>
            </ul>
            <p class="text-sm text-foreground/80 mt-2">{{ trans('pricing.kids_park.note') }}</p>
          </div>
        </CardContent>
      </Card>

      <!-- Rodinné skipasy -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-foreground">{{ trans('pricing.family_skipass.title') }}</CardTitle>
          <p class="text-foreground/80">{{ trans('pricing.family_skipass.subtitle') }}</p>
        </CardHeader>
        <CardContent>
          <div class="overflow-x-auto">
            <table class="w-full border-collapse border">
              <thead>
                <tr class="bg-card">
                  <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.family_skipass.table.h1') }}</th>
                  <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.family_skipass.table.h2') }}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.family_skipass.table.r1.c1') }}</td>
                  <td class="border px-4 py-2">1500 Kč</td>
                </tr>
                <tr class="bg-card">
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.family_skipass.table.r2.c1') }}</td>
                  <td class="border px-4 py-2">1700 Kč</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.family_skipass.table.r3.c1') }}</td>
                  <td class="border px-4 py-2">2100 Kč</td>
                </tr>
                <tr class="bg-card">
                  <td class="border px-4 py-2 font-medium">{{ trans('pricing.family_skipass.table.r4.c1') }}</td>
                  <td class="border px-4 py-2">2400 Kč</td>
                </tr>
              </tbody>
            </table>
          </div>
        </CardContent>
      </Card>

      <!-- Lyžařské kurzy sezona 2025/2026 -->
      <Card>
        <CardHeader>
          <CardTitle class="text-xl text-foreground">{{ trans('pricing.ski_courses.title') }}</CardTitle>
          <p class="text-foreground/80">{{ trans('pricing.ski_courses.subtitle') }}</p>
        </CardHeader>
        <CardContent>
          <div class="grid md:grid-cols-2 gap-6">
            <!-- Bez skibusu -->
            <div>
              <h3 class="text-lg font-semibold mb-4 text-foreground">{{ trans('pricing.ski_courses.without_bus.title') }}</h3>
              <div class="overflow-x-auto">
                <table class="w-full border-collapse border">
                  <thead>
                    <tr class="bg-card">
                      <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.ski_courses.table.h1') }}</th>
                      <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.ski_courses.table.h2') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r1.c1') }}</td>
                      <td class="border px-4 py-2">450 Kč</td>
                    </tr>
                    <tr class="bg-card">
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r2.c1') }}</td>
                      <td class="border px-4 py-2">850 Kč</td>
                    </tr>
                    <tr>
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r3.c1') }}</td>
                      <td class="border px-4 py-2">1180 Kč</td>
                    </tr>
                    <tr class="bg-card">
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r4.c1') }}</td>
                      <td class="border px-4 py-2">1480 Kč</td>
                    </tr>
                    <tr>
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r5.c1') }}</td>
                      <td class="border px-4 py-2">1810 Kč</td>
                    </tr>
                    <tr class="bg-card">
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r6.c1') }}</td>
                      <td class="border px-4 py-2">1920 Kč</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- S skibusem -->
            <div>
              <h3 class="text-lg font-semibold mb-4 text-foreground">{{ trans('pricing.ski_courses.with_bus.title') }}</h3>
              <div class="overflow-x-auto">
                <table class="w-full border-collapse border">
                  <thead>
                    <tr class="bg-card">
                      <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.ski_courses.table.h1') }}</th>
                      <th class="border px-4 py-2 text-left font-semibold">{{ trans('pricing.ski_courses.table.h2') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r1.c1') }}</td>
                      <td class="border px-4 py-2">530 Kč</td>
                    </tr>
                    <tr class="bg-card">
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r2.c1') }}</td>
                      <td class="border px-4 py-2">1010 Kč</td>
                    </tr>
                    <tr>
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r3.c1') }}</td>
                      <td class="border px-4 py-2">1420 Kč</td>
                    </tr>
                    <tr class="bg-card">
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r4.c1') }}</td>
                      <td class="border px-4 py-2">1800 Kč</td>
                    </tr>
                    <tr>
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r5.c1') }}</td>
                      <td class="border px-4 py-2">2210 Kč</td>
                    </tr>
                    <tr class="bg-card">
                      <td class="border px-4 py-2 font-medium">{{ trans('pricing.ski_courses.table.r6.c1') }}</td>
                      <td class="border px-4 py-2">2400 Kč</td>
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
          <CardTitle class="text-xl text-foreground">{{ trans('pricing.important_info.title') }}</CardTitle>
        </CardHeader>
        <CardContent class="space-y-4 text-foreground/80">
          <div class="space-y-2">
            <p><strong v-html="trans('pricing.important_info.i1.p1')"></strong></p>
            <p><strong v-html="trans('pricing.important_info.i1.p2')"></strong></p>
            <ul class="list-disc list-inside space-y-1 ml-4">
              <li>{{ trans('pricing.important_info.i1.o1') }}</li>
              <li>{{ trans('pricing.important_info.i1.o2') }}</li>
              <li>{{ trans('pricing.important_info.i1.o3') }}</li>
            </ul>
            <p>{{ trans('pricing.important_info.i1.p3') }}</p>
          </div>

          <div class="space-y-2">
            <p><strong v-html="trans('pricing.important_info.i2.p1')"></strong></p>
            <p><strong v-html="trans('pricing.important_info.i2.p2')"></strong></p>
          </div>

          <div class="space-y-2">
            <p><strong v-html="trans('pricing.important_info.i3.p1')"></strong></p>
          </div>
        </CardContent>
      </Card>

    </div>
  </AppLayout>
</template>
