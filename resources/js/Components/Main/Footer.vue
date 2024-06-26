<template>
    <footer>
        <div class="bg-stone-900">
            <div class="container mx-auto py-16 flex lg:flex-row flex-col justify-between">
                <div class="xl:w-56 lg:w-48 w-full mr-16 shrink-0">
                    <img src="/assets/images/logo-light.png" alt="TyreTechs Mobile Tyres" class="lg:w-full w-40">
                    <p class="mt-6 text-gray-300 xl:text-base text-sm">
                        Nationwide, 24/7 emergency tyre services. Whether you're at home, work or stuck on a road, call us now for the quickest response time you'll find
                    </p>
                </div>
                <div class="lg:w-[500px] w-full grid grid-cols-4 gap-x-14 gap-y-10 xl:text-base text-sm lg:mt-0 mt-12">
                    <div class="sm:col-span-1 col-span-4">
                        <p class="text-sm font-semibold text-gray-200 mb-4">Company</p>
                        <div class="space-y-3 flex flex-col items-start text-gray-200">
                            <Link href="/about">About us</Link>
                            <Link href="/sitemap">Sitemap</Link>
                        </div>
                    </div>
                    <div class="sm:col-span-2 col-span-4">
                        <p class="text-sm font-semibold text-gray-200 mb-4">Services</p>
                        <div class="space-y-3 flex flex-col items-start text-gray-200">
                            <Link href="/mobile-tyre-fitting">Mobile Tyre Fitting</Link>
                            <Link href="/mobile-tyre-repair">Mobile Tyre Repair</Link>
                            <Link href="/van-mobile-tyre-fitting">Van Mobile Tyre Fitting</Link>
                        </div>
                    </div>
                    <div class="sm:col-span-1 col-span-4">
                        <p class="text-sm font-semibold text-gray-200 mb-4">Legal</p>
                        <div class="space-y-3 flex flex-col items-start text-gray-200">
                            <Link href="/privacy">Privacy</Link>
                            <Link href="/contact">Contact</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-stone-950">
            <div class="container mx-auto flex sm:flex-row flex-col items-center sm:justify-between justify-center py-8">
                <p class="sm:text-sm text-xs text-gray-500 text-center">© {{ displayYear }} TyreTechs Mobile Tyres. All rights reserved.</p>
                <p class="text-gray-300 text-center text-sm sm:mt-0 mt-4 font-exo">Website by: <a class="text-white hover:underline" href="https://skelop.com" target="_blank" rel="noreferrer">SKELOP</a></p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import { computed } from "vue"

const launchYear = 2024
const currentYear= new Date().getFullYear()

const displayYear = computed(() => {
    return currentYear > launchYear
        ? `${launchYear} - ${currentYear}`
        : launchYear;
})
</script>

<style scoped>

</style>
