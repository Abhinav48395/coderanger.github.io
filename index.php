<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <!----google font---->
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <title>coderanger</title>
</head>
<body>
<!-----start nav----->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-3 fixed-top">
  <a class="navbar-brand" href="index.php">Coderanger</a>
  <span class="navbar-text">code and upgrade</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-3">
    <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item custom-nav-item"><a href="courses.html" class="nav-link">Courses</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment Status</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Login</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Signup</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
      
    </ul>
  </div>
</nav>
<!-----end nav----->

<!----start video background---->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/banvid.mp4" >
 </video>
 <div class="vid-overlay"></div>
 </div>
     <div class="vid-content">
   <h1 class="my-content">Welcome to Coderanger</h1>
   <small class="my-content ">Learn and implement</small><br>
   <a href="#" class="btn btn-danger">Get started</a> 
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

 </div>
</div>
<!----end video background---->
<!----start text banner----->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class= "col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
</div>
<div class="col-sm">
  <h5><i class="fas fa-users mr-3"></i>Expert Instructor</h5>
</div>
<div class="col-sm">
  <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
</div>
<div class="col-sm">
  <h5><i class="fas fa-rupee-sign mr-3"></i>Money back guarantee*</h5>
</div>
</div>
</div>
<!----end text banner----->
<!----start most popular course---->
<div class="container mt-5">
<h1 class="text-center">Popular course</h1>
<!----start most popular course 1st card deck---->
<div class="card-deck mt-4">
<a href="#" class="btn" style="text-align:left;
padding:0px; margin:0px;">
<div class="card">
<img src="images/guitar.png" class="card-img-top" alt="guitar"/>
<div class="card-body">
<h5 class="card-title">Learn Guitar Easy Way</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elite. Facilis, nemo.</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&
#8377 2000 </del></small> <span 
class="font-weight-bolder">&#8377 200<span></p><a 
class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>
<!------End most popular course 1st card deck----->
<!-----start most popular course 2nd card deck---->
<div class="card-deck mt-4">
<a href="#" class="btn" style="text-align:left;
padding:0px; margin:0px;">
<div class="card">
<img src="images/python.png" class="card-img-top" alt="python"/>
<div class="card-body">
<h5 class="card-title">Learn Python</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elite. Facilis, nemo.</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&
#8377 3000 </del></small> <span 
class="font-weight-bolder">&#8377 300<span></p><a 
class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>
<!------End most popular course 2nd card deck----->
<!-----start most popular course 3rd card deck---->
<div class="card-deck mt-4">
<a href="#" class="btn" style="text-align:left;
padding:0px; margin:0px;">
<div class="card">
<img src="images/php.png" class="card-img-top" alt="php"/>
<div class="card-body">
<h5 class="card-title">Learn Php</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elite. Facilis, nemo.</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&
#8377 3000 </del></small> <span 
class="font-weight-bolder">&#8377 300<span></p><a 
class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>
<!------End most popular course 3rd card deck----->
<!-----start most popular course 4th card deck---->
<div class="card-deck mt-4">
<a href="#" class="btn" style="text-align:left;
padding:0px; margin:0px;">
<div class="card">
<img src="images/php.png" class="card-img-top" alt="Javascript"/>
<div class="card-body">
<h5 class="card-title">Learn Javascript</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elite. Facilis, nemo.</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&
#8377 3000 </del></small> <span 
class="font-weight-bolder">&#8377 300<span></p><a 
class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>
<!------End most popular course 4th card deck----->
<!-----start most popular course 5th card deck---->
<div class="card-deck mt-4">
<a href="#" class="btn" style="text-align:left;
padding:0px; margin:0px;">
<div class="card">
<img src="images/php.png" class="card-img-top" alt="Java"/>
<div class="card-body">
<h5 class="card-title">Learn Java</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elite. Facilis, nemo.</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&
#8377 3000 </del></small> <span 
class="font-weight-bolder">&#8377 300<span></p><a 
class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>
<!------End most popular course 5th card deck----->
<div class="tect-center m-2">
<a class="btn btn-danger btn-sm" href="#">View All Courses</a>
</div>
</div>
<!---End most popular course--->
<!---start Contact Us--->
<div class="container mt-4" id="Contact">  <!---start Contact Us Container---->
<h2 class="text-center mb-4">Contact US</h2> <!---Contact Us Heading--->
<div class="row"> <!---start Contact Us Row--->
<div class="col-md-8"> <!---start Contact Us 1st column--->
<form action=" " method="post">
<input type="text" class="form-control" name="name"
placeholder="Name"><br>
<input type="text" class="form-control" name="subject"
placeholder="Subject"><br>
<input type="email" class="form-control" name="email"
placeholder="E-mail"><br>
<textarea class="form-control" name="message"
placeholder="How can we help you?" style="height:150px;"></textarea><br>
<input class="btn btn-primary" type="submit"
value="Send" name="submit"><br><br>
</form>
</div>
<!----End contact us 1st column--->

<div class="col-md-4 stripe text-white text-center">
<!---start contact us 2nd column--->
<h4>coderanger</h4>
<p>coderanger,
Near Police camp II, Bokaro,
jharkhand - 834005<br/>
phone: +00000000<br/>
www.coderanger.com</p>
</div>
</div>
</div>
<!---end contact us---->
<!----start students testimonial---->
<div class="container-fluid mt-5" style="background-color: 
#fff" id="Feedback">
<h1 class="text-center testyheading p-4"> Student's Feedback</h1>
<div class="row">
<div class="col-md-12">
<div id="testimonial-slider" class="owl-carousel">
<div class="testimonial">
<p class="description">
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Expedita, dignissimos blanditiis.
</p>
<div class="pic">
<img src="image/student2.jpg" alt=""/>
</div>
<div class="testimonial-prof">
<h4>sonam</h4>
<small>Web Developer</small>
</div>
</div>
</div>
</div>
</div>
</div>
<!---end students testimonial--->

<div class="container-fluid bg-danger"> <!---start social follow--->
<div class="row text-white text-center p-1">
<div class="col-sm">
<a class="text-white social-hover" href="#"><i class="fab
fa-facebook-f"></i> Facebook</a>
</div>
<div class="col-sm">
<a class="text-white social-hover" href="#"><i class="fab 
fa-twitter"></i> Twitter</a>
</div>
<div class="col-sm">
<a class="text-white social-hover" href="#"><i class ="fab
fa-whatsapp"></i>WhatsApp</a>
</div>
</div>
</div><!---end social follow--->

<!---start about section-->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
<div class="container" style="background-color: #E9ECEF">
<div class="row text-center">
<div class="col-sm">
<h5>About Us</h5>
<p>Coderanger provides universal access to the world's best education, partnering with top universities and organisations to offer courses online.</p>
</div>
<div class="col-sm">
<h5>category</h5>
<a class="text-dark" href="#">Web Development</a><br/>
<a class="text-dark" href="#">Web Designing</a><br/>
<a class="text-dark" href="#">Android App Dev</a><br/>
<a class="text-dark" href="#">ios Development</a><br/>
<a class="text-dark" href="#">Data analysis</a><br/>
</div>
<div class="col-sm">
<h5>Contact Us</h5>
<p>Coderanger Pvt Ltd<br> Near Police Camp II<br> Bokaro,
Jharkhand <br> Ph. 9804369360</p>
</div>
</div>
</div>
</div>
<!----End About section--->

<!---start footer--->
<footer class="container-fluid bg-dark text-center p-2">
<small class="text-white">Copyright &copy: 2019|| Designed By
E-Learning || Admin Login</small>
</footer>
<!---End footer--->

<!----start student registration modal---->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!----end student registration modal---->


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap.min.js"></script>
<!---font awesome js--->
<script src="js/all.min.js"></script>

<!---Student testimonial owl slider js--->
<script type="text/javascript" src="js/owl.min.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>
   
</body>
</html>