<template>
    <div class="col" :style="colStyle">
        <slot></slot>
    </div>
</template>


<script setup>
import { computed } from 'vue'

const props = defineProps({
    width: {
        type: String,
        default: 'auto'
    },
})

const colStyle = computed(() => {
    const style = {
        'width': props.width,
    }

    if (props.width === 'auto')
        style.flex = '1'

    return style
})
</script>


<style lang="scss" scoped>
.col {
    flex-direction: column;
    padding:0!important;
    margin:0!important;
}
</style>
