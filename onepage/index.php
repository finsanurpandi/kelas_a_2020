<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav-item {
            padding-right:50px;
        }

        .carousel-item img {
            height: 100vh;
        }

        @media screen and (max-width: 576px) {
            .carousel-item img {
                height: 30vh;
            }
        }

        section#home, section#info, section#about, section#location {
            padding-bottom: 50px;
        }

        p {
            text-align: justify;
        }
    </style>
  </head>
  <body>

    <nav id="navbar-custom" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#info">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#location">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </div>
    </div>
    </nav>

    <!-- SECTION HOME -->
    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/img-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/img-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/img-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>

    <!-- SECTION INFO -->
    <section id="info">
        <div class="container" data-aos="fade-up">
            <h1 class="text-center">Information</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION ABOUT -->
    <section id="about">
        <div class="container">
            <h1 class="text-center" style="padding-bottom:30px">About</h1>
            <div class="row" style="padding-bottom:50px">
                <div class="col-md-6" data-aos="fade-up">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eos totam accusantium asperiores ipsa, magni excepturi natus obcaecati ut aperiam, reiciendis sequi perferendis. Amet, ea vero? Modi, laboriosam. Obcaecati, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In doloremque aperiam nostrum similique, possimus fugiat. Nostrum eveniet cumque fugit pariatur doloribus ea, repellat blanditiis adipisci ad provident, deserunt, atque ab.</p>
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <img src="images/img-4.jpg" class="img-rounded" width="100%"/>
                </div>
            </div>
            <div class="row" style="padding-bottom:50px">
                <div class="col-md-6" data-aos="fade-down">
                    <img src="images/img-5.jpg" class="img-rounded" width="100%"/>
                </div>
                <div class="col-md-6" data-aos="fade-up">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eos totam accusantium asperiores ipsa, magni excepturi natus obcaecati ut aperiam, reiciendis sequi perferendis. Amet, ea vero? Modi, laboriosam. Obcaecati, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In doloremque aperiam nostrum similique, possimus fugiat. Nostrum eveniet cumque fugit pariatur doloribus ea, repellat blanditiis adipisci ad provident, deserunt, atque ab.</p>
                </div>
            </div>
            <div class="row" style="padding-bottom:50px">
                <div class="col-md-6" data-aos="fade-up">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eos totam accusantium asperiores ipsa, magni excepturi natus obcaecati ut aperiam, reiciendis sequi perferendis. Amet, ea vero? Modi, laboriosam. Obcaecati, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In doloremque aperiam nostrum similique, possimus fugiat. Nostrum eveniet cumque fugit pariatur doloribus ea, repellat blanditiis adipisci ad provident, deserunt, atque ab.</p>
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <img src="images/img-6.jpg" class="img-rounded" width="100%"/>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION LOCATION -->
    <section id="location">
        <div class="container-fluid">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4330.370422473845!2d107.14105227468544!3d-6.807496925198949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852e697990cef%3A0x2ddbb36bc8af404e!2sUniversitas%20Suryakancana!5e0!3m2!1sid!2sid!4v1665041950861!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION CONTACT -->
    <section id="contact" style="background-color:blue; height:500px;">
        <div class="container">
                <div class="row" style="padding-top:50px">
                    <div class="col-md-6 text-white">
                        <h1>Contact</h1>
                        <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus laboriosam minima nulla explicabo ullam saepe autem, consequatur, ab quaerat reiciendis repudiandae vero excepturi nihil aliquam quasi provident ex. Excepturi, dolorem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos quaerat, velit atque odio harum ad ea explicabo alias assumenda nostrum sint hic est iste, error porro fuga amet quis mollitia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ducimus placeat, similique unde quae debitis error! Fuga eius, ad architecto, quam id consequuntur excepturi at, harum placeat officiis veritatis! Esse.</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
        </div>
    </section>
    <footer class="container-fluid" style="height:50px">
        <div class="row text-center">
            <span style="padding-top:10px;">Copyright@2022</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        let navbar = document.getElementById('navbar-custom');

        window.addEventListener('scroll', function(){
            let scroll = window.scrollY;
            if (scroll > 50) {
                navbar.classList.add('bg-light');
                navbar.classList.remove('navbar-dark');
            } else {
                navbar.classList.remove('bg-light');
                navbar.classList.add('navbar-dark');
            }
        });
    </script>
  </body>
</html>