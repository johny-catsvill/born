<template>
    <transition name="fade" mode="out-in">
        <component :is="currentView()" />
    </transition>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters} from "@/utils/stateLib"
import {estimateFullStore} from "@/utils/storePath";

import MoveDateForm from './MoveDateForm'
import CustomerForm from './CustomerForm'
import Confirmation from './Confirmation'

const stepsCmp = {
    MoveDateForm: MoveDateForm,
    CustomerForm: CustomerForm,
    Confirmation: Confirmation,
}

const {currentStep} = useGetters(estimateFullStore)

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
