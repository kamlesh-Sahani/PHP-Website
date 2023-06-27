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

    <title>array in php</title>
</head>

<body>

    <div class="mainContent">
        <div class="slider"></div>

        <div class="content">


            <div class="main">
                <div class="heading">
                    <h1>array in php</h1>
                </div>
                <div class="defination">
                    <h4>
                        In PHP, an array is a variable that can hold multiple values. It is a versatile data structure
                        that allows you to store and access multiple elements using a single variable name. PHP supports
                        both indexed arrays and associative arrays.
                    </h4>
                    <h4>
                        Here's an example of creating an indexed array in PHP:
                    </h4>
                    <h4>
                        <ul>
                            <li style="color:green">
                                <span>$numbers = array(1, 2, 3, 4, 5);

                                </span>
                            </li>
                            <h4>In the above example, we created an array called $numbers with five elements. The
                                elements are indexed starting from 0, so $numbers[0] would give the value 1, $numbers[1]
                                would give 2, and so on.</h4>
                            <li style="color:green">
                                <span>
                                    $fruits = array("apple", "banana", "orange");
                                </span>
                            </li>
                            <h4>
                                In this case, we created an array called $fruits with three elements, and each element
                                can be accessed using its index.
                            </h4>
                            <h4>
                                PHP also supports associative arrays, where you can associate keys with values. Here's
                                an example:
                            </h4>
                            <li style="color:green">
                                <span>$student = array(
                                    "name" => "John Doe",
                                    "age" => 20,
                                    "university" => "Example University"
                                    );
                                </span>
                            </li>
                            <h4>
                                In the above example, we created an associative array called $student. The keys "name",
                                "age", and "university" are associated with their respective values.

                                You can access the values in an associative array using their keys. For example,
                                $student["name"] would give the value "John Doe".
                            </h4>

                        </ul>


                    </h4>
                    <h4>
                        Arrays in PHP are dynamic, meaning you can add or remove elements, and their size can change
                        during the execution of a program. PHP provides many built-in functions to perform various
                        operations on arrays, such as adding elements, removing elements, merging arrays, sorting
                        arrays, etc.

                        These are just some basics of working with arrays in PHP. There are many more features and
                        functions available for working with arrays in PHP, so I encourage you to refer to the PHP
                        documentation for more detailed information.
                    </h4>









                

            </div>








            <div class="main">
                <div class="heading">
                    <h1>In PHP, there are primarily three types of arrays: indexed arrays, associative arrays, and
                        multidimensional arrays.</h1>
                </div>
                <div class="defination">

                    <h4>
                        <ol>
                            <li>Indexed Arrays:
                                <ul>
                                    <li>An indexed array is the most basic type of array in PHP.</li>
                                    <li>Elements in an indexed array are accessed and identified by their numeric index,
                                        starting from 0.</li>
                                    <li>Elements are stored in a contiguous manner.</li>
                                    <li>Example:</li>
                                    <h4><span> $numbers = array(1, 2, 3, 4, 5);
                                        </span>
                                    </h4>
                                </ul>
                            </li>

                            <li>
                                Associative Arrays:
                                <ul>
                                    <li>
                                        In an associative array, elements are associated with specific keys instead of
                                        numeric indices.
                                    </li>
                                    <li>Each element in the array has a key-value pair, where the key can be a string or
                                        an integer.</li>
                                    <li>Elements are not stored in a specific order, and their positions can change.
                                    </li>
                                    <li>Example:</li>
                                    <h4>
                                        <span>$student = array(
                                            "name" => "John Doe",
                                            "age" => 20,
                                            "university" => "Example University"
                                            );
                                        </span>
                                    </h4>
                                </ul>
                            </li>
                            <li>
                                Multidimensional Arrays:
                                <ul>
                                    <li>A multidimensional array is an array that contains one or more arrays as its
                                        elements.</li>
                                    <li>It is used to store data in a tabular form, such as rows and columns.</li>
                                    <li>Each element of a multidimensional array can be an array itself, forming a
                                        hierarchical structure.</li>
                                    <li>Example:</li>
                                    <h4>
                                        <span>
                                            $matrix = array(
                                            array(1, 2, 3),
                                            array(4, 5, 6),
                                            array(7, 8, 9)
                                            );

                                        </span>
                                    </h4>
                                </ul>
                            </li>

                        </ol>
                        <h4>
                            In addition to these basic types, PHP also supports special types of arrays like sparse
                            arrays, which are arrays with non-sequential numeric indices, and associative arrays with
                            numeric keys.

                            It's important to note that PHP is a loosely typed language, so arrays can contain elements
                            of different types. For example, an array can have a mix of integers, strings, booleans, or
                            even other arrays as its elements.
                        </h4>

                    </h4>

                </div>





            </div>

            <div class="main">
                <div class="heading">
                    <h1>differences between the three types of arrays in PHP:

                    </h1>
                </div>
                <div class="defination">
                    <h4 style="color: green;">
                        <span>
                            <ol>
                                <li>
                                    indexed array
                                </li>
                                <li>
                                    associative array
                                </li>
                                <li>
                                    multidimensional array
                                </li>
                            </ol>
                        </span>
                    </h4>

                    <h4>
                        <ol>
                            <li style="color: green;">
                                <span>
                                    Indexed Arrays:
                                </span>
                                <ul style="color:rgb(47, 46, 46)">
                                    <li>Elements are accessed and identified by their numeric indices, starting from 0.
                                    </li>
                                    <li>Elements are stored in a contiguous manner.</li>
                                    <li>Keys are automatically assigned to the elements, representing their positions.
                                    </li>
                                    <li>Elements are accessed using numeric indices, e.g., $numbers[0].</li>
                                    <li>Indexed arrays are useful when you need to store and access a collection of
                                        values in a specific order.</li>
                                </ul>
                            </li>

                            <li style="color: green;">
                                <span>
                                    Associative Arrays:
                                </span>
                                <ul style="color:rgb(47, 46, 46)">
                                    <li>Elements are associated with specific keys instead of numeric indices.</li>
                                    <li>Each element has a key-value pair, where the key can be a string or an integer.
                                    </li>
                                    <li>Elements are not stored in a specific order, and their positions can change.
                                    </li>
                                    <li>Keys are used to access the corresponding values, e.g., $student["name"].</li>
                                    <li>
                                        access data based on specific keys or labels.
                                    </li>
                                </ul>
                            <li>
                                <span>
                                    multidimensional array:
                                </span>
                                <ul style="color:rgb(47, 46, 46)">
                                    <li>A multidimensional array contains one or more arrays as its elements.</li>
                                    <li>It is used to store data in a tabular form, such as rows and columns.</li>
                                    <li>Elements of a multidimensional array can be accessed using multiple indices.
                                    </li>
                                    <li>Elements can be arrays themselves, forming a hierarchical structure.</li>
                                    <li>Multidimensional arrays are useful when you need to represent structured data
                                        with multiple dimensions or levels</li>
                                </ul>
                            </li>


                        </ol>
                    </h4>
                    <h4>In summary, indexed arrays are suitable for storing ordered collections of values, associative
                        arrays are useful when you want to associate data with specific keys, and multidimensional
                        arrays are used to represent data with multiple dimensions or levels, such as tables or nested
                        structures</h4>


                </div>

            </div>

            <div class="main">
                <div class="heading">
                    <h1>PHP provides a variety of built-in functions for working with arrays. Here are some commonly
                        used array functions in PHP:

                    </h1>
                </div>
                <div class="defination">
                    <h4>
                    <ol>
                        <li>
                            <span>array() </span>Creates an array.
                        </li>
                        <h4>Example: $numbers = array(1, 2, 3, 4, 5);</h4>
                        <li>
                            <span>
                                count()
                            </span>
                            Returns the number of elements in an array.
                        </li>
                        <h4>Example: echo count($numbers);</h4>
                        <li>
                            <span>array_push()</span>
                            Adds one or more elements to the end of an array.
                        </li>
                        <h4>
                            Example: array_push($numbers, 6, 7, 8);
                        </h4>
                        <li>
                            <span>array_pop()</span>
                            Removes and returns the last element of an array.
                        </li>
                        <h4>
                            Example: $lastElement = array_pop($numbers);
                        </h4>
                        <li>
                            <span>array_shift()</span>
                            Removes and returns the first element of an array.
                        </li>
                        <h4>
                            Example: $firstElement = array_shift($numbers);
                        </h4>
                        <li>
                            <span>
                                array_unshift()
                            </span>
                            Adds one or more elements to the beginning of an array.
                        </li>
                        <h4>Example: array_unshift($numbers, 0, -1, -2);</h4>
                        <li>
                            <span>array_merge()</span>
                            - Merges two or more arrays into a single array.
                        </li>
                        <h4>Example: $mergedArray = array_merge($array1, $array2);</h4>
                        <li>
                            <span> array_slice()</span>
                            Extracts a portion of an array and returns it as a new array.
                        </li>
                        <h4>Example: $slicedArray = array_slice($numbers, 2, 3);</h4>
                        <li>
                            <span>array_splice()</span>
                            Removes a portion of an array and replaces it with new elements.
                        </li>
                        <h4>Example: array_splice($numbers, 1, 2, array(10, 11, 12));</h4>
                        <li>
                            <span>array_key_exists() </span>
                            Checks if a specific key exists in an array.
                        </li>
                        <h4>Example: if (array_key_exists('name', $student)) { ... }</h4>
                        <li>
                            <span>in_array()</span>
                            Checks if a value exists in an array.
                        </li>
                        <h4>
                            Example: if (in_array('apple', $fruits)) { ... }
                        </h4>
                        <li>
                            <span>
                                array_search() 
                            </span>
                            Searches for a value in an array and returns its corresponding key.
                        </li>
                        <h4>Example: $key = array_search('apple', $fruits);</h4>
                        <li>
                            <span>array_keys()</span>
                            Returns all the keys of an array as a new array.
Example: $keys = array_keys($student);
                        </li>
                        <li>
                            <span>array_values()</span>
                            Returns all the values of an array as a new array.
                        </li>
                        <h4>Example: $values = array_values($student);</h4>
                        <li>
                            <span>
                                array_flip() 
                            </span>
                            Exchanges keys with their corresponding values in an array.
                        </li>
                        <h4>Example: $flippedArray = array_flip($student);</h4>
                        
                    </ol>
                    </h4>
                    <h4>
                        These are just a few examples of the many array functions available in PHP. You can refer to the PHP documentation for more details on each function and explore additional array functions based on your specific needs.
                    </h4>
                </div>
            </div>








        </div>
    </div>
</body>

</html>