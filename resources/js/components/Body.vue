<template>
  <div class="body">
      <Sidebar />
  </div>
</template>

<script>
import Sidebar from './Sidebar'
export default {
    name : "main",
    components : {
        Sidebar
    }
}
</script>

<style>
.body{
    background: #15172b;
    height: 90vh;
    width: 90%;
    margin: 0 auto;
    border-radius: 10px;
}
</style>