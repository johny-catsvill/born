<template>
    <label class="checkbox-field">
        <input type="checkbox" v-model="checkboxModel">
        <span class="checkmark"></span>
        <span>{{ label }}</span>
    </label>
</template>


<script setup>
import { ref, computed } from 'vue'

const props = defineProps({
    label: String,
    modelValue: Boolean
})

const emit = defineEmits(['update:modelValue'])

const checkboxModel = computed({
    get: () => props.modelValue,
    set: (val) => emit('update:modelValue', val)
})

</script>
