<template>
    <header>
        <Header />
    </header>

    <main>
        <slot />
    </main>

    <WhatsappIcon phoneNumber="+447310115183" name="Mehdi"/>

    <footer>
        <Footer />
    </footer>
</template>

<script setup>
import Header from "/resources/js/Components/Main/Header.vue"
import Footer from "/resources/js/Components/Main/Footer.vue"
import WhatsappIcon from "/resources/js/Components/WhatsappIcon.vue"
</script>

<style scoped>

</style>
