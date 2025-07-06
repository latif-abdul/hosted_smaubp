<script setup>
defineProps({
	name: String,
    ip : String,
	image: String,
	position: String,
});
</script>

<template>
	<section id="business" class="business bg-grey roomy-70">
		<div class="container">

			<div class="main_business">
				<div class="row">
				<div class="col-md-3" v-if="ip=='l'">
					<div class="business_slid">
						<div class="slid_shap bg-grey"></div>
						<div class="business_items text-center">
							<div class="business_item">
								<div class="business_img">
									<div class="text">
		<div class="text-author" style="text-align: center;">
			<img :src="image" alt="">
		</div>
			<h5 class="name_">{{name}}</h5>
				<span class="position">{{position}}</span>
			</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		<div class="col-md-9">
			<div class="business_item sm-m-top-50 mb-auto">
				<slot/>

			</div>
		</div>
        <div class="col-md-3" v-if="ip=='r'">
					<div class="business_slid">
						<div class="slid_shap bg-grey"></div>
						<div class="business_items text-center">
							<div class="business_item">
								<div class="business_img">
									<div class="text">
		<div class="text-author" style="text-align: center;">
			<img :src="image" alt="">
		</div>
			<h5 class="name_">{{name}}</h5>
				<span class="position">{{position}}</span>
			</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</section>
</template>
<style scoped>
.name_{
    margin-top: 30px;
}
</style>