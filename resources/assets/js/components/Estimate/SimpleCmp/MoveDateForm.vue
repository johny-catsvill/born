<template>
    <Screen :step-number="stepNumber">

        <template v-slot:title>
            <p class="title-box__title">Get Your Quote Online! or</p>
            <h4><a class="title-link title-box__link" href="tel:(617) 903-2609">Call Us (617) 903-2609</a></h4>
        </template>

        <FormGroup id="fast-move-date" label="Move Date" :is-error="v$.field_date.$error">
            <DatePicker v-model="moveDateModel" mode="date" :min-date='new Date()' :masks="masks">
                <template v-slot="{ inputValue, inputEvents }">
                    <input
                        class="input-simple"
                        id="fast-move-date"
                        placeholder="Select date"
                        :value="inputValue"
                        v-on="inputEvents"
                    />
                </template>
            </DatePicker>
        </FormGroup>

        <FormGroup id="fast-service" label="Service Type" :is-error="v$.field_move_service_type.$error">
            <VSelect
                id="fast-service"
                class="input-simple"
                v-model="serviceModel"
                :options="serviceTypes"
                :reduce="item => item.key"
                label="label"
                placeholder="Choose service type"
            />
        </FormGroup>
        <FormGroup id="fast-from-address" label="From Address" :is-error="v$.moving_from_zip.$error" :error-messages="v$.moving_from_zip.$errors">
            <InputAddress
                id="fast-from-address"
                class="input-simple"
                v-if="isLoadingGoogle"
                v-model="addressFromModel"
                placeholder="Start typing"
            />
        </FormGroup>
        <FormGroup id="fast-to-address" label="To Address" :is-error="v$.moving_to_zip.$error" :error-messages="v$.moving_to_zip.$errors">
            <InputAddress
                id="fast-to-address"
                class="input-simple"
                v-if="isLoadingGoogle"
                v-model="addressToModel"
                placeholder="Start Typing"
            />
        </FormGroup>

        <BtnNext
            title="Continue"
            icon="/assets/images/estimate-cmp/icon.png"
            type="success"
            @click.prevent="nextStep()"
        />

    </Screen>
</template>


<script setup>

import { ref, computed, watch } from 'vue'
import {useGetters, useMutations, useActions} from "@/utils/stateLib"
import {estimateCommonStore, estimateSimpleStore} from "@/utils/storePath";

import Screen from './Blocks/Screen'
import BtnNext from '../Blocks/BtnNext'
import InputAddress from '../Fields/InputAddress'
import FormGroup from '@estimate/Blocks/FormGroup'
import VSelect from 'vue-select'
import { DatePicker } from 'v-calendar';
import {required, helpers} from "@vuelidate/validators";
import {useVuelidate} from "@vuelidate/core";
import {formatDate, validAddressFrom, validAddressTo} from "@/utils";

const {form, stepNumber} = useGetters(estimateSimpleStore)
const { isLoadingGoogle } = useGetters(estimateCommonStore)

const { UPD_FORM_FIELD } = useMutations(estimateSimpleStore)

/* Move Date */
const masks = {
    input: 'MMM DD, YYYY',
    data: 'YYYY-MM-DD'
}

const moveDateModel = computed({
    get: () => form.value.field_date,
    set: (val) => UPD_FORM_FIELD({name: 'field_date', value: formatDate(val)})
})

/* Service type */
const { serviceTypes } = useGetters(estimateCommonStore)

const serviceModel = computed({
    get: () => form.value.field_move_service_type,
    set: (val) => UPD_FORM_FIELD({name: 'field_move_service_type', value: val})
})

/* Addresses */
const { fromQueryAddress, toQueryAddress } = useGetters(estimateSimpleStore)
const { UPD_QUERY_ADDRESS } = useMutations(estimateSimpleStore)
const { updateAddressAction } = useActions(estimateSimpleStore)

const addressFromModel = computed({
    get: () => fromQueryAddress.value,
    set: (val) => updateAddressAction({type: 'from', value: val})
})

const addressToModel = computed({
    get: () => toQueryAddress.value,
    set: (val) => updateAddressAction({type: 'to', value: val})
})

/*watch(question, async (newQuestion, oldQuestion) => {
    if (newQuestion.indexOf('?') > -1) {
        answer.value = 'Thinking...'
        try {
            const res = await fetch('https://yesno.wtf/api')
            answer.value = (await res.json()).answer
        } catch (error) {
            answer.value = 'Error! Could not reach the API. ' + error
        }
    }
})*/

/* Validation */

const validRules ={
    field_date: { required },
    field_move_service_type: { required },
    moving_from_zip: {
        validAddressFrom: helpers.withMessage("Select an address from the List", validAddressFrom)
    },
    moving_to_zip: {
        validAddressTo: helpers.withMessage("Select an address from the List", validAddressTo)
    },
}

const v$ = useVuelidate(validRules, form)


/* Actions */

const { UPD_CURRENT_STEP, NEXT_STEP_NUMBER } = useMutations(estimateSimpleStore)

function nextStep() {
    v$.value.$reset()
    setTimeout(() => {
        if (v$.value.$invalid){
            v$.value.$touch()
        } else {
            UPD_CURRENT_STEP('MoveSizeForm')
            NEXT_STEP_NUMBER()
        }
    }, 50)
}
</script>
<style scoped>


</style>
