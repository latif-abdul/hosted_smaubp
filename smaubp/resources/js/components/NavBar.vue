
<script setup>
import NavItem from './NavItem.vue';
// import $ from jQuery;

</script>

<template>
		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
    
    <div class="sticky-wrapper" id="sticky-wrapper" style="height: 60px;">
		<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
            <div class="container">
				<div class="row align-items-center">

					<div class="col-11 col-xl-3">
						<div class="row">
							<div class="col-3">
						<img src="/images/logo.png" style="width: 50px;">
						</div>
						<div class="col-9">
						<h1 class="mb-0 site-logo"><a href="" class="mb-0">SMA Unggulan BP Amanatul Ummah</a></h1>
					</div>	
					</div>
					</div>
					<div class="col-12 col-md-9 d-none d-xl-block">
						<nav class=" navbar site-navigation position-relative text-right" role="navigation">

							<ul class="navbar-nav ms-auto site-menu js-clone-nav d-none d-lg-block" style="margin-right: 0px;margin-left: auto;">
								<NavItem href="/" name="Home" isActive="active"></NavItem>
                                <NavItem href="#" name="Kegiatan Sekolah"></NavItem>
                                <NavItem href="/ppdb" name="PPDB"></NavItem>
                                <NavItem href="" name="Artikel" isDropdown>
                                    <li><a href="/artikel">Artikel</a></li>
                                    <li><a href="/artikel_santri">Artikel Santri</a></li>
                                </NavItem>
                                <NavItem href="/galleries" name="Galeri"></NavItem>
                                <NavItem href="#" name="More" isDropdown>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="https://klikpresensi.my.id/">Absensi</a></li>
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
.is-sticky{
	color: black;
}
</style>
