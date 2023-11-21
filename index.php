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

    <main>
        <h2>Lista de Álbuns</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Artista</th>
                    <th>Álbum</th>
                    <th>Ano</th>
                    <th>Act</th>
                </tr>
            </thead>
            <tbody>
                <?php include './php/table.php' ?>
            </tbody>
        </table>
    </main>

    <footer>
        <address>
            Sistema desenvolvolvido exclusivamente para fins didáticos por: <a href="mailto:webcursoprofessorluis@gmail.com">Luis A Vulcanis</a> para o <a href="https://youtube.com/@professorluis" target="_blank" rel="noopener noreferrer">Canal do Professor Luis</a> &copy; 2023
        </address>
    </footer>
    
</body>
</html>