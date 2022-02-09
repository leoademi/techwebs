<?php include_once "inc/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="news.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h4 class="center">Projektet e fundit</h4>
<section id="sectioni">
    
    <?php
    $projektet = merrProjektet();
    $i = 0;
    while($projekti = mysqli_fetch_assoc($projektet)){
        $pid = $projekti['projektiid'];
        echo "<article class='pitem'>";
        echo "<img src='images/1200.jpg' alt='Projekti i pare'>";
        echo "<h4>" . $projekti['emri'] . "</h4>";
        echo "<p>" . $projekti['pershkrimi'] . "</p>";
        echo "<br>";
        echo "<a href='antaret/shiko_projekt.php?pid={$pid}'>me shume --&gt;&gt;</a>";
        echo "</article>";
        $i++;
        if($i == 3) break;
    }
    echo "<artricle class='pitem'>";

    echo "</article>";
    ?>
</section>
    <br><br>





<div class="content">
        <div class="left-side">
            <h1>Kjo faqe ndihmon ne krijimin e posteve per lajme.</h1>
            <form action="" class='forma' method="POST">
                <div>
                    <label for="">Titulli i lajmit:</label>
                    <input type="text" name="titulli" placeholder="Shkruaj titullin..." id='titulli-new' />

                </div>
                <label for="">Permbajtja e lajmit:</label>
                <textarea type="textarea" id='permbajtja-new' name="lajmi" placeholder="Shkruaj permbajtjen..."></textarea>
                <div class='buttons'>
                    
                    <input class='btn' id='cancel-btn' name="cancel" type="submit" value="cancel">
                    <input class='btn' id='submit-btn' name="posto" type="submit" value="Posto">
                </div>

            </form>
        </div>
        <div class="right-side">
            <div class="form-group">
                <?php
                if(isset($_POST['posto'])){
                    
                    $titulli = $_POST['titulli'];
                    $lajmi = $_POST['lajmi'];
                    echo "<img src='images/amazon.png' alt='' class='foto-lajmi'>";
                    echo "<h3>". $titulli. "</h3>";
                    echo "<p>". $lajmi. "</p>";
                }
                
                ?>
            </div>
        </div>
    </div>


</body>
</html>

