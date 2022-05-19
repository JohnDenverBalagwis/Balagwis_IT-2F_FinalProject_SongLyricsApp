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
    </style>

    <link href="style.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto p-3">
            <div>
                <h3 class="float-md-start mb-0">Lyrixmatch</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 " href="index.php">Home</a>
                    <a class="nav-link fw-bold py-1 px-0" href="lyrics.php">Top Lyrics</a>
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="signin.php">Sign in</a>
                </nav>
            </div>
        </header>
        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <h3 class="bg-white card-title text-dark text-center">Sign in to Lyrixmatch</h3>
                    <div class="card-text">
                        <form action="signin.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password">

                            </div>
                            <button type="submit" class="fw-bold btn btn-primary">Sign in</button>
                            <div class="sign-up text-dark">
                                Don't have an account? <a href="#">Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</html>