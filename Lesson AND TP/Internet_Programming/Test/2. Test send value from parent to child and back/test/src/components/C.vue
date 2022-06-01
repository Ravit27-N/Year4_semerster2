<template>
  <div class="C">
    <h1>component C </h1>
    <h5>X={{x}}</h5>
    <button @click="increaseX" >Increase X</button>
  </div>
</template>

<script>

export default {
 name:"componentB",
 props:['x'],
 methods:{
   increaseX(){
     this.$emit('xChanged', this.x + 1);
   }
 }
}
</script>
<style >
.C{
  width: 30vw;
  margin: auto;
  padding: 15px;
  border: solid 2px red;

}
button{
 width: 15vw;
 background-color: brown;
 color: white;
}
</style>