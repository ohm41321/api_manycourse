<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Course Details</title>
</head>
<div class="navbar-ct" style="background-color:#212121;">
    <header class="fixed-header d-flex flex-wrap justify-content-center py-2 mb-4">
        <!--The Logo, Name on Header-->
        <a href="/#math">
            <button class="c-button c-button--gooey" style="margin-right: 10px;"> back
                <div class="c-button__blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </button>
        </a>
</div>

    </header>
</div>
<body>
  <div class="container">
      <h1>{{ $cat->where('categories_id', 3)->first()->categories_name }} Programps</h1>
      @foreach ($course->where('categories_id', 3) as $math)
      <div class="course-details">
          <h2 class="course-name">{{ $math->course_name }}</h2>
          <p class="description">{{ $math->descriptions }}</p>
          <p class="instructor">Instructor: <span>{{ $instructor[$math->instructors_code] }}</span></p>
      </div>
      @endforeach
  </div>
</body>

<style>
     *{
  font-family: "IBM Plex Sans Thai", sans-serif;
  font-style: normal;
}
/* Updated CSS for the UI design */
.container {
    margin: auto;
    padding: 20px;
    max-width: 800px;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.course-details {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.course-name {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.description {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
}

.instructor {
    font-size: 14px;
    color: #888;
}

.instructor span {
    font-weight: bold;
    color: #333;
}

.navbar-ct{
    margin-bottom: 100px;
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
