<template>
  <div>

   
      <router-link to="/page2">Page2</router-link> |
      <router-link to="/page3">Page3</router-link>


    <h1>Hello page 1</h1>
    <p>
      Probided parameter: {{$route.params.test}}
    </p>
  </div>
</template>