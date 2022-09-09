import {listFormat} from "@/utils";

const state = () => ({
    data: {
        field_lists: {
            field_move_service_type: [],
            field_type_of_entrance_from: [],
            field_type_of_entrance_to_: [],
            field_size_of_move: [],
        }
    },
    aboutUsList: [
        'Yelp',
        'Google Search',
        'Word of Mouth',
        'Thumbtack',
        'Repeat Customer',
        'Postcard by mail',
    ],
    isLoadingGoogle: false,
})

const getters = {
    serviceTypes: state => listFormat(state.data.field_lists.field_move_service_type),
    entrancesFrom: state => listFormat(state.data.field_lists.field_type_of_entrance_from),
    entrancesTo: state => listFormat(state.data.field_lists.field_type_of_entrance_to_),
    moveSizes: state => listFormat(state.data.field_lists.field_size_of_move),
    calendarDates: state => {
        const result = {};

        Object.values(state.data.calendar).forEach(nestedObject => {
            Object.assign(result, nestedObject);
        });

        return result;
    },
    aboutUsList: state => state.aboutUsList,
    isLoadingGoogle: state => state.isLoadingGoogle,
}


const mutations = {
    SET_DATA(state, data) {
        state.data = data
    },
    LOAD_GOOGLE_API(state) {
        state.isLoadingGoogle = true
    },
}

const actions = {
    get({commit}) {
        return fetch('https://api.goborntomove.com/server/front/frontpage', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
        })
            .then(response => {
                return response.json();
            })
            .then(data => {
                commit('SET_DATA', data)
            })
            .catch(error => {
                console.log(error);
            });
    },
    distanceCoordinates({getters, commit}, {from_coordinates, to_coordinates}) {
        return fetch('/distance-coordinates', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({from_coordinates, to_coordinates})
        })
            .then(response => {
                return response.json();
            })
            .then(data => {
                return Promise.resolve(data.distance)
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
    actions
}
