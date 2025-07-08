<template>
    <div id="illdy_counter-4" class="col-sm-4 col-xs-12 widget_illdy_counter">
                <span class="counter-number" data-from="1" data-to="260" data-speed="2000" data-refresh-interval="100"><slot name="number"/></span>
                <span class="counter-description"><slot name="label"/></span>
            </div>
</template>

<style scoped>
.widget_illdy_counter {
    margin-top: 40px;
}

.widget_illdy_counter:nth-child(1), #counter .widget_illdy_counter:nth-child(2), #counter .widget_illdy_counter:nth-child(3) {
    margin-top: 0;
}


.counter-number {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    line-height: 1;
    font-weight: 700;
    font-size: 65px;
    color: #fff;
    font-family: "Poppins";
    line-height: 70px;
}

.counter-description {
    width: 100%;
    line-height: 24px;
    display: block;
    font-size: 20px;
    color: #fff;
    text-transform: uppercase;
    font-family: "Poppins";
    font-weight: 700;
}


.col-sm-4 {
    border-right: 1px solid #fff;
}

.col-sm-4:last-child {
    border-right: none;
}
</style>