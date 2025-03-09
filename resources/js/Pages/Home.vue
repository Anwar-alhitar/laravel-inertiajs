<script setup>
import AppLayout from "../Layouts/AppLayout.vue";

defineProps(['message']);
</script>

<template>
  <div class="p-8">
    <h1 class="text-2xl font-bold text-blue-600">Home Page</h1>
    <p class="mt-4 text-gray-700">{{ message }}</p>
  </div>
</template>
