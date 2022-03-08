<?php include_once "../inc/header1.php";?>
    <main class="container page">
        <section id="content">
            <h3>Projekti - Pershkrimi</h3>
            <p>
                Lorem ipsum  dolor si t amet consectetur adipisicing elit. Id quae ad dolore deleniti odit suscipit voluptate facilis quibusdam nam debitis tempora, quasi aut quos harum vero voluptates perspiciatis vitae eveniet!
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae ad dolore deleniti odit suscipit voluptate facilis quibusdam nam debitis tempora, quasi aut quos harum vero voluptates perspiciatis vitae eveniet!
            </p>
            <hr>
            <h3>Detajet e projektit</h3>
            <?php
                if($_GET['pid']){
                    $pid=$_GET['pid'];
                    $projekti=merrProjektId($pid);
                    
                    $emri=$projekti['emri'];
                    $pershkrimi=$projekti['pershkrimi'];
                    $datafillimit=$projekti['datafillimit'];
                    $datambarimit=$projekti['datambarimit'];
                }
            ?>
          <form method="POST" action="" id="register">
                <legend>Detajet e projektit</legend>
                <label for="emri">Emri: </label>
                <input type="text" name="emri" value="<?php if(!empty($emri)) echo $emri; ?>" readonly>
                <label for="mbiemri">Pershkrimi: </label>
                <input type="text" name="pershkrimi" value="<?php if(!empty($pershkrimi)) echo $pershkrimi; ?>" readonly>
                <label for="datafillimit">datafillimit: </label>
                <input type="text" name="datafillimit" value="<?php if(!empty($datafillimit)) echo $datafillimit; ?>" readonly>
                <label for="datambarimit">datambarimit: </label>
                <input type="text" name="datambarimit" value="<?php if(!empty($datambarimit)) echo $datambarimit; ?>" readonly>
            </form>
          
        </section>