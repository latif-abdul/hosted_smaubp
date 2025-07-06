<script setup>
    import GalleryItem from './GalleryItem.vue';
</script>

<template>
    <div class="jurusan">
    <div class="container">
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row portfolio-container">
                    <GalleryItem width=200 height=500></GalleryItem>
                    <GalleryItem width=300 height=400></GalleryItem>
                    <GalleryItem width=400 height=300></GalleryItem>
                    <GalleryItem width=400 height=300></GalleryItem>
                    <GalleryItem width=400 height=300></GalleryItem>
                </div>
            </div>
        </section>
    </div>
</div>
</template>

<style scoped>

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 15px 10px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #444444;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 3px;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #fff;
  background: #5cb874;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}


.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #5cb874;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #5cb874;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}
</style>