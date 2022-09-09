<template>
    <date-picker
        autocomplete="autocomplete_off_hack_xfr4!k"
        placeholder="Choose date"
        ref="input"
        style="width: 100%!important;"
        v-model="modelValue"
        value-type="MM.DD.YYYY"
        type="text"
        format="MM.DD.YYYY"
        :editable="false"
        :multiple="false"
        range-separator=","
        input-class="wkn-input"
        :disabled-date="disabledDate"
        lang="en"
        @clear="$emit('clear')"
    >
        <template v-slot:cell="{cell, date}">
                <div :style="styleCell(cell, date)">{{ cell.text }}</div>
        </template>
        <template v-slot:footer>
            <marker-list />
        </template>
    </date-picker>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters, useMutations, useActions} from "@/utils/stateLib"

import DatePicker from "@believe2013/vue2-datepicker";
import MarkerList from "./MarkerList";

const props = defineProps({
    placeholder: String,
    range: Boolean,
    modelValue: String,
})

const emit = defineEmits(['update:modelValue', 'clear'])

const inputModel = computed({
    get: () => props.modelValue,
    set: (val) => emit('update:modelValue', val)
})

//

const { calendarDatesColor } = useGetters('EstimateModule/Estimate')

function disabledDate(date) {
    return date.getTime() < new Date().getTime()
}

function styleCell(cell, date) {
    const markedDate = calendarDatesColor.value.find(item => item.date === date)

    const styleObj = {}


    styleObj.backgroundColor = hexToRGBA(markedDate.marker.color, 0.3)

    return styleObj
}

function token() {
    return 'YYYY-MM-DD'
}
</script>


<style lang="scss">
	.mx-calendar-content .cell {
		color: #111 !important;
		&:hover {
			color: #111;
			background-color: transparent;
			border: 1px solid #999;
		}
		&.active {
			color: #111 !important;
			background-color: transparent !important;
			border: 1px solid #111;
		}
		&.not-current-month {
			color: #666 !important;
		}
		&.disabled {
			color: #666 !important;
		}

	}

	.mx-table-date .cell.today {
		color: #2a90e9 !important;
	}

</style>
