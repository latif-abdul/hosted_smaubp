<script setup>
defineProps({
  isDropdown: Boolean,
  href: String,
  name: String,
  isActive: String
});
const emits = defineEmits([
	'deactive'
])

const active = (event) => {
  emits('deactive'); // Passing the variable value
//   console.log("from openTeleport", event);
	event.target.addClass("active");
};
</script>

<template>
    <li v-if="!isDropdown" :class="isActive" class="me-auto"><a :href="href" @click="active"><span>{{name}}</span></a></li>
    <li v-if="isDropdown" class="has-children">
	<a href="" v-if="isDropdown"><span>{{name}}</span></a>
	<ul class="dropdown arrow-top">
		<slot/>
		<!-- <li><a href="#">Menu Two</a></li>
		<li><a href="#">Menu Three</a></li>
		<li class="has-children">
			<a href="#">Dropdown</a>
			<ul class="dropdown">
				
			</ul>
		</li>-->
	</ul>
	</li>
</template>

<style lang="css" scoped>

</style>
