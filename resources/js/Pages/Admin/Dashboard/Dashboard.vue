
<script setup>
import DashboardCard from "../../Components/Admin/DashboardCard.vue";
import MainHeading from "../../Components/Admin/MainHeading.vue";
import AdminLayoutVue from "../../Layouts/AdminLayout.vue";
import {ref} from 'vue'
const cards=ref([
  {
    'title':'Total Pages',
    'sub_title':4
  }
])
</script>
<template>
  <AdminLayoutVue>
    <!-- component -->
    <div class="p-4 w-full">
      <MainHeading title="Dashboard" />
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" v-for="(card, index) in cards" :key="index">
       <DashboardCard :card="card" />
      </div>
    </div>
  </AdminLayoutVue>
</template>