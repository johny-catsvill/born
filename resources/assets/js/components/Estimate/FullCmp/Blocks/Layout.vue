<template>
    <div class="layout-full">
        <div class="layout-full__inner">
            <div class="f-title-box">
                <h1 class="f-title-box__title">Book a Move</h1>
                <p class="f-title-box__description">Request your move Online. <span class="f-title-box__description--accent"> See Your Quote In two Easy Steps.</span></p>
            </div>
            <div style="font-size: 1.5em; margin-bottom: 5em">
                <Stepper
                    :is-named="true"
                    :step-number="stepNumber"
                />
            </div>
            <slot></slot>
        </div>
    </div>
</template>


<script setup>
import Stepper from '@estimate/Blocks/Stepper'
import {useGetters} from "@/utils/stateLib";
import {estimateFullStore} from "@/utils/storePath";

const {stepNumber} = useGetters(estimateFullStore)

</script>
