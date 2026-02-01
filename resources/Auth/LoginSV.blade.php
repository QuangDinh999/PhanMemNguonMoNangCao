<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form method="POST" action="/loginSV-action" >
    @csrf
    <div>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <div>
        <label for="mssv">MSSV</label>
        <input id="mssv" type="text" name="mssv" required>
    </div>
    <div>
        <label for="class">Lớp môn học</label>
        <input id="cLass" type="text" name="class" required>
    </div>
    <div>
        <label for="gender">Giới tính</label>
        <input id="gender" type="text" name="gender" required>
    </div>

    <button type="submit">Register</button>
</form>
</body>
</html>
