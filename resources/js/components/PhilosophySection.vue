<script setup lang="ts">
import { trans } from 'laravel-vue-i18n';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

const modules = [Autoplay, Pagination, Navigation];
</script>

<template>
  <section class="py-12 sm:py-16 lg:py-4 bg-gradient-to-b from-white to-gray-50">
    <div class="container">
      <div class="max-w-4xl mx-auto px-4">
        <Swiper
          :modules="modules"
          :slides-per-view="1"
          :space-between="0"
          :loop="true"
          :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
          }"
          :pagination="{
            clickable: true,
            dynamicBullets: true,
          }"
          :navigation="false"
          class="philosophy-swiper"
        >
          <SwiperSlide>
            <div class="text-center py-12 px-6">
              <p 
                class="text-base leading-relaxed text-gray-700 font-light max-w-3xl mx-auto" 
                v-html="trans('philosophy_section.p1')"
              />
            </div>
          </SwiperSlide>

          <SwiperSlide>
            <div class="text-center py-12 px-6">
              <p 
                class="text-base leading-relaxed text-gray-700 font-light max-w-3xl mx-auto" 
                v-html="trans('philosophy_section.p2')"
              />
            </div>
          </SwiperSlide>

          <SwiperSlide>
            <div class="text-center py-12 px-6">
              <p 
                class="text-base leading-relaxed text-gray-700 font-light max-w-3xl mx-auto" 
                v-html="trans('philosophy_section.p3')"
              />
            </div>
          </SwiperSlide>
        </Swiper>
      </div>
    </div>
  </section>
</template>

<style scoped>
.philosophy-swiper {
  padding-bottom: 60px;
}

/* Custom navigation arrows */
.philosophy-swiper :deep(.swiper-button-prev),
.philosophy-swiper :deep(.swiper-button-next) {
  color: var(--brand-secondary);
  width: 44px;
  height: 44px;
  background: white;
  border-radius: 50%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.philosophy-swiper :deep(.swiper-button-prev):hover,
.philosophy-swiper :deep(.swiper-button-next):hover {
  background: var(--brand-secondary);
  color: white;
  box-shadow: 0 4px 12px rgba(218, 56, 58, 0.3);
}

.philosophy-swiper :deep(.swiper-button-prev::after),
.philosophy-swiper :deep(.swiper-button-next::after) {
  font-size: 20px;
  font-weight: bold;
}

/* Custom pagination bullets */
.philosophy-swiper :deep(.swiper-pagination-bullet) {
  width: 12px;
  height: 12px;
  background: var(--primary);
  opacity: 0.3;
  transition: all 0.3s ease;
}

.philosophy-swiper :deep(.swiper-pagination-bullet-active) {
  background: var(--brand-secondary);
  opacity: 1;
  width: 32px;
  border-radius: 6px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .philosophy-swiper :deep(.swiper-button-prev),
  .philosophy-swiper :deep(.swiper-button-next) {
    width: 36px;
    height: 36px;
  }
  
  .philosophy-swiper :deep(.swiper-button-prev::after),
  .philosophy-swiper :deep(.swiper-button-next::after) {
    font-size: 16px;
  }
}
</style>
