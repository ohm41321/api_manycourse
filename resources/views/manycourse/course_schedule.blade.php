<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Schedule</title>
    <style>
             *{
  font-family: "IBM Plex Sans Thai", sans-serif;
  font-weight: 400;
  font-style: normal;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container-table {
    margin: 30px auto;
    max-width: 1500px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.table-bg {
  background-color: white;
  border-radius: 15px;
  overflow: hidden;
}

.table-fill {
  width: 100%;
  border-collapse: separate; 
  border-spacing: 0; 
}

/* Styling for table header */
.table-fill th {
  background-color: #424242;
  color: #ffffff;
  font-size: 1.2rem;
  font-weight: 900;
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


tbody tr:hover {
    background-color: #f0f0f0;
}
        @media screen and (max-width: 768px) {
            table {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <h2 style="text-align:center; margin-top: -50px; ">Course Schedule<span style='font-size:50px;'>&#128197;</span></h2>
<div class="container-table">
    <table class="table-fill">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($course_sh as $sh)
            <tr>
                <td>{{$data_sh[$sh->course_code]}}</td>
                <td>{{$sh->schedule_date}}</td>
                <td>{{$sh->start_time}}</td>
                <td>{{$sh->end_time}}</td>
                <td>{{$sh->location}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
