

<?php
include("vars.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['email']) && isset($_GET['senha'])) {
       
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        
        $con = mysqli_connect('localhost','root' ,$_Senha,'sys');

        if ($con) {
            echo "Connection Successful";
        } else {
            echo "Connection Failed";
        }

        mysqli_select_db($con, 'sys');

        $query = "select nome,senha from users where email = '$email' and senha = '$senha'";
        $result = mysqli_query($con, $query);
        if(($result->num_rows)>0){
           // header('location:Page.php');
        }else{
            //header('location:index.php');
        }
        
        
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registered = "Yes";
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

        $con = mysqli_connect('localhost','root' ,$_Senha,'sys');

        if ($con) {
            echo "Connection Successful";
        } else {
            echo "Connection Failed";
        }

        mysqli_select_db($con, 'sys');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        mysqli_query($con, $query);
        $registered = "Yes";
        header('location:index.php');
        
        
    }
}
?>


