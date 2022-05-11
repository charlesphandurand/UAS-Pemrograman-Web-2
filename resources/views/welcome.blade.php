<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>

    {{-- awal navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top fw-bold">
        <div class="container-fluid mx-3 text-decoration-none">
            <a class="navbar-brand me-5" href="#">Games</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr style="border: 1px solid white">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about">About</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <a class="nav-item text-decoration-none text-white" aria-current="page" href="{{ route('index-login') }}">Login</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- akhir navbar --}}

    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-md-center my-5">
            <div class="col-md-5">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center mb-5">

            <?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
foreach ($daftar_game as $game){
  if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
    $rowCount++; ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">

                    {{-- awal card --}}
                    <div class="card mb-3" style="width: 105%;">
                        <div class="row g-0">
                            <div style="col-md-4 overflow: hidden;">
                                <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}"
                                    class="card-img-top">
                            </div>
                            <div class="col-md-8" style="width: 105%;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $game->game_name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">
                                        111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir card --}}
                </div>
                <?php
    if($rowCount % $numOfCols == 0) { ?>
            </div> <?php } } ?>
            <div name="about" id="about" class="mb-3"></div>
            <div class="row text-center mb-3">
                <div class="col-sm-12">
                    <hr>
                    <h1>About</h1>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet nihil dolores commodi ad, possimus
                        dolore quos ducimus, officiis vitae quasi consequatur. Dolorum consectetur eius deleniti velit
                        itaque suscipit distinctio beatae animi esse, dolor quaerat omnis a iure cupiditate quo. Nisi
                        eos nulla et at cupiditate error obcaecati expedita cum veniam eum minus necessitatibus nesciunt
                        deserunt, rem voluptatem ipsum. Necessitatibus, exercitationem dicta tempora a eveniet illo
                        quidem! Porro commodi hic vero pariatur magni assumenda repudiandae, illo praesentium? Ut earum
                        sunt praesentium ipsam magni veniam quaerat dicta cupiditate impedit. Qui modi quisquam quod
                        neque recusandae cupiditate excepturi ipsam debitis iste, vero repellendus enim veniam
                        laudantium nobis. Minima aperiam alias error illo autem eos veritatis porro eligendi. Natus
                        dolorem accusamus, error voluptatum dolore dolores molestias, distinctio quod illum expedita
                        libero odit iure blanditiis voluptas ipsum amet dignissimos aperiam magni, maiores molestiae quo
                        itaque ratione laborum aliquid? Eum nulla labore maxime eos illo voluptates!</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aperiam quae tenetur distinctio
                        itaque similique molestiae beatae a eos, iste eaque maxime non adipisci eligendi est, vel
                        voluptas magni sed accusamus unde tempora cupiditate soluta aspernatur placeat! Obcaecati
                        expedita alias eum, porro enim ab ullam fugit accusantium sunt perspiciatis! Quae, aspernatur
                        vitae vel officiis facere, error voluptates nobis quisquam dolorem fugit laboriosam quidem modi
                        dolores accusamus repudiandae incidunt temporibus odit minima veritatis est ipsa ipsum
                        inventore? Rerum praesentium id asperiores quam, voluptate minus nihil natus recusandae
                        eligendi, totam facilis repellat aspernatur. Magni recusandae ullam quia. Distinctio totam
                        veniam eaque quo impedit commodi fugiat iste excepturi expedita. Ex aut magni error
                        necessitatibus voluptates quas quasi distinctio at facilis. Aut ut, architecto hic ipsa illo
                        eaque reprehenderit eos delectus neque quibusdam obcaecati quidem quas reiciendis nesciunt
                        fugiat impedit aliquam dolore et sunt voluptatem quae fugit corporis explicabo itaque. Veniam
                        maxime ea ab!</p>
                </div>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <section class="footer p-5 bg-dark text-white" id="footer" name="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <p>&copy;2022 <a href=""><b>Charles Phandurand & Maulana</b></a>
                    <p>Made with <i class="bi bi-heart-fill text-danger"></i> using <b>Laravel and Bootstrap</b></p>
                    </p>
                </div>
            </div>
    </section>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
