<script setup>
import SideBarVue from "../Components/Admin/SideBar.vue";
</script>
<template>
  <div class="flex bg-[#ecf0f5]">
    <div class="w-[300px] fixed h-screen bg-black/70 overscroll-y-scroll">
      <SideBarVue />
    </div>
    <div class="ml-[300px] h-screen w-full">
      <div class="bg-black/80 py-4">
        <div class="flex items-center justify-between container mx-auto">
          <h1 class="font-bold text-xl text-white">Admin pannel</h1>
          <h1 class="font-bold text-xl text-white">Hilal Ahmad</h1>
        </div>
      </div>
      <slot />
    </div>
  </div>
</template>