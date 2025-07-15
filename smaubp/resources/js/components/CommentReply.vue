<script setup>
import moment from 'moment'
import { ref } from 'vue';
    defineProps({
        // postedAt: String,
        comment: Object,
        // activeReplyCommentId: { // Prop to check if THIS comment's form should be open
        //     type: [Number, null], // Can be a number (comment id) or null
        //     default: null
        // }
        });

const isHidden = ref(true)

const formattedDateMoment = function(isoDateString){
  if (!isoDateString) return '';

  try {
    // 1. Parse the ISO string. moment() or moment.utc() can handle 'Z'
    // If you want to explicitly parse as UTC because of the 'Z'
    const m = moment.utc(isoDateString); // Parses it as UTC
    console.log(isoDateString)
    // 2. Format the Moment object.
    // Moment.js formatting tokens:
    // MMMM: full month name (e.g., "August")
    // DD: zero-padded day of month
    // YYYY: full year
    // hh: zero-padded 12-hour
    // mm: zero-padded minute
    // A: AM/PM (uppercase)
    // a: am/pm (lowercase)

    // If you want the output in the user's local timezone (common for display):
    // return m.local().format("MMMM DD, YYYY hh:mm A");

    // If you want the output to *remain* in UTC (like the Python example implied)
    // and just change its string representation:
    return m.format("MMMM DD, YYYY hh:mm A"); // No .local() call needed if already parsed as UTC
  } catch (e) {
    console.error("Error parsing or formatting date with Moment.js:", e);
    return "Invalid Date (Moment)";
  }
};

</script>

<template>
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="https://picsum.photos/200/300" alt="">
        </div>
        <div class="media-body">
            <div class="media-heading">
                <h4>{{ comment.name }}</h4>
                <span class="time">{{ formattedDateMoment(String(comment.created_at)) }}</span>
            </div>
            <p>{{ comment.comment }}</p>

            <!-- <comment-item v-if="comment.reply" v-for="reply in comment.reply" :comment="comment"></comment-item> -->
        </div>
    </div>
</template>

<style scoped>
/*----------------------------*\
	comments
\*----------------------------*/
	.post-comments .media {
		padding-top: 15px;
		border-top: 1px solid #eceef2;
}
	.post-comments .media:nth-child(1) {
		padding-top: 0px;
		border-top: none;
}
	.post-comments .media .media-left {
		margin-right: 15px;
		width: 70px;
		height: 70px;
		overflow: hidden;
		/* padding: 0em; */
		border-radius: 50%;
}
	.post-comments .media .media-left .media-object {
		width: 100%;
		/* border-radius: 50%; */
		padding-bottom: 20px;
}
	.post-comments .media .media-body .media-heading h4 {
		text-transform: capitalize;
}
	.post-comments .media .media-body .media-heading .time {
		font-size: 13px;
		margin-right: 15px;
		color: #a7b3c6;
}
	.post-comments .media .media-body .media-heading .reply {
		font-size: 13px;
		color: #a7b3c6;
		-webkit-transition: 0.2s color;
		transition: 0.2s color;
}
	.post-comments .media .media-body .media-heading .reply:hover, .post-comments .media .media-body .media-heading .reply:focus {
		color: #212631;
		text-decoration: none;
}
/*----------------------------*\
	typography
\*----------------------------*/
body {
	font-family: 'Nunito', sans-serif;
	font-size: 16px;
	font-weight: 300;
	color: #3d455c;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}
	h1, h2, h3, h4 {
		font-family: 'Nunito Sans', sans-serif;
		font-weight: 700;
		color: #212631;
		margin: 0px 0px 15px;
}
	h1 {
		font-size: 34px;
}
	h2 {
		font-size: 28px;
}
	h3 {
		font-size: 23px;
}
	h4 {
		font-size: 16px;
}
	a {
		font-weight: 600;
		color: #212631;
		text-decoration: none;
}
	a:hover, a:focus{
		color: #212631;
		text-decoration: underline;
		outline: none;
}
	p {
		margin: 0px 0px 20px;
}
	ul,ol{
		margin: 0;
		padding: 0;
		list-style: none 
}
	ul.list-style, ol.list-style {
		padding-left: 15px;
		margin-bottom: 10px;
}
	ul.list-style {
		list-style-type: disc;
}
	ol.list-style {
		list-style-type: decimal;
}
	blockquote.blockquote {
		position:relative;
		border-left:0;
		font-weight:600;
		margin-bottom:10px;
		padding: 20px;
}
	blockquote.blockquote:before {
		content: "``";
		font-family: 'Nunito Sans', sans-serif;
		display: block;
		position: absolute;
		left: -5px;
		top: 5px;
		font-size: 240px;
		line-height: 200px;
		color: #eceef2;
		letter-spacing: -30px;
		z-index: -2;
}
	figure.figure-img {
		margin-bottom:20px;
}
	figure.figure-img figcaption {
		padding-top:5px;
		font-size: 13px;
		font-weight:600;
}
	.input {
		height: 40px;
		border: 2px solid #eceef2;
		width: 100%;
		padding: 0px 15px;
		-webkit-transition: 0.2s border;
		transition: 0.2s border;
}
	.input:focus {
		border-color: #3d455c;
}
	textarea.input {
		height: 90px;
		padding: 15px;
}
	.primary-button {
		padding: 9px 45px;
		border: none;
		background-color: #212631;
		font-weight: 600;
		text-transform: uppercase;
		font-size: 13px;
		color: #fff;
		-webkit-transition: 0.2s opacity;
		transition: 0.2s opacity;
}
	.primary-button:hover,.primary-button:focus {
		color: #fff;
		opacity: 0.9;
}
	.section {
		padding-top: 40px;
}
	.section.section-grey {
		background-color: #fbfbfd;
		border-bottom: 1px solid #eceef2;
		border-top: 1px solid #eceef2;
}
	.section .section-title {
		margin-bottom: 40px;
}
	.section .section-title h2 {
		text-transform: capitalize;
		font-size: 28px;
}
	.section-row {
		margin-bottom:40px;
}
</style>