<script setup>
	defineProps({
		label : String,
		name : String
	})
</script>

<template>
	<div class="form-row">
	<div class="name">{{ label }}</div>
	<div class="value">
		<div class="input-group">
			<div class="rs-select2 js-select-simple select--no-search" style="width: 100%;">
				<select class="rs-select2" name="subject" style="width: 100%;">
					<option disabled="disabled" selected="selected">Choose option</option>
					<slot/>
				</select>
				<div class="select-dropdown"></div>
			</div>
		</div>
		</div>
	</div>
</template>

<style scoped>
.form-row {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	-webkit-box-align: start;
	-webkit-align-items: flex-start;
	-moz-box-align: start;
	-ms-flex-align: start;
	align-items: flex-start;
	padding: 24px 55px;
}

.form-row .name {
	width: 188px;
	color: #333;
	font-size: 15px;
	font-weight: 700;
	margin-top: 11px;
}

.form-row .value {
	width: -webkit-calc(100% - 188px);
	width: -moz-calc(100% - 188px);
	width: calc(100% - 188px);
}

@media (max-width: 767px) {
	.form-row {
		display: block;
		padding: 24px 30px;
	}
	.form-row .name,
	.form-row .value {
		display: block;
		width: 100%;
	}
	.form-row .name {
		margin-top: 0;
		margin-bottom: 12px;
	}
}

.input--style-6,
.textarea--style-6 {
	background: transparent;
	line-height: 38px;
	border: 1px solid #cccccc;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	color: #666;
	font-size: 15px;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	padding: 0 20px;
	width: 100%;
}

.select--no-search .select2-search {
	display: none !important;
}

.select2-container--open .select2-dropdown--below {
	border: none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	border: 1px solid #e0e0e0;
	margin-top: 5px;
	overflow: hidden;
}

.select2-container--default .select2-results__option {
	padding-left: 22px;
}

.rs-select2 .select2-container {
	width: 100% !important;
	outline: none;
	background: #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.rs-select2 .select2-container .select2-selection--single {
	outline: none;
	border: none;
	height: 50px;
	background: transparent;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
	line-height: 50px;
	padding-left: 0;
	color: #555;
	font-size: 16px;
	font-family: inherit;
	padding-left: 22px;
	padding-right: 50px;
    width: 100%;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
	height: 50px;
	right: 15px;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-moz-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-moz-box-align: center;
	-ms-flex-align: center;
	align-items: center;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
	display: none;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
	font-family: "Material-Design-Iconic-Font";
	content: '\f2f9';
	font-size: 24px;
	color: #999;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
	-webkit-transform: rotate(-180deg);
	-moz-transform: rotate(-180deg);
	-ms-transform: rotate(-180deg);
	-o-transform: rotate(-180deg);
	transform: rotate(-180deg);
}
</style>
