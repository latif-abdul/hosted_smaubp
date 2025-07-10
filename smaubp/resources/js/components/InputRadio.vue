<script setup>
    defineProps({
        label: String,
        name: String,
        options: String
    })

    function convertStringtoArray(str){
        if (!str) {
            return [];
        }
        let array = []
        let new_str = str.replace(/\[|\]/g, '')
        array = new_str.split(',')
        return array
    }

    function titleToKebabCase(str) {
        if (!str) {
            return '';
        }

        // 1. Handle spaces and special characters by replacing them with hyphens
        //    and then removing multiple hyphens
        let kebab = str.replace(/([A-Z])/g, '-$1') // Add hyphen before uppercase letters
                        .replace(/[\s_]+/g, '-')     // Replace spaces/underscores with single hyphens
                        .toLowerCase();              // Convert to lowercase

        // 2. Remove leading/trailing hyphens and ensure only single hyphens remain
        kebab = kebab.replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
        kebab = kebab.replace(/-{2,}/g, '-');    // Replace multiple hyphens with single

        return kebab;
        }

</script>

<template>
	<div class="form-row p-t-20">
		<label class="label label--block name">{{ label }}</label>
		<div class="p-t-15 value">
			<label class="radio-container m-r-55" v-for="opt in convertStringtoArray(options)">{{opt}}
				<input type="radio" :id="titleToKebabCase(opt)" :name :value="titleToKebabCase(opt)">
				<span class="checkmark"></span>
			</label>
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

.radio-container {
	display: inline-block;
	position: relative;
	padding-left: 30px;
	cursor: pointer;
	font-size: 16px;
	color: #666;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
    margin-top: 11px;
    margin-left: 15px;
}

.radio-container input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}

.radio-container input:checked ~ .checkmark {
	background-color: #e5e5e5;
}

.radio-container input:checked ~ .checkmark:after {
	display: block;
}

.radio-container .checkmark:after {
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 12px;
	height: 12px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: #57b846;
}

.checkmark {
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: 0;
	height: 20px;
	width: 20px;
	background-color: #e5e5e5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	-webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
	-moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
	box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
}

.checkmark:after {
	content: "";
	position: absolute;
	display: none;
}
</style>
