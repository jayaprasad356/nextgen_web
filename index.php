<?php


$servername = "localhost"; // replace with your database host
$username = "u743445510_nextgen"; // replace with your database username
$password = "Nextgen@2023"; // replace with your database password
$database = "u743445510_nextgen"; // replace with your database name





// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['btnAdd'])) {
    // Retrieve form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';

    // Insert data into the database
    $sql_query = "INSERT INTO website_enroll (name, mobile, email, location) VALUES ('$name', '$mobile', '$email', '$location')";
    
    if ($conn->query($sql_query) === TRUE) {
        // Display JavaScript alert
        echo "<script>alert('New record created successfully');</script>";
        // Redirect to another page after displaying the alert
        echo "<script>window.location.href='index.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }
}
?>

<!-- Rest of your HTML code -->

<!-- Rest of your HTML code -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css?v=<?php echo time(); ?>" />
    <title>NextGen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css?v=2.3.4" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   <style>
/* Hide the spinner */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type="number"] {
  -moz-appearance: textfield; /* Firefox */
}
</style>
</head>
<body>
    <section id="home" class="bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/icon.jpg" id="icon" data-aos="fade-up" class="img-fluid">
                    <img src="img/img1.png" id="images" data-aos="fade-up" class="img-fluid mt-3">
                </div>
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="mt-5" >ALL JOBS DON'T</h1>
                    <h2 class="mt-5" >NEED EMPLOYEES</h2>
                    <h3 class="mt-5" >AT WORKPLACES</h3>
                </div>
        
            </div>
        </div>
    </section>
    <section id="about" class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <img src="img/img5.png" data-aos="fade-up" alt="">
            </div>
            <div class="col-md-6" id="home-box" data-aos="fade-up">
                <h1 class="text-start">BECOME FINANCIALLY INDEPENDENT</h1>
                <p class="text-start">Welcome to NextGen Company, where we pave the way for your retail career through our comprehensive 7-day career-building course. Embrace the future of work with our retail order fulfillment training, unlocking exciting opportunities for online jobs that you can conveniently do from the comfort of your home. Join us in shaping the next generation of retail professionals and discover a path to success with NextGen Company</p>
            </div>
        </div>
    </div>
</section>

    <section id="service" class="bg-primary text-white">
        <div class="container">
            <div class="row">
                <h1 data-aos="fade-up">OUR SERVICES</h1>
                <div class="col-md-4">
                    <div class="home-box1" data-aos="fade-up">
                        <h1 class="text-start" >7 Days Retail Career Building Course - Online course</h1>
                        <p class="text-start">Join The Course In Any Language That You Prefer.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-box2" data-aos="fade-up">
                        <h1 class="text-start">Get Certificate On Completation Of Course</h1>
                        <p class="text-start">Get Job Opportunity In Retail Stores Or With NextGen Order Fulfilment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-box3" data-aos="fade-up">
                        <h1 class="text-start">Get Perment Work From Home Online Job</h1>
                        <p class="text-start">Get Increments & Promotions In The Job.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="done" class="bg-primary text-white">
        <div class="container">
            <div class="row">
                <h2 data-aos="fade-up" style = "color:black;position:relative; font-size:50px;top:50px;">What We've Done</h2>
                <div class="col-md-3 ">
                    <img src="img/img3.png" data-aos="fade-up" alt="">
                    <div class="home-box4" data-aos="fade-up">
                        <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="70" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                            <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                          </svg>
                        </div>
                        <h1 class="text-start">10,403</h1>
                        <p class="text-start">Registered With Retails Stores.</p>
                    </div>
                  
                    <div class="home-box5" data-aos="fade-up">
                        <div class="icon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="70" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                              </svg>
                        </div>
                        <h1 class="text-start" >28000+</h1>
                        <p class="text-start">Employment Opportunities.</p>
                    </div>
                    <div class="home-box6" data-aos="fade-up">
                        <div class="icon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="70" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                              </svg>
                        </div>
                        <h1 class="text-start" >1680</h1>
                        <p class="text-start">Employees Hired.</p>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <section id="course" class="bg-primary text-white">
        <div class="container-5">
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-6 text-center">
                    <h1 class="my-5" data-aos="fade-up">What You Learn In 7 Days Course</h1>
                    <p class="text-start" data-aos="fade-up">Day 1 - What is Retail & its Function </p>
                    
                    <p class="text-start" data-aos="fade-up">Day 2 - Type of Retail Stores</p>
                    
                    <p class="text-start" data-aos="fade-up">Day 3 - Warehouse Management</p>
                    
                    <p class="text-start" data-aos="fade-up">Day 4 - Inventory Management </p>
                    
                    <p class="text-start" data-aos="fade-up">Day 5 - Order Fulfillment Process </p>
                    
                    <p class="text-start" data-aos="fade-up">Day 6 - On-job Training & Details </p>
                    
                    <p class="text-start" data-aos="fade-up">Day 7 - Certification & Job Placement </p>
                </div>
                <div class="col-md-6 mt-3" data-aos="fade-up">
                    <iframe width="100%" height="315"  src="https://www.youtube.com/embed/c2dSVF2YoZU" frameborder="0" allowfullscreen></iframe>
                </div>
                
            </div>
        </div>
    </section>
    <section id="details" class="bg-primary text-white">
        <div class="container-5">
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-6 text-center">
                    <h1 class="my-5" data-aos="fade-up">Know About NextGen Job & Earning Details</h1>
                    <div class="home-box10" data-aos="fade-up">
                       
                        <p class="text-start">What Nextgen Does For Retail Stores.</p>
                    </div>
                    <div class="col-md-6 mt-3" data-aos="fade-up">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/-h4tsBOdF50" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home-box11" data-aos="fade-up">
                        <p class="text-start">Job Details With NextGen & Earning Opportunities</p>
                    </div>
                    
                    <div class="col-md-6 mt-3" data-aos="fade-up">
                        <iframe id= "video" width="100%" height="315" src="https://www.youtube.com/embed/V90381PsLH0" frameborder="0" allowfullscreen></iframe>
                    </div>
                 </div>    
            </div>
        </div>
    </section>
    <section id="job" class="bg-primary text-white">
        <div class="container-5">
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-6 text-center">
                    <div class="d-flex flex-column align-items-end">
                    
                        <h1 class="my-5" data-aos="fade-up" style="color:black; font-size: 2.5em;">Want to take a trial of jobs before enrolling in the course??</h1>
                        <button  onclick="window.location.href='https://next-gen-a052d.web.app/'"  class="btn btn-secondary mt-3" data-aos="fade-up" id="button" style="font-size: 1.5em; border-radius: 10px;font-weight: bold; background: #38b6ff;color:blue;">
                            Click Here</i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                              </svg>
                        </button>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
                        <img src="img/img7.png" data-aos="fade-up"  class="img-fluid">
                      </div>
                    <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                        <iframe class="embed-responsive-item" width="120%" height="315" src="https://www.youtube.com/embed/N0ao4OA_OQI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    </section>
<section id="information" class="bg-primary text-white">
  <div class="container-4">
  <h5>More Information</h5>
    <div class="accordion">
      <div class="panel panel">
        <div class="panel-header" onclick="togglePanel(this)">Who Can Apply? </div>
        <div class="panel-content hidden">
        Anyone between 18 to 50 Yrs of Age Can Apply
        </div>
      </div>
      <div class="panel panel">
        <div class="panel-header" onclick="togglePanel(this)">What Is The Minimum Qualification Required? </div>
        <div class="panel-content hidden">
        You should have completed minimum of 8th Std and above.
        </div>
      </div>
      <div class="panel panel">
        <div class="panel-header" onclick="togglePanel(this)">Is The Course Online? </div>
        <div class="panel-content hidden">
        Yes, The course is completely online and you can complete it anytime.
        </div>
      </div>
      <div class="panel panel">
        <div class="panel-header" onclick="togglePanel(this)">Is The Course Available In All Languages? </div>
        <div class="panel-content hidden">
        Yes, The Course Is Available In All Languages That You Wish To Choose
        </div>
      </div>
      <div class="panel panel">
        <div class="panel-header" onclick="togglePanel(this)">Will I Get Job After Completing The Course? </div>
        <div class="panel-content hidden">
        Yes. 100% You will get the job by NextGen Company On Order Fulfilment Job Role.
        </div>
      </div>
      <div class="panel panel">
        <div class="panel-header" onclick="togglePanel(this)">Is The  Job Available For Work From Home? </div>
        <div class="panel-content hidden">
        Yes, Job is Completely online, And you can work from anywhere and anytime.
        </div>
      </div>
    </div>
  </div>
</section>
    <section id="contact" class="bg-primary text-white">
    <div class="container box">
        <div class="row">
        <h1 class="my-5" style="color:black; font-weight:bold;" data-aos="fade-up">Ready to work with us??</h1>
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="img/img2.png" data-aos="fade-up"  class="img-fluid">
                </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h1 style="color:black; font-size: 2.5em;" data-aos="fade-up">APPLY NOW</h1>
        <form method="post"  href="index.php" enctype="multipart/form-data" data-aos="fade-up">
    <input type="text"  class="form-control" id="name" name="name" placeholder="enter your name" required>
    <input type="mail"  class="form-control" id="email" name="email" placeholder="enter your mail" name="email" required>
    <input type="number"  class="form-control" id="mobile" name="mobile" placeholder="enter your Contact Number" name="mobile" required>
    <input type="text"  class="form-control" id="location" name="location" placeholder="enter your Location" name="location" required>
    <button type="submit" class="btn signin" name="btnAdd">Enroller Now</button>
</form>
        </div>
   </div>
   </div>
    </section>
    
    <section id="ready" class="bg-primary text-white">
        <div class="container-5">
            <div class="row d-flex flex-column">
                <div class="col-md-6">
                    <h1 class="my-5"  data-aos="fade-up">Contact us</h1>
                    <p1 data-aos="fade-up">Talk to us</p1>
                    <img src="img/img4.png" data-aos="fade-up"  class="img-fluid">
                    <h6 data-aos="fade-up">contact us</h6>
                </div>
                <div class="home-box12" data-aos="fade-up">
                    <h2 class="text-start" >phone</h2>
                    <p class="text-start">+91 86187 19941.</p>
                </div>
                <div class="home-box13" data-aos="fade-up">
                    <h2 class="text-start" >Email</h2>
                    <p class="text-start">support@slveenterprises.org.</p>
                </div>
                <div class="home-box14" data-aos="fade-up">
                    <h2 class="text-start" >Address</h2>
                    <p class="text-start">#9,2nd Floor,A3,NBA Tower, Thillainagar, 11th Cross W, Tennur, Tiruchirappalli, Tamil Nadu 620018
                    </p>
                </div>
            </div>
        </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
function togglePanel(panelHeader) {
  var panel = panelHeader.parentNode;
  var panelContent = panel.querySelector('.panel-content');
  var allPanels = document.querySelectorAll('.panel');

  // Close all panels and reset symbols
  allPanels.forEach(function(item) {
    var content = item.querySelector('.panel-content');
    if (content !== panelContent && !content.classList.contains('hidden')) {
      content.classList.add('hidden');
      item.querySelector('.panel-header').textContent = item.querySelector('.panel-header').textContent.replace('−', '+');
    }
  });

  // Toggle the clicked panel and update symbol
  if (panelContent.classList.contains('hidden')) {
    panelContent.classList.remove('hidden');
    panelHeader.textContent = panelHeader.textContent.replace('+', '−');
  } else {
    panelContent.classList.add('hidden');
    panelHeader.textContent = panelHeader.textContent.replace('−', '+');
  }
}


</script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
