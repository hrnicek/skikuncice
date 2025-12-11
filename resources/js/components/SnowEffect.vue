<template>
  <div class="snow-container" aria-hidden="true">
    <div class="snowflake" v-for="i in 50" :key="i" :style="getSnowflakeStyle(i)">❄</div>
  </div>
</template>

<script setup lang="ts">
const getSnowflakeStyle = (index: number) => {
  const left = Math.random() * 100;
  const animationDuration = 10 + Math.random() * 20;
  const animationDelay = Math.random() * 10;
  const fontSize = 5 + Math.random() * 15;
  const opacity = 0.1 + Math.random() * 0.4;
  
  return {
    left: `${left}%`,
    animationDuration: `${animationDuration}s`,
    animationDelay: `${animationDelay}s`,
    fontSize: `${fontSize}px`,
    opacity: opacity
  };
};
</script>

<style scoped>
.snow-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 9999;
  overflow: hidden;
}

.snowflake {
  position: absolute;
  top: -10%;
  color: white;
  user-select: none;
  animation: fall linear infinite;
}

@keyframes fall {
  0% {
    transform: translateY(0) rotate(0deg);
  }
  100% {
    transform: translateY(100vh) rotate(360deg);
  }
}

/* Add some sway to make it more realistic */
.snowflake:nth-child(3n) {
  animation-name: fall-sway-1;
}

.snowflake:nth-child(3n+1) {
  animation-name: fall-sway-2;
}

@keyframes fall-sway-1 {
  0% {
    transform: translateY(0) translateX(0) rotate(0deg);
  }
  50% {
    transform: translateY(50vh) translateX(30px) rotate(180deg);
  }
  100% {
    transform: translateY(100vh) translateX(0) rotate(360deg);
  }
}

@keyframes fall-sway-2 {
  0% {
    transform: translateY(0) translateX(0) rotate(0deg);
  }
  50% {
    transform: translateY(50vh) translateX(-30px) rotate(180deg);
  }
  100% {
    transform: translateY(100vh) translateX(0) rotate(360deg);
  }
}
</style>
