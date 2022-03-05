<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5 intro">
        <h2 class="text-white"> hello Mr lagabja </h2>
        <p class="mb-4 text-white">How have you been over there?</p>

         <!-- <div class="project-area"> -->
           <!-- first row -->
        <div class="row">
          <div class="col-md-3 m-1 first-project">
              <h3 class="mt-5 text-center text-white">PT</h3>
              <small class="text-white">Small caption</small>
          </div>
          <div class="col-md-3 m-1 second-project">
              <h3 class="mt-5 text-center text-white">PT</h3>
              <small class="text-white">Small caption</small>
          </div>
           <div class="col-md-3 m-1 second-project">
              <h3 class="mt-5 text-center text-white">PT</h3>
              <small class="text-white">Small caption</small>
          </div>
        </div>

        <!-- second row -->
          <div class="row mt-4">
            <div class="col-md-3 m-1 bg-success first-project">
                <h3 class="mt-5 text-center text-white">PT</h3>
                <small class="text-white">Small caption</small>
            </div>
            <div class="col-md-3 m-1 bg-secondary second-project">
                <h3 class="mt-5 text-center text-white">PT</h3>
                <small class="text-white">Small caption</small>
            </div>
            <div class="col-md-3 bg-primary m-1 third-project" >
                <h3 class="mt-5 text-center text-white">PT</h3>
                <small class="text-white">Small caption</small>
            </div>
          </div>
      <!-- </div> -->
          </div>

      <div class="col-md-8">
        
      </div>   
    </div>
      
  </div>
</template>

<script>
export default {
    name : "Sidebar"
}
</script>

<style scoped>
.container{
  position: relative;
  top : 50px;
}
.first-project{
  background-color:#0026FF;
  border-radius: 10px;
}
.second-project{
  background-color:#FF3250;
  border-radius: 10px;
}
.third-project{
  /* background-color:#FFBB00; */
  border-radius: 10px;
}
.intro small{
    position: relative;
    bottom: -25%;
    font-family: auto;
}
h3{
  font-family: 'Courier New', Courier, monospace;
}

</style>