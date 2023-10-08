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
                <img src="{{ asset('img/health/health1.jpg') }}" class="d-block w-100"
                    style="width: 100px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/health/health2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/health/health3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Fix gap --}}
    <div class="mainContentHeader" style="margin-right: 20px;">
        <a class="fs-4" href="#">อาหารที่สามารถกินได้</a>
        <a class="fs-4" href="#">อาหารที่ควรหลีกเลี่ยง</a>
    </div>
    {{-- Fix gap --}}

    <div class="content">
        <div class="subContentHeader">
            <h4>เมนูอาหารและวิธีทำ</h4>
            <a href="#">ดูทั้งหมด</a>
        </div>

        <div class="overflow-x-scroll gap-8" style="display: flex; gap: 20px;">
            <div class="card" style="min-width: 200px;">
                <a href="">
                    <img src="{{ asset('img/food/b1.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                    <div class="card-body" style="width: 200px;">
                        <p class="card-text">ซุปฟักทอง</p>
                        <i class="fa-solid fa-fire"> 100 kcal</i>
                    </div>
                </a>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b2.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ต้มจืดตำลึงหมูสับ</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b3.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">กระเพาะปลา</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b4.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">มะระยัดไส้</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b5.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ปลานึ่งขิง</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b6.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ผัดเต้าหู้ถั่วงอก</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ผัดเปรี้ยวหวานเต้าหู้</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/b8.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ข้าวต้มปลาซุปมิโซะ</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="subContentHeader">
            <h4>ผลไม้</h4>
            <a href="#">ดูทั้งหมด</a>
        </div>
        <div class="overflow-x-scroll gap-8" style="display: flex; gap: 20px;">
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b1.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">กล้วยน้ำว้า</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b2.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แตงโม</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b3.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ส้มโอ</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b4.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">สับปะรด</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b5.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">มะม่วง</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b6.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">สาลี่</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/b7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">กีวี</p>
                </div>
            </div>
        </div>
    </div>
@endsection
