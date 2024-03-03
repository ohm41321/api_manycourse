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
    .intro {
        margin: auto 50px;
        text-align: center;
    }
   .container-11{
    margin: 50px auto;
   }
   *{
  font-family: "IBM Plex Sans Thai", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.button {
margin: 0 10px;
position: relative;
padding: 15px 200px;
border-radius: 25px;
border: none;
color: #fff;
cursor: pointer;
background-color: #ffa601;
transition: all 0.2s ease;
}

.button:active {
  transform: scale(0.95);
}

.button:before,
.button:after {
  position: absolute;
  content: "";
  width: 100%;
  left: 50%;
  height: 100%;
  transform: translateX(-50%);
  z-index: -1000;
  background-repeat: no-repeat;
}

.button:hover:before {
  top: -70%;
  background-image: radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, transparent 20%, #ffa601 20%, transparent 30%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, transparent 10%, #ffa601 15%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,
    10% 10%, 18% 18%;
  background-position: 50% 120%;
  animation: orangeTopBubbles 0.6s ease;
}

@keyframes orangeTopBubbles {
  0% {
    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,
      40% 90%, 55% 90%, 70% 90%;
  }

  50% {
    background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,
      50% 50%, 65% 20%, 90% 30%;
  }

  100% {
    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,
      50% 40%, 65% 10%, 90% 20%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}

.button:hover::after {
  bottom: -70%;
  background-image: radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, transparent 10%, #ffa601 15%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%),
    radial-gradient(circle, #ffa601 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;
  background-position: 50% 0%;
  animation: orangeBottomBubbles 0.6s ease;
}

@keyframes orangeBottomBubbles {
  0% {
    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,
      70% -10%, 70% 0%;
  }

  50% {
    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,
      105% 0%;
  }

  100% {
    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,
      110% 10%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}
.button-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    @media screen and (max-width: 768px) {
        .button {
            font-size: 20px;
            padding: 12px 30px;
        }
    }
    @media screen and (max-width: 480px) {
        .button {
            font-size: 16px;
            padding: 10px 20px;
        }
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
            
            <h1 align="center" style="color: #ffa601; font-weight: 700" id="regis">เรียนรู้และเติมเต็มตัวตนกับ "Many Course" วันนี้!</h1> <br>
            <h4>คุณอาจจะกำลังมองหาโอกาสในการเรียนรู้สิ่งใหม่ ๆ และพัฒนาทักษะของคุณในด้านต่าง ๆ ใช่ไหม? เราขอแนะนำ "Many Course" <br> 
                แพลตฟอร์มการเรียน "ออฟไลน์" เเละ "ออนไลน์" ที่จะช่วยคุณเปิดประสบการณ์ใหม่ๆ ในการเรียนรู้ทุกวัน!</h4>
            <br><br>
            <h2>ทำไมคุณควรเข้าร่วม "Many Course"?</h2><br>
            <h4>- เรามีคอร์สเรียนเเละงานอดิเรกให้คุณเลือกไม่ว่าจะเป็นทางด้านของ"วิชาการ", "ภาษา", "การวาดภาพ" หรือทางด้าน "กีฬา" และอื่นๆ อีกมากมาย!</h4><br>
            <h4>- คุณจะได้เรียนรู้จากผู้สอนที่มีประสบการณ์และความเชี่ยวชาญในสาขาต่างๆ</h4><br>
            <h4>- การเรียนแบบ"ออฟไลน์"เเละ "ออนไลน์"ที่สะดวก เรียนได้ทุกที่ทุกเวลา ด้วยอุปกรณ์ใดก็ได้ที่คุณมี</h4><br><br>
            <h2 align="center" >เริ่มต้นการเรียนรู้วันนี้โดยการสมัครสมาชิกกับ "Many Course" และพบกับโลกของการเรียนรู้ที่ไม่มีขีดจำกัด!
            </h2>  
            
           <div class="button-container">
            <a href="/register-form">
                <button class="button" style="font-size:25px"> 
                    ลงทะเบียน &#128221;  </button>
            </a>
            <a href="/register-list">
              <button class="button" style="font-size:25px"> 
                  รายชื่อ &#128203;  </button>
          </a>
           </div>
        <br>

        </div>
        <div class="container-11">
        <h2 class="pb-1" style="text-align: center; text-transform: uppercase; margin-bottom: -50px;">Course Categories<span style='font-size:50px;'> &#128194;</span></h2>
            @include('components.manycourse.catagories')
            <div class="box-card-course">
            </div>
            <div class="contact-info">
            </div>
        </div>
        @include('manycourse.course_schedule') <br> <br>
        @include('manycourse.exam_schedule')
        @include('components.manycourse.contact')
        @include('components.manycourse.footer_web')
    </div>
    
</body>
</html>
