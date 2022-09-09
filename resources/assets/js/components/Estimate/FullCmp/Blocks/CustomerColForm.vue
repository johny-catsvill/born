<template>
    <div class="customer-col-form">
        <div class="col-form-header">
            <div class="col-form-header__title">{{ title }}</div>
        </div>
        <slot></slot>
    </div>
</template>


<script setup>
const props = defineProps({
    title: String,
})
</script>


<style lang="scss" scoped>
.col-form-header {
    background: #000;
    padding: 2.5rem;
    text-align: center;
    border-radius: 1.8rem;
    margin-bottom: 1.4rem;
    &__title {
        font-size: 26px;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
    }
}
</style>
