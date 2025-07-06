
<script setup>
import NavItem from './NavItem.vue';
// import $ from jQuery;
console.log('mashookkk')

</script>

<template>
	<div class="navbar" style="padding-top: 0rem;">
		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>

		<header class="site-navbar" role="banner">
            <div class="container">
				<div class="row align-items-center">

					<div class="col-11 col-xl-2">
						<h1 class="mb-0 site-logo"><a href="" class="text-white mb-0">SMA Unggulan BP Amanatul Ummah</a></h1>
					</div>
					<div class="col-12 col-md-10 d-none d-xl-block">
						<nav class=" navbar site-navigation position-relative text-right" role="navigation">

							<ul class="navbar-nav ms-auto site-menu js-clone-nav d-none d-lg-block" style="margin-right: 0px;margin-left: auto;">
								<NavItem href="." name="Home" isActive="active"></NavItem>
                                <NavItem href="." name="Kegiatan Sekolah"></NavItem>
                                <NavItem href="." name="PPDB"></NavItem>
                                <NavItem href="." name="Artikel" isDropdown>
                                    <li><a href="#">Artikel</a></li>
                                    <li><a href="#">Artikel Santri</a></li>
                                </NavItem>
                                <NavItem href="." name="Galeri"></NavItem>
                                <NavItem href="." name="More" isDropdown>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Absensi</a></li>
                                </NavItem>

							</ul>
						</nav>
					</div>
					<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
					</div>
				</div>
		</header>
	</div>
</template>

<style lang="css" scoped>

</style>
