<!DOCTYPE html>
<html>
<head>
    <title>Blog app</title>
</head>
<body>
    <h1>Register</h1>
    <form method='POST'action='/register' >
        @csrf
    <label>Name : </label>
    <input type='text' name='name'> <br><br>
    <label>User mail : </label>
    <input type='email' name='email'><br><br>
    <label>password : </label>
    <input type='password' name='password'><br><br>
    <button type ='submit'>Submit</button>
    <a href="/login"> already registered </a>
    </form>
 
</body>
</html>
