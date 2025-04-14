<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(130deg, #667eea, #764ba2);
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #3d3c3c;
            font-weight: 500;
        }

        .form-group input {
            width: 96%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            transition: 0.5s;
            font-size: 14px;
            font-weight: 400;
        }

        .form-group input:hover {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 8px rgba(102, 126, 234, 0.5);
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background: #667eea;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: #5643cc;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Contact Us</h2>
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" id="message" placeholder="Enter your message" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>

</html>
