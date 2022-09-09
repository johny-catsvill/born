<template>
    <div class="congrats">
        <div class="congrats__box">
            <img class="congrats__img" src="/assets/images/estimate-cmp/verify-1.png" alt="">
            <h4 class="congrats__title">Congrats! <br> Your Request Has<br> Been Submitted.</h4>
            <a class="congrats__btn" :href="props.link" target="_blank">View Request Page</a>
        </div>
    </div>
</template>


<script setup>
const props = defineProps({
    link: String,
})
</script>


<style lang="scss" scoped>
.congrats{
    background: #FF515E;
    padding: 2rem 2.2rem;
    text-align: center;
    border-radius: 1.8rem;
    &__box{
        background: #fff;
        border-radius: 1.8rem;
        padding: 16rem 0;
    }
    &__img{
        padding-bottom: 2.1rem;
    }
    &__title {
        font-size: 2.4rem;
        font-weight: 600;
        color: #252849;
        line-height: 1.33;
        padding-bottom: 3.4rem;
    }
    &__btn{
        width: 63.5%;
        padding: 2.1rem 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border: .1rem solid transparent;
        outline: none;
        background: #FF515E;
        color: #fff;
        border-radius: .8rem;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 2.3rem;
        text-transform: uppercase;
        cursor: pointer;
        margin: auto;
        text-decoration: none;
    }
}
</style>
