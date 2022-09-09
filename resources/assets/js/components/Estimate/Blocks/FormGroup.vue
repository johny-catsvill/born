<template>
    <div class="form-group" :class="formGroupClass" ref="formGroupRef">
        <label class="form-group__label" :for="id">{{ label }}:</label>
        <slot></slot>
        <div class="form-group-messages">
            <div class="form-group-messages__item" v-for="error in errorMessages" :key="error.$uid">{{ error.$message }}</div>
        </div>
    </div>
</template>


<script setup>
import { provide, watch, ref, computed, nextTick } from 'vue'

const props = defineProps({
    id: String,
    label: String,
    isError: {
        type: Boolean,
        default: false
    },
    errorMessages: {
        default: () => []
    }
})

const isSnake = ref(false)

const formGroupClass = computed(() => {
    return {
        'form-group--error': props.isError,
        'form-group--shake': isSnake.value,
    }
})

const formGroupRef = ref(null)

async function changeSnake() {
    isSnake.value = true
    await nextTick()

    setTimeout( () => {

        isSnake.value = false
    }, 900)
}

watch(() => props.isError, async (newVal, oldVal) => {
    if (newVal === true) {
        await changeSnake()
    }
})

provide('id', props.id)
</script>


<style lang="scss" scoped>
.form-group {
    border: 1px solid hsla(236deg, 9%, 68%, 0.6);
    border-radius: 10px;
    margin-bottom: 12px;
    padding: 12px 14px;
    background: #fff;
    position: relative;
    &--error {
        border-color: #FF515E!important;
        .form-group__label {
            color: #FF515E!important;
        }
    }
    &--shake {
        animation: field-shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        transform: translate3d(0, 0, 0);
    }

    &__label {
        color: rgba(37,40,73,.5);
        display: block;
        font-size: 1em;
        font-weight: 400;
        line-height: 1.2rem;
    }
}
.form-group-messages {
    &__item {
        color: #FF515E;
    }
}
</style>
