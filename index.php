<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SMILE CARE WEBSITE </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<!--header -->
 <header class="header">
    <div class="container">
        <div class="row">

            <nav class="nav">
            <a href="#home" class="logo">SmileCare<span>Clinic</span></a>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#reviews">Reviews</a>
                <a href="#footer">Contact</a>
                <a href="#Contact" class="link-btn">Make Appoinment</a>
                <button class="logbtn" onclick="document.getElementById('id01').style.display='block'"></button>
                <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

 <!-- Modal Content -->
<form class="modal-content animate" onsubmit="return validateForm()">
    <div class="imgcontainer">
        <img src="doctor.png" alt="Avatar" class="avatar">
    </div>

    <div class="login-cont">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required id="uname">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required id="psw">
        <span class="eye-icon" onclick="togglePassword()">🙈</span>
        <button type="submit">Login</button>
        
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        
    </div>
</form>

<script>
function validateForm() {
    const username = document.getElementById('uname').value;
    const password = document.getElementById('psw').value;

    // Static username and password
    const validUsername = '@Tush_p';
    const validPassword = 'Tushar123';

    if (username === validUsername && password === validPassword) {
        window.location.href = "fetch_table.php"; 
        return false; // Prevent default form submission }
    } else {
        // Credentials are incorrect
        alert('Incorrect username or password.');
        return false;
    }
}

function togglePassword() {
    const passwordField = document.getElementById('psw');
    const eyeIcon = document.querySelector('.eye-icon');
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.textContent = "🐵"; // Change icon to indicate password is visible
    } else {
        passwordField.type = "password";
        eyeIcon.textContent = "🙈"; // Change icon back to eye
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>






           
                </nav>
                <div id="menu-btn" class="fas fa-bars"></div>

           
          

        </div>
        
    </div>
 </header>



<!-- header close -->

<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>We design your beautiful Smile with Care</h3>
                 <p> Dr.Tushar Patil </p>
                <a href="#Contact" class="link-btn">Make Appoinment</a>
            </div>

        </div>

    </div>

</section>
<!-- /home section ends here/  -->


<!-- /about section starts here/  -->

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 image">
                <img src="about us img.jpg" class="w-100 mb-4 mb-md-0" alt="About us image">
            </div>
            <div class="col-md-6 content">
                <span>About Us</span>
                <h3>Welcome to Dr. Tushar Patil's Dental Clinic</h3>
                <p>Founded in 2015 by Dr. Tushar Patil, our clinic has been dedicated to offering exceptional dental care to the community, combining state-of-the-art technology with a personal, patient-centered approach. Over the years, we have grown into a trusted dental practice, providing a full range of services that prioritize both your oral health and your comfort.</p>
                <a href="#Contact" class="link-btn">Make Appointment</a>
            </div>
        </div>
    </div>
</section>

<!-- /about section ends here/
 
/services section starts here/ -->
<section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container container">

        <div class="box">
            <img src="services 1.png" alt="loading">
            <h3>Dental Implants</h3>
            <p>If you are missing teeth, your smile is affected. We can replace those missing teeth with permanent dental implants.</p>
        </div>
        <div class="box">
            <img src="services 2.png" alt="loading">
            <h3>Cosmetic Services</h3>
            <p>Achieve a beautiful smile with our cosmetic treatments, from whitening to veneers, designed to enhance the aesthetics of your teeth.</p>
        </div>
        <div class="box">
            <img src="services 3.png" alt="loading">
            <h3>Root Canal Specialist</h3>
            <p>Trust our skilled endodontists for precise and comfortable root canal treatments that alleviate pain and save natural teeth.</p>
        </div>
        <div class="box">
            <img src="services 4.png" alt="loading">
            <h3>Dental Bridges and Cap</h3>
            <p>Restore your smile with our durable dental bridges and caps – precision-crafted for comfort and confidence.</p>
        </div>
        <div class="box">
            <img src="services 5.png" alt="loading">
            <h3>Wisdom Teeth</h3>
            <p>Wisdom teeth are usually removed as they are misaligned. Wisdom teeth extractions are common procedures, and we will do our best to make your experience positive.</p>
        </div>
        <div class="box">
            <img src="services 6.png" alt="Loading">
            <h3>Kids Dentistry</h3>
            <p>Brighten your child's smile with gentle, caring pediatric dentistry. Safe, fun, and friendly visits for your little ones.</p>
        </div>
        <div class="box">
            <img src="services 7.png" alt="Loading">
            <h3>Dental Filings</h3>
            <p>Fix cavities and restore your smile with our precise dental fillings. Fast, effective care for a healthy, confident you.</p>
        </div>
        <div class="box">
            <img src="services 8.png" alt="Loading">
            <h3>Teeth whitening</h3>
            <p>Achieve a radiant smile with our advanced teeth whitening services. Safe, effective treatments tailored to your needs.</p>
        </div>
        <div class="box">
            <img src="services 9.png" alt="Loading">
            <h3>Braces & Aligners</h3>
            <p>Get the perfect smile with our custom braces and aligners. Comfortable, effective solutions for straighter teeth and improved confidence.</p>
        </div>
        <div class="box">
            <img src="services 10.png" alt="loading">
            <h3>General Dentistry</h3>
            <p>We provide a range of general dentistry services, including fillings for cavities, dentures, and tooth extractions.</p>
        </div>
        <div class="box">
            <img src="services 11.png" alt="Loading">
            <h3>Dentures</h3>
            <p>Restore your smile and confidence with our high-quality dentures. Comfortable, natural-looking solutions for missing teeth.</p>
        </div>
        <div class="box">
            <img src="services 12.png" alt="Loading">
            <h3>Emergency Dental</h3>
            <p>Looking for an urgent dental solution? SmileCare Dental Clinic is here with the solution to your pain.</p>
        </div>

    </div>


</section>
<!-- /services section ends here -->

        <!-- slides  -->

<div class="slider">
    <div class="slide-img">
    <div class="slideshow-container" md-col-6>
       
        <div class="mySlides fade">
            <img src="slide 1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="slide 2.jpg" style="width:100%">
        </div>
        <!-- Add more slides as needed -->
        <div class="mySlides fade">
            <img src="slide 3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="slide 4.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 5.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 6.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="slide 7.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 8.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 9.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 10.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 11.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 12.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 13.jpg" style="width:100%">
        </div> <div class="mySlides fade">
            <img src="slide 14.jpg" style="width:100%">
        </div> 
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    </div>
    <br>
    <!-- Dots -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
        <span class="dot" onclick="currentSlide(10)"></span>
        <span class="dot" onclick="currentSlide(11)"></span>
        <span class="dot" onclick="currentSlide(12)"></span>
        <span class="dot" onclick="currentSlide(13)"></span>
        <span class="dot" onclick="currentSlide(14)"></span>
    </div>
   

        <!-- slides  -->


<!-- /process section starts here -->
<section class="process" >

  <h1 class="heading">Staff Members</h1>

  <div class="box-container container">

    <div class="box">
        <img src="staff 1.png" alt="Loading">
        <h3>Mrs.Jyoti Patil</h3>
        <p>I work as a Dental Assistant in SmileCare Dental Clinic.</p>
    </div>

    <div class="box">
        <img src="staff 2.png" alt="Loading">
        <h3>Nikita Padmane</h3>
        <p>I work as a Dental Receptionist in SmileCare Dental Clinic.</p>
        </div>

    <div class="box">
        <img src="staff 3.png" alt="Loading">
        <h3>Prathamesh Patil</h3>
        <p>I work as a Support Staff in SmileCare Dental Clinic.</p>
        </div>
        
  </div>

</section>  `
<!-- /process section ends here -->


<!--review section starts here-->
<section class="reviews" id="reviews">
<h1 class="heading"> satisfied clients </h1>
<div class="box-container container">

    <div class="box">
        <img src="client 1.jpg" alt="loading">
       
        <p>I had a wonderful experience at SmileCare Dental Clinic! The staff was professional, the office was clean, and Dr. Patil made me feel at ease throughout my entire visit. Highly recommend!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>Mr.Dilip Shelar</h3>
        <span>Satisfied Client</span>
    </div>
    <div class="box">
        <img src="client 2.jpg" alt="">
        <p>I had an excellent experience at SmileCare Dental Clinic! I'm thrilled with my braces treatment, Dr. Tushar explained everything clearly and I'm already seeing great progress!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Ms.Shreya Yeole</h3>
        <span>Satisfied Client</span>
    </div>
    <div class="box">
        <img src="client 3.jpg" alt="">
        <p>I’m so glad I chose SmileCare Dental Clinic! The team was welcoming, and Dr. Tushar made my treatment quick and pain-free!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         <!-- <i class="fas fa-star-half-alt"></i> -->
        </div>
        <h3>Mrs.Rajeshree Rajguru</h3>
        <span>Satisfied Client</span>
    </div>
    

</div>

</section>

<!--review section ends here-->

<!-- contact section starts here -->
 <section class="contact" id="Contact">

<h1 class="heading">MAKE APPOINTMENT</h1>


<form action=" http://localhost/smileCaredentalWebFinal\smileCareWeb\db_appoint.php" method="post">

<span>Your Name:</span>
<input type="text" name="name" placeholder="Enter your Name" class="box" required>
<span>Email Id:</span>
<input type="email" name="email" placeholder="Email Id" class="box" required>
<span>Phone Number:</span>
<input type="number" name="number" placeholder="Phone no" id="phoneNumber" class="box" pattern="\d{10}" required>
<span>Date & Time for Appointment:</span>
<input type="datetime-local" name="date" class="box" required>
<input type="submit" value="Make Appointment" name="submit" class="link-btn align-items-center">


</form>



 </section>

<!-- contact section end -->


<!-- footer section starts -->
 <section class="footer" id="footer">
<div class="box-container container">
    <div class="box">
        <i class="fas fa-phone"></i>
        <h3>Phone Number</h3>
        <p>+91 9987711719</p>
        <p>+91 9326970642</p>
    </div>



    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Our Address</h3>
        <p>Clinic 1: Dakshata Police Chowki Auto Stand, Near Pranav Medical, Beturkarpada, Kalyan(W)</p>
        <p>Clinic 2: Shop No.1, Opp. to Crown City, Near St. Lawrence School, Shree Complex, Umbarde Road, Kalyan(W)</p>
    </div>



    <div class="box">
        <i class="fas fa-clock"></i>
        <h3>Opening Hours</h3>
        <p>Monday to Saturday:<br>Morning-10:00am to 1:30pm.<br>Evening-6:00pm to 9:30pm.</p>
        <p>Sunday by Appointment only.</p>
    </div>



    <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>Email Address</h3>
        <p>drtusharpatil91@gmail.com</p>
    </div>
</div>
<div class="social-icons">
    
            <a href="https://www.instagram.com/tushar2858?igsh=bXhuNW01dzdncHN4" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100011774971945&mibextid=ZbWKwL" target="_blank" class="social-icon">
                <i class="fab fa-facebook"></i>
            </a>
        </div>

</section>




<script src="script.js"></script>
</body>
</html>