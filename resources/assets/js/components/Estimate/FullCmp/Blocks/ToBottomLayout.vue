<template>
    <div class="to-bottom-layout">
        <div class="to-bottom-layout__content">
            <slot></slot>
        </div>
        <div class="to-bottom-layout__bottom">
            <slot name="bottom"></slot>
        </div>
    </div>
</template>


<script setup></script>


<style lang="scss" scoped>
.to-bottom-layout {
    height: 100%;
    display: flex;
    flex-direction: column;
    &__content {
        flex: 1 1 auto
    }
    &__bottom {

    }
}
</style>
