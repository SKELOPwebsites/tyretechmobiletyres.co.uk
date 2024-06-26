<template>
    <Head>
        <title>Our Sitemap</title>
        <meta name="description" content="Sitemap of TyreTech Mobile Tyres">
    </Head>

    <div class="relative sm:h-[440px] h-80 flex flex-col items-center justify-start sm:pt-44 pt-56 sm:bg-transparent bg-secondary-500">
        <img class="sm:block hidden absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-3.svg" alt="">

        <div class="container">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-white sm:text-4xl text-3xl font-bold font-montserrat mb-4 text-center">Our Sitemap</h1>
            </div>
        </div>
    </div>

    <MainLayout>
        <div class="container py-10 font-exo space-y-10">

            <div>
                <p class="md:text-lg text-base font-semibold">TyreTechs Mobile Tyres</p>
                <div class="flex flex-wrap items-center mt-4 space-x-10">
                    <Link href="/" class="md:text-base text-sm text-blue-600 hover:underline">Home</Link>
                    <Link href="/about" class="md:text-base text-sm text-blue-600 hover:underline">About</Link>
                    <Link href="/mobile-tyre-fitting" class="md:text-base text-sm text-blue-500 hover:underline">Mobile Tyre Fitting</Link>
                    <Link href="/mobile-tyre-repair" class="md:text-base text-sm text-blue-600 hover:underline">Mobile Tyre Repair</Link>
                    <Link href="/van-mobile-tyre-fitting" class="md:text-base text-sm text-blue-600 hover:underline">Van Mobile Tyre Fitting</Link>
                    <Link href="/contact" class="md:text-base text-sm text-blue-600 hover:underline">Contact Us</Link>
                    <Link href="/privacy" class="md:text-base text-sm text-blue-600 hover:underline">Privacy Policy</Link>
                </div>
            </div>
            <div>
                <p class="md:text-lg text-base font-semibold">Coverage</p>
                <div class="grid xl:grid-cols-8 lg:grid-cols-6 sm:grid-cols-4 grid-cols-2 gap-2 items-start mt-4">
                    <div
                        v-for="area in coverage"
                    >
                        <Link
                            :href="'/coverage/'+area.slug"
                            class="text-sm text-blue-600 hover: capitalize"
                            v-text="area.town"
                        ></Link>
                    </div>
                </div>
            </div>

        </div>

    </MainLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3"
import MainLayout from "../Layouts/MainLayout.vue"

defineProps({
    coverage: {
        type: Array,
        required: true,
    }
})

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
