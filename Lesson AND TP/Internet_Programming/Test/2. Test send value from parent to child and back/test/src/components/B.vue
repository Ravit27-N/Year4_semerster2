<template>
  <div class="B">
    <h1>component B </h1>
    <h5>X={{x}}</h5>
    <componentC :x="x"  @xChanged="increaseX"></componentC>
  </div>
</template>

<script>

import componentC from './C.vue'

export default {
 name:"componentB",
 props: ['x'],
 data(){
  return{

  }
 },
 components:{
   componentC
 },
 methods: {
    increaseX(value) {
      this.$emit('xChanged', value);
    },
  },
}
</script>
<style>
.B{
  margin: auto;
  width: 40vw;
padding: 15px;
  border: solid 2px red;
  
}
</style>