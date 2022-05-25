<html lang="en">
<head>
    <title>TEACHERS BIO-DATA</title>
  <meta charset="utf-8">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid p-5 bg-success text-white text-center">
  <h3>Submit your Data</h3>
  <p></p>
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
    <div class="row">
      <div class="col-6">
      <form action="/teachers" method="POST" class="col-sm-4" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="title" class="mb-2 mr-sm-2">First Name:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="first_name" placeholder="First name">
    </div>
    <div class="form-group">
      <label for="title" class="mb-2 mr-sm-2">Last Name:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="last_name" placeholder="Last name">
    </div>
    <div class="form-group">
      <label for="title" class="mb-2 mr-sm-2">Email:</label>
      <input type="email" class="form-control mb-2 mr-sm-2" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="gender" class="mb-2 mr-sm-2">Gender:</label>
      <select name="gender" class="mb-2 mr-sm-2" id="gender">
      <option value="select" class="mb-2 mr-sm-2">Select</option>
      <option value="Male" class="mb-2 mr-sm-2">Male</option>
      <option value="Female" class="mb-2 mr-sm-2">Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="pwd" class="mb-2 mr-sm-2">Core Skills:</label>
      <textarea name="core_skills" id="" cols="20" rows="5" class="form-control mb-2 mr-sm-2"></textarea>
    </div>
      </div>
      <div class="col-6">
      <div class="form-group">
      <label for="pwd" class="mb-2 mr-sm-2">Phone Number:</label>
      <input type="text" name="phone_number" class="form-control mb-2 mr-sm-2" placeholder="Phone Number">
    </div>
    <div class="form-group">
      <label for="gender" class="mb-2 mr-sm-2">Location:</label>
      <select name="location" class="mb-2 mr-sm-2">
    <option disabled selected>--Select State--</option>
    <option value="Abia">Abia</option>
    <option value="Adamawa">Adamawa</option>
    <option value="Akwa Ibom">Akwa Ibom</option>
    <option value="Anambra">Anambra</option>
    <option value="Bauchi">Bauchi</option>
    <option value="Bayelsa">Bayelsa</option>
    <option value="Benue">Benue</option>
    <option value="Borno">Borno</option>
    <option value="Cross River">Cross River</option>
    <option value="Delta">Delta</option>
    <option value="Ebonyi">Ebonyi</option>
    <option value="Edo">Edo</option>
    <option value="Ekiti">Ekiti</option>
    <option value="Enugu">Enugu</option>
    <option value="FCT">Federal Capital Territory</option>
    <option value="Gombe">Gombe</option>
    <option value="Imo">Imo</option>
    <option value="Jigawa">Jigawa</option>
    <option value="Kaduna">Kaduna</option>
    <option value="Kano">Kano</option>
    <option value="Katsina">Katsina</option>
    <option value="Kebbi">Kebbi</option>
    <option value="Kogi">Kogi</option>
    <option value="Kwara">Kwara</option>
    <option value="Lagos">Lagos</option>
    <option value="Nasarawa">Nasarawa</option>
    <option value="Niger">Niger</option>
    <option value="Ogun">Ogun</option>
    <option value="Ondo">Ondo</option>
    <option value="Osun">Osun</option>
    <option value="Oyo">Oyo</option>
    <option value="Plateau">Plateau</option>
    <option value="Rivers">Rivers</option>
    <option value="Sokoto">Sokoto</option>
    <option value="Taraba">Taraba</option>
    <option value="Yobe">Yobe</option>
    <option value="Zamfara">Zamfara</option>
</select>
    </div>
    <div class="form-group">
      <label for="pwd" class="mb-2 mr-sm-2">Contact Address:</label>
      <input type="text" name="contact_address" class="form-control mb-2 mr-sm-2" placeholder="Contact Address">
    </div>
    <div class="form-group">
      <label for="pwd" class="mb-2 mr-sm-2">Qualification:</label>
      <input type="text" name="qualification" class="form-control mb-2 mr-sm-2" placeholder="Contact Address">
    </div>
    <div class="form-group">
      <label for="file" class="mb-2 mr-sm-2">Upload picture:</label>
      <input type="file" class="form-control mb-2 mr-sm-2" name="image">
    </div><br>
    <button type="submit" class="btn btn-success mb-2">Add Teacher</button>
  </form>
      </div>
    </div>
</div>
</body>
</html>