<template>
    <Head>
        <title>About The Team</title>
        <meta name="description" content="Learn more about our mission, values, and expert team. Discover how we provide top-quality mobile tyre services across the UK." />
    </Head>

    <MainLayout>
        <div class="relative sm:h-[440px] h-80 flex flex-col items-center justify-start sm:pt-44 pt-56 sm:bg-transparent bg-secondary-500">
            <img class="sm:block hidden absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-3.svg" alt="">

            <div class="container">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-white sm:text-4xl text-3xl font-bold font-montserrat mb-4 text-center">About TyreTech Mobile Tyres</h1>
                    <h2 class="font-montserrat font-medium text-stone-100 text-center">Who we are & What we do</h2>
                </div>
            </div>
        </div>

        <div class="sm:py-20 py-10 container font-exo">
            <h3 class="text-3xl">Welcome to TyreTechs Mobile Tyres</h3>

            <p class="mt-4">
                At TyreTechs Mobile Tyres, we are dedicated to providing convenient, reliable, and professional mobile tyre fitting and repair services across the UK.
                Our mission is to revolutionize the tyre service industry by bringing top-quality tyre solutions directly to our customers,
                saving them time and effort while ensuring their safety and satisfaction.
            </p>

            <div class="grid grid-cols-2 gap-x-8 gap-y-10 mt-20">
                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">Our Story</h3>

                    <p class="mt-2">
                        TyreTechs Mobile Tyres was founded with a simple yet powerful vision: to make tyre maintenance as convenient and hassle-free as possible.
                        We recognized the challenges that drivers face when dealing with tyre issues, from the inconvenience of visiting a garage to the downtime
                        caused by unexpected tyre problems. Our solution was to bring the garage to you, offering a seamless, on-site service that meets your needs wherever you are.
                    </p>
                </div>

                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">What We Do</h3>

                    <p class="mb-4">We specialize in a range of mobile tyre services, including:</p>

                    <p class="font-bold">Mobile Tyre Fitting</p>
                    <p class="mt-2">
                        Whether you're at home, at work, or on the road, our expert technicians come to you to fit new tyres with precision and care.
                    </p>
                    <p class="mt-4 font-bold">Mobile Tyre Repair</p>
                    <p class="mt-2">
                        From punctures to slow leaks, our mobile units are equipped to handle all types of tyre repairs on-site, ensuring you get back on the road quickly.
                    </p>
                    <p class="mt-4 font-bold">Van Mobile Tyre Fitting</p>
                    <p class="mt-2">
                        We provide specialized tyre fitting services for vans, catering to both individual drivers and business fleets with the same level of professionalism and efficiency.
                    </p>
                </div>

                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Our Values</h3>

                    <p class="font-bold">Convenience</p>
                    <p class="mt-2">
                        We believe that tyre maintenance should be easy and convenient. Our mobile service eliminates the need to travel to a garage,
                        offering you the flexibility to get your tyres fitted or repaired at a location and time that suits you.
                    </p>
                    <p class="mt-4 font-bold">Quality</p>
                    <p class="mt-2">
                        Quality is at the heart of everything we do. From the tyres we supply to the tools and techniques we use, we are committed to providing the highest standards of service.
                        Our experienced technicians are trained to handle all tyre-related issues with expertise and precision.
                    </p>
                    <p class="mt-4 font-bold">Customer Satisfaction</p>
                    <p class="mt-2">
                        Your satisfaction is our top priority. We strive to exceed your expectations with every service, ensuring you receive a professional, reliable,
                        and friendly experience. Our growing base of satisfied customers across the UK is a testament to our dedication and commitment.
                    </p>
                    <p class="mt-4 font-bold">Transparency</p>
                    <p class="mt-2">
                        We believe in clear and honest communication. Our pricing is competitive and transparent, with no hidden fees.
                        We provide detailed explanations of our services and recommendations, empowering you to make informed decisions about your tyre needs.
                    </p>
                </div>
                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">Meet Our Team</h3>

                    <p>
                        Our team consists of highly skilled and experienced professionals who are passionate about what they do. From our customer service representatives to our
                        technicians on the ground, every member of the TyreTechs Mobile Tyres team is dedicated to providing exceptional service and ensuring your safety and satisfaction.
                    </p>
                </div>
                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">Our Commitment to the Environment</h3>

                    <p>
                        We are committed to environmental responsibility. Our processes include the safe disposal and recycling of old tyres, reducing waste and minimizing our carbon footprint.
                        Choosing TyreTechs Mobile Tyres means supporting a company that cares about the environment and is committed to sustainable practices.
                    </p>
                </div>
            </div>
        </div>

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
