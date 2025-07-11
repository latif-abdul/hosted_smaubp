<script setup>
    defineProps({
        src: String
    })
</script>

<template>
    <div class="marquee-item">
                            <img :src alt="">
                        </div>
</template>

<style scoped>
.marquee-wrapper {
        text-align: center;
    }

    .marquee-wrapper .container {
        overflow: hidden;
        padding: 0 20px;
    }

    .marquee-block {
        position: relative;
        width: 100%;
        overflow: hidden;
        height: 180px;
        /* Sesuaikan tinggi */
    }

    .marquee-inner {
        display: flex;
        width: max-content;
        animation: marqueeScroll 30s linear infinite;
        gap: 30px;
    }

    .marquee-inner.to-left {
        animation-direction: normal;
    }

    .marquee-group {
        display: flex;
        gap: 30px;
    }

    .marquee-item {
        flex: 0 0 auto;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .marquee-item img {
        height: 100%;
        width: auto;
        object-fit: contain;
        user-select: none;
        pointer-events: none;
    }

    @keyframes marqueeScroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }/* Responsif */

    @media (max-width: 768px) {
        .marquee-block {
            height: 120px;
        }

        .marquee-item {
            height: 100px;
        }

        .marquee-inner {
            gap: 15px;
        }

        .marquee-group {
            gap: 15px;
        }
    }
</style>