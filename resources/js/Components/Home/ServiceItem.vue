<template>
    <Link :href="href" class="xl:col-span-1 col-span-3 xl:h-full h-60 relative group overflow-hidden">
        <img :src="src" :alt="alt" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/50 text-white">
            <h3 class="font-oswald font-semibold text-center 2xl:text-4xl text-3xl"><slot /></h3>
            <h4 class="font-exo text-center mt-1"><slot name="subtitle" /></h4>
            <div @click.stop="">
                <Button href="tel:07310115183" size="sm" class="mt-4">
                    Call Us Now
                </Button>
            </div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 group-hover:translate-y-[300%] transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import Button from "../Main/Button.vue"

defineProps({
    href: String,
    src: String,
    alt: String,
})

</script>

<style scoped>

</style>
