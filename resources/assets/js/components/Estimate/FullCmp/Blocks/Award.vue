<template>
    <div class="award">
        <img class="award__image" :src="image" alt="">
        <p class="award__title">{{ title }}</p>
    </div>
</template>


<script setup>
const props = defineProps({
    image: String,
    title: String,
})
</script>


<style lang="scss" scoped>
.award {
    text-align: center;
    background: #fff;
    border-radius: 1.8rem;
    margin-bottom:10px;
    padding: 30px;

    &__image {
        max-width: 100%;
        margin: auto;
    }
    &__title {
        color: #252849;
        font-size: 2.4rem;
        font-weight: 600;
    }
}
</style>
