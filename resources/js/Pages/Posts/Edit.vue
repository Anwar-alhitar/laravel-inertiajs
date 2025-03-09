<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from "../../Layouts/AppLayout.vue";

// Retrieve the `post` data passed from the controller
const props = defineProps({
  post: Object
});

// Create a form object and initialize it with the post data
const form = useForm({
  id: props.post.id,
  title: props.post.title,
  content: props.post.content
});



const submit = () => {
  form.put(`/posts/${form.id}`, {
    onSuccess: () => form.reset(),
  });
};
</script>

<template>
  <AppLayout>
    <h1 class="text-2xl font-bold">Edit Post</h1>
    <!-- Success Message -->

    <form @submit.prevent="submit">
      <div class="mt-4">
        <label for="title" class="block">Title</label>
        <input v-model="form.title" type="text" id="title" class="border p-2 w-full"  />
      </div>

      <div class="mt-4">
        <label for="content" class="block">Content</label>
        <textarea v-model="form.content" id="content" class="border p-2 w-full"></textarea>
      </div>

      <button type="submit" class="mt-4 bg-blue-500 text-black p-2">Update</button>
    </form>
  </AppLayout>
</template>
