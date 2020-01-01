<?php ob_start(); ?> 

<p class="ajout text-center text-white">Pour modifier votre profil</p>
<?php while($data=$Prof->fetch()): 
    echo'
    <div class="container text-center text-white">
    <form class="form-horizontal" action="index.php?action=change&amp;id='.$data['id'].'" method="post" id="profil" enctype="multipart/form-data">
    <div>
    <div ><p class="photoRond"> <img class="photo img-fluid"src="member/avatars/'.$data['avatar'].'"></p></div>
    <div class="form-group row" >  
    <label class="control-label col-sm-2 offset-sm-3" for="name"  >Pseudo </label>        
        <input class="col-sm-3" type="text" id="name" name="pseudo" value="'.$data['pseudo'].'">     
    </div>
    <div class="form-group row" >
        <label class="control-label col-sm-2 offset-sm-3" for="mail">e-mail </label>      
        <input class="col-sm-3" type="email" id="mail" name="email" value="'.$data['email'].'" >
    </div>    
    <div class="form-group row">
        <label class="control-label col-sm-2 offset-sm-3" for="mdp">Mot de passe </label>      
        <input class="col-sm-3"  type="password" id="mdp" name="password" value="6 caractères">       
    </div>
    <div class="form-group row" >
        <label class="control-label col-sm-2 offset-sm-3" for="mdp">Mot de passe </label>      
        <input class="col-sm-3" type="password" id="mdp" name="pass1"  placeholder="6 caractères">
        </div>
   
    </br>
    
    <div class="form-group row" >
    <label class="control-label col-sm-2 offset-3" for="file" id="ava"  >Mon avatar</label>
    <div class="col-sm-3">
    <input type="file" name="avatar" />
    </div>  
    </div>
    <div class="form-group">
    <input type="submit" name="submit" value="envoyer" id="submit2" class="btn btn-primary btn-sm"> 
    </div>         
   
 
</form>
</div>
';
 endwhile;
 if(isset($msg)){
   echo' <font color="white">'. $msg.'</font>';  }?>


<?php $content = ob_get_clean(); ?>
 <?php require('view/frontend/template.php');?>