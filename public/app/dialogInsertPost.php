<dialog id="dialogInsertPost" class="dialogInsertPost">
    <form id="formDialog" method="POST">

        <div>
            <input id="titulo" name="titulo" class="inputtext" type="text" placeholder="Título do post" />
            <input id="mensagem" name="mensagem" class="inputtext" type="text" placeholder="Mensagem"/>
            <input id="url" name="url" class="inputtext" type="text" placeholder="Url imagem"/>
        </div>

        <div class="div__buttons">
            <button id="button_save" type="submit" name="save" class="button_save"> 
                <i class="fa fa-floppy-o" aria-hidden="true"></i>    
                Salvar 
            </button>

            <button id="button_clean" type="button" name="clean" class="button_clean" onclick="cleanFormDialog()"> 
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                Limpar 
            </button>

            <button id="button_close" type="button" name="clean" class="button_close" onclick="closeDialog()"> 
                <i class="fa fa-window-close" aria-hidden="true"></i>
                Fechar 
            </button>

        </div>
    </form>
</dialog>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST["titulo"];
        $mensagem = $_POST["mensagem"];
        $url = $_POST["url"];
        
        
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "madrejoy";

        $dbconnect=mysqli_connect($hostname,$username,$password,$db);

        if ($dbconnect->connect_error) {
            die("Database connection failed: " . $dbconnect->connect_error);
        }

        $query_nextId = mysqli_query($dbconnect, "SELECT (max(id_postagem) + 1) as id_postagem from postagens") 
        or die (mysqli_error($dbconnect));

        while ($nextId = mysqli_fetch_array($query_nextId)) {
            $sql = "INSERT INTO postagens VALUES ( '{$nextId['id_postagem']}'
                                                 , '{$titulo}'
                                                 , '{$mensagem}'
                                                 , '{$url}' )";

            if (!mysqli_query($dbconnect, $sql)) {
                echo "Error: " . $sql . "" . mysqli_error($dbconnect);
            }
        }
        
        $dbconnect->close();

        echo "<meta http-equiv='refresh' content='0'>";
    }
?>