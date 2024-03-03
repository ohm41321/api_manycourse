<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <div class="navbar-ct" style="background-color:#212121;">
        <header class="fixed-header d-flex flex-wrap justify-content-center py-2 mb-4">
            <!--The Logo, Name on Header-->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <div class="container-list">
  <h2>Information</h2>
  <div class="table-bg">
  <table class="table-fill">
      <thead>
          <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Course</th>
              <th>Actions</th> <!-- Added column for actions -->
          </tr>
      </thead>
      <tbody>
          @foreach ($list as $name)
          <tr>
              <td>{{$name->first_name}}</td>
              <td>{{$name->last_name}}</td>
              <td>{{$name->email}}</td>
              <td>{{$name->phone}}</td>
              <td>{{ $name->course->course_name }}</td>
              <td>
                <div class="button-container">
                  @if ($name->user_id == auth()->id())
                  <a class="edit-unset" href="{{ route('register-list-edit', $name->registration_id) }}">     
                    <button class="editBtn">
                      <svg height="1em" viewBox="0 0 512 512">
                        <path
                          d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                        ></path>
                      </svg>
                    </button>
                    </a>
                  @else
                    <span class="text-small">No Permission</span>
                  @endif
                  @if ($name->user_id == auth()->id())
                  <form action="{{ route('register-list-delete', $name->registration_id) }}" method="POST" style="display: inline;" id="deleteForm{{$name->registration_id}}">
                      @csrf
                      @method('DELETE')
                  <button class="bin-button" type="button" onclick="confirmDelete({{$name->registration_id}})">
                    <svg class="bin-top" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="5" x2="39" y2="5" stroke="white" stroke-width="4"></line>
                        <line x1="12" y1="1.5" x2="26.0357" y2="1.5" stroke="white" stroke-width="3"></line>
                    </svg>
                    <svg class="bin-bottom" viewBox="0 0 33 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_8_19" fill="white">
                            <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"></path>
                        </mask>
                        <path d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z" fill="white" mask="url(#path-1-inside-1_8_19)"></path>
                        <path d="M12 6L12 29" stroke="white" stroke-width="4"></path>
                        <path d="M21 6V29" stroke="white" stroke-width="4"></path>
                    </svg>
                </button>
                  </form>
                  @endif
                </div>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  </div>
  {{ $list->links('pagination::bootstrap-4')->with(['class' => 'pagination']) }}
  </div>
</body>
<script>
   function confirmDelete(registration_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "We hope we can meet again",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#D60C0C',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes! &#128542'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm'+registration_id).submit();
        }
    });
}
</script>

<style>
.pagination {
  display: flex;
  justify-content: center;
  list-style: none;
  padding: 0;
  margin-top: 20px;
}

.pagination li {
  margin: 0 5px;
}

.pagination li a {
  color: #333;
  text-decoration: none;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.pagination li a:hover {
  background-color: #7a7a7a;
  color: #ffffff;
}

/* Styling for Previous and Next buttons */
.pagination .page-link {
  color: #000000;
  background-color: #ffffff;
  border: 1px solid #ccc;
  padding: 5px 10px;
  border-radius: 3px;
  margin: 0 3px;
}
  .button-container {
    display: flex;
    justify-content: center;
}
/*----Table----*/

.table-bg {
  background-color: white;
  border-radius: 15px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.table-fill {
  width: 100%;
  border-collapse: separate; 
  border-spacing: 0; 
}

/* Styling for table header */
.table-fill th {
  background-color: #2e2e2e;
  color: #ffffff;
  font-weight: bold;
  text-align: center;
  padding: 12px;
  border: none; 
}

/* Styling for table rows */
.table-fill td {
  padding: 12px;
  text-align: center;
  border: none; 
}

/* Styling for even rows */
.table-fill tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}
.table-fill tbody tr:nth-child(even):hover {
  background-color: #e0e0e0;
}

/* Styling for odd rows */
.table-fill tbody tr:nth-child(odd) {
  background-color: #ffffff;
}
.table-fill tbody tr:nth-child(odd):hover {
  background-color: #f2f2f2;
}

/* Styling for action column */
.table-fill td:last-child {
  text-align: center;
}

/**/
  .edit-unset{
    text-decoration: unset;
  }
 
  .editBtn {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  border: none;
  background-color: rgb(56, 56, 71);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.123);
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.3s;
  margin-left: 10px;
}
.editBtn::before {
  content: "";
  width: 200%;
  height: 200%;
  background-color: #85929E;
  position: absolute;
  z-index: 1;
  transform: scale(0);
  transition: all 0.3s;
  border-radius: 50%;
  filter: blur(10px);
}
.editBtn:hover::before {
  transform: scale(1);
}
.editBtn:hover {
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.336);
}

.editBtn svg {
  height: 17px;
  fill: white;
  z-index: 3;
  transition: all 0.2s;
  transform-origin: bottom;
}
.editBtn:hover svg {
  transform: rotate(-15deg) translateX(5px);
}
.editBtn::after {
  content: "";
  width: 25px;
  height: 1.5px;
  position: absolute;
  bottom: 19px;
  left: -5px;
  background-color: white;
  border-radius: 2px;
  z-index: 2;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.5s ease-out;
}
.editBtn:hover::after {
  transform: scaleX(1);
  left: 0px;
  transform-origin: right;
}
  /*--BinBT--*/
  .bin-button {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 15px;
  background-color: rgb(255, 95, 95);
  cursor: pointer;
  border: 3px solid rgb(255, 201, 201);
  transition-duration: 0.3s;
  margin-left: 30px

}
.bin-bottom {
  width: 15px;
}
.bin-top {
  width: 17px;
  transform-origin: right;
  transition-duration: 0.3s;
}
.bin-button:hover .bin-top {
  transform: rotate(45deg);
}
.bin-button:hover {
  background-color: rgb(255, 0, 0);
}
.bin-button:active {
  transform: scale(0.9);
}
  /*-----*/
    .container-list{
        margin: 10px 200px;
    }
    h2{
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
