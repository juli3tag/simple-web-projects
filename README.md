## Web Projects 👩🏻‍💻☕
Welcome to my collection of web development projects, primarily focused on HTML and PHP. This repository showcases a variety of web applications and websites I've developed to practice different concepts and techniques, including responsive design, database interaction, and API development.

## 🌐 Project 1: Mundo Mágico – Harry Potter Fan Store (HTML + Bootstrap)
This project is a simple, responsive landing page for a fictional Harry Potter-themed online store called "Mundo Mágico". The goal is to practice clean web design using HTML5, CSS3, and Bootstrap 5.

Technologies Used
- HTML5 – for structure and content
- Bootstrap 5.3 – for responsive layout, navigation bar, buttons, grid system, and card components
- Custom CSS – for small style tweaks to give the page a bit of a personalized touch

What the Page Includes
- A fixed-top navigation bar with links to login, register, and view the shopping cart
- A secondary navigation menu with additional links
- A welcoming section introducing the store
- A responsive product gallery displaying featured magical items (like wands, scarves, and plushies) using Bootstrap’s card layout
- A call-to-action button to view more products
- A simple footer with fictional contact information

✨ Why Bootstrap?
Bootstrap was used to speed up development and ensure that the site looks good on all screen sizes with minimal effort. Components like navbar, container, row, and card make layout and responsiveness a breeze.

[Ver código en GitHub](https://github.com/juli3tag/simple-web-projects/tree/main/html-webproject)

## 🧾 Project 2: Session Management in PHP
This project is an example of session management in PHP, where a user fills out a form to apply to Hogwarts. The process is split into two stages, where the first stage captures the user’s name and stores it in a session, and the second stage shows a personalized greeting and collects more information from the user.

How it works:
- archivo1.php – This is the first page where users are asked to enter their name. The form collects this data and sends it to the next page (procesar.php) via the POST method.
- archivo2.php – This page retrieves the name from the session and displays a personalized greeting. After that, a form is presented where the user can provide additional information like age, email, address, phone number, city, and their Hogwarts house. This data is also captured via POST and displayed back to the user for confirmation once the form is submitted.
- Form Handling and Data Display: After the user submits the second form, the data they entered is shown on the screen in a neat, organized list, confirming that their details were successfully saved. This step simulates an application process for Hogwarts, with the collected data being displayed in a user-friendly way.

Technologies used:
- PHP (no frameworks): The core of this project uses PHP to handle session management, form submission, and data processing.
- Bootstrap 5: For styling the forms and page layouts, making the UI responsive and visually appealing.
- Sessions in PHP: Used to persist data between pages, specifically for storing the user's name and passing it to the next page.

[Ver código en GitHub](https://github.com/juli3tag/simple-web-projects/tree/main/SessionManagement)

## 📝 Project 3: Harry Potter API User Query
This HTML code is designed to interact with a Harry Potter API. It includes a form where a user can input a user ID to retrieve information about a specific user from the API. The result is then displayed in a JSON format in a textarea. Bootstrap is used for the layout, and jQuery is used to send an AJAX request to the server (PHP backend) to process the query.

How it Works:
- User Input: The user enters an ID (for example, 1) into the form and clicks the button "Obtener JSON" (Get JSON).
- AJAX Request: When the button is clicked, the buscarID() function sends an AJAX request to servidor.php with the ID as a parameter.
- Server Processing: The PHP backend processes the request and returns a JSON response, which contains the user data or an error message.
- Display: The result is displayed in the textarea as a formatted JSON response. If there’s no user with the given ID, the message “No user found with that ID” appears instead.

🛠️ Technologies Used:
- HTML: For creating the structure of the page.
- CSS (Bootstrap): For styling the page and making it responsive.
- jQuery: For handling AJAX requests and dynamic content updates without reloading the page.
- PHP: The backend server (servidor.php) processes the user request, fetches data from the Harry Potter API, and returns the result as JSON.

[Ver código en GitHub](https://github.com/juli3tag/simple-web-projects/blob/main/ABM/index.php)

## 🔍 Project 4: Harry Potter API - User Lookup
The goal of this project was to develop a simple REST API that returns user data in JSON format based on an input ID. It uses PHP without frameworks, MySQL for the database, and follows the MVC (Model-View-Controller) architecture to ensure maintainability and scalability. Modern client-side technologies like AJAX, jQuery, and Bootstrap were implemented to create a clean and functional interface.

API Functionality
When the user enters an ID and presses "Obtain JSON," a JavaScript function using jQuery sends a GET request to servidor.php with the ID parameter. The server processes the request, queries the database, and returns the result in JSON. If no match is found, an error message is returned. This happens without reloading the page, thanks to AJAX.

Technologies Used
- PHP: Main server-side language for business logic and database interaction.
- MySQL: Relational database engine for storing user data.
- PDO: PHP class for securely connecting to the database.
- AJAX + jQuery: Allows sending and receiving data from the server without page reload.
- Bootstrap 5: CSS framework for visual design.
- JSON: Lightweight, readable data format for exchanging data between client and server.

[Ver código en GitHub](https://github.com/juli3tag/simple-web-projects/blob/main/ABM/index.php)
