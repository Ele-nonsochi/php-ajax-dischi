<?php
function printAlbum($album){
    if (!isset($album)){
        return;
    
}


$posterAlbum=$album["poster"];
$titleAlbum=$album["title"];
$authorAlbum=$album["author"];
$yearAlbum=$album["year"];

?>

<div class="col mb-5">
    <div class="background-card" style="height: 100%;">
       <img class="img-album" src="<?php echo $posterAlbum?>" alt="album" >
       <div class="card-container">
       <h4 class="text-center text-white text-uppercase"><?php echo $titleAlbum ?></h4>
       <div class="info-album">
       <h5><?php echo $authorAlbum?></h5>
       <h6><?php echo $yearAlbum?></h6>
       </div>
       </div>
    </div>
</div>

<?php 
}
?>