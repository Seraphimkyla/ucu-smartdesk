<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCU SmartDesk Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="form-box active" id="login-form">
            <!-- need ng action.php dito -->
            <form action="">
                <img src="brainlogo.png" alt="UCU SmartDesk Logo" class="logo">
                <h2>UCU SmartDesk </h2>
                <input type="text" name="studentNnumber" placeholder="Student Number" required>
                <input type="password" name="password" placeholder="Password" required>

                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <!-- kailangan ng another page para sa forget pass na toh -->
                    <a href="#">Forget password?</a> 
                </div>

                <button type="button">LOGIN</button>
                <!-- another lilipatan -->
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>

        <div class="form-box" id="register-form">
            <!-- need ng action.php dito -->
            <form action="">
                <img src="brainlogo.png" alt="UCU SmartDesk Logo" class="logo">
                <h2>UCU SmartDesk </h2>
                <input type="text" name="studentNnumber" placeholder="Student Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="email" name="email" placeholder="Email" required>

                <button type="button">REGISTER</button>
                <!-- another lilipatan -->
                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
            </form>
        </div>
    </div>        
    
    <script src="script.js"></script>
</body>
</html>