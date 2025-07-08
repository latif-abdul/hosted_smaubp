<script setup>
</script>

<template>
    <section id="counter" class="front-page-section" style="background-image: url(https://149842022.v2.pressablecdn.com/illdy/wp-content/themes/illdy/layout/images/front-page/front-page-counter.jpg);background-color:#000000;">
	<div class="counter-overlay"></div>
	<div class="container">
		<div class="row inline-columns">
			<slot/>	
                </div><!--/.row-->
	</div><!--/.container-->
</section>
</template>

<style scoped>
/* 08. Counter */
#counter {
    width: 100%;
    padding: 55px 0;
    text-align: center;
    position: relative;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center;
}

#counter .counter-overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    left: 0;
    display: none;
}
</style>