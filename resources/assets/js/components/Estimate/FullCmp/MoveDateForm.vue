<template>
    <Screen :key="stepNumber">
        <Row gutter="1.7rem">
            <Col width="27%">
                <SideBox class="h100">
                    <InfoLink
                        icon="/assets/images/estimate-cmp/arrow_right.png"
                        title="Let's get started"
                        link="#"
                    />

                    <InfoBlock
                        icon="/assets/images/estimate-cmp/box_i1.png"
                        title="It's Easy"
                        description="Just two easy steps, and see your results price quote."
                    />

                    <InfoBlock
                        icon="/assets/images/estimate-cmp/box_i2.png"
                        title="It's Fast"
                        description="Enter when, where, and what you're moving, and get a preliminary estimate for any local move within seconds."
                    />

                    <InfoBlock
                        icon="/assets/images/estimate-cmp/box_i3.png"
                        title="It's Safe"
                        description="There is no obligation. By submitting a request you are just getting an estimate and checking availability for your move."
                    />
                </SideBox>
            </Col>

            <Col>
                <SideBox is-main class="h100">
                    <ToBottomLayout>
                        <Row gutter="1.7rem">
                            <Col>
                                <FormGroup id="move-date" label="Desired Move Date" :is-error="v$.field_date.$error">
                                    <DatePicker v-model="moveDateModel" mode="date" :min-date='new Date()' :masks="masks">
                                        <template v-slot="{ inputValue, inputEvents }">
                                            <input
                                                class="input-simple"
                                                id="move-date"
                                                placeholder="Select date"
                                                :value="inputValue"
                                                v-on="inputEvents"
                                            />
                                        </template>
                                    </DatePicker>
                                </FormGroup>
                            </Col>
                            <Col>
                                <FormGroup id="move-date" label="Service Type" :is-error="v$.field_move_service_type.$error">
                                    <VSelect
                                        id="full-service"
                                        class="input-simple"
                                        v-model="serviceModel"
                                        :options="serviceTypes"
                                        :reduce="item => item.key"
                                        label="label"
                                        placeholder="Choose service type"
                                    />
                                </FormGroup>
                            </Col>
                        </Row>
                        <Row gutter="1.7rem">
                            <Col>
                                <FormGroup id="full-from-address" label="From Address" :is-error="v$.moving_from_zip.$error" :error-messages="v$.moving_from_zip.$errors">
                                    <InputAddress
                                        class="input-simple"
                                        v-if="isLoadingGoogle"
                                        v-model="addressFromModel"
                                        id="full-from-address"
                                        placeholder="Start Typing"
                                    />
                                </FormGroup>
                            </Col>
                            <Col>
                                <FormGroup id="full-to-address" label="To Address" :is-error="v$.moving_to_zip.$error" :error-messages="v$.moving_to_zip.$errors">
                                    <InputAddress
                                        class="input-simple"
                                        v-if="isLoadingGoogle"
                                        v-model="addressToModel"
                                        id="full-to-address"
                                        placeholder="Start Typing"
                                    />
                                </FormGroup>
                            </Col>
                        </Row>

                        <FormGroup id="full-move-size" label="Size of Move" :is-error="v$.field_bedroom_size.$error">
                            <VSelect
                                id="full-move-size"
                                class="input-simple"
                                v-model="moveSizeModel"
                                :options="moveSizes"
                                :reduce="item => item.key"
                                label="label"
                                placeholder="Choose size"
                            />
                        </FormGroup>

                        <FormGroup id="full-from-entrance" label="Type of entrance (From)" :is-error="v$.field_type_of_entrance_from.$error">
                            <VSelect
                                id="full-from-entrance"
                                class="input-simple"
                                v-model="entranceFromModel"
                                :options="entrancesFrom"
                                :reduce="item => item.key"
                                label="label"
                                placeholder="From Type"
                            />
                        </FormGroup>

                        <FormGroup id="full-to-entrance" label="Type of entrance (to)" :is-error="v$.field_type_of_entrance_to_.$error">
                            <VSelect
                                id="full-to-entrance"
                                class="input-simple"
                                v-model="entranceToModel"
                                :options="entrancesTo"
                                :reduce="item => item.key"
                                label="label"
                                placeholder="To Type"
                            />
                        </FormGroup>

                        <template v-slot:bottom>
                            <Row gutter="1.7rem">
                                <Col>
                                    <BtnNext title="Clear form"
                                        icon="/assets/images/estimate-cmp/refresh.png"
                                        type="red"
                                        @click.prevent="clear()"
                                    />

                                </Col>

                                <Col>
                                    <BtnNext
                                        title="Calculate"
                                        icon="/assets/images/estimate-cmp/icon.png"
                                        type="black"
                                        @click.prevent="nextStep()"
                                    />
                                </Col>
                            </Row>
                        </template>
                    </ToBottomLayout>
                </SideBox>
            </Col>

            <Col width="29%">
                <SideBox class="h100">
                    <InfoBlock
                        icon="/assets/images/estimate-cmp/box_i4.png"
                        title="Size of move"
                        description="Please don't underestimate the size of your move! Make your choice wisely! It helps us meet our schedule and guards against unexpected surprises."
                    />

                    <InfoBlock
                        icon="/assets/images/estimate-cmp/box_i5.png"
                        title="Do Not See Your Move Size?"
                        description="Once you will submit complete move request, you can also provide a precise inventory of all items, that you planning to move."
                    />

                    <InfoBlock
                        icon="/assets/images/estimate-cmp/box_i6.png"
                        title="Type of entrance"
                        description="If your ground floor apartment is  located on a hill and involves outside stairs, please choose the type of entrance accordingly to how many steps you have, NOT ground floor. 10-12 steps usually equal to one flight of stairs."
                    />
                </SideBox>
            </Col>
        </Row>
    </Screen>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters, useMutations, useActions} from "@/utils/stateLib"
import {estimateFullStore, estimateCommonStore} from "@/utils/storePath";
import {formatDate, validAddressFrom, validAddressTo} from "@/utils";
import { useVuelidate } from '@vuelidate/core'
import { required, helpers } from '@vuelidate/validators'

import ToBottomLayout from './Blocks/ToBottomLayout'
import Screen from './Blocks/Screen'
import Col from '@estimate/Blocks/Grid/Col'
import Row from '@estimate/Blocks/Grid/Row'
import InfoBlock from './Blocks/InfoBlock'
import InfoLink from './Blocks/InfoLink'
import SideBox from './Blocks/SideBox'
import FormGroup from '@estimate/Blocks/FormGroup'
import BtnNext from '@estimate/Blocks/BtnNext'
import InputAddress from '../Fields/InputAddress'
import VSelect from 'vue-select'
import { DatePicker } from 'v-calendar';

const {stepNumber} = useGetters(estimateFullStore)

const { isLoadingGoogle } = useGetters(estimateCommonStore)
const { form } = useGetters(estimateFullStore)
const { UPD_FORM_FIELD } = useMutations(estimateFullStore)



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
const { fromQueryAddress, toQueryAddress } = useGetters(estimateFullStore)
const { UPD_QUERY_ADDRESS } = useMutations(estimateFullStore)
const { updateAddressAction } = useActions(estimateFullStore)

const addressFromModel = computed({
    get: () => fromQueryAddress.value,
    set: (val) => updateAddressAction({type: 'from', value: val})
})

const addressToModel = computed({
    get: () => toQueryAddress.value,
    set: (val) => updateAddressAction({type: 'to', value: val})
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

/* MoveSize */
const { moveSizes } = useGetters(estimateCommonStore)

const moveSizeModel = computed({
    get: () => form.value.field_bedroom_size,
    set: (val) => UPD_FORM_FIELD({name: 'field_bedroom_size', value: val})
})

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
    field_bedroom_size: { required },
    field_type_of_entrance_from: { required },
    field_type_of_entrance_to_: { required },
}

const v$ = useVuelidate(validRules, form)


/* Actions */

const { UPD_CURRENT_STEP, NEXT_STEP_NUMBER } = useMutations(estimateFullStore)

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

const { CLEAR_FORM } = useMutations(estimateFullStore)

function clear() {
    CLEAR_FORM()
    v$.value.$reset()
}
</script>
