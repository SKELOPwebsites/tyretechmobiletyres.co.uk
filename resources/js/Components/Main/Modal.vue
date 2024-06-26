<template>
    <Transition>
        <div v-show="isOpen" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center">
            <div class="relative bg-white w-full max-w-xl h-fit flex flex-col items-center justify-start py-10 px-16">
                <button @click="closeModal" class="absolute top-4 right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
                <slot></slot>
            </div>
        </div>
    </Transition>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
    isOpen: {
        type: Boolean,
        required: true,
    },
});

const emit = defineEmits(['close']);

const closeModal = () => {
    emit('close');
};
</script>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition-property: opacity;
    transition:  0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
