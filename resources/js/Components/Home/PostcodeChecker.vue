<template>
    <div class="mt-10 bg-secondary-400 2xl:p-10 sm:p-8 p-6 rounded-3xl shadow-2xl sm:w-fit w-[300px]">
        <span class="2xl:text-4xl xl:text-3xl sm:text-xl text-lg font-poppins text-white">Check Availability Now</span>

        <div class="relative text-gray-600 mt-4">
            <input ref="postcodeInput" placeholder="Enter your postcode" autocomplete="postal-code" class="bg-white placeholder:normal-case uppercase h-12 w-full sm:px-5 rounded-lg border sm:text-lg text-sm focus:ring-2 focus:ring-secondary-500 transition duration-300">
            <button @click="checkPostcode" class="absolute right-0 top-0 py-4 px-4 bg-secondary-500 rounded-r-lg text-white">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 56.966 56.966">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                </svg>
            </button>
            <span v-if="postcodeError" class="text-xs text-red-500">{{ postcodeError }}</span>

        </div>

        <div class="flex sm:flex-row flex-col items-center justify-between mt-5">
            <p class="font-montserrat sm:pr-4 sm:mb-0 mb-4 text-white 2xl:text-base text-sm">Don't know your postcode?</p>
            <Button href="tel:07310115183" size="sm">
                <template #icon>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-2">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                </template>
                Call Us Now
            </Button>
        </div>
    </div>

    <Modal :isOpen="isModalOpen" @close="closeModal">
        <img src="/assets/images/icons/van.svg" alt="We have fitters available" class="w-80 object-cover -scale-x-100">

        <div v-if="postcodeData" class="py-20">
            <h2 class="capitalize font-montserrat font-semibold text-3xl text-center">We have 3 fitters available in {{ postcodeData.parliamentary_constituency_2024 }}</h2>

            <form class="w-full space-y-4 mt-10" @submit.prevent="submit">
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
                    <label for="body" class="text-sm">Details <span class="text-red-500">*</span></label>
                    <textarea v-model="form.body" type="text" id="body" class="text-sm py-1.5 px-3 w-full bg-white border-t-0 border-x-0 border-b border-gray-300 shadow-md appearance-none outline-0 focus:ring-0 transition"></textarea>
                    <span v-if="errors.body" class="text-xs text-red-500">{{ errors.body }}</span>
                </div>
                <div class="flex justify-center w-full">
                    <Button :isLink="false" @click="submit" theme="dark" size="sm">
                        Request Callback
                    </Button>
                </div>
                <div>
                    <p class="font-montserrat text-center">Alternatively, you can call us on <a href="tel:07310115183" class="underline text-indigo-600">07310 115183</a></p>
                </div>
            </form>
        </div>
    </Modal>
</template>

<script setup>
import { ref } from "vue"
import { useForm } from "@inertiajs/vue3"
import Button from "/resources/js/Components/Main/Button.vue"
import Modal from "/resources/js/Components/Main/Modal.vue"

defineProps({
    errors: {
        type: Object,
        required: false
    },
})

const isModalOpen = ref(false);

const openModal = () => {
    isModalOpen.value = true;
};

const closeModal = () => {
    isModalOpen.value = false;
};

const form = useForm({
    name: null,
    phone: null,
    tyre_size: null,
})

const submit = () => {
    console.log('hi')
}

const postcodeInput = ref(null)
const postcodeError = ref('')
const postcodeData = ref(null);
const checkPostcode = async () => {
    let postcode = postcodeInput.value.value

    try {
        postcodeError.value = null;
        const response = await fetch(`https://api.postcodes.io/postcodes/${postcode}`);
        const data = await response.json();
        if (data.status === 200) {
            postcodeData.value = data.result;
            console.log(data.result)
            openModal()
        } else {
            postcodeError.value = `Please enter a valid postcode`;
            postcodeData.value = null
        }
    } catch (err) {
        postcodeError.value = `Please enter a valid postcode`;
        postcodeData.value = null
    }
}
</script>

<style scoped>

</style>
