<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->

        <div class="carousel-item active" style="background-image: url('{{$slideImages[0]->image_path}}')">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="text-shadow: 2px 2px 5px #15b2ff;" class="display-4">{{$slideImages[0]->slider_title}}</h2>
                <p style="text-shadow: 2px 2px 5px #15b2ff;" class="lead">{{$slideImages[0]->slider_content}}</p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{$slideImages[1]->image_path}}')">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="text-shadow: 2px 2px 5px #15b2ff;" class="display-4">{{$slideImages[1]->slider_title}}</h2>
                <p style="text-shadow: 2px 2px 5px #15b2ff;" class="lead">{{$slideImages[1]->slider_content}}</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{$slideImages[2]->image_path}}')">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="text-shadow: 2px 2px 5px #15b2ff;" class="display-4">{{$slideImages[2]->slider_title}}</h2>
                <p style="text-shadow: 2px 2px 5px #15b2ff;" class="lead">{{$slideImages[2]->slider_content}}</p>
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
