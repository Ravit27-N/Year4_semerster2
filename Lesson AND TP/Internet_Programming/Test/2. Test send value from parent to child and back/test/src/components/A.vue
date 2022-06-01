<template>
  <div class="A">
    <h1>componentA </h1>
    <h5>X={{x}}</h5>
    
      <componentB  :x="x" @xChanged="increaseX" ></componentB>

 

  </div>
</template>

<script>
import componentB from './B.vue'

export default {
 name:"componentA",
 components:{
   componentB
 },
 data(){
   return{
     x:0
   }
 },
 methods: {
    recieveFromChild(value) {
      console.log('value from child', value);
    },
    increaseX(value) {
      this.x = value;
    },
  },
}
</script>
<style>
.A{
  justify-content: center;
  margin: auto;
  width: 50vw;
  border: solid 2px red;
  justify-content: center;
  padding: 15px;
  
}

</style>