<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Schedule</title>
    <style>
             *{
  font-family: "IBM Plex Sans Thai", sans-serif;
  font-style: normal;
}

    </style>
</head>
<body>
    <h2 style="text-align:center; margin-top: -50px; ">Exam Schedule<span style='font-size:50px;'>&#128221;</span></h2>
<div class="container-table">
    <table class="table-fill">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Exam Date</th>
                <th>Exam Time</th>
                <th>Location</th>
                <th>Duration</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exam_data as $exam)
            <tr>
                <td>{{$exam_course[$exam->course_code]}}</td>
                <td>{{$exam->exam_date}}</td>
                <td>{{$exam->exam_time}}</td>
                <td>{{$exam->exam_location}}</td>
                <td>{{$exam->exam_duration}} min.</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
