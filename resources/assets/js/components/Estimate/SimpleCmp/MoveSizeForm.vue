<template>
    <Screen :step-number="stepNumber">
        <template v-slot:title>
            <p class="calc-sm-title-box-title">
                <span class="title-box__title--accent">It's Simple!</span> Just two easy steps,<br> and you'll see quote.
            </p>
        </template>

        <FormGroup id="fast-size" label="Move size" :is-error="v$.field_bedroom_size.$error">
            <VSelect
                id="fast-size"
                class="input-simple"
                v-model="moveSizeModel"
                :options="moveSizes"
                :reduce="item => item.key"
                label="label"
                placeholder="Choose Size"
            />
        </FormGroup>

        <FormGroup id="fast-from-entrance" label="Type of entrance (From)" :is-error="v$.field_type_of_entrance_from.$error">
            <VSelect
                id="fast-from-entrance"
                class="input-simple"
                v-model="entranceFromModel"
                :options="entrancesFrom"
                :reduce="item => item.key"
                label="label"
                placeholder="Choose Entrance"
            />
        </FormGroup>

        <FormGroup id="fast-to-entrance" label="Type of entrance (To)" :is-error="v$.field_type_of_entrance_to_.$error">
            <VSelect
                id="fast-to-entrance"
                class="input-simple"
                v-model="entranceToModel"
                :options="entrancesTo"
                :reduce="item => item.key"
                label="label"
                placeholder="Choose Entrance"
            />
        </FormGroup>

        <FormGroup id="fast-to-about-us" label="How Did you hear about us" :is-error="v$.company_name.$error">
            <VSelect
                id="fast-to-about-us"
                class="input-simple"
                v-model="companyNameModel"
                :options="aboutUsList"
                placeholder="Choose answer"
            />
        </FormGroup>
            <BtnNext title="Go Back" @click.prevent="backStep()" />
            <BtnNext title="Continue" type="success" @click.prevent="nextStep()" />
    </Screen>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters, useMutations} from "@/utils/stateLib"
import {estimateSimpleStore, estimateCommonStore} from "@/utils/storePath";

import FormGroup from '@estimate/Blocks/FormGroup'
import Screen from './Blocks/Screen'
import VSelect from 'vue-select'
import BtnNext from '../Blocks/BtnNext'
import {required} from "@vuelidate/validators";
import {useVuelidate} from "@vuelidate/core";

const {stepNumber} = useGetters(estimateSimpleStore)

const { form } = useGetters(estimateSimpleStore)
const { UPD_FORM_FIELD } = useMutations(estimateSimpleStore)

/* Move Size */
const {moveSizes} = useGetters(estimateCommonStore)

const moveSizeModel = computed({
    get: () => form.value.field_bedroom_size,
    set: (val) => UPD_FORM_FIELD({name: 'field_bedroom_size', value: val})
})

/* Entrances */
const { entrancesFrom, entrancesTo } = useGetters(estimateCommonStore)

const entranceFromModel = computed({
    get: () => form.value.field_type_of_entrance_from,
    set: (val) => UPD_FORM_FIELD({name: 'field_type_of_entrance_from', value: val})
})

const entranceToModel = computed({
    get: () => form.value.field_type_of_entrance_to_,
    set: (val) => UPD_FORM_FIELD({name: 'field_type_of_entrance_to_', value: val})
})

/* About us */
const { aboutUsList } = useGetters(estimateCommonStore)

const companyNameModel = computed({
    get: () => form.value.company_name,
    set: (val) => UPD_FORM_FIELD({name: 'company_name', value: val})
})

/* Validation */

const validRules ={
    field_bedroom_size: { required },
    field_type_of_entrance_from: { required },
    field_type_of_entrance_to_: { required },
    company_name: { required },
}

const v$ = useVuelidate(validRules, form)


/* Actions */

const { UPD_CURRENT_STEP, BACK_STEP_NUMBER, NEXT_STEP_NUMBER } = useMutations(estimateSimpleStore)

function nextStep() {
    v$.value.$reset()
    setTimeout(() => {
        if (v$.value.$invalid){
            v$.value.$touch()
        } else {
            UPD_CURRENT_STEP('CustomerForm')
            NEXT_STEP_NUMBER()
        }
    }, 50)
}

function backStep() {
    UPD_CURRENT_STEP('MoveDateForm')
    BACK_STEP_NUMBER()
}
</script>
