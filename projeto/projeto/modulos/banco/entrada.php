
<?php
    require('gerenciador.php');
    $banco = new Gerenciador();
    if($_POST["modo"] == "logar"){
        if (isset($_POST["user"])) {
            $senha = $banco->oneQuery("senha","usuarios","nome",$_POST["user"])["senha"];
            if($senha == md5($_POST["pass"])){
                echo "Logou com sucesso!";
                setcookie("usuario", $_POST["user"], time()+3600,"/",false);
                if (isset($_SERVER["HTTP_REFERER"])) {
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                }
            }
            else{
                echo "Você errou a senha otário!";
            }
        }
        else{
            echo "Usuário não informado...";
        }
    } 
    else if($_POST["modo"] == "logout"){
        setcookie("usuario", "", time()-3600,"/",false);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    else {
        echo "Modo não definido...";
    }
?>