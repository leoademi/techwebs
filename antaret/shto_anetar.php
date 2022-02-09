<?php
    include_once "../inc/header1.php";
?>
    <main class="container page">
        <section id="content">
            <h3>Projekti - Pershkrimi</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae ad dolore deleniti odit suscipit voluptate facilis quibusdam nam debitis tempora, quasi aut quos harum vero voluptates perspiciatis vitae eveniet!
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae ad dolore deleniti odit suscipit voluptate facilis quibusdam nam debitis tempora, quasi aut quos harum vero voluptates perspiciatis vitae eveniet!
            </p>
            <hr>
            <h3>Shtimi i anetareve</h3>
            <?php
                if (isset($_POST["shto_antar"])) {
                   shtoAnetar($_POST["emri"],$_POST["mbiemri"],$_POST["telefoni"],$_POST["email"],$_POST["fjalekalimi"]);
                    
               
            }
            ?>
            <form action="" method="POST"  id="register">
                

                <label for="emri">Emri: </label>
                <input type="text" name="emri">

                <label for="mbiemri">Mbiemri: </label>
                <input type="text" name="mbiemri">

                <label for="telefoni">Telefoni: </label>
                <input type="text" name="telefoni">

                <label for="email">Email: </label>
                <input type="email" name="email">

                <label for="fjalekalimi">Fjalekalimi: </label>
                <input type="password" name="fjalekalimi">

                <input type="submit" name="shto_antar" value="Shto">
            </form>
          
        </section>
        