<!--Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente 
i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.-->
<?php
require_once __DIR__ . "/data/array.php";
require_once __DIR__ . "/components/card.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    <header>
        <div class="nav-bar-container"></div>
        <main>
           <div class="main-container">
            <div class="container">
             <div class="row row-cols-5">
             <?php 
             foreach($albums as $album){
                 printAlbum($album);
             }
             ?>
             </div>
            </div>
           </div>
        </main>
    </header>
</body>
</html>