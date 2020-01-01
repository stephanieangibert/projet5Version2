<?php ob_start();?>


<div class="container d-flex justify-content-center">
    <div  id="bouton" class="row">
<div id="connex" class="p-3 col-sm-4 ">Connexion</div>
<div id="inscrip" class="p-3 col-sm-4 offset-sm-4 ">Inscription</div>
</div>
</div>

<div class="container d-flex justify-content-center mt-3 col-11">


<form action="" method="POST" id="inscription">
<div class="container col-12 pt-5 form-group m-0 " >
    <div class="form-inline mb-2">
        <label for="name" class="col-5 text-white font-weight-bold">Pseudo </label>        
        <input type="text" id="name" name="pseudo" class="col-7" >

    </div>
    <div class="form-inline mb-2 ">
        <label for="mail" class="col-5 text-white font-weight-bold">e-mail </label>
        <input type="email" id="mail" name="email" class="col-7">
    </div>
    <div class="form-inline mb-2">
        <label for="mdp" class="col-5 text-white font-weight-bold">Mot de passe </label>
        <input  type="password" id="mdp" name="password" placeholder="6 caractères" class="col-7">
        
    </div>
    <div class="form-inline mb-4">
        <label for="mdp" class="col-5 text-white font-weight-bold">Mot de passe </label>
        <input type="password" id="mdp1" name="pass1" placeholder="6 caractères" class="col-7">
        
    </div>
    <div class="form-inline">
    <input  type="submit" name="submit" value="envoyer" id="submit2" class="col-sm-2 offset-6 btn btn-primary btn-sm">
</div>
    <br>
    <br>
    <p style="color: red;" id="erreur"></p>
    <p style="color: red;" id="msg"></p>
    </div>
         </form> 

        
       
        

    
<form action="" method="POST" id="connexion" >
<div class="container p-2  col-12 form-group " > 

    <div class="form-inline mb-2 mt-4">
        <label for="mail" class="col-5 text-white font-weight-bold">e-mail </label>
        <input type="email" id="mail" name="email" class="col-6">
    </div>

    <div class="form-inline mb-3">
        <label for="mdp" class="col-5 text-white font-weight-bold">Mot de passe </label>
        <input type="password" id="mdp" name="password" placeholder="6 caractères" class="col-6">        
    </div>

    <div class="form-inline mb-2 col-11">
    <input type="submit" name="submit2" value="envoyer" id="submit3" class="ml-auto btn btn-primary btn-sm">

    
</div>
<p style="color: red;" id="erreur2" class="form-inline mb-2 col-11"></p>
    </div>
   
</form>


</div>


<?php 
         if(isset($erreur)):
            echo '<div id="averti" ><font color="white">'. $erreur.'</font></div>';endif;?> 


<script src="public/js/registrationInscrip.js"> </script>
<script src="public/js/connexion.js"> </script>
<script src="public/js/signInUp.js"> </script>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>