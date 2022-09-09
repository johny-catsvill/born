<template>
    <div class="form-area">
        <transition name="fade" mode="out-in">
            <component :is="currentView()" />
        </transition>
    </div>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters} from "@/utils/stateLib"
import {estimateSimpleStore} from "@/utils/storePath";

import MoveDateForm from './MoveDateForm'
import MoveSizeForm from './MoveSizeForm'
import CustomerForm from './CustomerForm'
import Success from './Success'

const stepsCmp = {
    MoveDateForm: MoveDateForm,
    MoveSizeForm: MoveSizeForm,
    CustomerForm: CustomerForm,
    Success: Success,
}

const {currentStep} = useGetters(estimateSimpleStore)

function currentView() {
    return stepsCmp[currentStep.value]
}
</script>


<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.8s ease !important;
}
.fade-enter, .fade-leave-to {
    opacity: 0 !important;
}
</style>
