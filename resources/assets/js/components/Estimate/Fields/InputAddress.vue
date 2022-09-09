<template>
    <VueGoogleAutocomplete
        ref="inputAutocompleteRef"
        :id="id"
        country="us"
        :placeholder="placeholder"
        v-on:placechanged="getAddressData"
        :fields="['address_component', 'geometry']"
        autocomplete="off"
    >
    </VueGoogleAutocomplete>
</template>


<script setup>
import { reactive, ref, computed, watch, onMounted } from 'vue'
import VueGoogleAutocomplete from 'vue-google-autocomplete'

const inputAutocompleteRef = ref(null)

const currentValue = ref(null)

const addressComponents = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
}

const props = defineProps({
    placeholder: String,
    modelValue: {
        default: null
    },
    id: String
})

const emit = defineEmits(['update:modelValue'])

function getAddressData (addressData, placeResultData, id) {
    const result = {
        query: inputAutocompleteRef.value.$refs.autocomplete.value
    }

    console.log(addressData, placeResultData)

    for (let i = 0; i < placeResultData.address_components.length; i++) {
        const addressType = placeResultData.address_components[i].types[0]

        if (addressType === 'administrative_area_level_1') {
            const valLong = placeResultData.address_components[i]['long_name']
            const valShort = placeResultData.address_components[i]['short_name']

            result.state = valLong
            result.state_code = valShort
        } else if (addressType === 'postal_code') {
            const val = placeResultData.address_components[i][addressComponents[addressType]]
            result.zip = val
        } else if (addressType === 'route') {
            const val = placeResultData.address_components[i][addressComponents[addressType]]
            result.street_address = val
        } else if (addressType === 'street_number') {
            const val = placeResultData.address_components[i][addressComponents[addressType]]
            result.street_number = val
        } else if (addressType === 'locality') {
            const val = placeResultData.address_components[i][addressComponents[addressType]]
            result.city = val
        }
    }

    if (!result.city && result.state_code === 'NY') {
        result.city = 'New York'
    }

    const streetAddress = placeResultData.address_components.find(item => 'route' === item.types[0])
    const streetAddressVal = streetAddress ? streetAddress[addressComponents['route']] : null

    const streetNumber = placeResultData.address_components.find(item => 'street_number' === item.types[0])
    const streetNumberVal = streetNumber ? streetNumber[addressComponents['street_number']] : null

    let full_street = []
    if (streetNumberVal) full_street.push(streetNumberVal)

    if (streetAddressVal) full_street.push(streetAddressVal)

    result.full_street = full_street.join(' ')

    const location = placeResultData.geometry.location
    result.coordinates = {lat: location.lat(), lng: location.lng()}

    emit('update:modelValue', result)
}

const propValue = ref(props.modelValue)

watch(propValue, (newVal, oldVal) => {
    const fixVal = newVal === undefined ? null : newVal
    currentValue.value = fixVal
})

onMounted(() => {
    if (props.modelValue && props.modelValue.length > 0)
        inputAutocompleteRef.value.update(props.modelValue)
})
</script>
