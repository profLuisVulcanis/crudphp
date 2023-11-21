<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP</title>
    <meta name="description" content="Arquivos do Tutorial sobre CRUD PHP do Canal do Professor Luis">
    <meta name="author" content="Luis A. Vulcanis">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/logo.svg">
</head>
<body>

    <header>
        <h1>CRUD - PHP</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./create.php">CREATE</a></li>
            <li><a href="./">READ</a></li></li>
            <li><a href="./update.php">UPDATE</a></li></li>
            <li><a href="./delete.php">DELETE</a></li></li>
        </ul>
    </nav>

    <?php include './php/message.php'; ?>

    <main>
        <h2>Cadastrar Álbum</h2>
        <form action="./create.php" method="post">
            <div class="formBox">
                <label for="artist">Artista</label>
                <input type="text" name="artist" id="artist" maxlength="60" placeholder="Informe o Artista" required autofocus>
            </div>
            <div class="formBox">
                <label for="album">Álbum</label>
                <input type="text" name="album" id="album" maxlength="80" placeholder="Informe o Álbum" required>
            </div>
            <div class="formBox">
                <label for="year">Ano de Lançamento</label>
                <input type="year" name="year" id="year" placeholder="Informe o Ano" required>
            </div>
            <div class="formBox">
                <input type="submit" value="Cadastrar" class="submit">
            </div>
            <input type="hidden" name="key" value="insert">
        </form>
    </main>

    <footer>
        <address>
            Sistema desenvolvolvido exclusivamente para fins didáticos por: <a href="mailto:webcursoprofessorluis@gmail.com">Luis A Vulcanis</a> para o <a href="https://youtube.com/@professorluis" target="_blank" rel="noopener noreferrer">Canal do Professor Luis</a> &copy; 2023
        </address>
    </footer>
    
</body>
</html>