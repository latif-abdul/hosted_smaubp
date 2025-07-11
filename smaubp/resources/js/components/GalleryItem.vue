<script setup>
defineProps({
    src: String,
    label: String
})
</script>

<template>
<div class="col-lg-4 col-md-6 portfolio-item filter-app" style="margin-top:20px">
	<div class="portfolio-wrap">
		<img :src alt="" class="img-fluid">
		<div class="portfolio-info">
			<h4>{{ label }}</h4>
		</div>
	</div>
	</div>
</template>

<style scoped>

.portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(34, 34, 34, 0.6);
}

.portfolio-wrap::before {
  content: "";
  background: rgba(34, 34, 34, 0.6);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio-wrap img {
  transition: all ease-in-out 0.3s;
}

.portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 20px;
}

.portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
}

.portfolio-wrap .portfolio-info p {
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
  font-style: italic;
}

.portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio-wrap .portfolio-links a {
  color: #fff;
  margin: 0 5px 0 0;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio-wrap .portfolio-links a:hover {
  color: #6ec083;
}

.portfolio-wrap:hover::before {
  opacity: 1;
}

.portfolio-wrap:hover img {
  transform: scale(1.2);
}

.portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(34, 34, 34, 0.08);
}

.portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-info ul li+li {
  margin-top: 10px;
}
</style>
