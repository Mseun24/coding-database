<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Profile</title>
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
      <div class="py-3">
        <div class="row mt-5 g-4">
          <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-accent p-3">
              <div class="row g-0">
                <div class="col-12 col-md-4">
                  <img
                  src="{{ asset('images/' . $teachers_data->image_path )}}"
                    alt=""
                    class="img-fluid"
                    width="200"
                  />
                </div>
                <div class="col-md-12 col-lg-6">
                  <div class="card-body">
                    <p class="fs-7 text-muted fw-bold">Full time</p>
                    <h5 class="card-title fw-bold fs-3">{{ $teachers_data->first_name}}</h5>
                    <p class="card-text mt-0">
                      <small
                        ><img src="\svg\star.svg" alt="" class="img-fluid" />
                        <img src="\svg\star.svg" alt="" class="img-fluid" />
                        <img src="\svg\star.svg" alt="" class="img-fluid" />
                        <img src="\svg\star.svg" alt="" class="img-fluid" />
                        <img src="\svg\star.svg" alt="" class="img-fluid" />
                      </small>
                    </p>
                    <p class="card-text fw-semi-bold text-muted">
                    {{ $teachers_data->location}}
                    </p>
                    <p class="card-text fs-6">{{ $teachers_data->qualification}} <br>{{ $teachers_data->core_skills}}</p>
                    <p class="fs-7 text-muted">
                      <img
                        src="\images\icons8-chart-arrow-rise-20.png"
                        alt=""
                        class="img-fluid me-2"
                      />20 Lessons covered in the Last 48 hours.
                    </p>
                  </div>
                </div>
                <hr class="my-3 text-light-accent" />
                <div class="p-3 d-lg-flex d-block">
                  <div class="mb-2 mb-lg-0">
                    <img src="\svg\user.svg" alt="" />
                  </div>
                  <div class="ms-lg-4 ms-0">
                    <h5>About {{ $teachers_data->first_name}}</h5>
                    <p class="text-muted">
                    {{ $teachers_data->core_skills}}
                    </p>
                  </div>
                </div>

                <div class="p-3 d-lg-flex d-block">
                  <div class="mb-2 mb-lg-0">
                    <img src="\svg\clipboard.svg" alt="" />
                  </div>
                  <div class="ms-lg-4 ms-0">
                    <h5>Teaching Experience</h5>
                    <p class="text-muted">
                      I worked as a Subject Matter Expert in Computer Science at
                      daveshoope also worked at Acetone and Incubation Center as
                      a Web Development Tutor.
                    </p>
                  </div>
                </div>

                <div class="p-3 d-lg-flex d-block">
                  <div class="mb-2 mb-lg-0">
                    <img src="\svg\graduate.svg" alt="" />
                  </div>
                  <div class="ms-lg-4 ms-0">
                    <h5>Education/Qualification</h5>
                    <p class="text-muted">
                    {{ $teachers_data->qualification}}<br />2015-2019
                    </p>
                  </div>
                </div>

                <!-- <div class="p-3 d-lg-flex d-block">
                  <div class="mb-2 mb-lg-0">
                    <img src="./svg/email.svg" alt="" />
                  </div>
                  <div class="ms-lg-4 ms-0">
                    <h5>Email Address</h5>
                    <p class="text-muted">
                      <a
                        href="mailto:abcdefgh@gmail.com"
                        class="text-muted text-decoration-none"
                        >abcdefgh@gmail.com</a
                      >
                    </p>
                  </div>
                </div>

                <div class="p-3 d-lg-flex d-block">
                  <div class="mb-2 mb-lg-0">
                    <img src="./svg/phone-no.svg" alt="" />
                  </div>
                  <div class="ms-lg-4 ms-0">
                    <h5>Phone Number</h5>
                    <p class="text-muted">
                      <a
                        href="tel:+2345894349585"
                        class="text-decoration-none text-muted"
                        >+2345894349585</a
                      >
                    </p>
                  </div>
                </div> -->

                <div class="p-3 d-lg-flex d-block">
                  <div class="mb-2 mb-lg-0">
                    <img src="\svg\location.svg" alt="" />
                  </div>
                  <div class="ms-lg-4 ms-0">
                    <h5>Contact Address</h5>
                    <p class="text-muted">{{ $teachers_data->contact_address}}</p>
                  </div>
                </div>

                <hr class="text-light-accent my-4" />
                <div class="p-3">
                  <h5 class="fs-3 fw-bold">Socials</h5>
                  <ul class="list-unstyled d-flex mt-4">
                    <li class="me-2">
                      <a href="#"
                        ><img
                          src="\images\icons8-facebook-64.png"
                          alt=""
                          class="img-fluid"
                          width="50"
                      /></a>
                    </li>
                    <li class="me-2">
                      <a href="#"
                        ><img
                          src="\images\icons8-twitter-circled-64.png"
                          alt=""
                          class="img-fluid"
                          width="50"
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img
                          src="\images\icons8-linkedin-circled-64.png"
                          alt=""
                          class="img-fluid"
                          width="50"
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="row g-3 position-sticky" style="top: 0">
              <div class="col-12">
                <div class="card shadow-sm border-accent" style="top: 0">
                  <div class="card-header bg-white border-0 mt-4 mb-4">
                    <h3 class="text-center fw-bold">Reviews</h3>
                  </div>
                  <div class="d-flex justify-content-between p-2">
                    <div>
                      <img
                        src="\images\icons8-person-40.png"
                        alt=""
                        class="img-fluid border-2 border-icon rounded-circle"
                      />
                    </div>

                    <p class="fs-7 w-90 ms-3">
                      "My ward always enjoys her teaching.its so nice having
                      someone like her to train our children."
                    </p>
                  </div>

                  <div class="d-flex justify-content-between p-2">
                    <div>
                      <img
                        src="\images\icons8-person-40 (1).png"
                        alt=""
                        class="img-fluid border-2 border-icon rounded-circle"
                      />
                    </div>

                    <p class="fs-7 w-90 ms-3">
                      "My ward always enjoys her teaching.its so nice having
                      someone like her to train our children."
                    </p>
                  </div>

                  <div class="d-flex justify-content-between p-2">
                    <div>
                      <img
                        src="\images\icons8-person-40.png"
                        alt=""
                        class="img-fluid border-2 border-icon rounded-circle"
                      />
                    </div>

                    <p class="fs-7 w-90 ms-3">
                      "My ward always enjoys her teaching.its so nice having
                      someone like her to train our children."
                    </p>
                  </div>

                  <div class="d-flex justify-content-between p-2">
                    <div>
                      <img
                        src="\images\icons8-person-40 (1).png"
                        alt=""
                        class="img-fluid border-2 border-icon rounded-circle"
                      />
                    </div>

                    <p class="fs-7 w-90 ms-3">
                      "My ward always enjoys her teaching.its so nice having
                      someone like her to train our children."
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="card shadow-sm border-accent">
                  <div class="card-body">
                    <h3 class="fw-bold text-center">Contact</h3>
                    <p class="fs-7 mt-4 text-center">
                      Feel free to send a message to us and we will reply you as
                      soon as possible.
                    </p>
                
                    <form action="" method="POST">
                      @csrf
                      @method('PUT')
                      <fieldset>
                        <div class="row">
                          <div class="col-12">
                            <label
                              for="full-name"
                              class="form-label fw-semi-bold"
                              >Name</label
                            >
                            <input
                              type="text"
                              name="name"
                              placeholder="Enter Your Name"
                              value=""
                              class="form-control contact-us"
                              required
                            />
                          </div>

                          <div class="col-12 mt-4">
                            <label
                              for="full-name"
                              class="form-label fw-semi-bold"
                              >Email</label
                            >
                            <input
                              type="email"
                              name="email"
                              placeholder="e.g daveshoope@gmail.com"
                              value=""
                              class="form-control contact-us"
                              required
                            />
                          </div>

                          <div class="col-12 mt-4">
                            <label
                              for="full-name"
                              class="form-label fw-semi-bold"
                              >Message</label
                            >
                            <textarea
                              name="name"
                              cols="30"
                              rows="5"
                              placeholder="Enter Your Message"
                              class="form-control contact-us"
                            ></textarea>
                          </div>
                          <p class="text-center mt-4">
                            <button
                              type="submit" name="submit"
                              class="btn btn-started fw-semi-bold w-100 py-2"
                            >
                              SEND<img src="\svg\send.svg" class="ms-1" />
                            </button>
                          </p>
                          <hr class="text-light-accent my-2 w-90 mx-auto" />
                          <p class="text-center fw-light">
                            You can also call us on
                            <a
                              href="tel:+234903435455"
                              class="text-accent fw-semi-bold text-decoration-none"
                            >
                              +234903435455</a
                            >
                          </p>
                        </div>
                      </fieldset>
                    </form>
                    
                    <!-- <p class="text-center mt-5">
                      <a class="btn btn-chat me-4" href="tel:+23454659854">
                        Call Us
                      </a>
                      <a class="btn btn-call" href="mailto:assbsbd@gmail.com">
                        Message
                      </a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./bootstrap-js/bootstrap.min.js"></script>
  </body>
</html>
