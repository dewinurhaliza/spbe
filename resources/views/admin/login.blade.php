<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #0a0f57;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            border-radius: 20px;
            display: flex;
            overflow: hidden;
            width: 800px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .login-left {
            background-color: white;
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .login-left img {
            height: 100px;
            margin-bottom: 20px;
        }
        .login-left h2 {
            text-align: center;
            color: #666;
        }
        .login-right {
            background-color: #eee;
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0 20px 20px 0;
            box-shadow: inset 2px 2px 5px rgba(0,0,0,0.1);
        }
        .login-right label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #0a0f57;
        }
        .login-right input[type="text"],
        .login-right input[type="password"] {
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 12px;
            width: 100%;
        }
        .login-right .forgot {
            font-size: 14px;
            margin-bottom: 20px;
            color: #0a0f57;
        }
        .login-right button {
            padding: 12px;
            background-color: #0a0f57;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
        .footer-text {
            position: absolute;
            bottom: 20px;
            color: white;
            text-align: center;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <img src="{{ asset('asset/img/logo-spbe.png') }}" alt="Logo SPBE">
            <h2>Login to SPPBE Pemerintah Kota Bandar Lampung</h2>
        </div>
        <div class="login-right">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Username/Email</label>
                <input type="text" id="email" name="email" required autofocus>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <div class="forgot">
                    <a href=#>Forgot Password?</a>
                </div>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <div class="footer-text">
        © 2025. TIM KP Unila Diskominfo Kota Bandar Lampung. All Rights Reserved
    </div>
</body>
</html>
