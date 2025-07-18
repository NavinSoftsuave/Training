<!DOCTYPE html>
<html>
<head>
    <title>Blog app</title>
</head>
<body>
    <h1>Login</h1>
    <form method='POST' action='/login'>
        @csrf
    <label>User email : </label>
    <input type='email' name='email'><br><br>
    <label>password : </label>
    <input type='password' name='password'><br><br>
    <button type='submit'>Login</button>
    <button type='button' onclick="window.location.href='/register'">Register</button>
     </form>
    
</body>
</html>
