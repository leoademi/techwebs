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
                if (isset($_GET['tid'])) {
                    $ti = merrTrajnimetId($_GET['tid']);
                    $trajnimetid = $ti['trajnimetid'];
                    $proid = $ti['projektiid'];
                    $emri = $ti['emri'];
                    $data = $ti['data'];
                    $data = date("Y-m-d", strtotime($data));
                    $pershkrimi = $ti['pershkrimi'];
                }
                if (isset($_POST['modifiko_trajnim'])) {
                    modifikoTrajnimet($_POST['trajnimetid'],$_POST['projekti'],$_POST['data'],$_POST['pershkrimi']);
                }

                
            ?>
            <form action="" method="POST"  id="register">
                
                <input type="hidden" name="trajnimetid" value="<?php if(!empty($trajnimetid)) echo $trajnimetid ?>">

                <label for="emri">Projekti: </label>
                <select name="projekti">
                    <?php
                        $projektet = merrProjektet();
                        echo "<option value='{$proid}'>{$emri}</option>";
                        while($projekti = mysqli_fetch_assoc($projektet)){
                            $projektiid = $projekti['projektiid'];
                            $emri = $projekti['emri'];
                            if ($projektiid != $proid) {
                                echo "<option value='{$projektiid}'>{$emri}</option>";
                            }
                            
                        }
                    ?>
                    
                </select>
                <label for="data">Data:</label>
                <input type="date" name="data" value="<?php if(!empty($data)) echo $data ?>">
                <label for="pershkrimi">Pershkrimi</label>
                <textarea name="pershkrimi"><?php if(!empty($pershkrimi)) echo $pershkrimi ?></textarea>
                <input type="submit" name="modifiko_trajnim" value="Modifiko Trajnimin">    
                
            </form>
          
        </section>