<script setup>
defineProps(['post']);
</script>

<template>
  <div>
    <h1 class="text-2xl font-bold">{{ post.title }}</h1>
    <p>{{ post.content }}</p>
  </div>
</template>
