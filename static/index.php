<?php
// index.php

// Define all routes
switch ($_SERVER['REQUEST_URI']) {
  case '/':
    home();
    break;
  case '/index.php':
        home();
        break;
  case '/about':
    about();
    break;
  case '/contact':
    contact();
    break;
  default:
    header('HTTP/1.0 404 Not Found');
    echo '404 Not Found';
    break;
}

// Home page
function home() {
  $title = 'Home';
  $content = '<h1>Welcome to my SPA</h1>
              <p>This is the home page</p>';
template($title,$content);
}

// About page
function about() {
  $title = 'About';
  $content = '<h1>About Us</h1>
              <p>We are a small team of developers</p>';
  template($title,$content);
}

// Contact page
function contact() {
  $title = 'Contact Us';
  $content = '<h1>Contact Us</h1>
              <form method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea><br>
                <input type="submit" value="Send">
              </form>';
    template($title,$content);
}

// Define template function to display the page content
function template($title, $content) {
  echo '<!doctype html>
        <html>
          <head>
            <title>' . $title . '</title>
            <style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}
		nav {
			background-color: #444;
			color: #fff;
			padding: 10px;
		}
		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		nav li {
			display: inline-block;
			margin-right: 10px;
		}
		nav li a {
			color: #fff;
			text-decoration: none;
			padding: 5px;
		}
		.content {
			padding: 20px;
		}
	</style>
          </head>
          <body>
            <nav>
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </nav>
            <main>
              ' . $content . '
            </main>
          </body>
        </html>';
}
?>
