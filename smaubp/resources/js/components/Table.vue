<script setup>
    defineProps({
        class : String,
        id: String
    })
</script>

<template>
<table data-vertable="ver1" :class :id>
	<thead>
		<slot name="head"/>
	</thead>
	<tbody>
		<slot name="body"/>
	</tbody>
	</table>
		</template>

<style scoped>
/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #d1d1d1;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1300px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/
table {
  width: 100%;
  background-color: #fff;
}
</style>