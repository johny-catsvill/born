<template>
	<div class="wkn-markers">
		<div class="wkn-marker-item" v-for="marker in markers">
			<div class="wkn-marker-item__color" :style="styleColor(marker)"></div>
			<div class="wkn-marker-item__title">{{ marker.display_name }}</div>
		</div>
	</div>
</template>


<script setup>
import { ref, computed } from 'vue'
import {hexToRGBA} from '@/utils'

const markers = ref([])

function styleColor(marker) {
    return {
        backgroundColor: hexToRGBA(marker.color, 0.3)
    }
}

markers.value = []
</script>


<style scoped lang="scss">
	.markers {
		display: flex;
		width: 248px;
		flex-wrap: wrap;
	}
	.marker-item {
		display: flex;
		margin-right: 15px;
		width: 100px;
		&__color {
			width: 20px;
			height: 20px;
			margin-right: 5px;
			border: 1px solid #73879c;
		}
	}
</style>
