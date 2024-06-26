<template>
    <Head>
        <title>Contact The Team</title>
        <meta name="description" content="Get in touch with us for all your mobile tyre fitting and repair needs. Our friendly team is ready to assist you with any inquiries or bookings." />
    </Head>

    <MainLayout>
        <div class="relative sm:h-[440px] h-80 flex flex-col items-center justify-start sm:pt-44 pt-56 sm:bg-transparent bg-secondary-500">
            <img class="sm:block hidden absolute inset-0 h-full w-full object-cover -z-10" src="/assets/images/cta-bg-3.svg" alt="">

            <div class="container">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-white sm:text-4xl text-3xl font-bold font-montserrat mb-4 text-center">Contact us today</h1>
                    <h2 class="font-montserrat font-medium text-stone-100 text-center">Request callback, or make an inquiry</h2>
                </div>
            </div>
        </div>

        <div class="pt-10 pb-20 container font-exo">
            <form class="max-w-[500px] space-y-4 mx-auto" @submit.prevent="submit">
                <div>
                    <label for="name" class="text-sm">Name <span class="text-red-500">*</span></label>
                    <input v-model="form.name" type="text" id="name" class="text-sm py-1.5 px-3 w-full bg-white border-t-0 border-x-0 border-b border-gray-300 shadow-md appearance-none outline-0 focus:ring-0 transition">
                    <span v-if="errors.name" class="text-xs text-red-500">{{ errors.name }}</span>
                </div>
                <div>
                    <label for="phone" class="text-sm">Phone <span class="text-red-500">*</span></label>
                    <input v-model="form.phone" type="number" id="phone" class="text-sm py-1.5 px-3 w-full bg-white border-t-0 border-x-0 border-b border-gray-300 shadow-md appearance-none outline-0 focus:ring-0 transition">
                    <span v-if="errors.phone" class="text-xs text-red-500">{{ errors.phone }}</span>
                </div>
                <div>
                    <label for="postcode" class="text-sm">Postcode <span class="text-red-500">*</span></label>
                    <input v-model="form.postcode" type="text" id="postcode" class="text-sm py-1.5 px-3 w-full bg-white border-t-0 border-x-0 border-b border-gray-300 shadow-md appearance-none outline-0 focus:ring-0 transition">
                    <span v-if="errors.postcode" class="text-xs text-red-500">{{ errors.postcode }}</span>
                </div>
                <div>
                    <label for="body" class="text-sm">Details <span class="text-red-500">*</span></label>
                    <textarea v-model="form.body" type="text" id="body" class="text-sm py-1.5 px-3 w-full bg-white border-t-0 border-x-0 border-b border-gray-300 shadow-md appearance-none outline-0 focus:ring-0 transition"></textarea>
                    <span v-if="errors.body" class="text-xs text-red-500">{{ errors.body }}</span>
                </div>
                <div class="flex justify-center w-full">
                    <Button :isLink="false" @click="submit" theme="dark" size="sm">
                        Send Inquiry
                    </Button>
                </div>
                <div>
                    <p class="font-montserrat text-center sm:text-base text-sm">Alternatively, you can call us on <a href="tel:07310115183" class="underline text-indigo-600">07310 115183</a></p>
                </div>
            </form>
        </div>
    </MainLayout>

</template>

<script setup>
import { ref } from "vue"
import { useForm, Head } from "@inertiajs/vue3"
import MainLayout from "/resources/js/Layouts/MainLayout.vue"

import Button from "/resources/js/Components/Main/Button.vue"
import Modal from "/resources/js/Components/Main/Modal.vue"

defineProps({
    errors: {
        type: Object,
        required: false
    },
})

const form = useForm({
    name: null,
    phone: null,
    postcode: null,
    body: null,
})

const submit = () => {
    console.log('hi')
}

</script>

<style scoped>

</style>
