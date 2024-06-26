<template>
    <Head>
        <title>Nationwide Mobile Tyre Services Brought to You</title>
        <meta name="description" content="Discover convenient and reliable mobile tyre fitting and repair services at your location. Expert technicians, competitive pricing, and fast response times." />
    </Head>

    <MainLayout>
        <div class="relative 2xl:h-[800px] xl:h-[600px] h-fit flex flex-col items-center justify-start 2xl:pt-72 xl:pt-48 sm:pt-40 pt-56">
            <img class="absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-1.svg" alt="">

            <div class="container">
                <div class="flex flex-col xl:items-start items-center justify-center">
                    <div>
                        <div class="mb-6">
                            <DynamicText />
                        </div>
                        <h2 class="font-montserrat font-medium text-stone-100 xl:text-left text-center sm:text-base text-sm">Flat tyre? TyreTechs Mobile Tyres will come to you <br class="xl:hidden sm:block hidden"> within 30-60 minutes to fit a new one.</h2>
                    </div>
                    <PostcodeChecker :errors="{}"/>
                </div>
            </div>
        </div>

        <OurServices />

        <PopularTyreBrands />

        <AreasWeCover />

        <WhyChooseUs />

    </MainLayout>

</template>

<script setup>
import { Head } from "@inertiajs/vue3"
import MainLayout from "/resources/js/Layouts/MainLayout.vue"
import DynamicText from "/resources/js/Components/Main/DynamicText.vue"
import Button from "/resources/js/Components/Main/Button.vue"
import PostcodeChecker from "/resources/js/Components/Home/PostcodeChecker.vue"
import OurServices from "/resources/js/Components/Home/OurServices.vue"
import PopularTyreBrands from "/resources/js/Components/Home/PopularTyreBrands.vue"
import AreasWeCover from "/resources/js/Components/Home/AreasWeCover.vue"
import WhyChooseUs from "/resources/js/Components/Main/WhyChooseUs.vue"

</script>

<style scoped>

</style>
