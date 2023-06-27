<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../files/sty.css">
    <title>html and css projects for beginner</title>
</head>

<body>  <?php include"../files/header.php" ?>
    <div class="container">

        <div class="heading">
            <h2> Exciting html and css <span> Projects</span> for Beginners
                | Learn <span> html and css </span>with Hands-On Projects</h2>
        </div>
        <div class="logo"><span class="mdi mdi-language-html5 "></span></div>
        <div class="about">
            <div class="description">
                <h4>HTML and CSS, you can also improve SEO by
                    focusing on factors such as page load speed, mobile responsiveness, keyword research, content
                    optimization, and building quality backlinks.</h4>
            </div>
            <div class="intro">

                <h6>Are you looking to enhance your online presence? Our web
                    development team specializes in creating SEO-friendly HTML
                    and CSS projects that will boost your website's visibility.
                    Whether you need a personal portfolio website, a blog, a product
                    landing page, a recipe website, or even an online store, we've got you
                    covered. Our experts will optimize the HTML structure, meta tags, and alt
                    attributes to improve search engine rankings. With a focus on user experience
                    and mobile responsiveness, we'll ensure that your website loads quickly and
                    provides a seamless browsing experience. Don't miss out on valuable organic traffic.
                    Contact us today to get started on your SEO-friendly HTML and CSS project.</h6>
            </div>
        </div>

        <div class="name">
            <h1>Here are some html and css project ideas for beginners</h1>


            <!-- 1st================-->
            <div class="projects">
                <h4>Responsive Navigation Menu:</h4>
                <p> Create a responsive navigation menu that adapts to different screen sizes.
                    Use HTML for the structure and CSS for styling.
                    Apply media queries to ensure the menu collapses into a hamburger icon on smaller screens.</p>
                <div class="code">
                    <button id="copy" onclick="navbar()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="navbar" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .navbar {
                          background-color: #2196f3;
                        }
                        
                        .nav-menu {
                          list-style: none;
                          margin: 0;
                          padding: 0;
                          display: flex;
                        }
                        
                        .nav-menu li {
                          margin-right: 10px;
                        }
                        
                        .nav-menu li a {
                          color: #fff;
                          text-decoration: none;
                          padding: 10px;
                        }
                        
                        @media (max-width: 768px) {
                          .nav-menu {
                            flex-direction: column;
                          }
                          
                          .nav-menu li {
                            margin-bottom: 10px;
                          }
                        }
                        
                            </style>
                        </head>
                        <body>
                            <nav class="navbar">
                                <ul class="nav-menu">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">About</a></li>
                                  <li><a href="#">Services</a></li>
                                  <li><a href="#">Contact</a></li>
                                </ul>
                              </nav>
                        </body>
                        </html>
                       </textarea>

                </div>
            </div>




            <!-- 2st================-->
            <div class="projects">
                <h4>Pricing Table:</h4>
                <p> Design a pricing table for a product or service.
                    Use HTML tables to structure the pricing options and CSS for styling.
                    Focus on making it visually appealing and easy to compare different pricing tiers.</p>
                <div class="code">
                    <button id="copy" onclick="pricing()"><span class="mdi mdi-content-copy "></button>



                    <textarea id="pricing" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .pricing-table {
                          display: flex;
                        }
                        
                        .pricing-item {
                          flex: 1;
                          text-align: center;
                          padding: 20px;
                          border: 1px solid #ccc;
                        }
                        
                        .pricing-item h3 {
                          font-size: 20px;
                          margin-bottom: 10px;
                        }
                        
                        .pricing-item h2 {
                          font-size: 30px;
                          margin-bottom: 20px;
                        }
                        
                        .pricing-item ul {
                          list-style: none;
                          margin: 0;
                          padding: 0;
                        }
                        
                        .pricing-item ul li {
                          margin-bottom: 10px;
                        }
                        
                        .pricing-item button {
                          padding: 10px;
                          background-color: #2196f3;
                          border: none;
                          color: #fff;
                          cursor: pointer;
                        }
                        
                            </style>
                        </head>
                        <body>
                            <div class="pricing-table">
                                <div class="pricing-item">
                                  <h3>Basic</h3>
                                  <h2>$10/month</h2>
                                  <ul>
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                  </ul>
                                  <button>Buy Now</button>
                                </div>
                                
                                <div class="pricing-item">
                                  <h3>Pro</h3>
                                  <h2>$20/month</h2>
                                  <ul>
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                  </ul>
                                  <button>Buy Now</button>
                                </div>
                                
                                <div class="pricing-item">
                                  <h3>Premium</h3>
                                  <h2>$30/month</h2>
                                  <ul>
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                  </ul>
                                  <button>Buy Now</button>
                                </div>
                              </div>
                              
                        </body>
                        </html>
                       </textarea>

                </div>
            </div>

            <!-- 3st================-->
            <div class="projects">
                <h4>Image Gallery:</h4>
                <p> Build an image gallery to showcase a collection of photos.
                    Use HTML and CSS to create a grid layout for the images.
                    Add hover effects or lightbox functionality to enhance the user experience. </p>
                <div class="code">
                    <button id="copy" onclick="gallery()"><span class="mdi mdi-content-copy "></button>



                    <textarea id="gallery" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .image-gallery {
                          display: flex;
                          flex-wrap: wrap;
                        }
                        
                        .image-item {
                          flex: 0 0 33.33%;
                          padding: 5px;
                        }
                        
                        .image-item img {
                          width: 100%;
                        }
                        
                            </style>
                        </head>
                        <body>
                            <div class="image-gallery">
                                <div class="image-item">
                                  <img src="image1.jpg" alt="Image 1">
                                </div>
                                
                                <div class="image-item">
                                  <img src="image2.jpg" alt="Image 2">
                                </div>
                                
                                <div class="image-item">
                                  <img src="image3.jpg" alt="Image 3">
                                </div>
                              </div>
                              
                        </body>
                        </html>
                       </textarea>

                </div>
            </div>

            <!-- 2st================-->
            <div class="projects">
                <h4>Contact Form:</h4>
                <p> Create a simple contact form for visitors to reach out to you.
                    Use HTML form elements and CSS for styling.
                    Validate the form inputs using HTML5 attributes or JavaScript to ensure proper data submission.</p>
                <div class="code">
                    <button id="copy" onclick="cform()"><span class="mdi mdi-content-copy "></button>



                    <textarea id="cform" readonly>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                        <style>
                            .contact-form {
                      max-width: 400px;
                      margin: 0 auto;
                      padding: 20px;
                      background-color: #f2f2f2;
                      border-radius: 5px;
                    }
                    
                    .contact-form h2 {
                      text-align: center;
                      margin-bottom: 20px;
                    }
                    
                    .form-group {
                      margin-bottom: 20px;
                    }
                    
                    .form-group label {
                      display: block;
                      font-weight: bold;
                    }
                    
                    .form-group input,
                    .form-group textarea {
                      width: 100%;
                      padding: 10px;
                      border: 1px solid #ccc;
                      border-radius: 5px;
                    }
                    
                    .form-group textarea {
                      height: 150px;
                    }
                    
                    button[type="submit"] {
                      padding: 10px 20px;
                      background-color: #2196f3;
                      border: none;
                      color: #fff;
                      border-radius: 5px;
                      cursor: pointer;
                      font-size: 16px;
                      font-weight: bold;
                    }
                    
                    button[type="submit"]:hover {
                      background-color: #1876d2;
                    }
                    
                        </style>
                    </head>
                    <body>
                        <form class="contact-form" action="#" method="POST">
                            <h2>Contact Us</h2>
                            <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                              <label for="message">Message:</label>
                              <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
                
                <button type="submit">Submit</button>
                </form>

                </textarea>
            </div>
        </div>



        <!-- 2st================-->
        <div class="projects">
            <h4>Social Media Buttons:</h4>
            <p> Design and implement social media buttons for your website.
                Use HTML for the structure and CSS for styling.
                Add appropriate links to each button for easy sharing and engagement.</p>
            <div class="code">
                <button id="copy" onclick="social()"><span class="mdi mdi-content-copy "></button>



                <textarea id="social" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .social-media {
                          display: flex
                                }
                            </style>
                        </head>
                        <body>
                            <div class="social-media">
                       <a href="#" class="social-media-icon"><i class="fab fa-facebook-f"></i></a>
                         <a href="#" class="social-media-icon"><i class="fab fa-twitter"></i></a>
                   <a href="#" class="social-media-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                              
                        </body>
                        </html>
                       </textarea>

            </div>
        </div>

        <!-- 2st================-->
        <div class="projects">
            <h4>Newsletter Signup Form:</h4>
            <p> Create a stylish newsletter signup form for users to subscribe to your mailing list.
                Use HTML form elements and CSS to design an attractive form.
                Consider adding validation and feedback messages for a smooth user experience.</p>
            <div class="code">
                <button id="copy" onclick="news()"><span class="mdi mdi-content-copy "></button>



                <textarea id="news" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .newsletter-form {
                          display: flex;
                        }
                        
                        .newsletter-form input[type="email"] {
                          padding: 10px;
                          width: 250px;
                          border: 1px solid #ccc;
                          border-radius: 5px 0 0 5px;
                        }
                        
                        .newsletter-form button {
                          padding: 10px;
                          background-color: #2196f3;
                          border: none;
                          color: #fff;
                          border-radius: 0 5px 5px 0;
                          cursor: pointer;
                        }
                        
                            </style>
                        </head>
                        <body>
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter your email" required>
                                <button type="submit">Subscribe</button>
                              </form>
                              
                        </body>
                        </html>
                       </textarea>

            </div>
        </div>

        <!-- 2st================-->
        <div class="projects">
            <h4>Testimonial Slider:</h4>
            <p> Build a testimonial slider to showcase customer reviews or feedback.
                Use HTML for the structure and CSS for styling.
                Utilize JavaScript or CSS animations to create a sliding effect between testimonials. </p>
            <div class="code">
                <button id="copy" onclick="slider()"><span class="mdi mdi-content-copy "></button>



                <textarea id="slider" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .testimonial-slider {
                          display: flex;
                          overflow-x: auto;
                          scroll-snap-type: x mandatory;
                        }
                        
                        .testimonial-item {
                          flex: 0 0 300px;
                          scroll-snap-align: start;
                          padding: 20px;
                        }
                        
                        .testimonial-item img {
                          width: 100%;
                          border-radius: 50%;
                        }
                        
                        .testimonial-item p {
                          margin-bottom: 10px;
                        }
                        
                            </style>
                        </head>
                        <body>
                            <div class="testimonial-slider">
                                <div class="testimonial-item">
                                  <img src="testimonial1.jpg" alt="Testimonial 1">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum posuere elit in dictum.</p>
                                  <h4>John Doe</h4>
                                </div>
                                
                                <div class="testimonial-item">
                                  <img src="testimonial2.jpg" alt="Testimonial 2">
                                  <p>Curabitur eget sapien nec erat dignissim consequat. Aliquam viverra, lorem sit amet congue aliquam.</p>
                                  <h4>Jane Smith</h4>
                                </div>
                                
                                <div class="testimonial-item">
                                  <img src="testimonial3.jpg" alt="Testimonial 3">
                                  <p>Sed at mauris ut lectus scelerisque malesuada vitae vel libero. Donec in felis a libero scelerisque.</p>
                                  <h4>Mark Johnson</h4>
                                </div>
                              </div>
                              <script>
                                const testimonialSlider = document.querySelector('.testimonial-slider');

                                testimonialSlider.addEventListener('scroll', () => {
                                    const scrollPosition = testimonialSlider.scrollLeft;
                                    const itemWidth = testimonialSlider.querySelector('.testimonial-item').offsetWidth;
                                    const currentItem = Math.round(scrollPosition / itemWidth);
                                    testimonialSlider.querySelectorAll('.testimonial-item').forEach(item => {
                                        item.classList.remove('active');
                                    });
                                    testimonialSlider.querySelectorAll('.testimonial-item')[currentItem].classList.add('active');
                                });

                            </script>
                        </body>
                        </html>
                       </textarea>

            </div>
        </div>


        <!-- 2st================-->
        <div class="projects">
            <h4>Animated Progress Bar:</h4>
            <p> Design an animated progress bar to visually represent the completion of a task or goal.
                Use HTML and CSS to create the progress bar with animated transitions or effects.
                Customize the styling to match your website's design. </p>
            <div class="code">
                <button id="copy" onclick="animatedBar()"><span class="mdi mdi-content-copy "></button>



                <textarea id="animatedBar" readonly>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                        .progress-bar {
                          width: 100%;
                          background-color: #f2f2f2;
                          border-radius: 5px;
                          overflow: hidden;
                        }
                        
                        .progress {
                          width: 0;
                          height: 20px;
                          background-color: #2196f3;
                          transition: width 0.5s ease;
                        }
                        
                        
                            </style>
                        </head>
                        <body>
                            <div class="progress-bar">
                                <div class="progress" style="width: 50%;"></div>
                              </div>
                              
                              <script>
                                window.addEventListener('load', () => {
                                    const progressBar = document.querySelector('.progress');
                                    progressBar.style.width = progressBar.getAttribute('style');
                                });

                            </script>
                        </body>
                        </html>
                       </textarea>

            </div>
        </div>
        <!-- 2st================-->
        <div class="projects">
            <h4>FAQ Accordion:</h4>
            <p> Create an FAQ (Frequently Asked Questions) section with an accordion-style layout.
                Use HTML for the structure and CSS for styling.
                Utilize JavaScript to toggle the visibility of answers when a question is clicked. </p>
            <div class="code">
                <button id="copy" onclick="faq()"><span class="mdi mdi-content-copy "></button>



                <textarea id="faq" readonly>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <style>
                    .faq-item {
              margin-bottom: 10px;
            }
            
            .faq-question {
              cursor: pointer;
            }
            
            .faq-answer {
              display: none;
            }
            
            .faq-answer.active {
              display: block;
            }
            
                </style>
            </head>
            <body>
                <div class="faq-accordion">
                    <div class="faq-item">
                      <h3 class="faq-question">Question 1?</h3>
                      <div class="faq-answer">
                        Answer 1.
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <h3 class="faq-question">Question 2?</h3>
                      <div class="faq-answer">
                        Answer 2.
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <h3 class="faq-question">Question 3?</h3>
                      <div class="faq-answer">
                        Answer 3.
                      </div>
                    </div>
                  </div>
                  <script>
                    const faqQuestions = document.querySelectorAll('.faq-question');

                    faqQuestions.forEach(question => {
                        question.addEventListener('click', () => {
                            question.nextElementSibling.classList.toggle('active');
                        });
                    });

                </script>
            </body>
            </html>
           </textarea>

            </div>
        </div>

        <div class="para">
            <h6>
                These additional small projects will allow you to further practice your HTML and CSS skills while exploring different design and interactive elements. Remember to experiment, be creative, and pay attention to details to create visually appealing and user-friendly experiences.
            </h6>
        </div>
    </div>

    <script>
        function faq() {
            var codeArea = document.getElementById('faq');
            codeArea.select();
            document.execCommand("copy");
        }
        function animatedBar() {
            var codeArea = document.getElementById('animatedBar');
            codeArea.select();
            document.execCommand("copy");
        }
        function slider() {
            var codeArea = document.getElementById('slider');
            codeArea.select();
            document.execCommand("copy");
        }
        function news() {
            var codeArea = document.getElementById('news');
            codeArea.select();
            document.execCommand("copy");
        }
        function navbar() {
            var codeArea = document.getElementById('navbar');
            codeArea.select();
            document.execCommand("copy");
        }
        function pricing() {
            var codeArea = document.getElementById('pricing');
            codeArea.select();
            document.execCommand("copy");
        }
        function gallery() {
            var codeArea = document.getElementById('gallery');
            codeArea.select();
            document.execCommand("copy");
        }

        function form() {
            var codeArea = document.getElementById('form');
            codeArea.select();
            document.execCommand("copy");
        }


        function social() {
            var codeArea = document.getElementById('social');
            codeArea.select();
            document.execCommand("copy");
        }

        function cform() {
            var codeArea = document.getElementById('cform');
            codeArea.select();
            document.execCommand("copy");
        }

    </script>

</body>

</html>