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
			<div class="input-group js-input-file">
				<input class="input-file" type="file" :name id="file">
				<label class="label--file primary-button" for="file">Choose file</label>
				<span class="input-file__info">No file chosen</span>
			</div>
			<div class="label--desc">Max file size 2 MB</div>
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

.input-file {
  display: none;
}

.input-file + label {
  font-size: 15px;
  color: #fff;
  color: white;
  line-height: 40px;
  background-color: #666666;
  padding: 0 20px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  display: inline-block;
  margin-right: 15px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
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

.input-file:focus + label,
.input-file + label:hover {
  background: #1b1b1b;
}

.input-file__info {
  font-size: 15px;
  color: #666;
}

@media (max-width: 767px) {
  .input-file__info {
    display: block;
    margin-top: 6px;
  }
}
</style>
