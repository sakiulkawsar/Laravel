<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{'otp.input'}}" method="post">
        @csrf
        <input type="text" name="otp" placeholder="Enter yout opt 6 digit">
        <input type="submit" name="login" value="Verify">
    </form>
</body>
</html>