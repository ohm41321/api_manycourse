<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<div class="navbar-ct" style="background-color:#212121;">
    <header class="fixed-header d-flex flex-wrap justify-content-center py-2 mb-4">

        <a href="/">
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

  <div class="main-container">
    @if(session('success'))
    <script>
        Swal.fire({
            title: "Register Success",
            text: "Welcome to Many Course. Thank you <3!!",
            icon: "success"
        }).then(() => {
            setTimeout(() => {
                window.location.href = "{{ route('register-list') }}";
            }, 500); 
        });
    </script>
    @endif

      <form id="registerForm" method="POST" action="{{ route('register-course') }}">
        <h1 class=""> Register Form <span style="color: #F5B041;">&#9993;</span></h1>
        
          @csrf

          <div class="registration-details">
            <p style="text-align: center">กรุณากรอกรายละเอียดด้านล่างเพื่อลงทะเบียน</p>
         </div>
          
          <div class="box-container">
            <label for="first_name" class="user-label"></label>
            <input type="text" name="first_name" id="first_name" class="input{{ $errors->has('first_name') ? ' is-invalid' : '' }}" required>
            <label for="first_name" class="user-label">First Name</label>
          </div>
          @if ($errors->has('first_name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
         @endif

        <div class="box-container">
          <label for="last_name" class="user-label"></label>
          <input type="text" name="last_name" id="last_name" class="input{{ $errors->has('last_name') ? ' is-invalid' : '' }}" required>
          <label for="last_name" class="user-label">Last Name</label>
        </div>
          @if ($errors->has('last_name'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('last_name') }}</strong>
          </span>
            @endif
         

            <div class="box-container">
              <label for="email" class="user-label"></label>
              <input type="text" name="email" id="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
              <label for="email" class="user-label">Email</label>
          </div>
          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

          <div class="box-container">
            <label for="phone" class="user-label"></label>
            <input type="text" name="phone" id="phone" class="input{{ $errors->has('phone') ? ' is-invalid' : '' }}" required>
            <label for="phone" class="user-label">Phone</label>
        </div>
        @if ($errors->has('phone'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
          
          <div class="form-group">
              <label for="course_code">Course</label>
            <div class="select">
              <select style="" name="course_code" id="course_code" class="form-control{{ $errors->has('course_code') ? ' is-invalid' : '' }}" required>
                  <option value="">Select Course</option>
                  @foreach ($courseCodes as $courseCode => $courseName)
                      <option value="{{ $courseCode }}">{{ $courseName }}</option>
                  @endforeach
              </select>
            </div>
              @if ($errors->has('course_code'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('course_code') }}</strong>
                  </span>
              @endif
          </div>

          <button class="btn"> 
            Submit
          </button>

        </div>
      </form>
  </div>


</div>
</body>

<style>

#registerForm {
        border: 2.5px solid #f3b85a;
        padding: 30px;
        border-radius: 30px;
        background-color: #ffffff; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
  
    }
    
select {
  appearance: none;
  /* safari */
  -webkit-appearance: none;
  /* other styles for aesthetics */
  width: 100%;
  font-size: 1.15rem;
  padding: 0.675em 6em 0.675em 1em;
  background-color: #fff;
  border: 1px solid #caced1;
  border-radius: 0.25rem;
  color: #000;
  cursor: pointer;

}
 .main-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .input-group {
 position: relative;

}

.input {
 border: solid 1.5px #000000;
 border-radius: 2px;
 background: none;
 padding: 2rem;
 font-size: 1rem;
 color: #000000;
 transition: border 150ms cubic-bezier(0.4,0,0.2,1);
}

.user-label {
 position: absolute;
 left: 25px;
 color: #606060;
 pointer-events: none;
 transform: translateY(1rem);
 transition: 150ms cubic-bezier(0.4,0,0.2,1);
 margin-left: 10px;
 

}

.input:focus, input:valid {
 outline: none;
 border: 1.5px solid #000000;
 
}

.input:focus ~ label, input:valid ~ label {
 transform: translateY(-50%) scale(0.8);
 background-color: #ffffff;
 padding: 0 .2em;
 color: #000000;
 
}

.box-container{
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;

}

select {
  /* Reset Select */
  appearance: none;
  outline: 10px red;
  border: 3;
  border-radius: 10px;
  box-shadow: 1px;
  /* Personalize */
  flex: 1;
  padding: 0 1em;
  color: #000000;
  background-color: var(--darkgray);
  background-image: none;
  cursor: pointer;
}

/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select wrapper */
.select {
  position: relative;
  display: flex;
  width: 23em;
  height: 45px;
  border-radius: 10px;
  overflow: hidden;
  margin-left:15px;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  background-color: #d1cece;
  transition: .25s all ease;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f3b85a;
}

/* */

.form-group {
    margin-bottom: 20px;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    height: 150px; 
}

.btn {
 margin-left: 21px;
 position: relative;
 font-size: 17px;
 text-transform: uppercase;
 text-decoration: none;
 padding: 1em 8.5em;
 display: inline-block;
 border-radius: 6em;
 transition: all .2s;
 border: none;
 font-family: inherit;
 font-weight: 500;
 color: rgb(255, 255, 255);
 background-color: rgb(255, 132, 0);
}

.btn:hover {
 transform: translateY(-3px);
 box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
 transform: translateY(-1px);
 box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn::after {
 content: "";
 display: inline-block;
 height: 100%;
 width: 100%;
 border-radius: 100px;
 position: absolute;
 top: 0;
 left: 0;
 z-index: -1;
 transition: all .4s;
}

.btn::after {
 background-color: #fff;
}

.btn:hover::after {
 transform: scaleX(1.4) scaleY(1.6);
 opacity: 0;
}

/*---------------*/
     *{
  font-family: "IBM Plex Sans Thai", sans-serif;
  font-style: normal;
}

h1{
    text-align: center;
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



}

</style>
</html>