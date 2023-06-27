<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="style.css">

    <title>PHP connecting to the database. </title>
</head>

<body>
    <div class="mainContent">
        <div class="slider"></div>

        <div class="content">


            <div class="main">
                <div class="heading">
                    <h1>PHP database connectivity code</h1>
                </div>
                <div class="defination">
                    <h4>The first step is to define the necessary credentials for connecting to the database. These
                        include the server name ($servername), username ($username), password ($password), and the name
                        of the database ($dbname). You need to replace the placeholders in the code with your actual
                        database credentials.</h4>
                    <h4>Next, we have two examples: one using PDO (PHP Data Objects) and another using MySQLi extension.
                        Both are popular choices for interacting with databases in PHP.</h4>
                    <h4>
                        <ol>
                            <li><span>PDO Example:</span>
                                <ul>
                                    <li>The try block contains the main code for establishing a database connection
                                        using PDO.</li>
                                    <li>The new PDO(...) line creates a new PDO object, which takes the connection
                                        parameters as arguments. It uses the mysql:host parameter to specify the server
                                        name and the dbname parameter to specify the database name.</li>
                                    <li>The setAttribute method is called on the PDO object to set the error mode to
                                        ERRMODE_EXCEPTION. This enables the PDO object to throw exceptions if any errors
                                        occur during database operations.</li>
                                    <li>If the connection is successful, the "Connected successfully" message is echoed.
                                    </li>
                                    <li>If an exception is thrown during the connection attempt, the code jumps to the
                                        catch block, and the error message is displayed using $e->getMessage().</li>
                                </ul>
                            </li>
                            <li><span>MySQLi Example:</span>
                                <ul>
                                    <li>The new mysqli(...) line creates a new MySQLi object and establishes a
                                        connection to the MySQL server using the provided credentials.</li>
                                    <li>The connect_error property of the MySQLi object is checked to see if the
                                        connection was successful.</li>
                                    <li>If the connection fails, the script terminates with an error message using
                                        die().</li>
                                    <li>If the connection is successful, the "Connected successfully" message is echoed.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </h4>
                    <h4>It's important to note that in both examples, the connection credentials are passed directly in
                        the code. This is for demonstration purposes only. In a production environment, it's highly
                        recommended to store the credentials securely and access them from a configuration file outside
                        the web root directory. Additionally, it's essential to sanitize and validate any user inputs
                        before using them in database queries to prevent SQL injection attacks.</h4>
                    <h4>By establishing a database connection, you can perform various operations such as querying the
                        database, inserting or updating records, or retrieving data from tables. The connection object
                        ($conn in both examples) can be used further in your PHP code to execute SQL statements and
                        interact with the database.</h4>
                </div>
            </div>




            <div class="main">

                <div class="defination">
                    <h4>To establish a database connection in PHP, you can use the PDO (PHP Data Objects) extension or
                        the MySQLi extension. Here's an example of how to connect to a MySQL database using both
                        methods:</h4>
                    <h4>Using PDO:</h4>
                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="example1()"></span>
                        <textarea id="codeArea" class="example1 " readonly>


              <?php
                $servername = "localhost";
                $username = "your_username";
                $password = "your_password";
                $dbname = "your_database_name";
                
              try {
                 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,             $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                 } catch(PDOException $e) {
               echo "Connection failed: " . $e->getMessage();
                  }
                      ?>

                            
                             </textarea>
                    </div>
                    <h4>Using MySQLi:</h4>

                    <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="example2()"></span>
                        <textarea id="codeArea" class="example2" readonly>


                            <?php
                            $servername = "localhost";
                            $username = "your_username";
                            $password = "your_password";
                            $dbname = "your_database_name";
                            
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            echo "Connected successfully";
                            ?>
                                
                             </textarea>
                    </div>

                    <h4>In both examples, you need to replace "your_username," "your_password," and "your_database_name"
                        with your actual database credentials. The code attempts to establish a connection to the MySQL
                        server, and if successful, it prints "Connected successfully." Otherwise, it outputs an error
                        message indicating the connection failure.</h4>
                    <h4>Remember to handle database credentials securely and avoid hardcoding them directly in your
                        code. It's often recommended to store them in a separate configuration file outside of your web
                        root directory.</h4>





                </div>
            </div>




            <div class="main">
                <div class="heading">
                    <h1>access the database</h1>
                </div>
                <div class="defination">
                    <h4>Once you have successfully established a database connection in PHP, you can access the database
                        by executing SQL queries using the connection object. Here are examples of executing some common
                        database operations:</h4>

                    <h4>
                        <ol>
                            <li>Executing a SELECT query and fetching results using PDO:</li>
                            <div class="codeArea">
                        <span class="mdi mdi-content-copy" onclick="example3()"></span>
                        <textarea id="codeArea" class="example3" readonly>


                            <?php
                            // Assuming you have already established a database connection
                            
                            $sql = "SELECT * FROM your_table";
                            $result = $conn->query($sql);
                            
                            if ($result->rowCount() > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    // Access individual columns using column names
                                    $column1 = $row['column1'];
                                    $column2 = $row['column2'];
                                    // ...
                                }
                            } else {
                                echo "No rows found";
                            }
                            ?>
                            
                                
                             </textarea>
                    </div>



                            <li>Executing a SELECT query and fetching results using MySQLi:</li>
                            <div class="codeArea">
                                <span class="mdi mdi-content-copy" onclick="example4()"></span>
                                <textarea id="codeArea" class="example4" readonly>
        
        
                                    <?php
                                    // Assuming you have already established a database connection
                                    
                                    $sql = "SELECT * FROM your_table";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // Loop through the result set
                                        while ($row = $result->fetch_assoc()) {
                                            // Access individual columns using column names
                                            $column1 = $row['column1'];
                                            $column2 = $row['column2'];
                                            // ...
                                        }
                                    } else {
                                        echo "No rows found";
                                    }
                                    ?>
                                    
                                    
                                        
                                     </textarea>
                            </div>






                            <li>Executing an INSERT query:</li>
                            <div class="codeArea">
                                <span class="mdi mdi-content-copy" onclick="example5()"></span>
                                <textarea id="codeArea" class="example5" readonly>
        
        
                                    <?php
                      // Assuming you have already established a database connection
                                    
                     $sql = "INSERT INTO your_table (column1, column2) VALUES ('value1', 'value2')";
                         if ($conn->query($sql) === TRUE) {
                              echo "New record created successfully";
                              } else {
                             echo "Error: " . $sql . "<br>" $conn->error;
                                }
                                  ?>
                                    
                                        
                                     </textarea>
                            </div>
                            <li>Executing an UPDATE query:</li>
                            <div class="codeArea">
                                <span class="mdi mdi-content-copy" onclick="example6()"></span>
                                <textarea id="codeArea" class="example6" readonly>
        
        
                                    <?php
                    // Assuming you have already established a database connection
                                    
                                    $sql = "UPDATE your_table SET column1 = 'new_value' WHERE id = 1";
                                    if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                    ?>
                                    
                                    
                                        
                                     </textarea>
                            </div>
                        </ol>
                    </h4>
                    <h4>These are just a few examples to give you an idea of how to access the database in PHP. You can
                        execute various other SQL queries, such as DELETE, JOIN, and more, based on your specific
                        requirements. Remember to handle errors properly and sanitize user inputs to prevent SQL
                        injection vulnerabilities.</h4>
                </div>
            </div>












        </div>
    </div>
    <script>
        function example1() {
            var codeArea = document.querySelector('.example1');
            codeArea.select();
            document.execCommand('copy');
        }
        function example2() {
            var codeArea = document.querySelector('.example2');
            codeArea.select();
            document.execCommand('copy');
        }
    </script>
</body>

</html>