<template>
    <Layout>
        <StepBuilder />
    </Layout>
</template>


<script setup>
import { onMounted } from 'vue'
import {useActions, useGetters, useMutations} from "@/utils/stateLib"

import StepBuilder from './StepBuilder'
import Layout from './Blocks/Layout'
import {addScriptToHead} from "@/utils";
import {estimateCommonStore} from "@/utils/storePath";

const { LOAD_GOOGLE_API } = useMutations(estimateCommonStore)
const { getAction: getCommonAction } = useActions(estimateCommonStore)

getCommonAction()

onMounted(() => {
    /* Добавление Google Autocomplete script в Head */
    const apiKey = process.env.MIX_GOOGLE_MAPS_API_KEY
    const scriptId = 'wkn-google-autocomplete'
    const scriptSrc = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places&language=en`
    addScriptToHead(scriptId, scriptSrc, 'EstimateFullCmp').then(() => {
        LOAD_GOOGLE_API()
    })
})
</script>
