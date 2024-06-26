<template>
    <div class="sm:py-20 py-10 container flex items-center relative">
        <div class="sm:w-1/2 w-full font-exo">
            <img src="/assets/images/coverage.png" alt="" class="absolute w-full h-full inset-0 object-cover sm:hidden block brightness-[0.3]">

            <div class="relative z-10">
                <h3 class="xl:text-5xl text-4xl font-semibold mb-2 sm:text-black text-white sm:text-left text-center">Areas we Cover</h3>
                <p class="xl:text-lg sm:text-black text-white sm:text-left text-center">Our company HQ in Peterborough, and we serve nationwide</p>

                <div class="w-full grid grid-cols-2 mt-10 sm:text-secondary-500 text-secondary-200 text-base gap-y-4 sm:px-0 px-0">
                    <Link :href="slugify(area)" v-for="area in areas" class="col-span-1 flex items-center hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">{{ area }}</span>
                    </Link>

                    <div class="col-span-1 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">and Beyond</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2 sm:block hidden">
            <img src="/assets/images/coverage.png" alt="" class="rounded-3xl">
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

const areas = ['London', 'Bristol', 'Manchester', 'Bournemouth', 'Liverpool', 'Leicester', 'Birmingham', 'Nottingham', 'Leeds', 'Newcastle', 'Sheffield']

function slugify(text) {
    return text
        .toString()                      // Convert to string
        .normalize('NFD')                // Normalize to decomposed form
        .replace(/[\u0300-\u036f]/g, '') // Remove diacritics
        .toLowerCase()                   // Convert to lowercase
        .trim()                          // Remove leading and trailing spaces
        .replace(/[^a-z0-9\s-]/g, '')    // Remove non-alphanumeric characters
        .replace(/\s+/g, '-')            // Replace spaces with hyphens
        .replace(/-+/g, '-');            // Replace multiple hyphens with a single hyphen
}
</script>

<style scoped>

</style>
