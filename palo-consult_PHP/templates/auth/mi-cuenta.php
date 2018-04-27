<div class="container">
   
   
   <div class="row my-5">
       <div class="col-sm-12">
           <h2> Mi Cuenta </h2>
       </div>
   </div>
       <div class="row my-5">
           <div class="col-sm-2 text-right">
               <label>Nombre: </label>
           </div>    
           <div class="col-sm-10">
               <?php echo $_SESSION["nombre"]["nombre"] ?>
           </div>
       </div>
       <div class="row my-5">
           <div class="col-sm-2 text-right">
               <label>email: </label>
           </div>    
           <div class="col-sm-10">
               <?php echo $_SESSION["nombre"]["email"] ?>
           </div>
       </div>
</div>