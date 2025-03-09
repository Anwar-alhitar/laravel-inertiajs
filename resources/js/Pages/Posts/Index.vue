<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/AppLayout.vue';

defineProps(['posts']);

// Form setup for delete action
const deleteForm = useForm();
const deletePost = (postId) => {
  // Delete request to the server
  deleteForm.delete(`/posts/${postId}`, {
    onSuccess: () => {
      // You can add any action you want after successful deletion, like refreshing the page or showing a success message
    }
  });
};

const confirmDelete = (postId) => {
  if (window.confirm('Are you sure you want to delete this post?')) {
    deletePost(postId);  // Call delete function if confirmed
  }
};
</script>

<template>
  <AppLayout>
    <h1 class="text-2xl font-bold">All Posts</h1>
    <Link href="/posts/create" class="text-blue-500">Create New Post</Link>

    <div class="mt-4">
      <ul>
        <li v-for="post in posts" :key="post.id" class="p-2 border-b flex items-center justify-between">
          <div>
            <Link :href="`/posts/${post.id}`" class="font-semibold">{{ post.title }}</Link>
          </div>

          <div class="space-x-2">
            <!-- Edit Button -->
            <Link :href="`/posts/${post.id}/edit`" class="text-yellow-500 hover:text-yellow-700 m-2">Edit</Link>

            <!-- Delete Button -->
            <button @click="confirmDelete(post.id)" class="text-red-500 hover:text-red-700">
            Delete
            </button>
          </div>
        </li>
      </ul>
    </div>
  </AppLayout>
</template>



