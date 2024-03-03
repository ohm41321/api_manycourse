<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Course</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Assuming your CSS file is in the public/css directory -->
</head>
<body>
    <div class="navbar-ct" style="background-color:#212121;">
        <header class="fixed-header d-flex flex-wrap justify-content-center py-2 mb-4">
            <!--The Logo, Name on Header-->
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" style="margin-left: 30px;">
                <img src="https://media.discordapp.net/attachments/1003582679465345034/1162008756293476472/384199760_1015394396518496_1693242854705544577_n1.png?ex=65e07cfc&is=65ce07fc&hm=bf05827b112524366dac6d507f437542b16872a632ef37aa43b4f9cb517f3b2f&=&format=webp&quality=lossless&width=625&height=625" alt="" width="70" height="70"> &nbsp; &nbsp;
                <span class="fs-4" style="color: white; margin-left: -0px">Many Course</span>
            </a>
            <div class="user_fn">
              @if (Auth::check() && Auth::user())
              <a class="button-dd" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="border-color: #FFFFFF; font-weight:1000;">
                  {{ Auth::user()->name }}
              </a>
              <img class="pic_profile rounded-full h-8 w-8" src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}" width="60" height="60">
              <ul class="dropdown-content">
                  <li><a class="dropdown-item" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">Profile</a></li>
                  <li>
                      <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                          @csrf
                          <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit();">
                              {{ __('Log Out') }}
                          </a>
                      </form>
                  </li>
              </ul>   
@else
<a href="/login">
                <button class="c-button c-button--gooey" style="margin-right: 10px;"> login
                    <div class="c-button__blobs">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </button>
            </a>
@endif
</div>

        </header>
    </div>


    <script>

    </script>
</body>
<style>
.pic_profile{
  border-radius: 50px;
}
.user_fn {
  position: relative;
  display: inline-block;
}

.button-dd {
  background-color: #212121; /* Orange */
  color: #FFFFFF ; /* Black */
  padding: 10px 15px;
  font-size: 15px;
  font-weight: bold;
  border: none;
  border-radius: 15px;
  border-color: #FFFFFF;
  cursor: pointer;
  text-decoration: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
  min-width: 165px;
  background-color: #212121; /* Black */
  border: 2px solid #FFA500; /* Orange */
  border-radius: 15px 15px 15px 15px; /* Adjusted for left alignment */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 8px 0;
  right: 0; /* Align the dropdown to the right */
  
}

.dropdown-content a {
  color: #FFA500; /* Orange */
  padding: 8px 10px;
  text-decoration: none;
  display: block;
  transition: 0.1s;
}

.dropdown-content a:hover {
  background-color: #FFA500; /* Orange */
  color: #000; /* Black */
}

.user_fn:hover .dropdown-content {
  display: block;
  right: auto; /* Reset the right alignment */
  left: 0; /* Align the dropdown to the left */
}

/*--------------------------------*/
  
/* icon-theme-dark, light */
.user_fn{
    margin: auto 10px;
    margin-right: 25px;
}
#icon-theme{
  margin: auto 20px;
  width: 50px;
  height: 50px;
  cursor: pointer;
  transition: 1s;

}
#icon-theme:hover{
  animation-name: rotate;
  -webkit-animation: rotate 3s normal linear infinite;
  animation: rotate 3s normal linear infinite;
  scale: 1.5;
}

:root{
   --primary-color: #f4fdff;
  --secondary-color: #212121; 
}

.dark-theme{
 --primary-color: #3d3d3d;
 --secondary-color: #ffffff;
}

@keyframes rotate {
  0% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
  25% {
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
  }
  50% {
    -webkit-transform: rotate3d(0, 0, 1, 180deg);
    transform: rotate3d(0, 0, 1, 180deg);
  }
  75% {
    -webkit-transform: rotate3d(0, 0, 1, 270deg);
    transform: rotate3d(0, 0, 1, 270deg);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg);
    transform: rotate3d(0, 0, 1, 360deg);
  }
}
/* navbar */

.navbar-ct{
  margin: 6.5rem auto;
}
.fixed-header{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background-color: #212121;
  z-index: 1000;
}
/*  */
.c-button {
  background-color: #212121;
  margin: 10px;
  color: #000;
  font-weight: 700;
  font-size: 16px;
  text-decoration: none;
  padding: 0.7em 2.5em;
  cursor: pointer;
  display: inline-block;
  vertical-align: middle;
  position: relative;
  z-index: 1;
}

.c-button--gooey {
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
  border: 4px solid #ffae00;
  border-radius: 0;
  position: relative;
  transition: all 500ms ease;
}

.c-button--gooey .c-button__blobs {
  height: 100%;
  filter: url(#goo);
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
  bottom: -3px;
  right: -1px;
  z-index: -1;
}

.c-button--gooey .c-button__blobs div {
  background-color: #ffae00;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  position: absolute;
  transform: scale(1.4) translateY(125%) translateZ(0);
  transition: all 600ms ease;
}

.c-button--gooey .c-button__blobs div:nth-child(1) {
  left: -5%;
}

.c-button--gooey .c-button__blobs div:nth-child(2) {
  left: 30%;
  transition-delay: 60ms;
}

.c-button--gooey .c-button__blobs div:nth-child(3) {
  left: 66%;
  transition-delay: 25ms;
}

.c-button--gooey:hover {
  color: #212121;
}

.c-button--gooey:hover .c-button__blobs div {
  transform: scale(1.4) translateY(0) translateZ(0);
}
/* */
.form-control-dark {
  border-color: var(--bs-gray);
}
.form-control-dark:focus {
  border-color: #000000;
  box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}
.text-small {
  font-size: 85%;
}

.dropdown-toggle:not(:focus) {
  outline: 0;
}
@media screen and (max-width: 1560px) {
  .navbar-ct{
  margin: 6.98rem auto;
}
}

@media screen and (max-width: 560px) {
  .fs-4{
    margin-right: 200px;
  }
  .navbar-ct{
  margin: 12.2rem auto;
}
}
@media screen and (max-width: 445px) {
  .fs-4{
    margin-right: 100px;
  }
  .navbar-ct{
  margin: 10.3rem auto;
}
.c-button--gooey{
  margin-top: -20px;
}
#icon-theme{
  margin: auto 20px;
  margin-top: -20px ;
}
}

</style>
</html>
