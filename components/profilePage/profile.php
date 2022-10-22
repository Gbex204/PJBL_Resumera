<?php
    session_start();
    function get_data($dataSessionVariable){
        if( isset($_SESSION['is_logged']) ){
            $logged_data = $_SESSION[$dataSessionVariable];
            return "$logged_data";
        }
        else{
            return 'ERRO';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Perfil | Resumera</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Resumera</h1>
            <!-- <input type="text" name="" id="" class="container-input"> -->
            <nav class="container-cabecalho">
                <a class="container-link" href="#">Home</a>
                <a class="container-link" href="#">Matérias</a>
                <a class="container-link" href="#">Ranking Mensal</a>
                <a class="container-link" href="#">Postar</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="section-principal">
            
            <div class="profile-content">
            <?php echo"<img src='" . get_data('logged_image') . "' alt='Imagem do usuário' id='img-profile'>" ?>
                <?php echo"<h2 class='text-principal'>" . get_data('logged_email') . "</h2>" ?>
                <h3 class="text-principal">@diogobonet</h3>
                <button class="editprofile">Editar Perfil</button>
                <a href=""><img src="" alt=""></a>
            </div>

            <div class="content-principal">
                <h1 id="resumos-title">Meus Resumos Favoritos 📘❤</h1>
                <div class="resumos">
                    <div class="resumo-fav">
                        <h3>Primeira Guerra Mundial</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus maiores itaque recusandae cum ratione blanditiis tempore? Neque quos nobis eveniet tenetur soluta. Animi odio corporis doloribus et, impedit eligendi.</p>
                    </div>
                    <div class="resumo-fav">
                        <h3>Segunda Guerra Mundial</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus maiores itaque recusandae cum ratione blanditiis tempore? Neque quos nobis eveniet tenetur soluta. Animi odio corporis doloribus et, impedit eligendi.</p>
                    </div>
                </div>
            </div>
        </section>