<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/eskuls">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron carbon-wrap mt-5">
        <div class="container ">
            <img src="data:image/png;base64,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"
                alt="">
            <h1 class="display-4">Welcome</h1>
            <p class="lead">This web contains registration of ekstrakulikuler for SMKN 4 Padalarang.</p>
        </div>
    </div>
    <table>
        <tr>
            <th></th>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
