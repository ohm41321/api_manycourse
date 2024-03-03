<!DOCTYPE html>
<html lang="en">
<head>
<script src="../assets/js/color-modes.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Carousel Page</title>
    <style>
        
body {

padding-top: 0rem;
padding-bottom: 3rem;
color: rgb(var(--bs-tertiary-color-rgb));
}

/* Carousel base class */
.carousel {
margin-top: -25px;
margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
bottom: 3rem;
z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
height: 30rem;
}


.marketing .col-lg-4 {
margin-bottom: 1.5rem;
text-align: center;
}

.marketing .col-lg-4 p {
margin-right: .75rem;
margin-left: .75rem;
}

.featurette-divider {
margin: 5rem 0; 
}

.featurette-heading {
letter-spacing: -.05rem;
}


@media (min-width: 40em) {
.carousel-caption p {
  margin-bottom: 1.25rem;
  font-size: 1.25rem;
  line-height: 1.4;
}

.featurette-heading {
  font-size: 50px;
}
}

@media (min-width: 62em) {
.featurette-heading {
  margin-top: 7rem;
}
}

    </style>
</head>
<body>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1212266224059285524/52CE1C2A1EF24BD3747BFB1C770550B49A3D834F.png?ex=65f135e6&is=65dec0e6&hm=c64702d67c5109f782593768c928675d4f4d501c271efdb1f8ed8f0e7daf2d96&=&format=webp&quality=lossless&width=1369&height=428" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
      <div class="carousel-item">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1212266962629951548/22150940FA34E766C92F4CD2EA2BF0C3C4E5AEEF.png?ex=65f13696&is=65dec196&hm=a7a5bf8053fb7c33f390951d1d2fd27f06e69e58ef8560ccf315e40ddbc56dbf&=&format=webp&quality=lossless&width=1369&height=428" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
      <div class="carousel-item">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1212269539954266163/BF187036A32E02CA65F7C3A96011EB70F3A09B60.png?ex=65f138fd&is=65dec3fd&hm=186e221cc69ac6818551fdb608e84a368416d3b810132ac898235f8ce22fa536&=&format=webp&quality=lossless&width=1369&height=440" style="width: 100%; height: 100%; object-fit: cover; object-position: buttom;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
      <div class="carousel-item">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1212268456691638282/D049637AFFE560CFE26119F95116A56671E7B916.png?ex=65f137fa&is=65dec2fa&hm=18b0ddc389cfbdb2db3b8c6cb688ba51f6bf7156ae9dcb9ff5bffe0730d3b5b5&=&format=webp&quality=lossless&width=1369&height=428" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
      <div class="carousel-item">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1212269846314623098/E7DD1C5E03E0D6D742B5641524408A47D9330BB7.png?ex=65f13946&is=65dec446&hm=d7cb2a3f5f623e7abafee1dfc2e9247d5e89a91a85fbbe31a6fb661ec9acbf96&=&format=webp&quality=lossless&width=1369&height=303" style="width: 100%; height: 100%; object-fit: cover; object-position:left center;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
</body>
</html>
