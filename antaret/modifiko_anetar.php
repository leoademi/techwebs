
<?php
    include_once "../inc/header1.php";
?>
    <main class="container page">
        <section id="content">
            <h3>Projekti - Pershkrimi</h3>
            <p>
                Lorem ipsum  dolor si t amet consectetur adipisicing elit. Id quae ad dolore deleniti odit suscipit voluptate facilis quibusdam nam debitis tempora, quasi aut quos harum vero voluptates perspiciatis vitae eveniet!
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae ad dolore deleniti odit suscipit voluptate facilis quibusdam nam debitis tempora, quasi aut quos harum vero voluptates perspiciatis vitae eveniet!
            </p>
            <hr>
            <h3>Modifiko Antarin</h3>
            <?php
                if (isset($_GET['aid'])) {
                    $aid = $_GET['aid'];
                    $antari = merrAntarinId($aid);
                    $antariid = $antari['antariid'];
                    $emri = $antari['emri'];
                    $mbiemri = $antari['mbiemri'];
                    $telefoni = $antari['telefoni'];
                    $email = $antari['email'];
                    $fjalekalimi = $antari['fjalekalimi'];
                }

                if (isset($_POST['modifiko_antar'])) {
                    modifikoAnetar($_POST["antariid"],$_POST["emri"],$_POST["mbiemri"],$_POST["telefoni"],$_POST["email"],$_POST["fjalekalimi"]);
                    
                }

            ?>
          <form action="" method="POST"  id="register">
                
                <input type="hidden" name="antariid" value="<?php if(!empty($antariid)) echo $antariid ?>">
                <label for="emri">Emri: </label>
                <input type="text" name="emri" value="<?php if(!empty($emri)) echo $emri ?>">

                <label for="mbiemri">Mbiemri: </label>
                <input type="text" name="mbiemri" value="<?php if(!empty($mbiemri)) echo $mbiemri ?>">

                <label for="telefoni">Telefoni: </label>
                <input type="text" name="telefoni" value="<?php if(!empty($telefoni)) echo $telefoni ?>">

                <label for="email">Email: </label>
                <input type="email" name="email" value="<?php if(!empty($email)) echo $email ?>">

                <label for="fjalekalimi">Fjalekalimi: </label>
                <input type="password" name="fjalekalimi" value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi ?>">

                <input type="submit" name="modifiko_antar" value="Modifiko">
            </form>
          
        </section>
        