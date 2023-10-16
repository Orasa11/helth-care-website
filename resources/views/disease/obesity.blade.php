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
        <a class="fs-4" href="#" id="edible">อาหารที่สามารถกินได้</a>
        <a class="fs-4" href="#" id="shouldAvoid">อาหารที่ควรหลีกเลี่ยง</a>
    </div>
    {{-- Fix gap --}}

    <div class="content">
        <div class="subContentHeader">
            <h4>เมนูอาหารและวิธีทำ</h4>
            <a href="#">ดูทั้งหมด</a>
        </div>

        <div class="overflow-x-scroll gap-8" style="display: flex; gap: 20px;">
            <div class="card" style="min-width: 200px;">
                <a href="/obesity_food1">
                    <img src="{{ asset('img/food/o1.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                    <div class="card-body" style="width: 200px;">
                        <p class="card-text">ต้มยำทะเลน้ำใส </p>
                        <i class="fa-solid fa-fire"> 100 kcal</i>
                    </div>
                </a>
            </div>
            <div class="card" style="min-width: 200px;">
                <a href="/obesity_food2">
                    <img src="{{ asset('img/food/o2.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                    <div class="card-body">
                        <p class="card-text">สลัดปลาแซลมอนย่าง</p>
                        <i class="fa-solid fa-fire"> 100 kcal</i>
                    </div>
                </a>
            </div>
            <div class="card" style="min-width: 200px;">
                <a href="/about">
                    <img src="{{ asset('img/food/o3.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                    <div class="card-body">
                        <p class="card-text">ไข่พะโล้</p>
                        <i class="fa-solid fa-fire"> 100 kcal</i>
                    </div>
                </a>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o4.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ผัดบล็อคโคลี่อกไก่ </p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o5.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ไข่ตุ๋นกุ้งสด</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o6.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แกงจืดผักกาดขาว </p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ปลาดอลลี่นึ่งกับข้าวกล้อง</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ปลาดอลลี่นึ่งกับข้าวกล้อง</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ปลาดอลลี่นึ่งกับข้าวกล้อง</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/o7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ปลาดอลลี่นึ่งกับข้าวกล้อง</p>
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
                <img src="{{ asset('img/fruit/o1.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แก้วมังกร</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/o2.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แตงโม</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/o3.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ส้ม</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/o4.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">มะละกอ</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/o5.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">สตรอเบอร์รี่</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/o6.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">บลูเบอร์รี่</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/o7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แอปเปิล</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/foodPage.js')}}"></script>
@endsection
