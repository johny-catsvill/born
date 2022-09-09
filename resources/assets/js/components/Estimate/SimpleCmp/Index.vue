<template>
    <Layout>
        <StepBuilder />
    </Layout>
</template>


<script setup>
import { onMounted } from 'vue'
import {useMutations, useActions} from "@/utils/stateLib"
import {estimateCommonStore} from "@/utils/storePath";
import {addScriptToHead} from "@/utils";

import Layout from './Blocks/Layout'
import StepBuilder from './StepBuilder'

const { LOAD_GOOGLE_API } = useMutations(estimateCommonStore)
const { getAction: getCommonAction } = useActions(estimateCommonStore)

getCommonAction()

onMounted(() => {
    /* Добавление Google Autocomplete script в Head */
    const apiKey = process.env.MIX_GOOGLE_MAPS_API_KEY
    const scriptId = 'wkn-google-autocomplete'
    const scriptSrc = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places&language=en`
    addScriptToHead(scriptId, scriptSrc, 'EstimateCmp').then(() => {
        LOAD_GOOGLE_API()
    })
})
</script>
