<template>
    <Head>
        <title>Van Mobile Tyre Fitting</title>
        <meta name="description" content="Specialized mobile tyre fitting services for vans. Convenient on-site tyre fitting for individual drivers and business fleets." />
    </Head>

    <MainLayout>
        <div class="relative xl:h-[640px] sm:h-[540px] h-[640px] flex flex-col items-center justify-start sm:pt-44 pt-60">
            <img class="absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-3.svg" alt="">

            <div class="container">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-white sm:text-4xl text-3xl font-bold font-montserrat mb-4 text-center">Mobile Tyre Fitting for Vans</h1>
                    <h2 class="font-montserrat font-medium text-stone-100 text-center">Get quick and convenient mobile tyre services for your van</h2>

                    <PostcodeChecker :errors="{}"/>
                </div>
            </div>
        </div>

        <OurServices />

        <AreasWeCover />

        <div class="sm:py-20 py-10 container font-exo">
            <h3 class="text-3xl">Professional Tyre Fitting for Your Van, Wherever You Are</h3>

            <p class="mt-4">
                At TyreTechs Mobile Tyres, we specialize in providing efficient and convenient mobile tyre fitting services specifically for vans.
                Whether you’re a business owner with a fleet of vans or a van driver needing a quick tyre replacement, our expert technicians come directly to you,
                ensuring minimal disruption to your day. Our goal is to keep your van safely on the road with our top-notch mobile tyre fitting service.
            </p>

            <div class="grid grid-cols-2 gap-x-8 gap-y-10 mt-20">
                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">Why Choose Our Van Mobile Tyre Fitting Service?</h3>

                    <p class="font-bold">Convenient On-Site Service</p>
                    <p class="mt-2">
                        Our mobile tyre fitting service brings the garage to your doorstep. Whether you’re at home, at work, or anywhere else,
                        our fully equipped mobile units can handle your tyre fitting needs on the spot, saving you time and hassle.
                    </p>
                    <p class="mt-4 font-bold">Expert Technicians</p>
                    <p class="mt-2">
                        Our team of highly trained and experienced technicians specializes in van tyre fitting.
                        We use the latest tools and techniques to ensure that your tyres are fitted accurately and securely, ensuring your safety and the performance of your van.
                    </p>
                    <p class="mt-4 font-bold">Wide Range of Tyres</p>
                    <p class="mt-2">
                        We offer a comprehensive selection of tyres specifically designed for vans, from leading brands to suit all budgets and requirements.
                        Whether you need tyres for heavy loads, long-distance driving, or urban deliveries, we have the perfect tyres for your van.
                    </p>
                    <p class="mt-4 font-bold">Competitive Pricing</p>
                    <p class="mt-2">
                        Our van mobile tyre fitting service is competitively priced, providing excellent value for money.
                        We offer transparent pricing with no hidden fees, ensuring you get top-quality service at a fair price.
                    </p>
                    <p class="mt-4 font-bold">Emergency Call-Outs</p>
                    <p class="mt-2">
                        Van tyre issues can occur at any time and can be particularly disruptive if you’re on the job.
                        Our emergency call-out service ensures that you’re never left stranded. We respond quickly to get you back on the road as soon as possible.
                    </p>
                </div>

                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">How It Works</h3>

                    <p class="font-bold">Book an Appointment</p>
                    <p class="mt-2">
                        Call our friendly customer service team. Provide details about your van, location, and the type of tyres you need.
                    </p>
                    <p class="mt-4 font-bold">We Come to You</p>
                    <p class="mt-2">
                        Our mobile unit will arrive at your specified location at the scheduled time, equipped with all the necessary tools and tyres.
                        Our technicians will fit your new tyres quickly and efficiently.
                    </p>
                    <p class="mt-4 font-bold">Drive Away Safely</p>
                    <p class="mt-2">
                        Once the tyres are fitted, you can get back to your day with the confidence that your van is equipped with high-quality tyres fitted by professionals.
                        We ensure the highest standards of workmanship and safety with every job.
                    </p>
                </div>

                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Our Commitment to You</h3>

                    <p>
                        At TyreTechs Mobile Tyres, we are dedicated to providing exceptional service and ensuring your complete satisfaction.
                        Our van mobile tyre fitting service is designed to be convenient, reliable, and cost-effective, allowing you to keep your van running smoothly without any hassle.
                        With our expert technicians and comprehensive range of tyres, you can trust us to deliver the best service possible.
                    </p>
                </div>
                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Contact Us Today</h3>

                    <p>
                        For professional van mobile tyre fitting, look no further than TyreTechs Mobile Tyres.
                        Contact us today to book your appointment and experience the convenience and reliability of our mobile tyre fitting service.
                        Our team is ready to assist you and ensure your van is always ready for the road.
                    </p>
                </div>
            </div>
        </div>

        <WhyChooseUs />

    </MainLayout>

</template>

<script setup>
import { Head } from "@inertiajs/vue3"
import MainLayout from "/resources/js/Layouts/MainLayout.vue"
import Button from "/resources/js/Components/Main/Button.vue"
import PostcodeChecker from "/resources/js/Components/Home/PostcodeChecker.vue"
import OurServices from "/resources/js/Components/Home/OurServices.vue"
import AreasWeCover from "/resources/js/Components/Home/AreasWeCover.vue"
import WhyChooseUs from "/resources/js/Components/Main/WhyChooseUs.vue"

</script>

<style scoped>

</style>
