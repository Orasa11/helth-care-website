@extends('layouts.main')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block w-100" style="width: 100px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block w-100" alt="...">
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

    <div class="row row-cols-1 row-cols-md-3 g-4 customCardContainer">
        <div class="col">
            <a href="/obesity">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคอ้วน</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="/diabetes2">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคเบาหวาน</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="/bllod_pressure3">
                <div class="card h-100">
                    <img src="{{ asset('img/3.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคความดันโลหิตสูง</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/4.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคไขมันในเลือดสูง</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคข้อเสื่อม</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคหัวใจขาดเลือด</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคสมองเสื่อม</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคซึมเศร้า</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">อาการวิตกกังวลและนอนไม่หลับ</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100">
                    <img src="{{ asset('img/placeholder.png') }}" class="card-img-top"
                        style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-title">โรคเกี่ยวกับทางเดินอาหาร</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
