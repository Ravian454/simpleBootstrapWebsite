<!DOCTYPE html>
<html>

<head>
    <title>Beauty Of Pakistan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Adventure</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/baradari.jpg" alt="Baradari">
            </div>
            <div class="carousel-item">
                <img src="images/cameraman.jpg" alt="Cameraman">
            </div>
            <div class="carousel-item">
                <img src="images/jheel.jpg" alt="Jheel">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/minar.jpg" style="width:90vh; height:90vh" class="aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Welcome To Pakistan</h2>
                    <p class="py-3">Pakistan's beauty lies in its majestic mountains, pristine lakes, and lush valleys. From the towering peaks of the Karakoram to the tranquil waters of Lake Saif-ul-Malook, the country's natural wonders captivate the heart. With a rich cultural heritage and warm hospitality, Pakistan is a hidden gem waiting to be explored.</p>
                    <a href="about.php" class="btn btn-success">For More </a>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card" >
                        <img class="card-img-top" src="images/man.jpg" alt="Card image" style="width:102vh; height:50vh;">
                        <div class="card-body">
                            <h4 class="card-title">Pakistan Flag</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <img class="card-img-top" src="images/water.jpg" alt="Card image" style="width:102vh; height:50vh;">
                        <div class="card-body">
                            <h4 class="card-title">Pakistan Flag</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <img class="card-img-top" src="images/snow.jpg" alt="Card image" style="width:102vh; height:50vh;">
                        <div class="card-body">
                            <h4 class="card-title">Pakistan Flag</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <img class="card-img-top" src="images/man.jpg" alt="Card image" style="width:102vh; height:50vh;">
                        <div class="card-body">
                            <h4 class="card-title">Pakistan Flag</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>

            <div class="container-fluid">
                <div class = "row">
                    <div class="col-lg-4 col-md-4 col=12">
                        <img src="images/jheel.jpg" class="image-fluid pb-4" style="width:102vh; height:50vh;">
                    </div>
                    <div class="col-lg-4 col-md-4 col=12" >
                        <img src="images/jheel.jpg" class="image-fluid pb-4" style="width:102vh; height:50vh;">
                    </div>
                    <div class="col-lg-4 col-md-4 col=12">
                        <img src="images/jheel.jpg" class="image-fluid pb-4" style="width:102vh; height:50vh;">
                    </div>
                    
                </div>
            </div>
        </div>
</section>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label >Username:</label>
                <input type="text" name="user"autocomplete="off" class="form-control">    
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email"autocomplete="off" class="form-control">    
            </div>
            <div class="form-group">
                <label>Mobile No:</label>
                <input type="text" name="mobile"autocomplete="off" class="form-control">    
            </div>
            <div class="form-group">
                <label>Comment:</label>
                <textarea class="form-control" name="comment"></textarea>    
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<footer >
    <p class="p-3 bg-dark text-white text-center">@tkBeesDevelopment</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>