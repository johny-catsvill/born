<template>
    <div class="progress">
        <div class="progress__item" :class="{'progress__item--active': stepNumber >= 1}"><span class="progress__title" v-if="isNamed">Calculator</span></div>
        <div class="progress__item" :class="{'progress__item--active': stepNumber >= 2}"><span class="progress__title" v-if="isNamed">Customer Info</span></div>
        <div class="progress__item" :class="{'progress__item--active': stepNumber >= 3}"><span class="progress__title" v-if="isNamed">Confirmation</span></div>
    </div>
</template>


<script setup>
import { ref, computed } from 'vue'

const props = defineProps({
    stepNumber: Number,
    isNamed: {
        type: Boolean,
        default: false
    }
})
</script>


<style lang="scss" scoped>
.progress__item--active {
    background: #FF515E;
}
.progress {
    max-width: 320px;
    width:100%;
    height: 20px;
    margin: 20px auto 20px auto;
    background: rgba(63, 61, 86, 0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-align: center;
    &__item {
        width: 30px;
        height: 30px;
        border: 4px solid #fff;
        background: #C7C7C7;
        border-radius: 50%;
        box-shadow: 0 0 1rem 0 #0000001b;
        &--active {
            background: #ff515e !important;
        }
    }

    &__title {
        display: inline-block;
        color: rgba(0, 0, 0, 0.5);
        text-align: center;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        line-height: 1.31;
        transform: translateX(-38%);
        position: relative;
        bottom: -30px;
        white-space: nowrap;
    }
}
</style>
