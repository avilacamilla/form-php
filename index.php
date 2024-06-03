<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário com PHP</title>
</head>
<body>
   <main class="main-container">
    <form method="POST" action="">
            <h1>Formulário com PHP</h1>

            <label for="name">Nome:</label>
            <input id="name" name="nome" type="text">

            <label for="e-mail">E-mail:</label>
            <input id="e-mail" name="email" type="text">

            <label for="web-site">Website:</label>
            <input id="web-site" name="website" type="text">

            <textarea name="comentario" cols="30" rows="10" id="comments"></textarea>

            <label for="gender">Gênero:</label>
            <input id="gender" name="genero" type="radio"> Masculino
            <input id="gender" name="genero" type="radio"> Feminino
            <input id="gender" name="genero" type="radio"> Outro

            <button type="submit">Enviar</button>
        </form>
   </main>
</body>
</html>