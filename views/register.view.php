<?php 

  $title = "Inscription" ; 
  
  include('partials/_header.php'); 
 

 ?>

  

  <div id="main-content">
    <div class="container">

      <h1> Inscription </h1>
      
       <?php include('partials/_error.php');  ?>

      	
      	<form class="well" method="post" autocomplete="off">
      		<div class="form-group">

      			<label class="control-label" for="name"> Name :</label> 
      			<input class="form-control" type="text" name="name" id="name" required>  <br>
      	
             </div>

             <div class="form-group">

      			<label class="control-label" for="pseudo"> Pseudo :</label> 
      			<input class="form-control" type="text" name="pseudo" id="pseudo" required>  <br>
      	
             </div>

             <div class="form-group">

      			<label class="control-label" for="email"> Email :</label> 
      			<input class="form-control" type="text" name="email" id="email" required>  <br>
      	
             </div>

             <div class="form-group">

      			<label class="control-label" for="password"> Password :</label> 
      			<input class="form-control" type="Password" name="password" id="password" required>  <br>
      	
             </div>

             <div class="form-group">

      			<label class="control-label" for="password_confirm"> Password confirmation :</label> 
      			<input class="form-control" type="Password" name="password_confirm" id="password_confirm" required>  <br>
      	
             </div>


             <input type="submit" class="btn btn-primary" value="inscription" name="register">

        </form>

      
      
    </div>

  </div> <!-- /container -->

  <?php include('partials/_footer.php'); ?>