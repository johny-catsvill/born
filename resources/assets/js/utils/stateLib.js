import { computed, getCurrentInstance } from 'vue'

function getVuexStore() {
    const vm = getCurrentInstance();
    const {$store} = 'proxy' in vm ? vm.proxy : vm;
    return $store
}

const useState = (module) => {
    const store = getVuexStore()

    if (module === undefined) {
        return Object.fromEntries(
            Object.keys(store.state).map(key => {
                return [key, computed(() => store.state[key])]
            }))
    }

    return Object.fromEntries(
        Object.keys(store.state[module]).filter(
            key => key.startsWith(module)
        ).map(key => [key, computed(() => store.state[module][key])] )
    )
}

const useGetters = (module) => {
    const store = getVuexStore()

    if (module === undefined) {
        return Object.fromEntries(
            Object.keys(store.getters).map(getter => {
                return [getter, computed(() => store.getters[getter])]
            }))
    }

    return Object.fromEntries(
        Object.keys(store.getters).filter(
            getter => getter.startsWith(module)
        ).map(getter => {
            let getterName = getter.substring(module.length+1)
            return [getterName, computed(() => store.getters[getter])]
        })
    )
}

const useMutations = (module) => {
    const store = getVuexStore()

    if (module === undefined) {
        return Object.fromEntries(
            Object.keys(store._mutations).map(mutation => {
                return [mutation, value => store.commit(mutation, value)]
            }))
    }

    return Object.fromEntries(
        Object.keys(store._mutations).filter(
            mutation => mutation.startsWith(module)
        ).map(mutation => {
            let mutationName = mutation.substring(module.length+1)
            return [mutationName, value => store.commit(mutation, value)]
        })
    )
}

const useActions = (module) => {
    const store = getVuexStore()

    if (module === undefined) {
        return Object.fromEntries(
            Object.keys(store._actions).map(action => {
                let actionName = action + 'Action'
                return [action, value => store.commit(action, value)]
            }))
    }

    const res = Object.fromEntries(
        Object.keys(store._actions).filter(
            action => action.startsWith(module)
        ).map(action => {
            let actionName = action.substring(module.length+1)
            actionName += 'Action'
            return [actionName, value => store.dispatch(action, value)]
        }))

    return res
}

export { useState, useGetters, useMutations, useActions }
