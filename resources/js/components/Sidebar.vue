<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5 intro">
        <h2 class="text-white"> hello Mr lagabja </h2>
        <p class="my-4 text-white">How have you been over there?</p>
         <div class="row px-3">
           <div class="col-md-11">
              <form action="" class="form-group sidebar-form">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text text-secondary" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span> 
              </div>
              <input type="text" class="form-control text-white" placeholder="search your project or task" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </form>
           </div>
         </div>
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
          <div class="row mt-5">
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

      <div class="col-md-7 dev">
        <h3 class="text-white">Develoment CRM</h3>
        <p class="text-white mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus nobis maiores facere mollitia non placeat!</p>
        <div class="row">
          <div class="col-md-12">
            <div class="row justify-contents-space-around flex-dev-head">
               <h5 class="text-white text-left">Today's Tasks</h5>
                <button type="button" class="text-right btn btn-success btn-sm">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4"></div>
        </div>
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
.row .col-md-3{
  cursor: pointer;
}
.sidebar-form{
  position: relative;
  left: -28px;
}
.sidebar-form input{
  background: #8ab5db !important;
}
::placeholder{
  color: white !important;
  font-family: auto;
}
.sidebar-form #basic-addon1{
  background: #8ab5db !important;
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
.intro h3{
  font-family: 'Courier New', Courier, monospace;
}
.flex-dev-head{
  display: flex;
  justify-content: space-between;
}
</style>