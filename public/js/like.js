var vraie=true;
var couleur=document.getElementById("love");
if (vraie){
    couleur.addEventListener("click",function(e){
        couleur.style.color="blue";
        e.preventDefault();
        vraie=false;
    
    });
   
}
else{
    couleur.addEventListener("click",function(e){
        couleur.style.color="red";
        e.preventDefault();
        vraie=true;
    
});
}


