<script setup>
    import Comment from './Comment.vue';
    defineProps({
        url : String
    })

      window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<template>
    <body>
		
		<!-- Header -->
		<header id="header">
			
			<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('https://picsum.photos/200/300');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<!-- <a class="post-category cat-2" href="category.html">JavaScript</a> -->
								<span class="post-date">March 27, 2018</span>
							</div>
							<h1>Ask HN: Does Anybody Still Use JQuery?</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h3>Lorem Ipsum: when, and when not to use it</h3>
                                <figure class="figure-img">
									<img class="img-responsive" src="https://picsum.photos/200/300" alt="">
									<figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
								</figure>
								<p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? That's what is Lorem Ipsum to many—it rubs them the wrong way, all the way. It's unreal, uncanny, makes you wonder if something is wrong, it seems to seek your attention for all the wrong reasons. Usually, we prefer the real thing, wine without sulfur based preservatives, real butter, not margarine, and so we'd like our layouts and designs to be filled with real words, with thoughts that count, information that has value. </p>
								<p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the new boss is your business. But what about your daily bread? Design comps, layouts, wireframes—will your clients accept that you go about things the facile way? Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no no to forswear forever. Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is merely the symptom of a worse problem to take into consideration.</p>
								<p>You begin with a text, you sculpt information, you chisel away what's not needed, you come to the point, make things clear, add value, you're a content person, you like words. Design is no afterthought, far from it, but it comes in a deserved second. Anyway, you still use Lorem Ipsum and rightly so, as it will always have a place in the web workers toolbox, as things happen, not always the way you like it, not always in the preferred order. Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy, no less.</p>
								<p>There's lot of hate out there for a text that amounts to little more than garbled words in an old language. The villagers are out there with a vengeance to get that Frankenstein, wielding torches and pitchforks, wanting to tar and feather it at the least, running it out of town in shame.</p>
								<p>One of the villagers, Kristina Halvorson from Adaptive Path, holds steadfastly to the notion that design can’t be tested without real content:</p>
								<blockquote class="blockquote">
									I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we’re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.
								</blockquote>
								<p>If that's what you think how bout the other way around? How can you evaluate content without design? No typography, no colors, no layout, no styles, all those things that convey the important signals that go beyond the mere textual, hierarchies of information, weight, emphasis, oblique stresses, priorities, all those subtle cues that also have visual and emotional appeal to the reader. Rigid proponents of content strategy may shun the use of dummy copy but then designers might want to ask them to provide style sheets with the copy decks they supply that are in tune with the design direction they require.</p>
								<h3>Summing up, if the copy is diverting attention from the design it’s because it’s not up to task.</h3>
								<p>Typographers of yore didn't come up with the concept of dummy copy because people thought that content is inconsequential window dressing, only there to be used by designers who can’t be bothered to read. Lorem Ipsum is needed because words matter, a lot. Just fill up a page with draft copy about the client’s business and they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong way and draft copy can derail your design review.</p>
							</div>
							<!-- <div class="post-shares sticky-shares" style="position: absolute; top: 0px; left: 0px;">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div> -->
						</div>
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-body">
										<div class="media-heading">
                                            <p>Published By</p>
											<h3>John Doe</h3>
										</div>
										<ul class="author-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->
                         <slot name="comment"/>
					</div>
					<!-- /Post content -->
                     <div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget">
							<slot name="section2"/>
						</div>
						<!-- /ad -->
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

</body>
</template>

<style scoped>
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

/*=========================================================
	HEADER
===========================================================*/
.main-post{
    text-align: justify;
  text-justify: inter-word;
}
 .page-header {
     position: relative;
     margin: 0;
	 padding-top: 60px;
     padding-bottom: 60px;
     background-color: #fbfbfd;
     border-bottom: 2px solid #F4f4f9;
}
 .page-header .background-img {
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-position: center;
     background-size: cover;
}
 .page-header .background-img:after {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(33, 38, 49, 0.3)), to(transparent));
     background-image: linear-gradient(to top, rgba(33, 38, 49, 0.3) 0%, transparent 100%);
}
 #post-header.page-header {
     padding-top: 120px;
}
 .page-header h1 {
     text-transform: capitalize;
     margin-bottom: 0px;
}
 #post-header.page-header h1 {
     color: #FFF;
}
 .page-header .post-meta {
     margin: 15px 0px;
}
 .page-header .post-meta .post-date {
     color: #eceef2;
}
 .page-header .page-header-breadcrumb {
     margin: 15px 0px;
}
 .page-header .page-header-breadcrumb li {
     display: inline-block;
}
 .page-header .page-header-breadcrumb li, .page-header .page-header-breadcrumb li a {
     font-size: 13px;
     text-transform: capitalize;
     color: #a7b3c6;
}
 .page-header .page-header-breadcrumb li a {
     -webkit-transition: 0.2s color;
     transition: 0.2s color;
}
 .page-header .page-header-breadcrumb li a:hover, .page-header .page-header-breadcrumb li a:focus {
     color: #0b0f28;
     text-decoration: none;
}
 .page-header .page-header-breadcrumb li + li:before {
     content: '/';
     display: inline-block;
     margin: 0px 10px;
}

/*=========================================================
	POST
===========================================================*/
/*----------------------------*\
	post
\*----------------------------*/
 .post {
     margin-bottom: 40px;
}
 .post .post-img {
     display: block;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .post .post-img:hover, .post .post-img:focus {
     opacity: 0.9;
}
 .post .post-img > img {
     width: 100%;
}
 .post .post-meta {
     margin-top: 15px;
     margin-bottom: 15px;
}
 .post-meta .post-category {
     font-size: 13px;
     text-transform: uppercase;
     padding: 3px 10px;
     font-weight: 600;
     border-radius: 2px;
     margin-right: 15px;
     color: #FFF;
     background-color: #212631;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .post-meta .post-category:hover, .post-meta .post-category:focus {
     text-decoration: none;
     opacity: 0.9;
}
 .post-meta .post-category.cat-1 {
     background-color: #4BB92F;
}
 .post-meta .post-category.cat-2 {
     background-color: #ff8700;
}
 .post-meta .post-category.cat-3 {
     background-color: #8d00ff;
}
 .post-meta .post-category.cat-4 {
     background-color: #0078ff;
}
 .post-meta .post-date {
     font-size: 13px;
     font-weight: 600;
}
 .post .post-title {
     font-size: 18px;
     margin-bottom: 0px;
}
/*----------------------------*\
	post thumb
\*----------------------------*/
 .post.post-thumb {
     position: relative;
}
 .post.post-thumb .post-img:after {
     content: '';
     position: absolute;
     left: 0;
     right: 0;
     bottom: 0;
     top: 0;
     background: -webkit-gradient(linear, left bottom, left top, from(rgba(33, 38, 49, 0.3)), to(transparent));
     background: linear-gradient(to top, rgba(33, 38, 49, 0.3) 0%, transparent 100%);
}
 .post.post-thumb .post-body {
     position: absolute;
     bottom: 0px;
     padding: 20px 15px;
}
 .post.post-thumb .post-meta .post-date {
     color: #eceef2;
}
 .post.post-thumb .post-title {
     font-size: 22px;
}
 .post.post-thumb .post-title > a {
     color: #FFF;
}
/*----------------------------*\
	post widget
\*----------------------------*/
 .post.post-widget:after {
     content: '';
     display: block;
     clear: both;
}
 .post.post-widget .post-img {
     width: 90px;
     float: left;
     margin-right: 15px;
}
 .post.post-widget .post-img img {
     width: 100%;
}
 .post.post-widget .post-title {
     font-size: 18px;
}
/*----------------------------*\
	post row
\*----------------------------*/
 .post.post-row:after {
     content: '';
     display: block;
     clear: both;
}
 .post.post-row .post-img {
     width: 40%;
     float: left;
}
 .post.post-row .post-body {
     margin-left: calc(40% + 30px);
}
 .post.post-row .post-meta {
     margin-top: 0px;
}
 .post.post-row .post-title {
     margin-bottom: 15px;
}
/*=========================================================
	POST PAGE
===========================================================*/
 .sticky-container {
     position: relative;
     padding-left: 80px;
}
 .sticky-container .sticky-shares {
     position: absolute;
     top: 0;
     left: 0;
}
 .sticky-shares a {
     display: block;
     margin-bottom: 10px;
     width: 40px;
     height: 40px;
     line-height: 40px;
     text-align: center;
     border-radius: 50%;
     background-color: #fbfbfd;
     color: #a7b3c6;
     border: 1px solid #eceef2;
     -webkit-transition: 0.2s all;
     transition: 0.2s all;
}
 .sticky-shares a:hover {
     -webkit-transform: scale(1.3);
     -ms-transform: scale(1.3);
     transform: scale(1.3);
}
 .sticky-shares a.share-facebook:hover {
     color: #3b5998;
     border-color: #3b5998;
}
 .sticky-shares a.share-twitter:hover {
     color: #55acee;
     border-color: #55acee;
}
 .sticky-shares a.share-google-plus:hover {
     color: #dd4b39;
     border-color: #dd4b39;
}
 .sticky-shares a.share-pinterest:hover {
     color: #ff0000;
     border-color: #ff0000;
}
 .sticky-shares a.share-linkedin:hover {
     color: #007bb5;
     border-color: #007bb5;
}

</style>