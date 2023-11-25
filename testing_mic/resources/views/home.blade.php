<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <p>Congrats!</p>
        <form action="/logout" method="post">
            @csrf
            <button>LogOut</button>
        </form>
    @else
        <div style="border:2px solid black">
            <h2>Registration</h2>
            <form action="register" method="post">
                @csrf
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="text" placeholder="E-mail">
                <input name="phone" type="text" placeholder="Phone">
                <input name="password" type="password" placeholder="password">
                <button>Register</button>

            </form>

        </div>
    @endauth
</body>
</html>