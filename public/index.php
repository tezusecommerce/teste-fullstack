<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./resources/images/madrejoy_symbol.svg" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="./resources/css/default.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>MadreJoy</title>
    </head>
    <body>
        <header>
            <?php include './template/header.php' ?>
        </header>

        <div>
            <?php include './template/body.php' ?>
        </div>

        <footer>
            <?php include './template/footer.php' ?>
        </footer>
    </body>
    <script>
        function show_hide_menu() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        function openDialog() {
            var dialog = document.getElementById("dialogInsertPost");
            dialog.showModal();
        }

        function closeDialog() {
            var dialog = document.getElementById("dialogInsertPost");
            dialog.close();
        }

        function cleanFormDialog() {
            document.getElementById("titulo").value = "";
            document.getElementById("mensagem").value = "";
            document.getElementById("url").value = "";
        }

    </script>
</html>