<template>
    <div class="bg-gray-100">
        <div class="container flex flex-col py-2">
            <h2 class="font-semibold text-xl mb-1">Our Inventory</h2>
            <span class="text-sm">
                <span v-for="(item, index) in breadcrumbs" :key="index">
                    <template v-if="index < breadcrumbs.length - 1">
                        <a :href="item.link" class="underline">{{ item.name }}</a> /
                    </template>
                    <template v-else>
                        {{ item.name }}
                    </template>
                </span>
            </span>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    breadcrumbs: {
        type: Array,
        required: true,
        default: () => []
    }
});
</script>

<style scoped>
/* Add any custom styles if needed */
</style>
