<script setup lang="ts">
import { computed } from 'vue';
import { trans, wTrans } from 'laravel-vue-i18n';

interface Photo {
    id: number;
    url: string;
    alt?: string;
}

const props = defineProps<{
    photos?: Photo[];
}>();

// Generate 12 placeholder photos
const displayPhotos = computed(() => {
    if (props.photos && props.photos.length > 0) {
        return props.photos.slice(0, 8); // Limit to 12 photos
    }

    // Generate 12 placeholder photos
    return Array.from({ length: 8 }, (_, i) => ({
        id: i + 1,
        url: `https://picsum.photos/300/300?random=${i + 1}`,
        alt: `${wTrans('insta_grid.photo')} ${i + 1}`
    }));
});
</script>

<template>
    <div class="container py-12">
        <div class="mb-6 text-center">
            <p class="text-center text-lg mb-1 uppercase font-semibold">{{ trans('insta_grid.follow_us') }}</p>
            <a href="https://www.instagram.com/skiareal_kuncice/" target="_blank" class="text-center hover:underline">@skiareal_kuncice</a>
        </div>
        <div class="grid grid-cols-8 gap-1 md:gap-2">
            <div
                v-for="photo in displayPhotos"
                :key="photo.id"
                class="aspect-square overflow-hidden bg-gray-200 rounded-sm"
            >
                <img
                    :src="photo.url"
                    :alt="photo.alt || trans('insta_grid.photo')"
                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-200 cursor-pointer"
                    loading="lazy"
                />
            </div>
        </div>
    </div>
</template>
