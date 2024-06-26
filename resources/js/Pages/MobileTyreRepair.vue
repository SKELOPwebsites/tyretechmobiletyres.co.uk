<template>
    <Head>
        <title>Mobile Tyre Repair</title>
        <meta name="description" content="Get fast and reliable mobile tyre repair services wherever you are. Our technicians provide efficient on-site tyre repairs for your convenience." />
    </Head>

    <MainLayout>
        <div class="relative xl:h-[640px] sm:h-[540px] h-[640px] flex flex-col items-center justify-start sm:pt-44 pt-60">
            <img class="absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-3.svg" alt="">

            <div class="container">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-white sm:text-4xl text-3xl font-bold font-montserrat mb-4 text-center">Mobile Tyre Repair</h1>
                    <h2 class="font-montserrat font-medium text-stone-100 text-center">Get quick and convenient tyre repair with our mobile tyre service</h2>

                    <PostcodeChecker :errors="{}"/>
                </div>
            </div>
        </div>

        <OurServices />

        <AreasWeCover />

        <div class="sm:py-20 py-10 container font-exo">
            <h3 class="text-3xl">Convenient, Reliable Tyre Repair at Your Location</h3>

            <p class="mt-4">
                At TyreTechs Mobile Tyres, we understand how inconvenient a flat or damaged tyre can be, especially when it happens at the worst possible time.
                Our mobile tyre repair service brings professional and efficient solutions right to your doorstep, workplace, or any location of your choice.
                We are committed to getting you back on the road quickly and safely, without the hassle of visiting a garage.
            </p>

            <div class="grid grid-cols-2 gap-x-8 gap-y-10 mt-20">
                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">Why Choose Mobile Tyre Repair?</h3>

                    <p class="font-bold">On-Demand Service</p>
                    <p class="mt-2">
                        Our mobile tyre repair service is designed to provide maximum convenience. No need to disrupt your day or wait in line at a repair shop.
                        Simply book an appointment, and our expert technicians will come to you, fully equipped to handle your tyre repair needs on the spot.
                    </p>
                    <p class="mt-4 font-bold">Expert Technicians</p>
                    <p class="mt-2">
                        Our team consists of highly trained and experienced technicians who are dedicated to delivering top-quality service.
                        We use the latest tools and techniques to ensure that your tyre is repaired to the highest standards, ensuring your safety and peace of mind.
                    </p>
                    <p class="mt-4 font-bold">Fast Response Times</p>
                    <p class="mt-2">
                        We know that time is of the essence when you have a damaged tyre. Our mobile units are strategically located to provide quick response times,
                        getting to you as soon as possible to minimize your downtime and inconvenience.
                    </p>
                    <p class="mt-4 font-bold">Cost-Effective Solutions</p>
                    <p class="mt-2">
                        Our mobile tyre repair service offers a cost-effective alternative to replacing your tyre.
                        We provide honest assessments and only recommend replacement when absolutely necessary, helping you save money without compromising on safety.
                    </p>
                    <p class="mt-4 font-bold">Comprehensive Repair Services</p>
                    <p class="mt-2">
                        We can repair a wide range of tyre issues, including punctures, slow leaks, and damage caused by road hazards.
                        Our technicians are skilled in diagnosing and fixing problems quickly and efficiently, ensuring your tyre is back in optimal condition.
                    </p>
                </div>

                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">How It Works</h3>

                    <p class="font-bold">Book an Appointment</p>
                    <p class="mt-2">
                        Call our friendly customer service team to schedule an appointment at your convenience. Specify your preferred location and time.
                    </p>
                    <p class="mt-4 font-bold">We Come to You</p>
                    <p class="mt-2">
                        Our mobile unit will arrive at your specified location, equipped with all the necessary tools and materials to repair your tyre.
                        Our technicians will assess the damage and carry out the repair on-site.
                    </p>
                    <p class="mt-4 font-bold">Drive Away Safely</p>
                    <p class="mt-2">
                        Once the repair is complete, you can drive away with confidence, knowing your tyre has been professionally repaired.
                        We ensure the highest standards of workmanship and safety with every job.
                    </p>
                </div>

                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Our Commitment to You</h3>

                    <p>
                        At TyreTechs Mobile Tyres, customer satisfaction is our top priority.
                        We are dedicated to providing a seamless and stress-free experience with our mobile tyre repair service.
                        Our commitment to quality, convenience, and reliability has made us a trusted choice for drivers across the UK.
                    </p>
                </div>
                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Book Your Mobile Tyre Repair Today</h3>

                    <p>
                        Don’t let a damaged tyre disrupt your day. Contact TyreTechs Mobile Tyres today to book your mobile tyre repair appointment.
                        Our friendly team is ready to assist you and ensure you get back on the road quickly and safely. With our mobile tyre repair service,
                        expert assistance is just a call away.
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
