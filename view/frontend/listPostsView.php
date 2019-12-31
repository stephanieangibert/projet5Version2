<?php ob_start();?>

<?php if(isset($_SESSION['pseudo'])):?>
 <p class="ajout  text-center"><a class="text-white" href="index.php?action=add">Ajouter une recette <i class="fas fa-pen-nib"></i></a></p>
 <?php endif ?>
    



<?php while ($data = $posts->fetch()):?>

    
<div class="container my-2 col-12 text-white" id="chapitres" >
    <div class="row align-items-center justify-content-space-between mt-2">
       <?php if($data['avatar']!=""):
          echo'<h3 class="col"><img class="img-fluid avatarPs" src="member/avatars/'.$data['avatar'].'"></h3>';
        endif;?>    
      
       <h3 class="col">
    <?php echo htmlspecialchars($data['pseudo']); ?>     
      </h3>
      </div>
      <div class="row ">
    <h3 class="col text-center">
        <?php echo htmlspecialchars($data['title']); ?>   
       
    </h3>
      </div>
    
    <div class="d-flex flex-column align-items-center p ">
            <p class="ingredients text-center text-white col-12">               
                
             <?php   echo nl2br($data['ingredients']);?> </p>
                
             
           <p class="text-white content col-12">
             <?php                   
                   echo nl2br($data['content']); ?>   
                    </p> 
                  <?php if($data['photo']!=""):
              echo'<p class="photoRecette col-12"> <img class="photoRe img-fluid"src="member/photo/'.$data['photo'].'"></p>';
                  endif; ?>
                   
                    <div class="ml-auto commentaires"><a class="col"href="index.php?action=post&amp;id=<?php echo $data['id'] ?>">Commentaires</a><a class="col" href="index.php?action=love&amp;id=<?php echo$data['id'];?>"><i class="fas fa-thumbs-up"></i></a></div>
              
               
               </div>
      
</div>

               <?php endwhile; ?>


<?php $posts->closeCursor();?>

<div class="pagination d-flex row justify-content-center">
<?php
for($i=1;$i<=$allPages;$i++) {
   if($i == $currentPage) {
      echo '<font color="white">'.$i.'</font>';
   } else {
      echo '<a href="index.php?listPosts='.$i.'">'.$i.'</a> ';
   }
}
?> 
 </div>      


<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>
                          
                            