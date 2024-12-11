<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/signup.css">
    <title>Signup</title>
</head>
<body>
    <form action="/animal-rescue/connect.php" method="POST" class="form">
        <p class="title">Register</p>
        <p class="message">Signup now and get full access to our Website.</p>
        <div class="flex">
            <label>
                <input required type="text" class="input" name="firstName">
                <span>Firstname</span>
            </label>
            <label>
                <input required type="text" class="input" name="lastName">
                <span>Lastname</span>
            </label>
        </div>
        <label>
            <input required type="email" class="inputother" name="email">
            <span>Email</span>
        </label>
        <label>
            <input required type="password" class="inputother" name="password">
            <span>Password</span>
        </label>
        <label>
            <input required type="password" class="inputother" name="confirmPassword">
            <span>Confirm Password</span>
        </label>
        <label>
            <!-- <select name="gender" required>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="o">Other</option>
            </select>
            <span>Gender</span> -->
        </label>
        <button class="submit" type="submit">Submit</button>
        <p class="signin">Already have an account? <a href="./login.html">Signin</a></p>
    </form>
</body>
<<<<<<< HEAD:Html file/signup.php
</html>
=======
</html>
>>>>>>> 6258f97 (new rev):Html file/signup.html
