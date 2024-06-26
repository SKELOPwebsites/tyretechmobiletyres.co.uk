<template>
    <div class="container sm:py-20 py-10">
        <h3 class="text-center font-oswald font-bold text-2xl">Our Services</h3>
        <p class="text-center mt-2 font-exo text-3xl">that deliver results</p>
        <hr class="border-t-2 w-32 mx-auto mt-4 border-primary-500">

        <div class="grid grid-cols-3 gap-x-4 2xl:h-80 xl:h-60 mt-10">
            <ServiceItem href="/mobile-tyre-fitting" src="/assets/images/services/mobile-tyre-fitting.webp" alt="Mobile Tyre Fitting">
                Mobile Tyre Fitting
                <template #subtitle>
                    <span>At Home, Work or Roadside</span>
                </template>
            </ServiceItem>
            <ServiceItem href="/mobile-tyre-repair" src="/assets/images/services/mobile-tyre-repair.webp" alt="MOT">
                Mobile Tyre Repair
                <template #subtitle>
                    <span>Tyres repaired at your convenience</span>
                </template>
            </ServiceItem>
            <ServiceItem href="/van-mobile-tyre-fitting" src="/assets/images/services/van-tyre-fitting.webp" alt="MOT">
                Van Tyre Fitting
                <template #subtitle>
                    <span>Mobile tyre fitting for commercial vehicles</span>
                </template>
            </ServiceItem>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import ServiceItem from "./ServiceItem.vue"

</script>

<style scoped>

</style>
