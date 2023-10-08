@extends('layouts.main')
@section('content')
    <div class="aboutHeader">
        <img src="{{ asset('img/food/o1.jpg') }}" alt="">
        <h5>ต้มยำทะเลน้ำใส</h5>
        <h6>100kcal</h6>
    </div>
    <div class="aboutBody">
        <p class="ingredient">วัตถุดิบ</p>
        <ol>
            <li>กุ้งสด 300 กรัม</li>
            <li>ปลาหมึกสด 200 กรัม</li>
            <li>ตะไคร้ 2 ต้น</li>
            <li>หอมแดง 10 หัว</li>
            <li>ข่าอ่อน 4-5 แว่น</li>
            <li>พริกขี้หนู 5-7 เม็ด</li>
            <li>น้ำมะขามเปียก 2-3 ช้อนโต๊ะ</li>
            <li>มะนาว 1 ลูก</li>
            <li>น้ำปลา 3-4 ช้อนโต๊ะ</li>
            <li>ผักชีฝรั่ง 1 ต้น</li>
            <li>ต้นหอมผักชีซอย 1 ช้อนโต๊ะ</li>
            <li>ใบมะกรูด 4-5 ใบ</li>
            <li>น้ำเปล่า 3 ถ้วย</li>
            <li>คนอร์ซุปก้อน 1/2 ก้อน</li>
            <li>มะเขือเทศ 3 ลูก</li>
        </ol>

        <p class="recipe">วิธีการทำ</p>
        <ol>
            <li>ล้างปลาหมึก และกุ้งให้สะอาด เอาขี้กุ้ง เปลือกกุ้ง ฟันปลาหมึก กระดูกหลัง ออกให้หมด แล้วนำมาหั่นพักไว้</li>
            <li>ตั้งน้ำ ใส่ ตะไคร้ ข่า หอมแดง คนอร์ก้อนลงไป พอน้ำเดือดใส่กุ้ง ปลาหมึก มะเขือเทศ น้ำมะขามเปียก คนให้เข้ากัน</li>
            <li>พอน้ำเดือดอีกรอบ ใส่มะนาว น้ำปลา พริก ชิมรสชาติ</li>
            <li>ปิดไฟ ใส่ผักชีฝรั่ง ต้นหอม ผักชี คนให้เข้ากัน</li>
            <li>เตรียมถ้วย พร้อมเสริฟได้ทันที</li>
        </ol>

        <p style="text-align: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LpzRlv0MacM?si=y7WKcU387865QMsm"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </p>

        <p>อ้างอิง:https://www.youtube.com/@KateVariety</p>

    </div>

@endsection
