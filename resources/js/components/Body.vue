<template>
  <div class="body">
      <Sidebar />
  </div>
</template>

<script>
import Sidebar from './Sidebar'
export default {
    name : "MainContent",
    components : {
        Sidebar
    }
}
</script>

<style>
/* @import url('https://fonts.googleapis.com/css2?family=League+Gothic&family=Roboto+Condensed:ital@1&family=Shizuru&display=swap'); */
.body{
    background: #15172b;
    height: 100vh;
    width: 90%;
    margin: 0 auto;
    border-radius: 10px;
}
</style>