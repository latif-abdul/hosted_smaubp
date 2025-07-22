<script setup>
defineProps({
    url : String,
    label1 : String,
    label2 : String,
    align: String
})
</script>

<template>
    <div class="slider-item js-fullheight" :style="'background-image:url('+url+');'">
      	<div class="overlay"></div>
        <div class="container-fluid">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-end">
	          <div class="col-md-12 ftco-animate">
	          	<div :class="'text w-100 text-box text-'+align">
	          		<h2>{{label1}}</h2>
		            <h1 class="mb-3">{{label2}}</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
</template>

<style scoped>
.text-box.text-right{
  margin-bottom:8rem;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(17, 163, 68));
  padding-top: 25px;
  padding-bottom: 25px;
  padding-right: 4rem;
}

.text-box.text-left{
  margin-bottom:8rem;
  background-image: linear-gradient(to left, rgba(255,0,0,0), rgb(17, 163, 68));
  padding-top: 25px;
  padding-bottom: 25px;
  padding-left: 4rem;
}
</style>