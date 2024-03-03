<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Course</title>
    <!-- Include CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
    <style>
    body{
        background-color: #F2F3F4;
    }
   .intro{
    margin: auto 100px;
   }
   .container-11{
    margin: 50px auto;
   }
   *{
  font-family: "IBM Plex Sans Thai", sans-serif;
  font-weight: 400;
  font-style: normal;
}
    </style>
</head>
<body>
    <div id="app">
        <div class="header_web">
            @include('components.manycourse.header_web')
        </div>
        <div class="carousel">
            @include('components.manycourse.carousel')
        </div>
        <div class="intro">
            <h1 align="center" style="color: #ffa601; font-weight: 700">เรียนรู้และเติมเต็มตัวตนกับ "Many Course" วันนี้!</h1> <br>
            <h4>คุณอาจจะกำลังมองหาโอกาสในการเรียนรู้สิ่งใหม่ ๆ และพัฒนาทักษะของคุณในด้านต่าง ๆ ใช่ไหม? เราขอแนะนำ "Many Course" 
                แพลตฟอร์มการเรียนออนไลน์ที่จะช่วยคุณเปิดประสบการณ์ใหม่ๆ ในการเรียนรู้ทุกวัน!</h4>
            <br>
            <h2>ทำไมคุณควรเข้าร่วม "Many Course"?</h2><br>
            <h4>- เรามีคอร์สเรียนเเละงานอดิเรกให้คุณเลือกเช่น กิจกรรมทางด้านดนตรี, การทำอาหาร, งานศิลปะ, กีฬา และอื่นๆ อีกมากมาย!</h4><br>
            <h4>- คุณจะได้เรียนรู้จากผู้สอนที่มีประสบการณ์และความเชี่ยวชาญในสาขาต่างๆ</h4><br>
            <h4>- การเรียนแบบออนไลน์ที่สะดวก เรียนได้ทุกที่ทุกเวลา ด้วยอุปกรณ์ใดก็ได้ที่คุณมี</h4><br><br>
            <h2 align="center">เริ่มต้นการเรียนรู้วันนี้โดยการสมัครสมาชิกกับ "Many Course" และพบกับโลกของการเรียนรู้ที่ไม่มีข้อจำกัด!</h2>
        </div>
        <div class="container-11">
        <h2 class="pb-1" style="text-align: center; text-transform: uppercase; margin-bottom: -50px; text-decoration: underline;">Course Categories</h2>
            @include('components.manycourse.catagories')
            <div class="box-card-course">
            </div>
            <div class="contact-info">
            </div>
        </div>
    </div>
</body>
</html>
