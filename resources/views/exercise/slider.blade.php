@extends('layouts.exercise')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 slider mb-5 mt-lg-5 mt-md-5">
            <div class="row">
                <h5 class="text-primary-emphasis">highlight</h5>
                <h2 id="slider-title" class="text-dark-emphasis"></h2>
                <p id="slider-description"></p>
            </div>
            <div class="row mt-5">
                <div class="col-2 border-end border-secondary text-primary">
                    <span id="current-slider">1</span>/<span id="counter-total">1</span>
                </div>
                <div class="col-10">
                    <a href="#" id="control-left" class="control-slider link-underline link-underline-opacity-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                        </svg>
                    </a>
                    <a href="#" id="control-right" class="control-slider link-underline link-underline-opacity-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button id="btn-slider-image-1" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="carousel-indicators-button active" aria-current="true" aria-label="Slide 1"></button>
                    <button id="btn-slider-image-2" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="carousel-indicators-button" aria-label="Slide 2"></button>
                    <button id="btn-slider-image-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="carousel-indicators-button" aria-label="Slide 3"></button>
                    <button id="btn-slider-image-4" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="carousel-indicators-button" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div  id="slider-carousel-item-1" class="carousel-item active">
                        <img id="slider-image-1" src="images/slider-image-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div id="slider-carousel-item-2" class="carousel-item">
                        <img id="slider-image-2" src="images/slider-image-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div id="slider-carousel-item-3" class="carousel-item">
                        <img id="slider-image-3" src="images/slider-image-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div id="slider-carousel-item-4" class="carousel-item">
                        <img id="slider-image-4" src="images/slider-image-4.jpg" class="d-block w-100" alt="...">
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
        </div>
    </div>
</div>
@endsection
