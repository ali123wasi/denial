<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- vinod thapa bhai
      https://www.youtube.com/watch?v=bmNmQfTBHLo&t=2459s -->

    <link rel="stylesheet" href="style.css" />
    <title>Daniel Demayola</title>
  </head>
  <body>

        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">Daniel Demayola</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          
          <ul class="navbar-nav m-auto" style="font-size: larger; font-weight: bold;">
            <li class="nav-item">
              <a href="index.html"   
              class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="shop.html" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="blogs.html" class="nav-link">Blogs</a>
            </li>
                      
          </ul>
          <!-- <div class=" col-lg-3"> -->
                     
                <a href="#"><i class="bi bi-twitter text-light mx-2"></i></a>
                <a href="#"><i class="bi bi-facebook text-light mx-2"></i></a>
                <a href="#"><i class="bi bi-linkedin text-light mx-2"></i></a>
                <a href="#"><i class="bi bi-instagram text-light mx-2"></i></a>
              </div>
            </div>
          </div>
       
        </div>
      </div>
    </nav>

     <!-- Masthead-->
     
      <div class="container_fluid text-ceneter" style="background-image: url(images/bg1.jpg); height: 600px; width: 100%; background-size: cover;" >
          <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
              <div class="col-lg-8 align-self-end">
                  <h1 class="text-white font-weight-bold">Daniel Demayola</h1>
                  <hr class="divider" />
              </div>
              <div class="col-lg-8 align-self-baseline">
                  <h5 class="text-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</h5>
                  <a class="btn btn-primary btn-xl" href="about.html">Read  More</a>
              </div>
          </div>
      </div>
  
<!-- about -->

    <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <h1 class="mt-3">About Us</h1>
    </div></div> </section>

 
    <section id="learn" class="p-5 bg-white text-dark">
      
      <div class="container">
        
        <div class="row align-items-center justify-content-between">
          
          <div class="col-md p-5">
            <h2>Learn React</h2>
            <p class="lead">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Similique deleniti possimus magnam corporis ratione facere!
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
              reiciendis eius autem eveniet mollitia, at asperiores suscipit
              quae similique laboriosam iste minus placeat odit velit quos,
              nulla architecto amet voluptates?
            </p>
            <a href="about.html" class="btn btn-primary mt-3">
              <i class="bi bi-chevron-right"></i> About us
            </a>
          </div>
          <div class="col-md">
            <img src="images/p5.jpg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    <hr>

<!-- blogs -->
    <section id="instructors" class="p-5">
      <div class="container">
        <h2 class="text-center text-dark">Our Blogs</h2>
        <p class="lead text-center text-dark mb-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum facere ratione, quos quo harum odit.
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">John Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Jane Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Steve Smith</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Sara Smith</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <!-- ............................................. -->
          <br>
          <div class="row g-4">
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="https://randomuser.me/api/portraits/men/11.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3">John Doe</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="https://randomuser.me/api/portraits/women/11.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3">Jane Doe</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="https://randomuser.me/api/portraits/men/12.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3">Steve Smith</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="https://randomuser.me/api/portraits/women/12.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3">Sara Smith</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
         
        </div>
      </div>
    </section>

      <!-- Newsletter -->
      <section class="text-light p-5 border" style="background-color: #f1f1f1;">
        <div class="container">
          <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0 text-dark">Sign Up For Our Newsletter</h3>
  
            <div class="input-group news-input">
              <input type="text" class="form-control" placeholder="Enter Email" />
              <button class="btn btn-primary btn-lg" type="button">Submit</button>
            </div>
          </div>
        </div>
      </section>
      
 <!-- contact -->
 
 <div class="row justify-content-evenly mt-5 pt-2 pb-5 " style="background-color: #f1f1f1;">
  <div class="col-md-5 mt-5">
      <h5 class="mb-4">Contact Form</h5>
      <form action="userinfo.php" method="post">

      <div class="form-group">
 <label >Username</label>
 <input type="text" name="user" autocomplete="off" class="form-control">
</div>

<div class="form-group">
 <label >Email</label>
 <input type="text" name="email" autocomplete="off" class="form-control">
</div>

<div class="form-group">
 <label >Mobile</label>
 <input type="text" name="mobile" autocomplete="off" class="form-control">
</div>

<div class="form-group">
 <label >Comment</label>
 <textarea class="form-control" name="comment"></textarea>
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
 </form>
          </div> 
          <div class="col-md-5 mt-5">

              <h3 class="mb-4">Address</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aspernatur, sapiente <br>  <i class="bi bi-telephone"></i>+21 00 000 0000
</p> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d392568.8135207774!2d-105.4460122901027!3d39.76336895500832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b80aa231f17cf%3A0x118ef4f8278a36d6!2sDenver%2C%20CO%2C%20USA!5e0!3m2!1sen!2s!4v1693239347058!5m2!1sen!2s" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>

</div>
 

 
<!-- FOOTER -->
<div class="row justify-content-evenly bg-dark text-white">
<div class="col-md-3 pt-4 pb-4">
 <h4>Daniel Deyamola</h4>
  <p>Lorem ipsum dolor sit amet consectetur </p>
  <a href="#"><i class="bi bi-twitter text-light mx-2"></i></a>
  <a href="#"><i class="bi bi-facebook text-light mx-2"></i></a>
  <a href="#"><i class="bi bi-linkedin text-light mx-2"></i></a>
  <a href="#"><i class="bi bi-instagram text-light mx-2"></i></a>
</div>

<div class="col-md-3 pt-4 pb-4">
 
  <h6>LOGO</h6>
  <h6>This is check</h6>
  <p>Lorem ipsum dolor sit amet tenetur nisi, totam deserunt accusamus architecto?</p>
</div>


<div class="col-md-3 pt-4 pb-4">
 <h5>CONTACT US</h5>
 
  <p>Lorem ipsum dolor sit 
    <br>      amet tenetur nisi,  
    <br>
     <i class="bi bi-telephone"></i>+21 00 000 0000</p>
</div>
</div>
<!-- Copy right     -->
<div class="row bg-secondary text-white">
<div class="col-md-12 text-center">
  <h6>Copyright 2023 XXX @@@ XXX
     </h6>
</div>
</div>

    <!-- Modal -->
    <!-- <div
      class="modal fade"
      id="enroll"
      tabindex="-1"
      aria-labelledby="enrollLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel">Enrollment</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p class="lead">Fill out this form and we will get back to you</p>
            <form>
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name:
                </label>
                <input type="text" class="form-control" id="first-name" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id="last-name" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div> -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
      mapboxgl.accessToken =
        'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-71.060982, 42.35725],
        zoom: 18,
      })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
  </body>
</html>