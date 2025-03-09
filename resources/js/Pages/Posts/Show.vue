<script setup>
defineProps(['post']);
import AppLayout from "../../Layouts/AppLayout.vue";

</script>

<template>
  <AppLayout>
    <h1 class="text-2xl font-bold">{{ post.title }}</h1>
    <p>{{ post.content }}</p>
  </AppLayout>
</template>
