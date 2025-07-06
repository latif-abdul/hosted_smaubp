<script setup>
    import { defineProps } from 'vue';
    defineProps({
        isHead : String,
        dataColumn : String,
    })
</script>

<template>
    <th v-if="isHead=='head'" :class="'column100 '+dataColumn" :data-column><slot/></th>
    <td v-else :class="'column100 '+dataColumn" :data-column><slot/></td>
</template>

<style scoped>
th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column100 {
  width: 130px;
  padding-left: 25px;
}

.column100.column1 {
  width: 265px;
  padding-left: 42px;
}

th {
  padding-top: 24px;
  padding-bottom: 20px;
}

td {
  padding-top: 18px;
  padding-bottom: 14px;
}

td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #36304a;
}


th {
    font-family: Montserrat-Medium;
    font-size: 12px;
    color: rgb(255, 255, 255);
    line-height: 1.4;
    text-transform: uppercase;
    background-color: rgb(54, 48, 74);
}

.hov-column-ver1 {
    background-color: rgb(242, 242, 242);
}

.hov-column-head-ver1 {
    background-color: rgb(72, 72, 72) !important;
}

td:hover {
    background-color: rgb(108, 122, 224);
    color: rgb(255, 255, 255);
}
</style>