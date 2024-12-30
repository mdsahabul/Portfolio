<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
<br><br>
<div class="container-fluid" id="welcome">
    <div class="welcome_text">
        <h1 class="text-center">Welcome to My Portfolio</h1>
        <p class="text-center">Hi My name is Md Sahabul</p>
    </div>
    
</div>
<div class="container-fluid" id="About">
    <div class="container text-center my-5">
        <h2 class="mt-4">About</h2>
        <hr class="border border-primary border-3 opacity-75 container text-center" style="width:15%;>
    </div>
    <div class="container-fluid">
        <div class="container text-center my-5">
            <div class="a_heading">
                <img src="assets/images/webimages/pfp.jpg" height="170px">
                        <h1>Hi<br>Greetings Sir</h1>
                        <hr class="border border-primary border-2 opacity-50 container text-center" style="width:30%;>
                        <span class="a-text"><p>Allow me to Introduce myself Md Sahabul.<br>
                            I am a Professional Web Desginer and Developer, I can build good qualityful Websites <br>
                            you can visit my github portfolio if you wanna inquire <a class="text-decoration-none"" target="blank" href="https://github.com/mdsahabul">Github</a> 
                            about my previous projects
                            <br>
                            <br>I can Build any website according your demands.<br></span><br><br>
                            <a href="assets/files/pdf_viewer.php" target="_blank" class="btn btn-info text-decoration-none text-white">Download My CV</a>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="Services">
    <div class="container text-center my-5">
        <h2 class="mt-4">Services</h2>
        <hr class="border border-primary border-3 opacity-75 container text-center" style="width:15%;">
    </div>
    <div class="service-1">
                    <div class="container">
                <div class="row text-center my-5">
                    <div class="col-md-4">
                        <div class="service-item">
                        <i class="fa-brands fa-themeco fa-4x"></i><br><br>
                            <p>
                                <span class="s1p-head">
                                    <b>Template <br>
                                    Design</b>
                                </span><br><br>
                                <span class="s1p-body">
                                    A Template Design for your website that you can use for your personal website
                                    or in multiple Domains. This template design will be in psd format.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                        <i class="fa-solid fa-globe fa-4x"></i><br><br>
                            <p>
                                <span class="s1p-head">
                                   <b>Web <br>
                                    Design</b>
                                </span><br><br>
                                <span class="s1p-body">
                                    Design a website according to provided template. Fully designed according provided 
                                    template. Using multiple frameworks.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                        <i class="fa-solid fa-users fa-4x"></i><br><br>
                            <p>
                                <span class="s1p-head">
                                    <b>User <br>
                                    Experience</b>
                                </span><br><br>
                                <span class="s1p-body">
                                    Fully designed according User Experience. Using most famous tools like 
                                    Figma and Adobe XD. Fully customizable and well interactive.
                                </span>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>

    <div class="service-2">
                    <div class="container">
                <div class="row text-center my-5">
                    <div class="col-md-4">
                        <div class="service-item">
                        <i class="fa-solid fa-code fa-4x"></i><br><br>
                            <p>
                                <span class="s1p-head">
                                    <b>Web <br>
                                    Development</b>
                                </span><br><br>
                                <span class="s1p-body">
                                    Develop website using php, mysqul, jquery, laravel and any of other as demanded.
                                    Development will have no bug and problems in developed website.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                        <i class="fa-brands fa-wordpress fa-4x"></i><br><br>
                            <p>
                                <span class="s1p-head">
                                    <b>Wordpress<br></b>
                                </span><br><br>
                                <span class="s1p-body">
                                    Fully customised website using Wordpress templates, and plugins. Website will be well
                                    designed.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                        <i class="fa-solid fa-mobile fa-4x"></i><br><br>
                            <p>
                                <span class="s1p-head">
                                    <b>Responsive <br>
                                    Design</b>
                                </span><br><br>
                                <span class="s1p-body">
                                    A small river named Duden flows by their <br>
                                    place and supplies it with the necessary <br>
                                    regelialia
                                </span>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>
    

</div>


<div class="container-fluid">
    <h2 class="container text-center" id="Portfolio">Portfolio</h2>
    <hr class="border border-primary border-3 opacity-75 container text-center" style="width:15%;">
    <div>
            <div class="row">
                    <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-3 mb-4">'; // Changed col-md-4 to col-md-3
                            echo '    <div class="card shadow">';
                            echo '        <img src="assets/images/' . htmlspecialchars($row["image"]) . '" class="card-img-top" alt="' . htmlspecialchars($row["title"]) . '">';
                            echo '        <div class="card-body">';
                            echo '            <h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                            echo '            <p class="card-text">' . htmlspecialchars(substr($row["description"], 0, 100)) . '...</p>';
                            echo '            <a href="projects/view.php?id=' . $row["id"] . '" class="btn btn-info">View Project</a>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="col-12"><p>No projects found.</p></div>';
                    }
                    ?>
            </div>
    </div>
    
</div>



<div class="container-fluid" id="Skills"> <!-- Added ID here -->
    <div class="container text-center my-5">
        <h1>Skills</h1>
        <hr class="border border-primary border-3 opacity-75 container text-center " style="width:15%;">
        <div class="row">
            <div class="col-md-2">
                <i class="fa-brands fa-themeco fa-4x"></i>
                <div class="counter" data-count="99">0%</div>
                <p>Customer Satisfaction</p>
            </div>
            <div class="col-md-2">
                <i class="fa-brands fa-wordpress fa-4x"></i>
                <div class="counter" data-count="98">0%</div>
                <p>Happy Clients</p>
            </div>
            <div class="col-md-2">
                <i class="fa-solid fa-users fa-4x"></i>
                <div class="counter" data-count="97">0%</div>
                <p>Cups of Coffee</p>
            </div>
            <div class="col-md-2">
                <i class="fa-solid fa-globe fa-4x"></i>
                <div class="counter" data-count="96">0%</div>
                <p>Cups of Coffee</p>
            </div>
            <div class="col-md-2">
                <i class="fa-solid fa-code fa-4x"></i>
                <div class="counter" data-count="95">0%</div>
                <p>Cups of Coffee</p>
            </div>
            <div class="col-md-2">
                <i class="fa-solid fa-mobile fa-4x"></i>
                <div class="counter" data-count="100">0%</div>
                <p>Cups of Coffee</p>
            </div>

        </div>
    </div>

     <!-- Counting Animation Script -->
      <!-- Counting Animation Script -->
      <script>
            $(document).ready(function() {
                let counterStarted = false;

                // Function to start the counter animation
                function startCounter() {
                    if (!counterStarted) {
                        $('.counter').each(function() {
                            $(this).prop('Counter', 0).animate({
                                Counter: $(this).data('count')
                            }, {
                                duration: 3000,
                                easing: 'swing',
                                step: function(now) {
                                    $(this).text(Math.ceil(now) + '%');
                                }
                            });
                        });
                        counterStarted = true;
                    }
                }

                // Check if the section is in the viewport
                function isInViewport(element) {
                    const rect = element.getBoundingClientRect();
                    return (
                        rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.bottom >= 0
                    );
                }

                // Trigger animation on page load (in case skills section is already in view)
                if (isInViewport(document.getElementById('Skills'))) { // Ensure ID is 'Skills'
                    startCounter();
                }

                // Throttle scroll events for performance
                let scrollThrottle;
                $(window).on('scroll', function() {
                    if (!scrollThrottle) {
                        scrollThrottle = setTimeout(function() {
                            scrollThrottle = null;
                            if (isInViewport(document.getElementById('Skills'))) { // Ensure ID is 'Skills'
                                startCounter();
                            }
                        }, 200); // Adjust the throttle time as necessary
                    }
                });
            });
        </script>
</div>




<div class="container-fluid">
    <h2 class="container text-center" id="Reviews">Reviews</h2>
    <hr class="border border-primary border-3 opacity-75 container text-center" style="width:15%;">
    
    <!-- Carousel -->
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-inner">
            <?php
            $sql = "SELECT * FROM testimonials";
            $result = $conn->query($sql);
            $activeClass = 'active'; // Set the first item to active

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '    <div class="row justify-content-center">';
                    echo '        <div class="col-md-4 text-center">';
                    echo '            <img src="/portfolio/testimonial/assets/images/Clients/' . htmlspecialchars($row["image"]) . '" class="rounded-circle" alt="' . htmlspecialchars($row["name"]) . '" style="max-height: 300px; object-fit: cover; border-radius: 10px">';
                    echo '            <h5 class="mt-3">' . htmlspecialchars($row["name"]) . '</h5>'; // Changed to 'name'
                    echo '            <p>' . htmlspecialchars($row["testimonial"]) . '</p>'; // Changed to 'testimonial'
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                    $activeClass = ''; // Reset active class after the first iteration
                }
            } else {
                echo '<div class="carousel-item active"><div class="row justify-content-center"><div class="col-md-4 text-center"><p>No testimonials found.</p></div></div></div>';
            }
            ?>
        </div>
        
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<button type="button" class="btn btn-success"><a href="https://forms.gle/hsjWWhhNPRFonbmM8" class="text-black" style="text-decoration: none;">Give Review</a></button>


<div id="Contact" class="contact py-5">
    <div class="text-center mb-4">
        <h2 class="text-black">Contact</h2>
        <hr class="border border-primary border-3 opacity-75 container text-center" style="width:15%;">
    </div>

    <div class="contacts container">
        <div class="row">
            <!-- Contact Form Section -->
            <div class="col-lg-6 contacts1">
                <form action="contact_process.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-6">
                            <input type="text" name="name" class="form-control text-black border-primary" placeholder="Your Name" required>
                        </div>
                        <div class="col-6">
                            <input type="email" name="email" class="form-control text-black border-primary" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control text-black border-primary" rows="4" placeholder="Enter your comment here..." required></textarea>
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-outline-primary w-50">MESSAGE</button>
                    </div>
                </form>
            </div>

            <!-- Contact Details Section -->
            <div class="col-lg-6 contacts2 text-white">
                <div class="c-details">
                    <div class="mb-4">
                        <p><span class="text-muted">Email</span><br><a href="mailto:devsahabul@gmail.com" class="text-primary" style="text-decoration: none;">devsahabul@gmail.com</a></p>
                    </div>
                    <div class="mb-4">
                        <p><span class="text-muted">Phone/Whatsapp</span><br><a href="tel:+8801518986439" class="text-primary" style="text-decoration: none;">+88 015 189 864 39</a></p>
                    </div>
                    <div>
                        <p class="text-black" style="text-decoration: none;"><span class="text-muted">Address</span><br>Bogura<br>Rajshahi, Bangladesh</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="map mb-4 card shadow">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116818.20868834216!2d89.317505!3d24.8462348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1696501092404!5m2!1sen!2sbd"
                        width="100%" height="300" style="border: 1px;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



<?php include 'includes/footer.php'; ?>