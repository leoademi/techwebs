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
                if (isset($_POST['shto_trajnim'])) {
                    shtoTrajnimet($_POST['projekti'],$_POST['data'],$_POST['pershkrimi']);
                }
            ?>
            <form action="" method="POST"  id="register">
                

                <label for="emri">Projekti: </label>
                <select name="projekti">
                    <?php
                        $projektet = merrProjektet();
                        while($projekti = mysqli_fetch_assoc($projektet)){
                            $projektiid = $projekti['projektiid'];
                            $emri = $projekti['emri'];
                            echo "<option value='{$projektiid}'>{$emri}</option>";
                        }
                    ?>
                    
                </select>
                <label for="data">Data:</label>
                <input type="date" name="data">
                <label for="pershkrimi">Pershkrimi</label>
                <textarea name="pershkrimi"></textarea>
                <input type="submit" name="shto_trajnim" value="Shto Trajnim">    
                
            </form>
          
        </section>