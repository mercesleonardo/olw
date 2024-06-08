<script setup>
import { defineProps, defineEmits } from 'vue';

const props = defineProps(['modelValue', 'placeholder', 'options', 'optionValue', 'optionLabel']);
const emit = defineEmits(['update:modelValue']);
</script>

<template>
    <select
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    >
        <option value="">{{ placeholder }}</option>
        <option v-for="option in options" :key="option[optionValue]" :value="option[optionValue]">
            {{ option[optionLabel] }}
        </option>
    </select>
</template>
