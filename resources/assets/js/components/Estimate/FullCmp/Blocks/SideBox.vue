<template>
    <div class="side-box" :class="{'side-box--main': isMain}">
        <slot></slot>
    </div>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters} from "@/utils/stateLib"

const props = defineProps({
    isMain: {
        type: Boolean,
        default: false
    },
})
</script>

<style lang="scss" scoped>
    .side-box {
        width: auto;
        padding: 2rem 2.2rem 2rem 2.2rem;
        border: 0.1rem solid #A7A8B5;
        border-radius: 1.8rem;
        height: 100%;
        &--main {
            background: #FF515E;
            border: none;
        }
     
    }

</style>
