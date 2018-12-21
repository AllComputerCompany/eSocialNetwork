

<?php $title = "Accueil" ; 

  include('includes/constants.php'); 
  include('partials/_header.php'); 


 ?>

  
<div id="main-content">
  <div class="container">
    <div class="jumbotron">
      <h1> <?php echo WEBSITE_NAME ; ?> </h1>
      <p>
        <?php echo WEBSITE_NAME ; ?>  est un réseau social pour le partage des codes sources entres ami(e)s <br>
        Il vous garantira la sécurité vis-à-vis de votre espase <br>
        Alors n'ésitez pas <a href="register.php" > à rejoindre </a> 


      </p>

      <a href="register.php" class="btn btn-primary btn-lg"> registration </a>

    </div>
  </div> <!-- /container -->
</div>

  <?php include('partials/_footer.php'); ?>