<?php ob_start();?>
<?php 
         if(isset($erreur)):
            echo '<div id="signal" ><font color="white">'. $erreur.'</font></div>';endif;?> 
<div class="container text-center">
<form method="post" action="" enctype="multipart/form-data" id="recipes">
<p class="text-white">Le titre</p> 
<input type="text" name="title" id="title"></input> 
<br> 
 
<p class="text-white mt-2">Donnez-moi vos ingrédients</p>
<textarea type="text" class="form-control col-md-8" name="ingredients" id="ing" rows="10" cols="48" ></textarea>
<p class="text-white">Donnez-moi votre recette</p>
<textarea  class="form-control col-md-8" type="text" name="content" id="content" rows="10" cols="48" ></textarea>
<br>
<label class="text-white" for="file" id="photo">Votre photo:</label> 
<input class="text-white" type="file" name="photo" />
<br>
<input type="submit" id="submit" name="submitAdd" value="envoyer" >
</form>
         </div>

<script src="public/js/registrationRecipe.js"> </script>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>