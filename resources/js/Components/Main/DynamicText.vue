<template>
    <div class="flex items-center xl:justify-start justify-center">
        <h1 class="xl:text-5xl lg:text-4xl text-3xl font-bold font-montserrat">
            <span class="text-white">Emergency Tyre</span> <br class="sm:hidden"> <span class="text-white txt-shadow">{{ currentWord }}</span><span class="blinking-cursor font-light">|</span>
        </h1>
    </div>
</template>

<script setup>
import {ref, onMounted, nextTick} from 'vue';

// Variables to control typing effect
const typingSpeed = 150;   // Milliseconds per character
const deletingSpeed = 75; // Milliseconds per character
const pauseTime = 3500;    // Pause time before deleting or next word

const words = ['Fitting', 'Fitter', 'Repair', 'Replacement'];
const currentWord = ref('');
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;

const typeEffect = async () => {
    const word = words[wordIndex];
    if (isDeleting) {
        currentWord.value = word.substring(0, charIndex - 1);
        charIndex--;
    } else {
        currentWord.value = word.substring(0, charIndex + 1);
        charIndex++;
    }

    if (!isDeleting && charIndex === word.length) {
        await new Promise((resolve) => setTimeout(resolve, pauseTime));
        isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
    }

    await new Promise((resolve) => setTimeout(resolve, isDeleting ? deletingSpeed : typingSpeed));
    await nextTick(() => typeEffect());
};

onMounted(() => {
    typeEffect();
});

</script>

<style scoped>
.blinking-cursor {
    display: inline-block;
    width: 1ch;
    background-color: transparent;
    animation: blink 1s step-end infinite;
}

@keyframes blink {
    from, to {
        opacity: 0;
    }
    50% {
        opacity: 100%;
    }
}

.txt-shadow{
    text-shadow: 2px 2px #000000;
}
</style>
