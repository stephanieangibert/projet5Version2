<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="public/css/menuV2.css">	  
    <title>Le Blog de cuisine</title> 
</head>
<body>

<p class="admini">Hello Admin</p>
<p class="ajout"><a href="index.php">Retour sur le site </a></p>

<table cellpadding="5" cellspacing="10" class="table">
<thead>
         <th>Mail</th>
         <th>Pseudo</th>
</thead>  
<tbody>   

<?php while($data= $users->fetch()):
       echo'<tr><td>'.$data['email'].'</td>
                <td>'.$data['pseudo'].'</td>
            </tr>';
endwhile;?>  

         </table>  
         </tbody>
         <div class="table-responsive-sm"> 
         <table cellpadding="5" cellspacing="10" class="table">
<thead>
         <th scope="col">Titre</th>
         <th scope="col">Ingredients</th>
         <th scope="col">Recettes</th>
         <th scope="col">Photo</th>
         <th scope="col">Btn1</th>
         <th scope="col">Btn2</th>
</thead>  
<tbody>   

<?php while($data= $recipes->fetch()):
       echo'<tr><td>'.$data['title'].'</td>
                <td>'.$data['ingredients'].'</td>
                <td>'.$data['content'].'</td>'?>
            <?php    if($data['photo']!=""):
               echo'<td ><img  class="photoBack" src="member/photo/'.$data['photo'].'"></td>';            
                else:
                 echo'<td></td>';
                endif;
            echo '<td class="btn1">
             <a class="btn1" href="index.php?action=delete&amp;id=' . $data['id'] . '">Annuler</a>
             </td> 
             <td class="btn2">';
             if($data['statut']==1):
                echo'<a class="btn2" href="index.php?action=accept&amp;id=' . $data['id'] . '">En ligne</a>';
            
             else:
                echo'<a class="btn3" href="index.php?action=accept&amp;id=' . $data['id'] . '">En attente</a>';
             endif;
             echo'
            
             </td> 
             </tr>';
        endwhile;?>   
         
         </tbody>
         </table>
    </div>
</body>
</html>