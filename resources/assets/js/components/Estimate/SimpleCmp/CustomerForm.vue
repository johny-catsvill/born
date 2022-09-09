<template>
    <Screen :step-number="stepNumber">
        <template v-slot:title>
            <p class="calc-sm-title-box-title">Please enter your</p>
            <div class="title-box__title title-box__title--bold">Contact Information</div>
        </template>
        <form action="" autocomplete="off">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <Row gutter="1.7rem">
                <Col>
                    <FormGroup id="fast-first-name" label="First Name" :is-error="v$.field_first_name.$error">
                        <input id="fast-first-name"
                               type="text"
                               placeholder="Type First Name"
                               v-model="fistNameModel">
                    </FormGroup>
                </Col>
                <Col>
                    <FormGroup id="fast-last-name" label="Last Name" :is-error="v$.field_last_name.$error">
                        <input id="fast-last-name"
                               type="text"
                               placeholder="Type Last Name"
                               v-model="lastNameModel">
                    </FormGroup>
                </Col>
            </Row>

            <FormGroup id="fast-email" label="What's your email?" :is-error="v$.field_e_mail.$error">
                <input id="fast-email"
                       type="text"
                       placeholder="Email"
                       v-model="emailModel">
            </FormGroup>

            <FormGroup id="fast-phone" label="What's your phone?" :is-error="v$.field_phone.$error">
                <input id="fast-phone"
                       type="text"
                       v-maska="'+1 (###) ###-####'"
                       placeholder="Phone"
                       @maska="phoneRaw = $event.target.dataset.maskRawValue"
                       v-model="phoneModel">
            </FormGroup>

            <BtnNext title="Go Back" @click.prevent="backStep()" />
            <BtnNext title="Submit and View Quote" type="success" @click.prevent="nextStep()" />
        </form>
    </Screen>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useActions, useGetters, useMutations} from "@/utils/stateLib"
import {estimateSimpleStore} from "@/utils/storePath";
import {required, email} from "@vuelidate/validators";
import {useVuelidate} from "@vuelidate/core";
import {validPhone} from "@/utils";

import Row from '@estimate/Blocks/Grid/Row'
import Col from '@estimate/Blocks/Grid/Col'
import FormGroup from '@estimate/Blocks/FormGroup'
import Screen from './Blocks/Screen'
import BtnNext from '../Blocks/BtnNext'

const {stepNumber} = useGetters(estimateSimpleStore)

const { form } = useGetters(estimateSimpleStore)
const { UPD_FORM_FIELD } = useMutations(estimateSimpleStore)

/* Fist Name */
const fistNameModel = computed({
    get: () => form.value.field_first_name,
    set: (val) => UPD_FORM_FIELD({name: 'field_first_name', value: val})
})

/* Last Name */
const lastNameModel = computed({
    get: () => form.value.field_last_name,
    set: (val) => UPD_FORM_FIELD({name: 'field_last_name', value: val})
})

/* Email */
const emailModel = computed({
    get: () => form.value.field_e_mail,
    set: (val) => UPD_FORM_FIELD({name: 'field_e_mail', value: val})
})

/* Phone */
const phoneRaw = ref(null)
const phoneModel = computed({
    get: () => form.value.field_phone,
    set: (val) => UPD_FORM_FIELD({name: 'field_phone', value: val})
})

/* Validation */
const validForm = computed(() => ({
    field_first_name: form.value.field_first_name,
    field_last_name: form.value.field_last_name,
    field_e_mail: form.value.field_e_mail,
    field_phone: phoneRaw.value,
}))

const validRules ={
    field_first_name: { required },
    field_last_name: { required },
    field_e_mail: { required, email },
    field_phone: { required, validPhone },
}

const v$ = useVuelidate(validRules, validForm)


/* Actions */

const { UPD_CURRENT_STEP, BACK_STEP_NUMBER, NEXT_STEP_NUMBER } = useMutations(estimateSimpleStore)
const { sendAction } = useActions(estimateSimpleStore)
function nextStep() {
    v$.value.$reset()
    setTimeout(async () => {
        if (v$.value.$invalid){
            v$.value.$touch()
        } else {
            await sendAction()
            UPD_CURRENT_STEP('Success')
            NEXT_STEP_NUMBER()
        }
    }, 50)
}

function backStep() {
    UPD_CURRENT_STEP('MoveSizeForm')
    BACK_STEP_NUMBER()
}
</script>
