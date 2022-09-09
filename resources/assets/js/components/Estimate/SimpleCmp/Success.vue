<template>
    <Screen :is-empty="true" class="success-screen" style="text-align:center;">
        <img src="/assets/images/estimate-cmp/verify-1.png" alt="" class="success-img">
        <div class="title1">Thank you for submitting a quote!</div>
        <p class="form-txt success-screen__txt">One of our moving specialists will contact <br>you shortly, you can also call us at your<br> earliest convenience at:</p>
        <a class="title-link success-screen__link" href="tel:(617) 903-2609">Call Us (617) 903-2609</a>
        <div class="title2">Do you know you can manage<br> your quote online?</div>
        <BtnNext title="View Quote" type="success" @click.prevent="viewQuote()" v-if="!!autologinLink" />
        <BtnNext title="View Account" class="btn btn--success" @click.prevent="viewAccount()" v-else />


    </Screen>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters} from "@/utils/stateLib"
import {estimateSimpleStore} from "@/utils/storePath";

import Screen from './Blocks/Screen'
import BtnNext from '../Blocks/BtnNext'


const {autologinLink} = useGetters(estimateSimpleStore)

function viewQuote() {
    window.open(autologinLink.value, '_blank');
}
function viewAccount() {
    window.open('https://secure.goborntomove.com/account/', '_blank');
}

</script>
