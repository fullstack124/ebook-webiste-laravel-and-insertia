<template>
    <div class="container mx-auto px-4 mt-10">

        <div class="flex items-center justify-between gap-5 mb-10">
            <input type="search" name="" id="" placeholder="Search here and hit enter" class=" rounded-md sm:w-1/4 w-full outline-none border py-2 px-4">
            <select name="" id="" class="sm:w-1/4 w-full outline-none border py-2 px-4 rounded-md">
                <option value="">Category</option>
            </select>
        </div>
        <div class="grid gird-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <div class="bg-white rounded-md shadow" v-for="(item, index) in 10" :key="index">
                <div class="text-center px-1 py-2">
                    <img src="https://edit.org/images/cat/book-covers-big-2019101610.jpg" class="w-full mx-auto h-[50vh] object-cover rounded" alt="">
                    <h1 class="text-xl font-bold my-2">Html Full course</h1>
                    <p class="text-md font-medium my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, in.</p>
                    <p class="text-md font-medium my-2 italic">Kern Gold</p>
                    <button  class="bg-blue-600 py-2 px-4 w-full text-xl font-semibold text-white rounded-md">See Details</button>
                    <button  class="bg-blue-600 py-2 px-4 w-full text-xl font-semibold text-white my-2 rounded-md">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</template>