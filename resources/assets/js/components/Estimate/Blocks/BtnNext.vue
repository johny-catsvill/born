<template>
    <button class="btn" :class="classBtn">
        <img v-if="icon" :src="icon">
        {{ title }}
    </button>
</template>


<script setup>
import { ref, computed } from 'vue'

const props = defineProps({
    title: String,
    icon: {
        default: null
    },
    type: {
        default: 'default'
    },
})

const classBtn = computed(() => {
    return {
        'btn--success': props.type === 'success',
        'btn--black': props.type === 'black',
        'btn--red': props.type === 'red',
    }
})

</script>


<style lang="scss" scoped>
.btn {
    width: 100%;
    padding: 12px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    outline: none;
    border-radius: .8rem;
    font-family: 'Roboto', sans-serif;
    font-size: 2.3rem;
    text-transform: uppercase;
    cursor: pointer;
    border-width: .1rem;
    border-style: solid;
    border-color: #FF515E;
    color: #FF515E;
    background: transparent;
    margin-top: 1.8rem;
    &--success {
        background: #FF515E;
        color: #fff;
        border-color: transparent;
    }
    &--black {
        background: #000000;
        color: #fff;
        border-color: transparent;
    }
    &--red {
        background: transparent;
        border-color: #fff;
        color: #fff;
    }
    &:disabled {
        opacity: 0.75;
    }
    img{
        margin-right: 1.8rem;
    }
}
</style>
