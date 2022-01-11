<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="Tuesday" method="POST">
        @csrf
        <input type="text" name="Username" placeholder="enter the username "><br>
        <span style="color: red">@error('Username'){{ $message }}@enderror</span>
            <br><input type="password" name="Password" placeholder="enter the password "><br>
            <span style="color: red">@error('Password'){{ $message }}@enderror</span>

                <br> <input type="submit" value=" Login">

            </form>
        </body>

        </html>
