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

        <h1 class="text-center mb-5"> Spotify</h1>

        <div class="container">
            <div class="row row-gap-2">
                <div class="col-4 text-center" v-for="(elem, index) in data" :key="index">
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card" @click="mostraSingolaCard(index)">
                            <img :src="elem.poster" alt="" class="img-fluid w-100">
                            <h3>{{ elem.title }}</h3>
                            <h5>{{ elem.author }} | {{ elem.year }}</h5>
                            <h5>{{ elem.genere }}</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="card">
                        <img :src="discDetails.poster" alt="" class="img-fluid w-100">
                        <h3>{{ discDetails.title }}</h3>
                        <h5>{{ discDetails.author }} | {{ discDetails.year }}</h5>
                        <h5>{{ discDetails.genere }}</h5>
                    </div>
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