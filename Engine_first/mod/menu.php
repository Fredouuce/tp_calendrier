<div class="lien-container">   
    <?php 
    $mois = ['janvier' => 'Janvier','fevrier'=>'Février','mars'=>'Mars','avril'=>'Avril', 'mai'=>'Mai','juin'=>'Juin','juillet'=>'Juillet', 'aout'=>'Août','septembre'=>'Septembre','octobre'=>'Octobre','novembre' =>'Novembre','decembre' => 'Décembre'];
    
   foreach($mois as $keyMois => $mois){
        echo '<a class="lien" href="?to='.$keyMois.'">'.$mois.'</a>';
   }
    ?>
<!-- 
    <a href="?to=janvier">Janvier</a>
    <a href="?to=fevrier">Février</a>
    <a href="?to=mars">Mars</a>
    <a href="?to=avril">Avril</a>
    <a href="?to=mais">Mai</a>
    <a href="?to=avril">Juin</a>
    <a href="index.php?to=janvier">Juillet</a>
    <a href="index.php?to=janvier">Août</a>
    <a href="index.php?to=janvier">Septembre</a>
    <a href="index.php?to=janvier">Octobre</a>
    <a href="index.php?to=janvier">Novembre</a>
    <a href="index.php?to=janvier">Décembre</a> -->

</div>