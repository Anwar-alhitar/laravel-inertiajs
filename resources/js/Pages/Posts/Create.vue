<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from "../../Layouts/AppLayout.vue";

const form = useForm({
  title: '',
  content: '',
});

const submit = () => {
  form.post('/posts', {
    onSuccess: () => form.reset(),
  });
};
</script>

<template>
  <AppLayout>
    <h1 class="text-2xl font-bold">Create New Post</h1>

    <form @submit.prevent="submit">
      <div class="mt-4">
        <label for="title" class="block">Title</label>
        <input v-model="form.title" type="text" id="title" class="border p-2 w-full" />
      </div>

      <div class="mt-4">
        <label for="content" class="block">Content</label>
        <textarea v-model="form.content" id="content" class="border p-2 w-full"></textarea>
      </div>

      <button type="submit" class="mt-4 bg-blue-500 text-black p-2">Save</button>
    </form>
  </AppLayout>
</template>
