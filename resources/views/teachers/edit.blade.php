<html>
<head>
    <title>Database Page</title>
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
  <p>Update Your Bio-Data</p>
</div>
@if ($errors->any())
    <div class="container">
        <ul>
        @foreach ($errors->all() as $error )
            <li>
                {{ $errors }}
            </li>
            
        @endforeach

        </ul>
    
@endif
<div class="container">
  <form action="/teachers/{{ $teachers_data->slug}}" method="POST" class="col-sm-4" enctype="multipart/form-data">
      @csrf
      @method('PUT')
    <div class="form-group">
      <label for="title">First Name:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="first_name" value="{{ $teachers_data->first_name}}">
    </div>
    <div class="form-group">
      <label for="title">Last Name:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="last_name" value="{{ $teachers_data->last_name}}">
    </div>
    <div class="form-group">
      <label for="title">Email:</label>
      <input type="email" class="form-control mb-2 mr-sm-2" name="email" value="{{ $teachers_data->email}}">
    </div>
    <div class="form-group">
      <label for="title">Phone Number:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="phone_number" value="{{ $teachers_data->phone_number}}">
    </div>
    <div class="form-group">
      <label for="pwd">Core Skills:</label>
      <input tyoe="text" name="core_skills" class="form-control mb-2 mr-sm-2" value="{{ $teachers_data->core_skills }}">
    </div><br>
    <div class="form-group">
      <label for="file" class="">Upload picture:</label>
      <input type="file" class="form-control mb-2 mr-sm-2" name="image" value="{{ $teachers_data->image_path }}">
    </div>
    <button type="submit" name="submit" class="btn btn-success mb-2">Update Data</button>
  </form>
</div>
</body>
</html>