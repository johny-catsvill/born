<template>
    <div class="box" :class="boxClass">
        <p class="box__text">
            <slot></slot>
        </p>
    </div>
</template>


<script setup>
import { ref, computed } from 'vue'

const props = defineProps({
    type: {
        type: String,
        default: 'default'
    },
})
const boxClass = computed(() => {
    return {
        'box--alert': props.type === 'alert'
    }
})
</script>


<style lang="scss" scoped>
.box {
    background: rgba(173, 176, 194, 0.2);
    border-radius: 1.8rem;
    padding: 2.5rem 1.5rem;
    &--alert {
        background: rgba(255, 81, 94, 0.1);
        .box__text {
            color: #FF515E;
        }
    }
    &__text {
        font-size: 2.1rem;
        color: rgba(37, 40, 73, 0.5);
    }
}
       .row {
            margin-bottom:20px !important;
        }
</style>
