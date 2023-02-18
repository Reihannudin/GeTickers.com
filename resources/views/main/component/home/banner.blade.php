<div style=" background: rgb(9,9,9); opacity: 0.9;">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="height: 450px ; width: 100%" >
                    <div class="mx-auto w-75 h-100 mx-auto " style="object-fit: cover">
                        <img src="{{ asset('assets/img/banner/blackpink-banner.png') }}" style="object-fit: cover" class=" mx-auto w-100 h-100 " alt="...">
                    </div>
                </div>
                {{--                            <div class="carousel-caption d-none d-md-block">--}}
                {{--                                <h5>First slide label</h5>--}}
                {{--                                <p>Some representative placeholder content for the first slide.</p>--}}
                {{--                            </div>--}}
            </div>
            <div class="carousel-item">
                <div style="height: 450px">
                    <img src="{{ asset('assets/img/banner/txt-banner.jpg') }}" style="object-fit: cover" class="d-block w-100" alt="...">
                </div>
                {{--                            <div class="carousel-caption d-none d-md-block">--}}
                {{--                                <h5>Second slide label</h5>--}}
                {{--                                <p>Some representative placeholder content for the second slide.</p>--}}
                {{--                            </div>--}}
            </div>
            <div class="carousel-item">
                <div style="height: 450px">
                    <img src="{{ asset('assets/img/banner/seventeen-banner.png') }}" style="object-fit: cover" class="d-block w-100" alt="...">
                </div>
                {{--                            <div class="carousel-caption d-none d-md-block">--}}
                {{--                                <h5>Third slide label</h5>--}}
                {{--                                <p>Some representative placeholder content for the third slide.</p>--}}
                {{--                            </div>--}}
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
