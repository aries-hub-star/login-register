<!DOCTYPE html>
<html>
<head>
    <title>Default Page</title>
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            padding: 40px;
            text-align: center;
            max-width: 400px;
            width: 80%;
        }
        h1 {
            font-size: 30px;
            color: #333;
            margin-bottom: 30px;
        }
        p {
            color: #666;
            margin-bottom: 100px;
            align-items: center;
        }
        .back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 13px;
            transition: background-color 0.3s ease;
        }
        .back:hover {
            background-color: #45a049;
        }
</style>
    </head>
<body>
    <div class="form-box">
        <h1>Welcome!</h1>
        <p>You have successfully logged in to a secure page.</p>
        <a class="back" href="logout.php">Logout</a>
    </div>
    <script>
        var backLink = document.querySelector('.back');
        backLink.addEventListener('click', function(event) {
            event.preventDefault();
            alert('Logout Successful...');
            window.location.href = 'login.php';
        });
        </script>
    </body>
</html>
