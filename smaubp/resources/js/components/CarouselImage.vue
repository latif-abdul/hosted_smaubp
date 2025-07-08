<script setup>
defineProps({
    url : String,
    label1 : String,
    label2 : String
})
</script>

<template>
    <div class="slider-item js-fullheight" :style="'background-image:url('+url+');'">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
	          		<h2>{{label1}}</h2>
		            <h1 class="mb-3">{{label2}}</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
</template>