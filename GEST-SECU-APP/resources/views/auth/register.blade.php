<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Creer un compte -->

         <h1>Créer votre compte</h1>

    <form action="{{ route('register') }}" method="post">

        @csrf
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
