/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap.js';
import { createApp } from 'vue';
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import {createBootstrap} from 'bootstrap-vue-next';

// import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue-next/dist/bootstrap-vue-next.css'


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import NavBar from './components/NavBar.vue';
import Carousel from './components/Carousel.vue';
import WelcomeMessage from './components/WelcomeMessage.vue';
import Gallery from './components/Gallery.vue';
import Table from './components/Table.vue';
import TableRow from './components/TableRow.vue';
import TableData from './components/TableData.vue';
import Article from './components/Article.vue';
import Marquee from './components/Marquee.vue';
import Counter from './components/Counter.vue';
import CounterItem from './components/CounterItem.vue';
import Footer from './components/Footer.vue';
import CarouselImage from './components/CarouselImage.vue';
import ArticleDetail from './components/ArticleDetail.vue';
import Comment from './components/Comment.vue';
app.component('example-component', ExampleComponent);
app.component('nav-bar', NavBar)
app.component('carousel', Carousel)
app.component('welcome-message', WelcomeMessage)
app.component('gallery', Gallery)
app.component('table-vue', Table)
app.component('table-row', TableRow)
app.component('table-data', TableData)
app.component('article-vue', Article)
app.component('marquee', Marquee)
app.component('counter', Counter)
app.component('counter-item', CounterItem)
app.component('footer-vue', Footer)
app.component('carousel-image', CarouselImage)
app.component('article-detail', ArticleDetail)
app.component('comment', Comment)
app.use(createBootstrap())

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
