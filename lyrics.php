<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;

    }

    .container1 {
        padding: 15px;
        font-size: 18px;
        background: #dbdfe5;
        margin-bottom: 15px;
        color: rgba(22, 22, 22, 1);
    }

    @media (max-width: 500px) {

        .container1,
        .btn-sm {
            font-size: 14px;
            /*here put anything you want for mobile size*/
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto p-3">
            <div>
                <h3 class="text-center float-md-start mb-0">Song Lyrics App</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 " href="index.php" onclick="history.back()">Home</a>
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="lyrics.php">Top Lyrics</a>
                    <a class="nav-link fw-bold py-1 px-0" href="signin.php">Sign in</a>
                </nav>
            </div>
        </header>

        <div class="container"><br><br>

            <div class="row">

                <div class="col-md-6">
                    <div class="container1 rounded">Avicii - Wake Me Up
                        <a class="btn btn-primary btn-sm float-end ; " href="songs\wakemeup.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Charlie Puth - Light Switch

                        <a class="btn btn-primary btn-sm float-end " href="songs\lightswitch.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Daughtry - Over You
                        <a class="btn btn-primary btn-sm float-end" href="songs\overyou.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="container1 rounded">Daughtry - What About Now
                        <a class=" btn btn-primary btn-sm float-end " href="songs\whataboutnow.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Ed Sheeran - Caste on the Hill
                        <a class="btn btn-primary btn-sm float-end" href="songs\castleonthehill.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Ed Sheeran - Overpass Graffiti
                        <a class="btn btn-primary btn-sm float-end" href="songs\overpass.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Glass Animals - Heat Waves
                        <a class="btn btn-primary btn-sm float-end" href="songs\heatwaves.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Gym Class Heroes - Stereo Hearts
                        <a class="btn btn-primary btn-sm float-end" href="songs\stereoheart.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Imagine Dragons - Birds
                        <a class="btn btn-primary btn-sm float-end" href="songs\birds.php" role="button">See Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Imagine Dragons - Demons
                        <a class="btn btn-primary btn-sm float-end" href="songs\demons.php" role="button">See Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Imagine Dragons - Whatever It Takes
                        <a class="btn btn-primary btn-sm float-end" href="songs\whateverittakes.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="container1 rounded">Imagine Dragons - Enemy
                        <a class="btn btn-primary btn-sm float-end" href="songs\enemy.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Imagine Dragons - Shots
                        <a class="btn btn-primary btn-sm float-end" href="songs\shots.php" role="button">See Lyrics</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container1 rounded">Justin Bieber - Ghost
                        <a class="btn btn-primary btn-sm float-end" href="songs\ghost.php" role="button"
                            name="song1">See
                            Lyrics</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container1 rounded">Lil Nas X - INDUSTRY BABY
                        <a class="btn btn-primary btn-sm float-end" href="songs\industrybaby.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container1 rounded">Zayn - Dusk Till Dawn
                        <a class="btn btn-primary btn-sm float-end" href="songs\dusktilldawn.php" role="button">See
                            Lyrics</a>
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>