<script setup>
defineProps({
    isHead : String
})
</script>

<template>
    <tr :class="'row100 '+isHead">
			<slot/>
		</tr>
</template>

<style scoped>


/*==================================================================
[ Ver1 ]*/

.row100:hover {
  background-color: #f2f2f2;
}

.hov-column-ver1 {
  background-color: #f2f2f2;
}

.hov-column-head-ver1 {
  background-color: #484848 !important;
}

.row100:hover {
    background-color: rgb(242, 242, 242);
}
</style>