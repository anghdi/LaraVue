<template>
  <div>
    <Navbar />

    <main class="py-4">
      <slot />
    </main>
  </div>
</template>


<script setup>
import Navbar from "../Components/Navbar.vue";
</script>