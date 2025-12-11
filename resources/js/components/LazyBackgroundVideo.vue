<script setup lang="ts">
import { ref, watch } from 'vue';
import { useIntersectionObserver } from '@vueuse/core';

export interface VideoSource {
    src: string;
    type: string;
}

const props = defineProps<{
    src?: string;
    sources?: VideoSource[];
    poster?: string;
}>();

const videoRef = ref<HTMLVideoElement | null>(null);
const shouldLoad = ref(false);
const isPlaying = ref(false);

const { stop } = useIntersectionObserver(
    videoRef,
    ([{ isIntersecting }]) => {
        // Lazy load logic: load when close to viewport
        if (isIntersecting && !shouldLoad.value) {
            shouldLoad.value = true;
        }

        // Play/Pause logic
        if (isIntersecting) {
            if (videoRef.value && shouldLoad.value) {
                videoRef.value.play().catch(() => {
                    // Autoplay prevention or error
                });
                isPlaying.value = true;
            }
        } else {
            if (videoRef.value && isPlaying.value) {
                videoRef.value.pause();
                isPlaying.value = false;
            }
        }
    },
    {
        rootMargin: '100px', // Start loading 100px before it comes into view
        threshold: 0.1 // Trigger when 10% is visible
    }
);

// Watch for shouldLoad to trigger play if already intersecting
watch(shouldLoad, (loaded) => {
    if (loaded && videoRef.value && !isPlaying.value) {
        setTimeout(() => {
             videoRef.value?.load(); // Reload to ensure sources are picked up
             videoRef.value?.play().catch(() => {});
        }, 50);
    }
});

</script>

<template>
    <video
        ref="videoRef"
        :src="shouldLoad && src ? src : undefined"
        :poster="poster"
        autoplay
        muted
        loop
        playsinline
        class="w-full h-full object-cover"
    >
        <template v-if="shouldLoad && sources">
            <source v-for="(source, index) in sources" :key="index" :src="source.src" :type="source.type">
        </template>
    </video>
</template>
