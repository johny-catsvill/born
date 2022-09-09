<template>
    <div class="">
        <div class="calc-sm-title-box" v-if="!isEmpty">
            <slot name="title"></slot>
        </div>
        <!-- form -->
        <slot></slot>
        <Stepper v-if="!isEmpty" :step-number="stepNumber" />
    </div>
</template>


<script setup>
import Stepper from '../../Blocks/Stepper'

const props = defineProps({
    isEmpty: {
        type: Boolean,
        default: false
    },
    stepNumber: {
        type: Number,
        default: 0
    },
})
</script>
