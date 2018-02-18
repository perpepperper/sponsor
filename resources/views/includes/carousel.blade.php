<div class="row reset">
        <div class="col-md-12 reset">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 max-height" src="images/carousel/1.jpg" alt="First slide">
                        <div class="overlay">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="carousel-title">Sponsor A Child</h1>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 max-height" src="images/carousel/2.jpg" alt="Second slide">
                        <div class="overlay">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="carousel-title">Adopt Now</h1>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 max-height" src="images/carousel/3.jpg" alt="Third slide">
                        <div class="overlay">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="carousel-title">Register A Child</h1>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    
    <style>
        .reset {
            margin: 0;
            padding: 0;
        }
        .max-height {
            height: 100%;
            max-height: 800px;
        }
        .overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.3);
            text-shadow: 0 2px #000;
        }
        .carousel-title {
            font-weight: 600;
        }
    </style>