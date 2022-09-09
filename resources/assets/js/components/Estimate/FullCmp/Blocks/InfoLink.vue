<template>
    <div class="info-link">
        <a class="info-link__link" :href="link">
            <span class="info-link__title">{{ title }}</span> <img class="info-link__icon" :src="icon" alt="">
        </a>
    </div>
</template>


<script setup>
const props = defineProps({
    icon: String,
    title: String,
    link: String,
})
</script>


<style lang="scss" scoped>
.info-link {
    background: rgba(173, 176, 194, 0.2);
    padding: 2.5rem;
    border-radius: 1.8rem;
    display: flex;
    align-items: start;
    margin-bottom: 2rem;
    justify-content: center;
    &__link {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
    }
    &__icon {
        //width: 4rem;
        flex-shrink: 0;
        margin-right: 1.5rem;
        padding-left: 3rem;
    }
    &__title {
        color: #000000;
        font-size: 2.8rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
    }
}
</style>
