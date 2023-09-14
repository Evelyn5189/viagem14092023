<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="text-center d-flex align-items-center" style="height: 100vh;">

    <form class="form-signin border rounded p-5" style=" margin: auto; width:500px; height:500px display:flex; align-items:center; justify-content:center;">
        <h1 class="h3 mb-3 font-weight-normal">Faça o login</h1>

        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Endereço de Email" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Senha" required>

        <button class="btn btn-lg btn-primary btn-block" style="background-color:#00d8ff;" type="submit">Entrar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
