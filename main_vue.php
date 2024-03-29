<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    <header>
        <div class="nav-bar-container"></div>
    </header>
    <main id="app">
        <div class="main-container">
            <div class="container">
              <div class="row row-cols-5">
                 <div class="col mb-5" v-for="album,i in albumsList" :key="i">
                    <div class="background-card" style="height: 100%;">
                        <img :src="album.poster" class="img-album"  alt="album" >
                    <div class="card-container">
                        <h4 class="text-center text-white text-uppercase">{{album.title}}</h4>
                    <div class="info-album">
                        <h5>{{ album.author }}</h5>
                        <h6>{{ album.year }}</h6>
                     </div>
                 </div>
               </div>
             </div>
          </div>
       </div>
    </div>
 </main>
<script src="mainVue.js"></script>
</body>
</html>