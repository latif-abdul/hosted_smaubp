<script setup>
defineProps({
    id: String
})
	new Vue({
	el: '#comment',
	data () {
		return {
			info: null
		}
	},
	mounted () {
		axios
			.get('/get_comment/'+id)
			.then(response => (this.info = response))
	}
})
</script>

<template>
	<!-- comments -->
		<div class="section-row" id="comment">
			<div class="section-title">
				<h2>3 Comments</h2>
			</div>

			<div class="post-comments">
				<!-- comment -->
				<div class="media" v-for="i in info">
					<div class="media-left">
						<img class="media-object" src="https://picsum.photos/200/300" alt="">
					</div>
					<div class="media-body">
						<div class="media-heading">
                            {{ i }}
							<h4>John Doe</h4>
							<span class="time">March 27, 2018 at 8:00 am</span>
							<a href="#" class="reply">Reply</a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						<!-- comment -->
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="https://picsum.photos/200/300" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h4>John Doe</h4>
									<span class="time">March 27, 2018 at 8:00 am</span>
									<a href="#" class="reply">Reply</a>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<!-- /comment -->
					</div>
				</div>
				<!-- /comment -->

				<!-- comment -->
				<div class="media">
					<div class="media-left">
						<img class="media-object" src="https://picsum.photos/200/300" alt="">
					</div>
					<div class="media-body">
						<div class="media-heading">
							<h4>John Doe</h4>
							<span class="time">March 27, 2018 at 8:00 am</span>
							<a href="#" class="reply">Reply</a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<!-- /comment -->
			</div>
		</div>
		<!-- /comments -->

		<!-- reply -->
		<div class="section-row">
			<div class="section-title">
				<h2>Leave a reply</h2>
				<p>your email address will not be published. required fields are marked *</p>
			</div>
			<form class="post-reply">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<span>Name *</span>
							<input class="input" type="text" name="name">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<span>Email *</span>
							<input class="input" type="email" name="email">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<span>Website</span>
							<input class="input" type="text" name="website">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea class="input" name="message" placeholder="Message"></textarea>
						</div>
						<button class="primary-button">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /reply -->
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
