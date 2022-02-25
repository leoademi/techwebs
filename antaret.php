<?php include_once "inc/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h3 class="titujt">Lista e Antareve</h3>
           
            <table id="members" >    
                
                <tr><th>Emri dhe Mbiemri</th><th> Telefoni</th><th>Email</th> <th>Edit</th> <th>Delete</th></tr>
                <?php
                    $anetaret = merrAntaret();
                    while ($antari = mysqli_fetch_assoc($anetaret)) {
                        $aid = $antari["antariid"];
                        echo "<tr>";
                        echo "<td>".$antari["emri"]." ".$antari["mbiemri"]."</td>";
                        echo "<td>".$antari["telefoni"]."</td>";
                        echo "<td>".$antari["email"]."</td>";
                        echo "<td><a href='antaret/modifiko_anetar.php?aid={$aid}'>Edit</a></td>";
                        echo "<td><a href='antaret/fshij_anetar.php?aid={$aid}'>Delete</a></td>";
                        echo "</tr>";
                    }
                ?>
                
            <tr><th></th><th></th><th></th> <th></th> <th><a href="antaret/shto_anetar.php">Shto</a></th></tr>
            </table>

                    <br><br>
<h3 class="titujt">Lista e trajnimeve per antarin: <?php echo $_SESSION['antari']['emridhembiemri']; ?></h3>            
        <table id="members">    
        <tr><th>Emri i Projektit</th><th>data</th><th>pershkrimi</th> <th>Edit</th> <th>Delete</th></tr>
        <?php
            $trajnimet = merrTrajnimet($_SESSION['antari']['antariid']);
            while($trajnimi = mysqli_fetch_assoc($trajnimet)){
                $tid = $trajnimi['trajnimetid'];
                echo "<tr>";
                echo "<td>". $trajnimi['emri']. "</td>";
                echo "<td>". $trajnimi['data']. "</td>";
                echo "<td>". $trajnimi['pershkrimi']. "</td>";
                echo "<td><a href='antaret/modifiko_trajnimet.php?tid={$tid}'>Edit</a></td> ";
                echo "<td><a href='antaret/fshij_trajnimet.php?tid={$tid}'>Delete</a></td> ";
                echo "</tr>";
            }
        ?>
        <tr><th></th><th></th><th></th> <th></th> <th><a href="antaret/shto_trajnim.php">Shto</a></th></tr>
            </table>    
        
</body>
