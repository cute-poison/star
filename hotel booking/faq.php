<!DOCTYPE html>
<html>
<head>
    <title>FAQ Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .faq-list {
            max-width: 600px;
            margin: 0 auto;
        }

        .faq-item {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
        }

        .faq-item h3 {
            color: #333;
            margin: 0;
            font-size: 18px;
        }

        .faq-item p {
            margin: 10px 0;
            font-size: 14px;
        }

        .faq-item .answer {
            display: none;
        }

        .faq-item .expand {
            display: inline-block;
            font-size: 14px;
            color: blue;
            cursor: pointer;
        }

        .faq-item .expand:hover {
            text-decoration: underline;
        }

        .faq-item.active .answer {
            display: block;
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
.footer{
    background-color: white;
    text-align: center;
    color: black;
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
    </style>
    <script>
        function toggleAnswer(index) {
            var faqItem = document.getElementsByClassName("faq-item")[index];
            faqItem.classList.toggle("active");
        }
    </script>
</head>
<body>
    <nav>
       <div class="nav-items">
            <h1>STAR</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="booknow.php">Booking</a></li>
                <li><a href="contact.php">Contact</a></li>
                 <li><a href="admin.php">Admin</li>
                 <li><a href="faq.php">FAQ</li>
            </ul>
       </div>
    </nav>
<br><br><br>
    <h1>Hotel FAQs</h1>
    <div class="faq-list">
        <div class="faq-item">
            <h3>What are the check-in and check-out times?</h3>
            <p class="answer">The standard check-in time is 3:00 PM and check-out time is 12:00 PM. Early check-in or late check-out may be available upon request, subject to availability.</p>
            <p class="expand" onclick="toggleAnswer(0)">Show Answer</p>
        </div>
        <div class="faq-item">
            <h3>Do you provide airport transportation?</h3>
            <p class="answer">Yes, we offer airport transportation services for our guests. Please contact our front desk for more information and to make arrangements.</p>
            <p class="expand" onclick="toggleAnswer(1)">Show Answer</p>
        </div>
        <div class="faq-item">
            <h3>Is breakfast included in the room rate?</h3>
            <p class="answer">Yes, breakfast is included in the room rate. We provide a complimentary breakfast buffet with a variety of options to choose from.</p>
            <p class="expand" onclick="toggleAnswer(2)">Show Answer</p>
        </div>
    </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="footer">
        <div>
                <p id="a">Copyright &copy; <a href="https://github.com/cute-poison">cute-poison</a>. All Rights Reserved.
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designed by <a href="https://github.com/cute-poison">cute-poison</a>
                    </p>
                </div>
               </footer>
</body>
</html>
