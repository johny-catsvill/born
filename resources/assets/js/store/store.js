import {createStore} from 'vuex'
import Estimate from './modules/estimate/estimate'
import EstimateFull from './modules/estimate/estimateFull'
import Common from './modules/estimate/common'

const debug = process.env.MIX_APP_ENV !== 'production'

export default new createStore({
    modules: {
        EstimateModule: {
            namespaced: true,
            modules: {
                Estimate,
                EstimateFull,
                Common
            }
        }
    },
    strict: debug
})
