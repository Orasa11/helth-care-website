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
        <a class="fs-4" href="#">อาหารที่สามารถรับทานได้</a>
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
                    <img src="{{ asset('img/food/d1.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                    <div class="card-body" style="width: 200px;">
                        <p class="card-text">ข้าวต้มกุ้ง</p>
                        <i class="fa-solid fa-fire"> 100 kcal</i>
                    </div>
                </a>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/d2.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ก๋วยเตี๋ยวน้ำ</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/d3.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แกงส้มผักรวม</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/d4.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ผัดผักรวมกุ้ง</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/d5.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">น้ำพริก+ผักสดและผักลวก</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/food/d6.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แกงจืดตำลึงเต้าหู้หมูสับ</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/17.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ปลาดอลลี่นึ่งกับข้าวกล้อง</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/17.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
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
                <img src="{{ asset('img/fruit/d1.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">ฝรั่ง</p>
                    <i class="fa-solid fa-fire"> 100 kcal</i>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/d2.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แคนตาลูป</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/d3.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แอปเปิล</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/d4.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">พุทรา</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/d5.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">มะละกอ</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/d6.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">มังคุด</p>
                </div>
            </div>
            <div class="card" style="min-width: 200px;">
                <img src="{{ asset('img/fruit/d7.jpg') }}" class="card-img-top" style="width: 100%; height:130px;">
                <div class="card-body">
                    <p class="card-text">แอปเปิล</p>
                </div>
            </div>
        </div>
    </div>
@endsection
