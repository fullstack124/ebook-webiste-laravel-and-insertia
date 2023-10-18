<script setup>
import NavbarVue from './Components/Navbar.vue'; 
import FooterVue from './Components/Footer.vue';
</script>

<template>
    <div>
        <NavbarVue />

        <div class="bg-black py-20">
            <h1 class="text-4xl text-center text-white font-bold">Category </h1>
        </div>
        <div class="container mx-auto px-4 mt-10">
            <div class="grid gird-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                <div class="bg-white rounded-md shadow" v-for="(item, index) in 10" :key="index">
                    <div class="text-center px-1 py-2">
                        <h1 class="text-xl font-bold my-2">Category {{index+1}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <FooterVue />

    </div>
</template>