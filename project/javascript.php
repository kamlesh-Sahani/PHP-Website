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
    <title>javascript-projects for beginner</title>
</head>

<body>
<?php include"../files/header.php" ?>
    <div class="container">
        <div class="heading">
            <h2> Exciting JavaScript <span> Projects</span> for Beginners
                | Learn <span> JavaScript </span>with Hands-On Projects</h2>
        </div>
        <div class="logo"><span class="mdi mdi-language-javascript "></span></div>
        <div class="about">
            <div class="description">
                <h4>Discover engaging JavaScript projects for beginners to enhance your coding skills. Develop
                    interactive applications, games,
                    and utilities with these hands-on JavaScript project ideas.</h4>
            </div>
            <div class="intro">
                <h6>Are you a beginner looking to enhance your
                    JavaScript skills through practical projects? Look no further
                    In this article, we'll explore a variety of exciting JavaScript projects that are perfect for
                    beginners. These hands-on projects will not only help you apply your knowledge but also provide a
                    solid foundation
                    for building interactive web applications, games, utilities, and more. Let's
                    dive into the world of JavaScript projects and unlock your coding potential</h6>
            </div>
        </div>


        <div class="name">
            <h1>Here are some JavaScript project ideas for beginners</h1>
            <div class="projects">
                <h4>To-Do List:</h4>
                <p> Create a dynamic to-do list where users can add,
                    remove, and mark tasks as completed. This project will introduce you to JavaScript's DOM
                    manipulation and event handling capabilities, providing
                    a fundamental understanding of interacting with elements on
                    a web page.</p>

                <div class="code">
                    <button id="copy" onclick="todo()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="todo" readonly>
<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    .completed {
      text-decoration: line-through;
    }
  </style>
</head>
<body>
  <h1>To-Do List</h1>

  <input type="text" id="taskInput" placeholder="Enter a task">
  <button onclick="addTask()">Add</button>

  <ul id="taskList"></ul>

  <script>
    // Function to add a new task
    function addTask() {
        var taskInput = document.getElementById("taskInput");
        var taskList = document.getElementById("taskList");

        var task = document.createElement("li");
        task.innerText = taskInput.value;
        task.addEventListener("click", toggleTask);

        taskList.appendChild(task);

        taskInput.value = "";
    }

    // Function to toggle a task's completion status
    function toggleTask() {
        this.classList.toggle("completed");
    }
</script>
</body>
</html>
                        </textarea>

                </div>
            </div>

            <!--======================2---------=====================-->

            <div class="projects">
                <h4>Calculator:</h4>
                <p> Build a fully functional calculator
                    that performs basic arithmetic operations.
                    This project will strengthen your understanding
                    of JavaScript operators, conditional statements, and event listeners.</p>

                <div class="code">
                    <button id="copy" onclick="calculator()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="calculator" readonly>
                        <!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        /* Add some basic styling to the calculator */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        #calculator-container {
            width: 200px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
        button {
            width: 45px;
            height: 30px;
            margin: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        #result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>
    <div id="calculator-container">
        <input type="text" id="num1" placeholder="Enter first number">
        <input type="text" id="num2" placeholder="Enter second number">
        <button id="add-btn">+</button>
        <button id="subtract-btn">-</button>
        <button id="multiply-btn">*</button>
        <button id="divide-btn">/</button>
        <div id="result"></div>
    </div>

    <script>const num1Input = document.getElementById('num1');
        const num2Input = document.getElementById('num2');
        const addButton = document.getElementById('add-btn');
        const subtractButton = document.getElementById('subtract-btn');
        const multiplyButton = document.getElementById('multiply-btn');
        const divideButton = document.getElementById('divide-btn');
        const resultDiv1 = document.getElementById('result');

        // Function to perform addition
        function addNumbers() {
            const num1 = parseFloat(num1Input.value);
            const num2 = parseFloat(num2Input.value);
            const result = num1 + num2;
            displayResult(result);
        }

        // Function to perform subtraction
        function subtractNumbers() {
            const num1 = parseFloat(num1Input.value);
            const num2 = parseFloat(num2Input.value);
            const result = num1 - num2;
            displayResult(result);
        }

        // Function to perform multiplication
        function multiplyNumbers() {
            const num1 = parseFloat(num1Input.value);
            const num2 = parseFloat(num2Input.value);
            const result = num1 * num2;
            displayResult(result);
        }

        // Function to perform division
        function divideNumbers() {
            const num1 = parseFloat(num1Input.value);
            const num2 = parseFloat(num2Input.value);

            if (num2 === 0) {
                displayResult("Error: Division by zero");
            } else {
                const result = num1 / num2;
                displayResult(result);
            }
        }

        // Function to display the result
        function displayResult(result) {
            resultDiv1.textContent = "Result: " + result;
        }

        // Event listeners for the operation buttons
        addButton.addEventListener('click', addNumbers);
        subtractButton.addEventListener('click', subtractNumbers);
        multiplyButton.addEventListener('click', multiplyNumbers);
        divideButton.addEventListener('click', divideNumbers);
    </script>
</body>
</html>

                        </textarea>

                </div>
            </div>

            <!---==========================3==========================-->

            <div class="projects">
                <h4>Quiz Application:</h4>
                <p> Build an interactive quiz app that presents
                    questions to users and provides real-time feedback on their answers. Through this project, you'll
                    gain experience in handling user input, validating responses,
                    and calculating scores dynamically.</p>

                <div class="code">
                    <button id="copy" onclick="quiz()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="quiz" readonly>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Application</title>
    <style>
        /* Add some basic styling to the quiz */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .question {
            margin-bottom: 10px;
            font-weight: bold;
        }
        .options label {
            display: block;
            margin-bottom: 5px;
        }
        #result {
            margin-top: 20px;
            text-align: center;
        }
        #result span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Quiz Application</h1>
    <div id="quiz-container">
        <div id="question-container" class="question"></div>
        <div id="options-container" class="options"></div>
        <button id="submit-btn">Submit</button>
    </div>
    <div id="result"></div>

    <script >
        // Define the quiz questions and answers
        const quizData = [
            {
                question: "What is the capital of France?",
                options: ["Paris", "London", "Berlin", "Rome"],
                answer: "Paris"
            },
            {
                question: "Who painted the Mona Lisa?",
                options: ["Leonardo da Vinci", "Pablo Picasso", "Vincent van Gogh", "Michelangelo"],
                answer: "Leonardo da Vinci"
            },
            {
                question: "Which planet is known as the Red Planet?",
                options: ["Venus", "Mars", "Jupiter", "Saturn"],
                answer: "Mars"
            }
        ];

        let currentQuestion = 0; // Variable to track the current question
        let score = 0; // Variable to store the score

        const questionContainer = document.getElementById('question-container');
        const optionsContainer = document.getElementById('options-container');
        const resultContainer = document.getElementById('result');
        const submitButton = document.getElementById('submit-btn');

        // Function to load the current question and options
        function loadQuestion() {
            const currentQuizData = quizData[currentQuestion];

            questionContainer.textContent = currentQuizData.question;
            optionsContainer.innerHTML = '';

            currentQuizData.options.forEach((option) => {
                const optionElement = document.createElement('label');
                optionElement.innerHTML = `
            <input type="radio" name="option" value="${option}">
            ${option}
        `;
                optionsContainer.appendChild(optionElement);
            });
        }

        // Function to check the answer and move to the next question
        function checkAnswer() {
            const selectedOption = document.querySelector('input[name="option"]:checked');

            if (selectedOption) {
                if (selectedOption.value === quizData[currentQuestion].answer) {
                    score++;
                }
                currentQuestion++;
                selectedOption.checked = false;
            }

            if (currentQuestion < quizData.length) {
                loadQuestion();
            } else {
                showResult();
            }
        }

        // Function to display the quiz result
        function showResult() {
            questionContainer.style.display = 'none';
            optionsContainer.style.display = 'none';
            submitButton.style.display = 'none';

            resultContainer.innerHTML = `
        <h3>Quiz Result:</h3>
        <p>You scored <span>${score}</span> out of <span>${quizData.length}</span> questions.</p>
    `;
        }

        // Load the first question when the page loads
        loadQuestion();

        // Event listener for the submit button
        submitButton.addEventListener('click', checkAnswer);

    </script>
</body>
</html>

                        </textarea>

                </div>
            </div>
            <!---==========================4==========================-->
            <div class="projects">
                <h4>Image Slider:</h4>
                <p> Develop an image slider that allows users to cycle through a collection of images. Through this
                    project, you'll learn
                    to handle user interactions, control
                    animations, and dynamically update the displayed content.</p>
                <div class="code">
                    <button id="copy" onclick="slider()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="slider" readonly>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Image Slider</title>
                <style>
                    /* Add some basic styling to the image slider */
                    body {
                        font-family: Arial, sans-serif;
                        margin: 20px;
                    }
                    h1 {
                        text-align: center;
                    }
                    #slider-container {
                        width: 500px;
                        margin: 20px auto;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        overflow: hidden;
                    }
                    #slider {
                        width: 100%;
                        height: 300px;
                        transition: transform 0.3s ease-in-out;
                    }
                    .slide {
                        width: 100%;
                        height: 300px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .slide img {
                        max-width: 100%;
                        max-height: 100%;
                    }
                    #prev-btn,
                    #next-btn {
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        font-weight: bold;
                        font-size: 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 4px;
                        padding: 10px;
                        cursor: pointer;
                    }
                    #prev-btn {
                        left: 10px;
                    }
                    #next-btn {
                        right: 10px;
                    }
                </style>
            </head>
            <body>
                <h1>Image Slider</h1>
                <div id="slider-container">
                    <div id="slider">
                        <div class="slide">
                            <img src="image1.jpg" alt="Image 1">
                        </div>
                        <div class="slide">
                            <img src="image2.jpg" alt="Image 2">
                        </div>
                        <div class="slide">
                            <img src="image3.jpg" alt="Image 3">
                        </div>
                    </div>
                    <button id="prev-btn">Prev</button>
                    <button id="next-btn">Next</button>
                </div>
            
                <script>
                    const slider = document.getElementById('slider');
                    const prevButton = document.getElementById('prev-btn');
                    const nextButton = document.getElementById('next-btn');

                    let slideIndex = 0;

                    // Function to show the current slide
                    function showSlide() {
                        slider.style.transform = `translateX(-${slideIndex * 100}%)`;
                    }

                    // Function to go to the previous slide
                    function prevSlide() {
                        slideIndex--;
                        if (slideIndex < 0) {
                            slideIndex = slider.childElementCount - 1;
                        }
                        showSlide();
                    }

                    // Function to go to the next slide
                    function nextSlide() {
                        slideIndex++;
                        if (slideIndex >= slider.childElementCount) {
                            slideIndex = 0;
                        }
                        showSlide();
                    }

                    // Event listeners for the previous and next buttons
                    prevButton.addEventListener('click', prevSlide);
                    nextButton.addEventListener('click', nextSlide);

                </script>
            </body>
            </html>
            
            </textarea>

                </div>
            </div>
            <!---==========================5==========================-->
            <div class="projects">
                <h4>Countdown Timer</h4>
                <p>Create a countdown timer that counts down from a specified time to zero. This project will introduce
                    you
                    to JavaScript's Date object, enabling you to calculate and display time-based functionality. </p>
                <div class="code">
                    <button id="copy" onclick="timer()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="timer" readonly>
            <!DOCTYPE html>
<html>
<head>
    <title>Countdown Timer</title>
    <style>
        /* Add some basic styling to the countdown timer */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        #countdown {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Countdown Timer</h1>
    <div id="countdown">00:00:00</div>

    <script>
        const countdownDiv = document.getElementById('countdown');

        // Set the countdown date (e.g., New Year's Eve)
        const countdownDate = new Date("December 31, 2023 23:59:59").getTime();

        // Update the countdown every second
        const countdownTimer = setInterval(() => {
            // Get the current date and time
            const now = new Date().getTime();

            // Calculate the remaining time in milliseconds
            const distance = countdownDate - now;

            // Calculate the hours, minutes, and seconds
            const hours = Math.floor(distance / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the remaining time in the countdown div
            countdownDiv.textContent = `${hours.toString().padStart(2, '0')}:${minutes
                .toString()
                .padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            // Check if the countdown is over
            if (distance < 0) {
                clearInterval(countdownTimer);
                countdownDiv.textContent = "EXPIRED";
            }
        }, 1000);

    </script>
</body>
</html>


            </textarea>

                </div>
            </div>

            <!---==========================6==========================-->


            <div class="projects">
                <h4>Memory Game:</h4>
                <p>Build a memory game where users have to match pairs of cards. This project will enhance
                    your skills in JavaScript arrays, conditional
                    statements, and implementing game logic. </p>
                <div class="code">
                    <button id="copy" onclick="mgame()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="mgame" readonly>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Memory Game</title>
                            <style>
                                /* Add some basic styling to the memory game */
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 20px;
                                }
                                h1 {
                                    text-align: center;
                                }
                                #game-container {
                                    display: flex;
                                    flex-wrap: wrap;
                                    max-width: 400px;
                                    margin: 0 auto;
                                }
                                .card {
                                    width: calc(25% - 10px);
                                    height: 100px;
                                    margin: 5px;
                                    background-color: #007bff;
                                    color: #fff;
                                    font-size: 24px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease-in-out;
                                }
                            </style>
                        </head>
                        <body>
                            <h1>Memory Game</h1>
                            <div id="game-container"></div>
                        
                            <script>
                                const gameContainer = document.getElementById('game-container');
                                let cards = [];

                                // Define an array of card values
                                const cardValues = ['A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'E', 'E', 'F', 'F', 'G', 'G', 'H', 'H'];

                                // Function to shuffle the card values
                                function shuffleCards() {
                                    for (let i = cardValues.length - 1; i > 0; i--) {
                                        const j = Math.floor(Math.random() * (i + 1));
                                        [cardValues[i], cardValues[j]] = [cardValues[j], cardValues[i]];
                                    }
                                }

                                // Function to create the game board
                                function createGameBoard() {
                                    shuffleCards();
                                    cards = [];

                                    // Clear the game container
                                    gameContainer.innerHTML = '';

                                    // Create card elements and add them to the game container
                                    for (let i = 0; i < cardValues.length; i++) {
                                        const card = document.createElement('div');
                                        card.classList.add('card');
                                        card.textContent = cardValues[i];
                                        card.setAttribute('data-index', i);
                                        card.addEventListener('click', revealCard);
                                        gameContainer.appendChild(card);
                                        cards.push(card);
                                    }
                                }

                                // Function to reveal a card
                                function revealCard(event) {
                                    const card = event.target;
                                    const index = card.getAttribute('data-index');

                                    if (card.classList.contains('matched') || card.classList.contains('revealed')) {
                                        return;
                                    }

                                    card.classList.add('revealed');

                                    if (selectedCards.length === 0) {
                                        selectedCards.push({ card, index });
                                    } else if (selectedCards.length === 1) {
                                        selectedCards.push({ card, index });

                                        // Check if the selected cards match
                                        if (cardValues[selectedCards[0].index] === cardValues[selectedCards[1].index]) {
                                            selectedCards.forEach(({ card }) => {
                                                card.classList.add('matched');
                                            });
                                            selectedCards = [];
                                        } else {
                                            // Delay hiding the unmatched cards
                                            setTimeout(() => {
                                                selectedCards.forEach(({ card }) => {
                                                    card.classList.remove('revealed');
                                                });
                                                selectedCards = [];
                                            }, 1000);
                                        }
                                    }
                                }

                                // Initialize the game
                                createGameBoard();

                                // Array to store the selected cards
                                let selectedCards = [];

                            </script>
                        </body>
                        </html>
                        
                        </textarea>

                </div>
            </div>


            <!---==========================7==========================-->
            <div class="projects">
                <h4>BMI Calculator:</h4>
                <p>Develop a BMI (Body Mass Index)
                    calculator that calculates and displays a person's
                    BMI based on their height and weight inputs. This project will solidify your understanding
                    of JavaScript math operations, form handling, and data validation.</p>
                <div class="code">
                    <button id="copy" onclick="bmi()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="bmi" readonly>
 <!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        /* Add some basic styling to the BMI calculator */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        #calculator {
            max-width: 300px;
            margin: 0 auto;
        }
        .input-group {
            margin-bottom: 10px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .result {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>BMI Calculator</h1>
    <div id="calculator">
        <div class="input-group">
            <label for="weight">Weight (kg)</label>
            <input type="number" id="weight" min="0">
        </div>
        <div class="input-group">
            <label for="height">Height (cm)</label>
            <input type="number" id="height" min="0">
        </div>
        <button id="calculate-btn">Calculate BMI</button>
        <div class="result" id="result"></div>
    </div>

    <script >
        const calculateBtn = document.getElementById('calculate-btn');
        const weightInput = document.getElementById('weight');
        const heightInput = document.getElementById('height');
        const resultDiv2 = document.getElementById('result');

        // Function to calculate the BMI
        function calculateBMI() {
            const weight = parseFloat(weightInput.value);
            const height = parseFloat(heightInput.value) / 100; // Convert height to meters

            if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
                resultDiv2.textContent = 'Invalid input';
                return;
            }

            const bmi = weight / (height * height);
            const bmiRounded = bmi.toFixed(1);

            let bmiCategory = '';

            if (bmi < 18.5) {
                bmiCategory = 'Underweight';
            } else if (bmi >= 18.5 && bmi < 25) {
                bmiCategory = 'Normal weight';
            } else if (bmi >= 25 && bmi < 30) {
                bmiCategory = 'Overweight';
            } else {
                bmiCategory = 'Obese';
            }

            resultDiv2.textContent = `BMI: ${bmiRounded} (${bmiCategory})`;
        }

        // Event listener for the calculate button
        calculateBtn.addEventListener('click', calculateBMI);

    </script>
</body>
</html>

    
                            </textarea>

                </div>
            </div>




            <!---==========================8==========================-->
            <div class="projects">
                <h4>Rock, Paper, Scissors:</h4>
                <p>Create a classic game of rock, paper, scissors that allows users to play against the computer. This
                    project will
                    introduce you to JavaScript functions, random number
                    generation, and conditional logic. </p>
                <div class="code">
                    <button id="copy" onclick="paper()"><span class="mdi mdi-content-copy "></button>
                    <textarea id="paper" readonly>

                        <!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors</title>
    <style>
        /* Add some basic styling to the Rock, Paper, Scissors game */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        #game-container {
            max-width: 400px;
            margin: 0 auto;
        }
        #result {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .options {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .options button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Rock, Paper, Scissors</h1>
    <div id="game-container">
        <div class="options">
            <button id="rock-btn">Rock</button>
            <button id="paper-btn">Paper</button>
            <button id="scissors-btn">Scissors</button>
        </div>
        <div id="result"></div>
    </div>

    <script >
        const rockBtn = document.getElementById('rock-btn');
        const paperBtn = document.getElementById('paper-btn');
        const scissorsBtn = document.getElementById('scissors-btn');
        const resultDiv = document.getElementById('result');

        // Function to generate a random computer choice
        function generateComputerChoice() {
            const choices = ['Rock', 'Paper', 'Scissors'];
            const randomIndex = Math.floor(Math.random() * choices.length);
            return choices[randomIndex];
        }

        // Function to determine the winner
        function determineWinner(playerChoice, computerChoice) {
            if (playerChoice === computerChoice) {
                return 'It\'s a tie!';
            } else if (
                (playerChoice === 'Rock' && computerChoice === 'Scissors') ||
                (playerChoice === 'Paper' && computerChoice === 'Rock') ||
                (playerChoice === 'Scissors' && computerChoice === 'Paper')
            ) {
                return 'You win!';
            } else {
                return 'Computer wins!';
            }
        }

        // Event listeners for player choices
        rockBtn.addEventListener('click', () => playGame('Rock'));
        paperBtn.addEventListener('click', () => playGame('Paper'));
        scissorsBtn.addEventListener('click', () => playGame('Scissors'));

        // Function to play the game
        function playGame(playerChoice) {
            const computerChoice = generateComputerChoice();
            const result = determineWinner(playerChoice, computerChoice);
            resultDiv.textContent = `You chose ${playerChoice}. Computer chose ${computerChoice}. ${result}`;
        }

    </script>
</body>
</html>

                        </textarea>

                </div>
            </div>

            <div class="projects">
                <h4>Weather App: </h4>
                <p>Create a weather application that fetches weather data from an API based on the user's location or
                    a search input. Display the current weather conditions and forecast. Implement features like
                    temperature conversion, displaying weather
                    icons, and incorporating location auto-suggestions.</p>

            </div>

            <div class="projects">
                <h4>Recipe Finder: </h4>
                <p>Create a recipe finder app that allows users to search for recipes based on ingredients or specific dietary requirements. Display recipes with detailed instructions, ingredients
                    , and nutritional information. Implement filters for meal types, cuisine, and cooking time. </p>
            </div>
            <div class="projects">
                <h4>Image Gallery: </h4>
                <p> Create an image gallery with a grid layout where users can view and interact with images. Implement features like image filtering
                     based on categories or tags,
                      lightbox for image enlargement, and 
                      lazy loading for optimal performance.</p>
            </div>
            <div class="projects">
                <h4>Blog or News Ticker: </h4>
                <p> Implement a blog or news ticker that 
                    displays the latest articles or news headlines. Fetch
                     data from an API or use pre-defined data. Include options 
                     for scrolling, pagination, and sorting.</p>
            </div>
            <div class="projects">
                <h4>Interactive Maps</h4>
                <p> Create interactive maps using libraries like Leaflet or Google Maps API. Display 
                    markers, tooltips, and custom overlays. Integrate features like search, filtering, and displaying additional information on map interactions.</p>
            </div>
            <div class="projects">
                <h4>Chat Application:</h4>
                <p> Build a real-time chat application that allows users to communicate with each other. Use technologies like WebSockets or a chat API to enable 
                    instant messaging. Implement 
                    features such as user authentication,
                     message history, and online status indicators.</p>
            </div>
            <div class="projects">
                <h4>Music Player:</h4>
                <p>Develop a music player with playback controls, playlist management, and audio visualization. Include features like shuffle,
                     repeat, and volume control. Integrate
                      with music streaming services or use local audio files.</p>
            </div>
            <div class="projects">
                <h4>Stock Market Tracker:</h4>
                <p>Create a stock market tracker that displays real-time stock prices and financial data. Fetch data from a stock market API and present it in a visually appealing and
                     informative manner. Include options for searching, filtering, and setting up custom watchlists.</p>
            </div>
            <div class="projects">
                <h4>Language Translator</h4>
                <p> Build a language translator application using a translation API. Allow users to input text and select the source and 
                    target languages. Display the translated text and support multiple language options.</p>
            </div>

            <div class="projects">
                <h4>Calendar Scheduler:</h4>
                <p> Develop a calendar scheduler where users can manage their schedules, events, and appointments. Implement features like adding, editing,
                     and deleting events. Provide options for different calendar views (day, week, month) and reminders. </p>
            </div>
            <div class="projects">
                <h4>Social Media Sharing Widget:</h4>
                <p> Create a social media sharing widget that allows users to share content from your website on popular social media platforms.
                     Include buttons for sharing on Facebook, Twitter, LinkedIn, and other relevant platforms</p>
            </div>
            <div class="projects">
                <h4></h4>
                <p> </p>
            </div>
            <div class="projects">
                <h4></h4>
                <p> </p>
            </div>


            <div class="para">
                <h6>
                    JavaScript offers a wide range of exciting projects that can beincorporated into your website while keeping practices i You can create a Weather App that fetches weather data and displays the forecast.Implement a To-Do List with features like filtering, due dates, and local storage. Develop an interactive Quiz App with multiple-choice questions and a leaderboard. Build a Recipe Finder that allows users to search for recipes based on ingredients  and dietary requirements. Create a Currency Converter with real-time exchange rates.  Develop a Quote Generator for inspiring quotes and a Blog or News Ticker for displaying  latest articles. Implement an Interactive Map with markers and custom overlays. Build a Chat Application for real-time communication. Create a Music Player, Stock Market Tracker, Language Translator, Calendar Scheduler, and Social Media Sharing Widget. These projects, when implemented properly, can enhance your website's functionality and engagement while following  best practices
                </h6>
            </div>
            
        </div>


    </div>
    </div>


    <script>
        /*=================copy code================*/

        function todo() {
            var codeArea = document.getElementById('todo');
            codeArea.select();
            document.execCommand('copy');


        }
        function quiz() {
            var codeArea = document.getElementById('quiz');
            codeArea.select();
            document.execCommand('copy');


        }
        function calculator() {
            var codeArea = document.getElementById('calculator');
            codeArea.select();
            document.execCommand('copy');


        }
        function slider() {
            var codeArea = document.getElementById('slider');
            codeArea.select();
            document.execCommand('copy');


        }
        function timer() {
            var codeArea = document.getElementById('timer');
            codeArea.select();
            document.execCommand('copy');


        }
        function mgame() {
            var codeArea = document.getElementById('mgame');
            codeArea.select();
            document.execCommand('copy');


        }
        function bmi() {
            var codeArea = document.getElementById('bmi');
            codeArea.select();
            document.execCommand('copy');


        }
        function paper() {
            var codeArea = document.getElementById('paper');
            codeArea.select();
            document.execCommand('copy');


        }



    </script>
</body>

</html>