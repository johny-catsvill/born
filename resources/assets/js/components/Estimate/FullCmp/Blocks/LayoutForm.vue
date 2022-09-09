<template>
    <div class="layout-form">
        <div class="container">
            <div class="row">
                <div class="layout-form__left">
                    <slot name="left"></slot>
                </div>
                <div class="layout-form__center">
                    <slot></slot>
                </div>
                <!-- form end -->
                <div class="layout-form__right">
                    <slot name="right"></slot>
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters} from "@/utils/stateLib"


</script>


<style lang="scss" scoped>
    .layout-form{
        width: auto;
        display: flex;
        justify-content: space-between;
        padding-top: 7.6rem;
        &__left {
            max-width: 27%;
            padding: 0 1.5rem;
        }
        &__center {
            min-width: 38.7%;
            padding: 0 1.5rem;
        }
        &__right {
            max-width: 29%;
            padding: 0 1.5rem;
        }
    }
</style>
