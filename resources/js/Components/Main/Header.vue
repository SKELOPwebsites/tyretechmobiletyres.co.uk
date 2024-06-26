<template>
    <header class="fixed top-0 left-0 right-0 z-20">
        <!-- Top bar -->
        <Transition>
            <div v-show="isVisible" class="bg-stone-900 text-[#6B6B6B] h-8 font-montserrat uppercase flex items-center">
                <div class="container mx-auto flex justify-between items-center text-sm">
                    <div class="flex items-center space-x-4">
                        <a href="#" class="ml-4 flex space-x-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                            <span>Nationwide</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="tel:07310115183" class="ml-4 flex space-x-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                            </svg>
                            <span>07310 115183</span>
                        </a>
                    </div>
                </div>
            </div>
        </Transition>

        <div
            class="sticky top-0"
            :class="{'bg-stone-900/60': isVisible, 'bg-stone-900/90': !isVisible }"
        >
            <div class="container mx-auto flex justify-between h-24">
                <div class="lg:w-56 sm:p-3 p-4">
                    <Link href="/">
                        <img class="h-full w-full object-contain" src="/assets/images/logo-light.png" alt="TyreTechs Mobile Tyres">
                    </Link>
                </div>
                <div class="sm:flex hidden items-center font-montserrat font-medium text-white xl:text-lg">
                    <Link href="/" active-class="bg-secondary-500" class="h-full flex items-center xl:px-4 px-2 hover:bg-secondary-500 transition duration-200">Home</Link>

                    <div class="relative h-full group">
                        <div class="h-full flex items-center px-4 cursor-pointer group-hover:bg-secondary-500 transition duration-200">
                            <span class="mr-2">Services</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>

                        <div class="hidden group-hover:flex flex-col absolute bottom-0 translate-y-full bg-stone-900/60 border border-black rounded-md">
                            <Link href="/mobile-tyre-fitting" active-class="bg-secondary-500" class="px-6 py-2 text-sm text-nowrap hover:bg-secondary-500 transition duration-200">Mobile Tyre Fitting</Link>
                            <Link href="/mobile-tyre-repair" active-class="bg-secondary-500" class="px-6 py-2 text-sm text-nowrap hover:bg-secondary-500 transition duration-200">Mobile Tyre Repair</Link>
                            <Link href="/van-mobile-tyre-fitting" active-class="bg-secondary-500" class="px-6 py-2 text-sm text-nowrap hover:bg-secondary-500 transition duration-200">Van Mobile Tyre Fitting</Link>
                        </div>
                    </div>

                    <Link href="/about" active-class="bg-secondary-500" class="h-full flex items-center xl:px-4 px-2 hover:bg-secondary-500 transition duration-200">About</Link>
                    <Link href="/contact" active-class="bg-secondary-500" class="h-full flex items-center xl:px-4 px-2 hover:bg-secondary-500 transition duration-200">Contact</Link>
                </div>

                <div class="lg:w-56 lg:flex sm:hidden flex items-center justify-center">
                    <Button href="tel:07310115183">
                        <template #icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                            </svg>
                        </template>
                        Call Now
                    </Button>
                </div>
            </div>
            <div
                class="sm:hidden flex items-center justify-center font-medium text-white h-12 transition-all "
                :class="{'bg-stone-900/30': isVisible, 'h-0 overflow-hidden': !isVisible }"
            >
                <Link href="/" active-class="bg-secondary-500" class="h-full flex items-center px-2 hover:bg-secondary-500 transition duration-200">Home</Link>

                <div class="relative h-full group">
                    <div class="h-full flex items-center px-4 cursor-pointer group-hover:bg-secondary-500 transition duration-200">
                        <span class="mr-2">Services</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>

                    <div class="hidden group-hover:flex flex-col absolute bottom-0 translate-y-full bg-stone-900/60 border border-black rounded-md">
                        <Link href="/mobile-tyre-fitting" active-class="bg-secondary-500" class="px-6 py-2 text-sm text-nowrap hover:bg-secondary-500 transition duration-200">Mobile Tyre Fitting</Link>
                        <Link href="/mobile-tyre-repair" active-class="bg-secondary-500" class="px-6 py-2 text-sm text-nowrap hover:bg-secondary-500 transition duration-200">Mobile Tyre Repair</Link>
                        <Link href="/van-mobile-tyre-fitting" active-class="bg-secondary-500" class="px-6 py-2 text-sm text-nowrap hover:bg-secondary-500 transition duration-200">Van Mobile Tyre Fitting</Link>
                    </div>
                </div>

                <Link href="/about" active-class="bg-secondary-500" class="h-full flex items-center xl:px-4 px-2 hover:bg-secondary-500 transition duration-200">About</Link>
                <Link href="/contact" active-class="bg-secondary-500" class="h-full flex items-center xl:px-4 px-2 hover:bg-secondary-500 transition duration-200">Contact</Link>
            </div>
        </div>
    </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Link } from "@inertiajs/vue3"
import Button from "./Button.vue"

const isVisible = ref(true); // This reactive reference will control the visibility

function handleScroll() {
    isVisible.value = window.pageYOffset <= 100; // Show element only when scrolled less than 100px
}

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition-property: height, opacity;
    transition:  0.5s ease;
}

.v-enter-from,
.v-leave-to {
    height: 0;
    opacity: 0;
}



</style>
