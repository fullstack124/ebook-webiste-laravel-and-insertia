<script setup>
import NavbarVue from "./Components/Navbar.vue";
import FooterVue from "./Components/Footer.vue";
</script>

<template>
  <div>
    <NavbarVue />

    <div class="bg-black py-20">
      <h1 class="text-4xl text-center text-white font-bold">Contact</h1>
    </div>
    <div class="container mx-auto px-4 mt-10 w-1/2">
     <form action="">
        <div class="my-4">
            <input type="text" name="" placeholder="Enter the Name" id="" class="w-full py-2 px-4 outline-none border text-md ">
            <input type="text" name="" placeholder="Enter the Email" id="" class="w-full py-2 px-4 outline-none border text-md mt-3">
            <input type="text" name="" placeholder="Enter the Subject" id="" class="w-full py-2 px-4 outline-none border text-md mt-3">
            <input type="text" name="" placeholder="Enter the message" id="" class="w-full py-2 px-4 outline-none border text-md mt-3">
            <button  class="bg-blue-600 py-2 px-4 w-full text-xl font-semibold text-white my-3 rounded-md">Send Message</button>

        </div>
     </form>
    </div>
    <FooterVue />
  </div>
</template>
