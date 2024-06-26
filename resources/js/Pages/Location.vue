<template>
    <Head>
        <title>Mobile Tyre Services in {{ location }}</title>
        <meta name="description" content="Find our mobile tyre fitting services near you. We cover a wide range of locations for your convenience and peace of mind." />
    </Head>

    <MainLayout>
        <div class="relative xl:h-[640px] sm:h-[540px] h-[640px] flex flex-col items-center justify-start sm:pt-44 pt-60">
            <img class="absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-3.svg" alt="">

            <div class="container">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-white sm:text-4xl text-3xl font-bold font-montserrat mb-4 text-center">Mobile Tyre Fitting</h1>
                    <h2 class="font-montserrat font-medium text-stone-100 text-center">in and around {{ location }}</h2>

                    <PostcodeChecker :errors="{}"/>
                </div>
            </div>
        </div>

        <OurServices />

        <AreasWeCover />

        <div class="sm:py-20 py-10 container font-exo">
            <h3 class="text-3xl">Convenient, Professional Service at Your Doorstep in {{ location }}</h3>

            <p class="mt-4">
                At TyreTechs Mobile Tyres, we bring our expert tyre fitting services directly to you in {{ location }}, wherever you are. Whether at home, work, or any location of your choice,
                our mobile units are fully equipped to handle all your tyre needs, ensuring minimal disruption to your day. With our professional and reliable service,
                you can say goodbye to the hassle of traditional tyre fitting and enjoy the convenience of on-site assistance.
            </p>

            <div class="grid grid-cols-2 gap-x-8 gap-y-10 mt-20">
                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">Why Choose Mobile Tyre Fitting in {{ location }}?</h3>

                    <p class="font-bold">Time-Saving Convenience</p>
                    <p class="mt-2">
                        No need to take time out of your busy schedule to visit a garage. Our mobile tyre fitting service comes to you, saving you valuable time and effort.
                        Simply book an appointment, and our expert technicians will arrive at your specified location in {{ location }}, ready to get the job done efficiently.
                    </p>
                    <p class="mt-4 font-bold">Expert Technicians</p>
                    <p class="mt-2">
                        Our team consists of highly trained and experienced technicians who are dedicated to providing the highest quality service.
                        We use the latest tools and technology to ensure your tyres are fitted to perfection, guaranteeing your safety and satisfaction.
                    </p>
                    <p class="mt-4 font-bold">Emergency Assistance</p>
                    <p class="mt-2">
                        Tyre problems can happen unexpectedly, leaving you stranded at the worst possible times. Our mobile tyre fitting service includes emergency call-out assistance,
                        ensuring you’re never left waiting on the side of the road in {{ location }}. We respond quickly and efficiently, getting you back on the road as soon as possible.
                    </p>
                    <p class="mt-4 font-bold">Competitive Pricing</p>
                    <p class="mt-2">
                        Quality service doesn’t have to break the bank. We offer competitive pricing on all our tyre fitting services, ensuring you get the best value for your money.
                        Our transparent pricing means no hidden fees, just excellent service at a fair price.
                    </p>
                    <p class="mt-4 font-bold">Wide Range of Tyres</p>
                    <p class="mt-2">
                        We stock a comprehensive selection of tyres from leading brands to suit all types of vehicles and budgets.
                        Whether you need budget-friendly options or high-performance tyres, we have the perfect solution for you.
                        Our experts can also provide recommendations based on your driving needs and preferences.
                    </p>
                </div>

                <div class="xl:col-span-1 col-span-2">
                    <h3 class="text-3xl mb-8">How It Works</h3>

                    <p class="font-bold">Book an Appointment</p>
                    <p class="mt-2">
                        Call our friendly customer service team to schedule an appointment at your convenience in {{ location }}. Specify your preferred location and time.
                    </p>
                    <p class="mt-4 font-bold">We Come to You</p>
                    <p class="mt-2">
                        Our mobile unit will arrive at your specified location in {{ location }}, equipped with all the necessary tools and materials to fit your tyres.
                        Our technicians will assess the condition of your tyres and carry out the fitting on-site.
                    </p>
                    <p class="mt-4 font-bold">Enjoy the Convenience</p>
                    <p class="mt-2">
                        Once the tyre fitting is complete, you can drive away with confidence, knowing your tyres have been professionally fitted.
                        We ensure the highest standards of workmanship and safety with every job.
                    </p>
                </div>

                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Our Commitment to You in {{ location }}</h3>

                    <p>
                        At TyreTechs Mobile Tyres, we are committed to providing exceptional service and ensuring your complete satisfaction.
                        Our mobile tyre fitting service in {{ location }} is designed to make your life easier, offering a hassle-free solution to all your tyre needs.
                        With our expert technicians, competitive pricing, and wide range of tyres, you can trust us to keep you moving safely and efficiently.
                    </p>
                </div>
                <div class="col-span-2">
                    <h3 class="text-3xl mb-8">Book Your Mobile Tyre Fitting in {{ location }} Today</h3>

                    <p>
                        Experience the convenience and professionalism of TyreTechs Mobile Tyres.
                        Contact us today to book your mobile tyre fitting appointment in {{ location }} and enjoy the benefits of our on-site service.
                        Your safety and satisfaction are our top priorities, and we’re here to ensure you get the best service possible, wherever you are in {{ location }}.
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

defineProps({
    location: {
        type: String,
        required: true,
    }
})
</script>

<style scoped>

</style>
