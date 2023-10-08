@extends('layouts.main')
@section('content')
    <div class="aboutHeader">
        <img src="{{ asset('img/food/o3.jpg') }}" alt="">
        <h5>ไข่พะโล้</h5>
        <h6>100kcal</h6>
    </div>
    <div class="aboutBody">
        <p class="ingredient">วัตถุดิบ</p>
        <ol>
            <li>ไข่ไก่ 6 ฟอง</li>
            <li>รากผักชี 4 ราก</li>
            <li>กระเทียม 5 กลีบ</li>
            <li>พริกไทย ½ ช้อนชา</li>
            <li>หมูสามชั้น ตราซีพี 200 กรัม</li>
            <li>น้ำตาลปี๊บ ½ ถ้วย</li>
            <li>ซีอิ๊วขาว 1 ช้อนโต๊ะ</li>
            <li>โป๊ยกั๊ก 4 ดอก</li>
            <li>อบเชย 1-2 ชิ้น</li>
            <li>น้ำมันพืช สำหรับผัด 1 ช้อนโต๊ะ</li>
            <li>น้ำเปล่า 3 ถ้วย</li>
        </ol>

        <p class="recipe">วิธีการทำ</p>
        <ol>
            <li>ตั้งน้ำใส่เกลือนิดหน่อย ต้มไข่ด้วยไฟกลางประมาณ 10 นาที แล้วยกลงจากเตา เอาไข่ออกมาแช่น้ำให้เย็นแล้วปอกเปลือกแล้วพักไว้</li>
            <li>นำสามเกลอ (รากผักชี กระเทียม และพริกไทย) โขลกให้ละเอียด</li>
            <li>เมื่อโขลก 3 เกลอละเอียดแล้ว ตั้งกระทะใช้ไฟปานกลาง ใส่น้ำมันลงไปนำสามเกลอลงไปผัดให้หอม</li>
            <li>เมื่อสามเกลอเริ่มหอมแล้วให้ใส่น้ำตาลปี๊บลงไปผัด และเคี่ยวจนน้ำตาลสีเข้มจัด เมื่อได้สีน้ำตาลเข้มจัดอย่างที่ต้องการใส่หมูสามชั้นลงไปผัดแค่พอสุก</li>
            <li>ใส่ไข่ต้มและน้ำเปล่า ลงไปตามด้วยโป๊ยกั๊กและอบเชย</li>
            <li>ปรุงรสด้วยเกลือเล็กน้อย พอน้ำซุปเดือดแล้วให้เบาไฟลงโดยใช้ไฟอ่อน</li>
            <li>ค่อยๆ เคี่ยวต่อไปประมาณ 1 ชั่วโมง น้ำซุปจึงจะเริ่มเข้าเนื้อ พร้อมเสิร์ฟ</li>
        </ol>

        <p style="text-align: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/IP4GXK4Gy2w?si=EM6OgtpPF9gUcKom"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </p>

        <p>อ้างอิง:https://www.youtube.com/@PanKanPrung</p>

    </div>

@endsection
