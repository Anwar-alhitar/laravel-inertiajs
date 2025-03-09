<template>
  <div class="min-h-screen bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-black p-4">
      <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">My Inertia App</h1>
        <div>
          <Link href="/" class="px-4">Home</Link>
          <Link href="/about" class="px-4">About</Link>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container mx-auto mt-6 p-4 bg-white shadow-lg rounded">
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
