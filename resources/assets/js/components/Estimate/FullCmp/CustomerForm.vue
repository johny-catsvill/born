<template>
    <Screen :key="stepNumber">
        <Row gutter="1.7rem">
            <Col width="28%">
                <SideBox is-main>
                    <Row style="margin-bottom: 2rem">
                        <Col>
                            <Award
                                image="/assets/images/estimate-cmp/Bonus_perspective_matte.png"
                                title="Boston's Award Winning Service For 2 Years Straight!"
                            />
                        </Col>
                    </Row>
                    <Row gutter="1.7rem">
                        <Col>
                            <Award
                                image="/assets/images/estimate-cmp/angies-list-1.png"
                                title="Award 2016"
                            />
                        </Col>
                        <Col>
                            <Award
                                image="/assets/images/estimate-cmp/angies-list-2.png"
                                title="Award 2017"
                            />
                        </Col>
                    </Row>
                </SideBox>
            </Col>

            <Col width="23.7%">
                <SideBox class="h100">
                    <CustomerColForm title="Customer Info">
                        <div class="form-inputs">
                            <input class="form-inputs__item"
                                   :class="{'form-inputs__item--error': v$.field_first_name.$error}"
                                   v-model="firstNameModel"
                                   type="text"
                                   placeholder="First Name">
                            <input class="form-inputs__item"
                                   :class="{'form-inputs__item--error': v$.field_last_name.$error}"
                                   v-model="lastNameModel"
                                   type="text"
                                   placeholder="Last Name">
                            <input class="form-inputs__item"
                                   :class="{'form-inputs__item--error': v$.field_phone.$error}"
                                   v-model="phoneModel"
                                   @maska="phoneRaw = $event.target.dataset.maskRawValue"
                                   v-maska="'+1 (###) ###-####'"
                                   type="text"
                                   placeholder="Primary phone">
                            <input class="form-inputs__item"
                                   :class="{'form-inputs__item--error': v$.field_e_mail.$error}"
                                   v-model="emailModel"
                                   type="text"
                                   placeholder="Email">

                            <VSelect
                                class="form-inputs__item"
                                :class="{'form-inputs__item--error': v$.company_name.$error}"
                                v-model="companyNameModel"
                                :options="aboutUsList"
                                placeholder="Choose answer"
                            />
                        </div>
                    </CustomerColForm>
                </SideBox>
            </Col>

            <Col>
                <SideBox class="h100">
                    <ToBottomLayout>
                        <Row gutter="1.7rem">
                            <Col>
                                <CustomerColForm title="Moving From">
                                    <div class="form-inputs">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.thoroughfare_from.$error}"
                                               v-model="addressFromModel"
                                               disabled
                                               placeholder="From Address">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.moving_from_city.$error}"
                                               v-model="cityFromModel"
                                               disabled
                                               placeholder="From City">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.moving_from_state.$error}"
                                               v-model="stateFromModel"
                                               disabled
                                               placeholder="From State">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.moving_from_zip.$error}"
                                               v-model="zipFromModel"
                                               disabled
                                               placeholder="From Zip">
                                    </div>
                                </CustomerColForm>
                            </Col>
                            <Col>
                                <CustomerColForm title="Moving To">
                                    <div class="form-inputs">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.thoroughfare_from.$error}"
                                               v-model="addressToModel"
                                               disabled
                                               placeholder="To Address">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.moving_from_city.$error}"
                                               v-model="cityToModel"
                                               disabled
                                               placeholder="To City">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.moving_from_state.$error}"
                                               v-model="stateToModel"
                                               disabled
                                               placeholder="To State">
                                        <input type="text"
                                               class="form-inputs__item"
                                               :class="{'form-inputs__item--error': v$.moving_from_zip.$error}"
                                               v-model="zipToModel"
                                               disabled
                                               placeholder="To Zip">
                                    </div>
                                </CustomerColForm>
                            </Col>
                        </Row>


                        <template v-slot:bottom>
                                                    <BtnNext title="Go Back" @click.prevent="backStep()" />
                        <BtnNext
                            title="Go to confirmation"
                            icon="/assets/images/estimate-cmp/icon.png"
                            type="success"
                            @click.prevent="nextStep()"
                        />
                        </template>

                    </ToBottomLayout>
                </SideBox>
            </Col>

        </Row>
    </Screen>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters, useMutations, useActions} from "@/utils/stateLib"
import {estimateFullStore, estimateCommonStore, estimateSimpleStore} from "@/utils/storePath";
import { useVuelidate } from '@vuelidate/core'
import { email, required } from '@vuelidate/validators'
import {validPhone} from "@/utils";

import Screen from './Blocks/Screen'
import ToBottomLayout from './Blocks/ToBottomLayout'
import SideBox from './Blocks/SideBox'
import Award from './Blocks/Award'
import CustomerColForm from './Blocks/CustomerColForm'
import Row from '../Blocks/Grid/Row'
import Col from '../Blocks/Grid/Col'
import BtnNext from '@estimate/Blocks/BtnNext'
import VSelect from 'vue-select'

const {stepNumber} = useGetters(estimateFullStore)

const { isLoadingGoogle } = useGetters(estimateCommonStore)
const { form } = useGetters(estimateFullStore)
const { UPD_FORM_FIELD } = useMutations(estimateFullStore)

/* First Name */
const firstNameModel = computed({
    get: () => form.value.field_first_name,
    set: (val) => UPD_FORM_FIELD({name: 'field_first_name', value: val})
})

/* Last Name */
const lastNameModel = computed({
    get: () => form.value.field_last_name,
    set: (val) => UPD_FORM_FIELD({name: 'field_last_name', value: val})
})

/* Phone */
const phoneRaw = ref(null)
const phoneModel = computed({
    get: () => form.value.field_phone,
    set: (val) => UPD_FORM_FIELD({name: 'field_phone', value: val})
})

/* Email */
const emailModel = computed({
    get: () => form.value.field_e_mail,
    set: (val) => UPD_FORM_FIELD({name: 'field_e_mail', value: val})
})

/* About us */
const { aboutUsList } = useGetters(estimateCommonStore)

const companyNameModel = computed({
    get: () => form.value.company_name,
    set: (val) => UPD_FORM_FIELD({name: 'company_name', value: val})
})

/* Moving From */

const addressFromModel = computed({
    get: () => form.value.thoroughfare_from,
    set: (val) => UPD_FORM_FIELD({name: 'thoroughfare_from', value: val})
})

const cityFromModel = computed({
    get: () => form.value.moving_from_city,
    set: (val) => UPD_FORM_FIELD({name: 'moving_from_city', value: val})
})

const stateFromModel = computed({
    get: () => form.value.moving_from_state,
    set: (val) => UPD_FORM_FIELD({name: 'moving_from_state', value: val})
})

const zipFromModel = computed({
    get: () => form.value.moving_from_zip,
    set: (val) => UPD_FORM_FIELD({name: 'moving_from_zip', value: val})
})

/* Moving To */

const addressToModel = computed({
    get: () => form.value.thoroughfare_to,
    set: (val) => UPD_FORM_FIELD({name: 'thoroughfare_to', value: val})
})

const cityToModel = computed({
    get: () => form.value.moving_to_city,
    set: (val) => UPD_FORM_FIELD({name: 'moving_to_city', value: val})
})

const stateToModel = computed({
    get: () => form.value.moving_to_state,
    set: (val) => UPD_FORM_FIELD({name: 'moving_to_state', value: val})
})

const zipToModel = computed({
    get: () => form.value.moving_to_zip,
    set: (val) => UPD_FORM_FIELD({name: 'moving_to_zip', value: val})
})

/* Validation */
const validForm = computed(() => (Object.assign({}, form.value, {
    field_phone: phoneRaw.value,
})))

const validRules ={
    field_first_name: { required },
    field_last_name: { required },
    field_phone: { required, validPhone },
    field_e_mail: { required, email },
    company_name: { required },

    thoroughfare_from: { required },
    moving_from_city: { required },
    moving_from_state: { required },
    moving_from_zip: { required },

    thoroughfare_to: { required },
    moving_to_city: { required },
    moving_to_state: { required },
    moving_to_zip: { required },
}

const v$ = useVuelidate(validRules, validForm)


/* Actions */

const { UPD_CURRENT_STEP, NEXT_STEP_NUMBER, BACK_STEP_NUMBER } = useMutations(estimateFullStore)

const { sendAction } = useActions(estimateFullStore)

function nextStep() {
    v$.value.$reset()
    setTimeout(async () => {
        if (v$.value.$invalid){
            v$.value.$touch()
        } else {
            await sendAction()
            UPD_CURRENT_STEP('Confirmation')
            NEXT_STEP_NUMBER()
        }
    }, 50)
}

function backStep() {
    UPD_CURRENT_STEP('MoveDateForm')
    BACK_STEP_NUMBER()
}
</script>
