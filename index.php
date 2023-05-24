<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unn'è vinile, l'è un disco bischero!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="vh-100">
        <h1> Spotify</h1>

        <div class="container">
            <div class="row row-gap-2">
                <div class="col-4" v-for="(elem, index) in data" :key="index">
                    <img :src="elem.poster" alt="" class="img-fluid">
                    <h3>{{ elem.title }}</h3>
                    <h5>{{ elem.author }} | {{ elem.year }}</h5>
                    <h5>{{ elem.genere }}</h5>
                </div>
            </div>

        </div>

    </div>





    <!-- script vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- script axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- script js -->
    <script src="main.js"></script>
</body>
</html>