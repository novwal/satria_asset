<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> </head>
<body>
    <div class="login-container">
        <form action="{{ url('login') }}" method="POST" class="login-form">
            @csrf
            <div class="input-group">
                <label for="username" class="input-label">Username</label>
                <div class="input-container"> 
                    <i class="fa-regular fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Masukan username anda" required>
                </div>
            </div>
            <div class="input-group">
                <label for="password" class="input-label">Password</label>
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Masukan password anda" required>
                </div>
            </div>            
            <button type="submit">Login</button>
            <a href="#" class="forgot-password">Lupa password</a>
        </form>
    </div>
</body>
</html>
