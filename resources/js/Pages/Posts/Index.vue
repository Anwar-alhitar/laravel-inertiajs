<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(['posts']);
</script>

<template>
  <div>
    <h1 class="text-2xl font-bold">All Posts</h1>
    <Link href="/posts/create" class="text-blue-500">Create New Post</Link>

    <div class="mt-4">
      <ul>
        <li v-for="post in posts" :key="post.id" class="p-2 border-b">
          <Link :href="`/posts/${post.id}`" class="font-semibold">{{ post.title }}</Link>
        </li>
      </ul>
    </div>
  </div>
</template>
