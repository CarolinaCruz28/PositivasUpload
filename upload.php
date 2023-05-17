<?php
$targetDirectory = "caminho/do/diretorio/predefinido/";
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "O arquivo foi enviado com sucesso.";
} else {
    echo "Ocorreu um erro ao enviar o arquivo.";
}
?>