<script setup>
import MainHeading from "../../../Components/Admin/MainHeading.vue";
import CustomCard from "../../../Components/Admin/CustomCard.vue";
import InputField from "../../../Components/Admin/InputField.vue";
import Label from "../../../Components/Admin/Label.vue";
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import { onMounted } from "vue";
import { Input, initTE, Ripple,Alert } from "tw-elements";

onMounted(() => {
  initTE({ Input, Ripple,Alert });
});
</script>

<template>
  <AdminLayout>
    <div class="p-4 w-full">
      <MainHeading title="Add User" />
      <div
        class="mb-3 hidden w-full items-center rounded-lg bg-warning-100 px-6 py-5 text-base text-warning-800 data-[te-alert-show]:inline-flex"
        role="alert"
        data-te-alert-init
        data-te-alert-show
      >
        <strong class="mr-1">Holy guacamole!</strong> You should check in on
        some of those fields below.
        <button
          type="button"
          class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-alert-dismiss
          aria-label="Close"
        >
          <span
            class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
        </button>
      </div>
      <CustomCard>
        <div class="max-w-5xl container mx-auto">
          <div class="grid grid-cols-2">
            <div>
              <div class="relative mb-3" data-te-input-wrapper-init>
                <input
                  type="text"
                  class="peer block w-full rounded border-1 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-black/bg-black/70 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-black dark:placeholder:text-black dark:peer-focus:text-black/bg-black/70 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                  id="exampleFormControlInput1"
                  placeholder="Example label"
                />
                <label
                  for="exampleFormControlInput1"
                  class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-black/bg-black/70 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-black dark:peer-focus:text-black/bg-black/70"
                >Example label</label>
              </div>

              <button
                type="button"
                data-te-ripple-init
                data-te-ripple-color="light"
                class="inline-block rounded bg-black/70 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-black/70-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-black/70-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-black/70-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
              >Click me</button>
            </div>
          </div>
        </div>
      </CustomCard>
    </div>
  </AdminLayout>
</template>