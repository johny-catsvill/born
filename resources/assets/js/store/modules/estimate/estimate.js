import {estimateCommonStore} from "@/utils/storePath";
import {clearPhoneForSend} from "@/utils";

const dayRates = [
    {key: 0, name: 'Discount', color: '#1fc5ac'},
    {key: 1, name: 'Regular', color: '#1fc5ac'},
    {key: 2, name: 'SubPeak', color: '#1fc5ac'},
    {key: 3, name: 'Peak', color: '#1fc5ac'},
    {key: 4, name: 'HighPeak', color: '#1fc5ac'},
]


const state = () => ({
    moving_from_query: null,
    moving_from_coordinates: null,
    moving_to_coordinates: null,
    moving_to_query: null,
    currentStep: 'MoveDateForm',
    stepNumber: 1,
    form: {
        provider_id: 50,
        company_name: null,
        field_date: null,

        field_move_service_type: null,
        field_bedroom_size: null,

        field_type_of_entrance_from: null,
        moving_from_state: null,
        moving_from_city: null,
        moving_from_zip: null,
        thoroughfare_from: null,
        field_apt_from: null,

        field_type_of_entrance_to_: null,
        moving_to_state: null,
        moving_to_city: null,
        moving_to_zip: null,
        thoroughfare_to: null,
        field_apt_to: null,

        storage_or_labor: false,

        field_first_name: null,
        field_last_name: null,
        field_e_mail: null,
        field_phone: null,
        get_autologin_link: 1
    },
    autologinLink: null
})

const getters = {
    form: state => state.form,
    fromQueryAddress: state => state.moving_from_query,
    fromCoordinates: state => state.moving_from_coordinates,
    toCoordinates: state => state.moving_to_coordinates,
    toQueryAddress: state => state.moving_to_query,
    calendarDatesColor: (state, getters, rootState, rootGetters) => {
        const calendarDates = rootGetters['EstimateModule/Common/calendarDates']

        const res = Object.keys(calendarDates).filter(
                date => {
                    //console.log(new Date(date).getTime())
                    return new Date(date).getTime() >= new Date().getTime()
                }
            ).map(date => {
                ///console.log(date)
                return {
                    date: date,
                    color: dayRates.find(dayRate => dayRate.key === parseInt(calendarDates[date])).color
                }
            })

        return res
    },
    currentStep: state => state.currentStep,
    stepNumber: state => state.stepNumber,
    autologinLink: state => state.autologinLink,
}


const mutations = {
    UPD_FORM_FIELD(state, {name, value}) {
        state.form[name] = value
    },
    UPD_QUERY_ADDRESS(state, {type, value}) {
        state[`moving_${type}_query`] = value
    },
    UPD_COORDINATES(state, {type, value}) {
        state[`moving_${type}_coordinates`] = value
    },
    UPD_AUTOLOGIN_LINK(state, value) {
        state.autologinLink = value
    },

    UPD_CURRENT_STEP(state, value) {
        state.currentStep = value
    },
    NEXT_STEP_NUMBER(state, value) {
        state.stepNumber++
    },
    BACK_STEP_NUMBER(state, value) {
        state.stepNumber--
    },
    SET_START_STEP_NUMBER(state, value) {
        state.stepNumber = 1
    },
}

const actions = {
    async updateAddress({commit, getters, dispatch}, {type, value}) {
        const {query, coordinates, zip, state, state_code, street_address, street_number, city, full_street} = value

        commit('UPD_QUERY_ADDRESS', {type: type, value: query})
        commit('UPD_COORDINATES', {type: type, value: coordinates})
        commit('UPD_FORM_FIELD', {name: `moving_${type}_state`, value: state_code})
        commit('UPD_FORM_FIELD', {name: `moving_${type}_city`, value: city})
        commit('UPD_FORM_FIELD', {name: `moving_${type}_zip`, value: zip})
        commit('UPD_FORM_FIELD', {name: `thoroughfare_${type}`, value: full_street})

        if (
            getters.fromCoordinates && getters.toCoordinates
            && (!getters.form.field_move_service_type ||
                getters.form.field_move_service_type === '1' ||
                getters.form.field_move_service_type === '7')
        ) {
            let resDistance = await dispatch(`${estimateCommonStore}/distanceCoordinates`, {
                from_coordinates: getters.fromCoordinates,
                to_coordinates: getters.toCoordinates
            }, { root: true })

            if (resDistance >= 150 && (getters.form.field_move_service_type === '1' || !getters.form.field_move_service_type)) {
                commit('UPD_FORM_FIELD', {name: `field_move_service_type`, value: '7'})
            } else if (resDistance <= 150 && (getters.form.field_move_service_type === '7' || !getters.form.field_move_service_type)) {
                commit('UPD_FORM_FIELD', {name: `field_move_service_type`, value: '1'})
            }
        }
    },
    send({getters, commit}) {

        let reqData = JSON.parse(JSON.stringify(getters.form))
        reqData.field_phone = clearPhoneForSend(reqData.field_phone)

        return fetch('https://api.goborntomove.com/server/parser/get_lead_parsing', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({data: reqData})
        })
            .then(response => {
                return response.json();
            })
            .then(data => {
                commit('UPD_AUTOLOGIN_LINK', data.autologin_link)
            })
            .catch(error => {
                console.log(error)
            })
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
}
