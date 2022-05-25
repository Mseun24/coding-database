<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find a Coding Teacher</title>
    <link rel="stylesheet" href="\css\style.css" />
    <link rel="stylesheet" href="\bootstrap-css\bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto+Serif:wght@200;300;400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="header-content">
        <div class="container">
          <div class="header-content-box">
            <div class="row d-flex justify-content-center">
              <div class="col-12">
                <h1
                  class="header-content-heading text-capitalize text-white text-center"
                >
                  Find a coding Teacher
                </h1>
              </div>
              <div class="col-12 col-lg-6">
                <p class="text-white header-content-paragraph mt-3 text-center">
                  We are committed to giving you quality education through our
                  learning Platform.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="tutors">
      <div class="container">
        <div class="content-box">
          <h2 class="section-header text-center">Our Tutors</h2>
      <div class="row g-3">
            @foreach ($teachers_data as $teacher_data )
            <div class="col-12 col-md-6">
              <div
                class="card shadow-sm border-start-0 border-bottom-0 border-end-0 border-accent p-3"
              >
                <div class="row g-0">
                  <div class="col-12 col-md-3">
                    <img
                    src="{{ asset('images/' . $teacher_data->image_path )}}" 
                    alt="" height="80" 
                    width="120"

                    />
                  </div>
                  <div class="col-md-12 col-lg-8">
                    <div class="card-body">
                      <h5 class="card-title fs-6">
                      <strong>{{ $teacher_data->first_name }}
                      {{ $teacher_data->last_name }}
                      </strong>
                      </h5>
                      <p class="card-text">{{ $teacher_data->core_skills }}</p>
                      <p class="card-text fs-6">
                      <strong>Qualification:</strong> {{ $teacher_data->qualification }} <br>
                      <strong> Email: </strong> {{ $teacher_data->email }}
                      </p>
                      <p class="card-text mt-0">
                        <small
                          ><img src="./svg/star.svg" alt="" class="img-fluid" />
                          <img src="./svg/star.svg" alt="" class="img-fluid" />
                          <img src="./svg/star.svg" alt="" class="img-fluid" />
                          <img src="./svg/star.svg" alt="" class="img-fluid" />
                          <img src="./svg/star.svg" alt="" class="img-fluid" />
                        </small>
                      </p>

                      <div
                        class="d-flex justify-content-between input-group mt-4 no-wrap"
                      >
                        <a class="btn btn-accent" href="/teachers/{{ $teacher_data->slug }}">
                          View Profile
                        </a>
                        <a class="btn btn-message" href="/teachers/{{ $teacher_data->slug }}">
                          Message
                        </a>
                      </div>
                      <!-- <hr /> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
        </div>
</section>
            @endforeach   

      <section>
      <div class="container">
        <div class="content-box">
          <h2 class="text-center section-header text-capitalize">
            How it Works
          </h2>

          <div class="row g-3 mt-4 d-flex justify-content-center">
            <div class="col-12 col-lg-4">
              <div class="card shadow-sm p-3">
                <div class="card-header p-0 bg-white border-0 text-center">
                  <img
                    src="\images\icons8-1st-100.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="card-body p-3">
                  <p class="fw-semi-bold text-center fs-4">Select a Tutor</p>
                  <p class="text-center">
                    Choose the teacher you want from the selected options.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="card shadow-sm p-3">
                <div class="card-header p-0 bg-white border-0 text-center">
                  <img
                    src="\images\icons8-circled-2-100.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="card-body p-3">
                  <p class="fw-semi-bold text-center fs-4">Send a Request</p>
                  <p class="text-center">
                    Contact us and we will get back to you immediately.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="card shadow-sm p-3">
                <div class="card-header p-0 bg-white border-0 text-center">
                  <img
                    src="\images\icons8-circled-3-100.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="card-body p-3">
                  <p class="fw-semi-bold text-center fs-4">
                    Book Your First Lesson
                  </p>
                  <p class="text-center">
                    Start the lesson as soon as you have gotten a teacher
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="./bootstrap-js/bootstrap.min.js"></script>
  </body>
</html>