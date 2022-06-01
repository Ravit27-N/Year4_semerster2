<template>
  <div class="home">
    <h1>Hello Home page</h1>
      <router-link :to="{name:'page1',params:{test:'hello Ravit'}}">Page1</router-link> |
      <router-link to="/page2">Page2</router-link> |
      <router-link to="/page3">Page3</router-link>

  </div>
</template>

<script>


export default {
  name: 'Home',
  components: {
    
  }
}
</script>
