@extends('layouts.main')
@section('content')
    <div class="aboutHeader">
        <img src="{{ asset('img/food/o2.jpg') }}" alt="">
        <h5>สลัดปลาแซลมอนย่าง</h5>
        <h6>100kcal</h6>
    </div>
    <div class="aboutBody">
        <p class="ingredient">วัตถุดิบ</p>
        <ol>
            <li>ปลาแซลมอน 1 ชิ้น</li>
            <li>ส้มแมนดาริน อะเฟอเรอร์ออสเตรเรีย 2-3 ลูก</li>
            <li>บลูเบอร์รี 20 กรัม</li>
            <li>ผักสลัด 100 กรัม</li>
            <li>หัวหอม 30 กรัม</li>
            <li>ไวท์ไวน์เวเนกา/น้ำส้มสายชู 2 ช้อนโต๊ะ</li>
            <li>น้ำมันมะกอก 100 ซีซี</li>
            <li>มัสตาร์ด 1/2 ช้อนโต๊ะ</li>
            <li>น้ำตาล เล็กน้อย</li>
            <li>เกลือ เล็กน้อย</li>
            <li>พริกไทย เล็กน้อย</li>
        </ol>

        <p class="recipe">วิธีการทำ</p>
        <ol>
            <li>สับหัวหอมให้ละเอียด หลังจากนั้นผสมมัสตาร์ด คนให้เข้ากัน</li>
            <li>เติมไวท์ไวน์เวเนกา น้ำตาล และน้ำมันมะกอกลงไปทีละนิด คอยคนให้เข้ากันอยู่เรื่อย ๆ</li>
            <li>ปรุงรสด้วยเกลือและพริกไทย คนให้เข้ากัน</li>
            <li>เตรียมสลัดด้วยการนำผักสลัดและบลูเบอร์รีไปล้าง แล้วก็นำขึ้นมา ซับน้ำให้แห้ง</li>
            <li>หั่นเนื้อส้มแมนดารินเป็นชิ้นพอดีคำ</li>
        </ol>

        <p style="text-align: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YukEY0vd_wU?si=FMlmCcWDk91RtF6e"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </p>

        <p>อ้างอิง:https://www.youtube.com/@WongnaiOfficial</p>

    </div>

@endsection
