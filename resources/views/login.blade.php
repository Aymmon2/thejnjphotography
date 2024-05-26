<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/welcome/jnjlogo.jpg">
    	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #000;
            }

            form {
                background-color: #ffffff; /* White background color for form */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
                position: relative; /* Added to position the logo */
            }

            .logo {
                position: absolute;
                top: -110px; /* Adjust as needed */
                left: 50%;
                transform: translateX(-50%);
                width: 100px; /* Adjust width as needed */
                height: auto; /* To maintain aspect ratio */
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            button[type="submit"] {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: black; 
                color: #fff;
                font-size: 16px;
                cursor: pointer;
            }

            button[type="submit"]:hover {
                background-color: #525252; /* Darker color on hover */
            }
        </style>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
                    <div class="featured-text text-center">
                        <h2 style="font-size: 20px; font-weight: bold;">HELLO ADMIN!</h2>
                        <p> </p>
                    </div>
        <img class="logo" src="img/welcome/jnjlogo.jpg" alt="Logo">
        @csrf
        <div>
            <label for="username">Username</label>
            <input id="username" type="text" name="username" required autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>

</body>
</html>
