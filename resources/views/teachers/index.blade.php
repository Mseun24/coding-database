<html lang="en">
<head>
  <title>Coding Database Page</title>
  <meta charset="utf-8">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
<div class="container-fluid p-5 bg-success text-white text-center">
  <h1>Coding Teachers Database</h1>
</div>
@foreach ($teachers_data as $teacher_data )
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
    <a href="/create" class="btn btn-success">
        Add a Teacher
    </a>  <a href="/teachers/{{ $teacher_data->slug }}/edit" class="btn btn-success">
        Edit a Teacher 
    </a> 
    </div>
  </div>
</div>
<div class="container" style="text-align: right;">
  <form action="/search/query" method="GET">
    @csrf
    <input type="text" name="search" placeholder="Search...." class="form-inline">
    <button type="submit" class="btn btn-success">Search</button>
  </form>
</div>
<div class="container">
  <p>List of teachers taking coding class for <strong>STEM - ACADEMY</strong></p>
  <form action="/teachers/{{$teacher_data->slug}}" method="POST">
            @csrf
            @method('delete')
            <p style="text-align:left ;">
            <button class="btn btn-success" type="submit"> Delete</button></p>
        </form>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S/N</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Core Skills</th>
          <th>Qualification</th>
          <th>Phone Number</th>
          <th>Location</th>
          <th>Contact Address</th>
          <th>Picture</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $teacher_data->id }}</td>
          <td>{{ $teacher_data->first_name }}</td>
          <td>{{ $teacher_data->last_name }}</td>
          <td>{{ $teacher_data->email }}</td>
          <td>{{ $teacher_data->gender }}</td>
          <td>{{ $teacher_data->core_skills }}</td>
          <td>{{ $teacher_data->qualification }}</td>
          <td>{{ $teacher_data->phone_number }}</td>
          <td>{{ $teacher_data->location }}</td>
          <td>{{ $teacher_data->contact_address }}</td>
          <td><img src="{{ asset('images/' . $teacher_data->image_path )}}" alt="" height="80" width="120"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endforeach
</body>
</html>