<!DOCTYPE html>
<html lang="en">
<head>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <title>STAR</title>
 <style>
     *{
    padding: 0;
    margin: 0;
}

body{
    font-family: Montserrat;
}
.wrapper{
    width: 100%;
}

.nav-items{
    display: flex;
    justify-content: space-between;
    background-color: black;
    align-items: center;
    padding: 0 10px;
    position: absolute;
    width: 100%;
    height: 60px;
    top: 0;
}

nav h1{
    color: white;
    font-size: 50px;
}

nav ul{
    display: flex;
    list-style-type: none;
}

nav ul li{
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    
}

nav ul li a{
    text-decoration: none;
    color: white;
    cursor: pointer;
}

.landing-image{
    height: 100vh;
    margin-top: 60px;
    background-image:url(img/house.jpg) ;
    filter: brightness(0.5);
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
}

.texts{
    text-align: center;
}

h1{
    text-align: center;
    color: rgb(255, 255, 255);
    font-weight: bold;
    font-size: 40px;
}

p{
    text-align: center;
    color: white;
    font-size: 20px;
}

span{
    background-color: black;
    color: white;
    padding: 8px;
}

button{
    background-color: black;
    padding: 10px 20px;
    border-radius: 16px;
    border: none;
    cursor: pointer;
    color: white;
    margin-top: 20px;
    transition: background-color 0.3s ease-in-out;
    transition-delay: 0.2s;
}

button:hover{
    background-color: white;
    color: black;
}

/* ////////////explore//////// */

.explore{
    height: 100vh;
    text-align: center;
    top: 0;
    left: 0;
    background-color: white;
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 60px 20px;
    gap: 2rem;
}

.writeup{
    margin-top: 150px;
    color: black;
}
.writeup h1{
    color: black;
}
.writeup p{
    color: black;
}
.writeup span{
    font-weight: lighter;
    color: black;
    background: none;
}

.writeup button{
    background-color: gray;
    color: black;
    transition: transform 0.3s ease-in-out;
}

.writeup button:hover{
    transform: scale(1.2);
}

.slideshow-container{
    position: relative;

    height: 400px;
    top: 0;
}

.slide{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: 0.5s ease-in-out;
    margin-top: 80px;
    border-radius: 10px;
}

.slide.active{
    opacity: 1;
}

.footer{
    background-color: black;
    text-align: center;
    color: white;
}
#hq{
    font-size: 500%;
filter: brightness(5);
color: white;

}
.texts{
filter: brightness(20);
filter: opacity(100%);
}
#a{
    color: white;
}
 </style>


</head>
<body>
<div class="wrapper">
    <nav>
       <div class="nav-items">
            <h1>STAR</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="room.php">Explore</a></li>
                <li><a href="reservation.php">Booking</a></li>
                <li><a href="contact.php">Contact</a></li>
                 <li><a href="admin.php">Admin</li>
                 <li><a href="faq.php">FAQ</li>
            </ul>
       </div>
    </nav>
   
    <div class="landing-image">
        <div class="texts">
            <h1 id="hq">Welcome to <span>StarWeek</span></h1>
            <br>
            <p>Your premier destination for short-term rental homes.</p>
            <center><button><a href="reservation.php"></a>Book Now</button></center>
        </div>
    </div>

    <div class="explore">
        <div class="slideshow-container">
            <img class="slide" src="img/sittingroom.jpg" alt="Property Image 1">
            <img class="slide" src="img/stairs.jpg" alt="Property Image 2">
            <img class="slide" src="img/bedroom3.jpg" alt="Property Image 3">
        </div>
        <div class="writeup">
            <h1>Star Week Luxury Apartments</h1>
        <p>Book Your Week-Long Stay Today</p>
        <p>Price per week: <span> $650</span></p>
        <button class="booking-button" onclick="bookProperty()">Book Now</button>
        <p id="booking-status"></p>

        </div>
    </div>
   
    <div class="footer"><br>
                    <p id="a">Copyright &copy; <a href="https://github.com/cute-poison">cute-poison</a>. All Rights Reserved.
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designed by <a href="https://github.com/cute-poison">cute-poison</a>
                    </p>
                       </div>
    </div>
    <script>
        var slides = document.getElementsByClassName("slide");
var currentSlide = 0;

function showSlide(index) {
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  slides[index].classList.add("active");
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

// Automatically advance to the next slide every 3 seconds
setInterval(nextSlide, 3000);

    </script>
</body>
</html>
