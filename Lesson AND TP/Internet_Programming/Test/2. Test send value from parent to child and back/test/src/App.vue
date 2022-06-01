<template>
  <div id="app">
    <componentA></componentA>

  </div>
</template>

<script>

import componentA from './components/A.vue'


export default {
  name: 'App',
  components: {
    componentA
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
