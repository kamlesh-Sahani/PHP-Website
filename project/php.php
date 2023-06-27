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
    <title>php projects for beginner</title>
</head>

<body><?php include"../files/header.php" ?>
    <div class="container">

        <div class="heading">
            <h2> Exciting php<span> Projects</span> for Beginners
                | Learn <span> php </span>with Hands-On Projects</h2>
        </div>
        <div class="logo"><span class="mdi mdi-language-php"></span></div>
        <div class="about">
            <div class="description">
                <h4></h4>
            </div>
            <div class="intro">
                <h6></h6>
            </div>
        </div>

        <div class="name">
            <h1>Here are some php project ideas for beginners</h1>




            <!-- 1st================-->
            <div class="projects">
                <h4>To-Do List: </h4>
                <p>Create a simple to-do list application where users 
                    can add, edit, and delete tasks
                    . You can implement features like 
                    task prioritization, due dates, and task categorization.</p>
                <div class="code">
                    <button id="copy" onclick="todo()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="todo" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Todo List</title>
                            <style>
                                .completed {
                                    text-decoration: line-through;
                                }
                            </style>
                        </head>
                        <body>
                            <h1>Todo List</h1>
                            <form action="" method="POST">
                                <input type="text" name="task" placeholder="Enter a task" required>
                                <button type="submit">Add Task</button>
                            </form>
                        
                            <h2>Tasks:</h2>
                            <ul>
                                <?php
                                // Retrieve tasks from database
                                $conn = mysqli_connect("localhost", "username", "password", "todo_list");
                                $result = mysqli_query($conn, "SELECT * FROM tasks");
                        
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $task = $row['task'];
                                    $completed = $row['completed'] ? 'completed' : '';
                        
                                    echo "<li class='$completed'>$task</li>";
                                }
                        
                                mysqli_close($conn);
                                ?>
                            </ul>
                        </body>
                        </html>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Retrieve task from form submission
                            $task = $_POST['task'];
                        
                            // Insert task into database
                            $conn = mysqli_connect("localhost", "username", "password", "todo_list");
                            $task = mysqli_real_escape_string($conn, $task);
                            mysqli_query($conn, "INSERT INTO tasks (task, completed) VALUES ('$task', 0)");
                            mysqli_close($conn);
                        }
                        
                        // Redirect back to index.php
                        header("Location: index.php");
                        exit();
                        ?>
                        
                        
                       </textarea>

                </div>
            </div>

             <!-- 1st================-->
             <div class="projects">
                <h4>Contact Form:</h4>
                <p>: Build a contact form for a website that allows visitors to send messages or 
                    inquiries. Implement form validation to ensure that the submitted data is valid and secure.</p>
                <div class="code">
                    <button id="copy" onclick="cform()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="cfrom" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Contact Form</title>
                        </head>
                        <body>
                            <h1>Contact Form</h1>
                            <form action="" method="POST">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Your Email" required>
                                <textarea name="message" placeholder="Your Message" required></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </body>
                        </html>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Retrieve form data
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                        
                            // Process the form (send email, store data, etc.)
                            // Add your code here
                        
                            // Redirect back to index.php or display a thank you message
                            header("Location: index.php");
                            exit();
                        }
                        ?>
                        
                       </textarea>

                </div>
            </div>


             <!-- 1st================-->
             <div class="projects">
                <h4>Weather Application: </h4>
                <p>: Develop a weather application that retrieves weather information from an API based on the user's input (city, ZIP code, etc.). Display the weather conditions and forecast in a user-friendly format.</p>
                <div class="code">
                    <button id="copy" onclick="weather()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="weather" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Weather Application</title>
                        </head>
                        <body>
                            <h1>Weather Application</h1>
                            <form action="" method="GET">
                                <input type="text" name="location" placeholder="Enter a location" required>
                                <button type="submit">Get Weather</button>
                            </form>
                        </body>
                        </html>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                            // Retrieve location from form submission
                            $location = $_GET['location'];
                        
                            // Call weather API and process the response
                            // Add your code here
                        
                            // Display the weather information
                            // Add your code here
                        }
                        ?>
                                                
                       </textarea>

                </div>
            </div>


             <!-- 1st================-->
             <div class="projects">
                <h4>User Registration and Login System:</h4>
                <p>Create a user registration and login system with features like user registration, login, and password recovery. Implement basic security measures like password hashing and protection against SQL injection.</p>
                <div class="code">
                    <button id="copy" onclick="login()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="login" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Registration</title>
                        </head>
                        <body>
                            <h1>Registration</h1>
                            <form action="" method="POST">
                                <input type="text" name="username" placeholder="Username" required>
                                <input type="password" name="password" placeholder="Password" required>
                                <button type="submit">Register</button>
                            </form>
                        </body>
                        </html>
                        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Store the username and hashed password in the database
    // Add your code here

    // Redirect the user to the login page or display a success message
    // Add your code here
}
?>

                        
                       </textarea>

                </div>
            </div>

             <!-- 1st================-->
             <div class="projects">
                <h4>URL Shortener:</h4>
                <p>Build a URL shortening service that takes long URLs and generates shorter, more manageable links. Include features like tracking the number of clicks on the shortened links.</p>
                <div class="code">
                    <button id="copy" onclick="url()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="url" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>URL Shortener</title>
                        </head>
                        <body>
                            <h1>URL Shortener</h1>
                            <form action="" method="POST">
                                <input type="text" name="url" placeholder="Enter a URL" required>
                                <button type="submit">Shorten</button>
                            </form>
                        </body>
                        </html>
                        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve URL from form submission
    $url = $_POST['url'];

    // Generate a short code or hash for the URL
    // Add your code here

    // Store the URL and its corresponding short code in the database
    // Add your code here

    // Display the shortened URL to the user
    // Add your code here
}
?>

                        
                       </textarea>

                </div>
            </div>

             <!-- 1st================-->
             <div class="projects">
                <h4>Simple E-commerce Store:</h4>
                <p>The Simple E-commerce Store project provides a basic foundation for an online store, allowing users to browse products, view their details, and add items to a shopping cart. It can be extended with additional features such as user registration, user authentication, checkout process, and order management./p>
                <div class="code">
                    <button id="copy" onclick="navbar()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="navbar" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Product Details</title>
                        </head>
                        <body>
                            <h1>Product Details</h1>
                            <?php
                            // Retrieve product details from the database based on the product ID
                            // Add your code here
                        
                            // Display the product details
                            // Add your code here
                            ?>
                            <form action="" method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                                <input type="number" name="quantity" min="1" max="10" value="1">
                                <button type="submit">Add to Cart</button>
                            </form>
                        </body>
                        </html>
                        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve product ID and quantity from form submission
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add the product and quantity to the shopping cart
    // Add your code here

    // Redirect the user to the cart page or display a success message
    // Add your code here
}
?>

                        
                       </textarea>

                </div>
            </div>
        </div>
        <div class="para">
            <h6>
              
                "At our web development company, we specialize in creating PHP projects that are both highly functional and SEO friendly. Our team of experienced developers utilizes best practices to ensure that every PHP project we deliver adheres to SEO guidelines. From building dynamic e-commerce stores with user registration and login systems to developing efficient contact forms and URL shorteners, we prioritize clean and well-structured code. Our projects include keyword optimization, descriptive URLs, and meta tags to enhance search engine visibility. We also implement security measures, such as input validation and parameterized queries, to safeguard against vulnerabilities. Whether it's a simple to-do list application or a feature-rich blogging platform, our PHP projects are designed to provide seamless user
                 experiences while boosting search engine rankings."
        </div>
    </div>
    </div>

</body>

</html>