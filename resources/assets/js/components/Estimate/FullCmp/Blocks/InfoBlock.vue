<template>
    <div class="info-block">
        <img class="info-block__icon" :src="icon" :alt="title">
        <div>
            <h4 class="info-block__title">{{ title }}</h4>
            <p class="info-block__description">{{ description }}</p>
        </div>
    </div>
</template>


<script setup>
const props = defineProps({
    icon: String,
    title: String,
    description: String,
})
</script>


<style lang="scss" scoped>
    .info-block {
        background: rgba(173, 176, 194, 0.2);
        padding: 10px;
        border-radius: 1.8rem;
        display: flex;
        align-items: start;
        //margin-bottom: 2rem;
        + .info-block {
            margin-top: 2rem;
        }
        &__icon {
            width: 30px;
            flex-shrink: 0;
            margin-right: 10px;
        }
        &__title {
            color: #252849;
            font-size: 26px;
            font-weight: 600;
            line-height: 1.08;
            padding-bottom: 0.4rem;
        }
        &__description {
            color: rgba(37, 40, 73, 0.5);
            font-size: 16px;
            font-weight: 400;
            line-height: 1.2;
        }
    }
</style>
