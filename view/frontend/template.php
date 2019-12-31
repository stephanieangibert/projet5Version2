<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/menuV2.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
    
  <title>Le Blog de cuisine</title>
 
</head>
<body class="container">
 
 <?php 

 if(isset($_SESSION['admin'])&&($_SESSION['admin']==1)):?>   
   <nav class="navbar navbar-dark navbar-expand-md">     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="accueil" class="nav-item active">
            <a class="nav-link text-white" href="index.php?action=listPosts">Accueil</a>
          </li>
          <li class="recettes" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=add">Recette</a>
          </li>
          <li class="profil" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=profil&amp;id=<?=$_SESSION['id']?>">Profil</a>
          </li>
          <li class="inscription" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=subscribe">Inscription</a>
          </li>
          <li class="admin" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=admin">Admin</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

 <?php else: ?>
  <nav class="navbar navbar-dark navbar-expand-md">     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="accueil" class="nav-item active">
            <a class="nav-link text-white" href="index.php?action=listPosts">Accueil</a>
          </li>
          <li class="recettes" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=add">Recette</a>
          </li>
          <li class="profil" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=profil&amp;id=<?=$_SESSION['id']?>">Profil</a>
          </li>
          <li class="inscription" class="nav-item">
            <a class="nav-link text-white" href="index.php?action=subscribe">Inscription</a>
          </li>          
        </ul>
      </div>
      </div>
    </nav>
  
  <?php endif ?>

<h1 class="text-white text-center m-4">Le blog de Joce</h1>
<?= $content?>
  <footer>
  <div class="meteo">
    <p class="pdp1">Les données météo de la ville de Nantes</p>  
    <p id="pdp"></p>
    <img id="pdp2" src="" width="45" height="45" />
</div>
    </footer>

    <script src="public/js/ajax.js"> </script>
   
</body>
</html>
 


