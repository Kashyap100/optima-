<DOCTYPE ! html>
<html>
<head>

<title>OPTIMA</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  </head>
  
  
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #42c8f5;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">OpTiMa</a>
  <a href="#news" style="padding-left:500px;"></a>
  <a href="joinus.php">joinus</a>
  <a href="login.php">login</a>
 <a href="index.php">contact</a>
<a href="about.php">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>




  
  
  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: auto;
    padding: 10px;
  }
    .img- aboutimg{
        height:auto;
    }
  </style>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>



  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="ai899.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>

       


        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="ai999.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="ai799.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">

      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div class="py-5">
        <h1 class ="text-center">About Us</h1>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="ai11.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
               <h2 class="display-4">I AM OPTIMA..</h2>
               <h5 class="py-5">It's software that carries out everyday tasks via voice command. It's brings AI and machine learning together to recognize our voice and do what we ask it. Voice assistant software can be found on smart speakers, smartwatches, mobile phones, tablets and other devices.Voice assistants are a chance for marketers to begin conversations in a much more personalized way than ever before. Users generally share exactly what they want and what they are thinking with voice assistants. Thus, the channel allows marketers to answer Although consumers are using voice assistants more often, there is still great concern over the data these devices collect and the companies behind the apps on those devices. Consumers are wary of how the data is stored, who looks at it, and what happens to that information. Marketers will have to address those data and privacy concerns, or they will not get access to these prospects and their information.</h5>
             <a href="about.php" class="btn btn-success">learn more</a>
</div>
</div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class ="text-center">Optima Gallery</h1>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
  <img class="card-img-top" src="ai564.gif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">optima gallery</h4>
    <p class="card-text">explore our gallery </p>
    <a href="#" class="btn btn-primary">See gallery</a>
  </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
            <div class="card">
  <img class="card-img-top" src="ai607.gif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Blogs</h4>
    <p class="card-text">explore here</p>
    <a href="#" class="btn btn-primary">learn more</a>
  </div>
</div>
</div>



</div>
</div>
</section>
<section class="my-5">
    <div class="py-5">
        <h1 class ="text-center">Contact Us</h1>
        </div>
          <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="Username" class="form-control" autocomplete="off">
</div>
<div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Email" class="form-control" autocomplete="off">
</div>

<div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="Phone" class="form-control" autocomplete="off">
</div>

<div class="form-group">
                    <label>Message</label>
                   <textarea class="form-control" name ="Message"></textarea>
</div>
<div class ="form-group">
         <input type="submit" value="Register" class ="btn btn-success" name="register">
         <div>
</form>
</div>

</section>

<style>
.footer {
  background-color: #a37e64;
 height: auto
  position: relative;
  font-family: "Poppins";
  padding: 25px 0px;
}
.footer__content {
  padding: 25px;
  text-align: center;
  color: #fff;
  background-color: #a37e64;
}
.footer__content img {
  width: 5%;
  position: absolute;
  top: -50px;
  border: 1px solid red;
}
.footer__heading {
  position: relative;
}
.footer__heading h2 {
  background-color:  #a37e64;
  display: inline-block;
  padding: 0px 10px;
  /* border: 1px solid; */
  position: relative;
  z-index: 9999;
}
.footer__heading::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 45%;
  height: 5px;
  margin: 0;
  border-radius: 50px;
  width: 20%;
  transform: translate(-50%, -50%);
  background-color: rgb(255, 255, 255);
}
.footer__content p {
  font-size: 12px;
  font-weight: 200;
  padding: 10px 0px;
}
ul.social__media {
  margin: 0;
  padding: 0;
  display: inline-block;
  margin-top: 25px;
}
ul.social__media li {
  list-style-type: none;
  display: inline-block;
  margin-right: 15px;
}
ul.social__media li a {
  color: #fff;
  font-size: 40px;
}
ul.social__media li {
  text-align: center;
  height: 48px;
  width:48px;
  border-radius: 30px;
  background-color:   #a37e64;
  line-height: 40px;
  border: 2px solid   #a37e64;
  box-shadow: 0px 1px White;
  box-shadow: 0 2px 10px -1px white(0, 0, 0, 0.55),
    0 0px 20px 0px white(0, 0, 0, 0.55);
}
 
ul.bus__list {
  padding: 0;
  margin: 0;
}
 
ul.bus__list li {
  list-style-type: none;
  margin-bottom: 5px;
}
 
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="footer">
  <div class="container">
    <div class="footer__content">
      <div class="footer__heading">
        <h2>voice assistant </h2>
      </div>
      
 
      <ul class="social__media">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="https://instagram.com/optima3.0?igshid=ODM2MWFjZDg="><i class="fa fa-Instagram " aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
  
  <p class="p-3 bg-#a37e64 text-white text-center">
        ✉️  okoptima3.0@gmail.com , +91 00100145678
</p>
  <p class="p-3 bg-#a37e64 text-white text-center">
        Voice Assistant &copy; 2023 (OpTima)
</p>
</section>


    



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
 
  
</body>



</html>





