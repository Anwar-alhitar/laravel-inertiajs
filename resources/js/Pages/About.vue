<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
defineProps(['info']);
</script>

<template>
  <AppLayout>
    <h1 class="text-2xl font-bold text-green-600">About Page</h1>
    <p class="mt-4 text-gray-700">{{ info }}</p>
  </AppLayout>
</template>
