<template>
    <div class="row" :style="{gap: props.gutter}">
        <slot></slot>
    </div>
</template>


<script setup>
const props = defineProps({
    gutter: {
        type: String,
        default: '0'
    },
})
</script>


<style lang="scss" scoped>
.row{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    width: 100%;
    padding:0!important;
    margin:0!important;
    &::before {
        content:none;
    }
    &::after{
        content:none;
    }
}
</style>
