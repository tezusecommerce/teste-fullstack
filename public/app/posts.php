<!DOCTYPE html>
<html>
    <body>
        <?php
            $hostname = "localhost:3307";
            $username = "root";
            $password = "";
            $db       = "madrejoy";

            $dbconnect=mysqli_connect($hostname,$username,$password,$db);

            if ($dbconnect->connect_error) {
                die("Database connection failed: " . $dbconnect->connect_error);
            }
        ?>

        <?php
            $query = mysqli_query($dbconnect, "SELECT * FROM postagens ORDER BY id_postagem desc") 
            or die (mysqli_error($dbconnect));

            while ($row = mysqli_fetch_array($query)) {
            echo
            "<article class='card'>
                <div class='card-div-image'>
                    <img class='card-image' src='{$row['url_imagem']}' />
                </div>
                <p class='card-title'>{$row['tx_titulo']}</p>
                <p class='card-text'>{$row['tx_mensagem']}</p>
                <a class='card-link' href='#'>Leia Mais ></a>
            </article>";
            }
        ?>
    </body>
</html>