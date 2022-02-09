<?php
    global $dbcon;
    connectionDB();
    function connectionDB(){
        global $dbcon;
        $dbcon=mysqli_connect('localhost','root','','projektiweb');
        if(!$dbcon){
            die("Koneksioni me DB nuk u be!". mysqli_error($dbcon));
        }
    }
   
    

    /*---------------Antari---------------*/
    function merrAntaret(){
        global $dbcon;
        $sql="SELECT antariid, emri, mbiemri, telefoni, email FROM antaret";
        $result=mysqli_query($dbcon,$sql);

        if($result){
            return $result; 
        }
        else{
            die("Nuk arrita te marr shenimet!". mysqli_error($dbcon));
        }
    }
    function merrAntarinId($antariid){
        global $dbcon;
        $sql = "SELECT antariid, emri ,mbiemri, telefoni, email, fjalekalimi from antaret WHERE antariid=$antariid";
        $result = mysqli_query($dbcon,$sql);
        if ($result) {
            return mysqli_fetch_assoc($result);
        }
        else{
            die("Nuk arrita te marr shenimet!".mysqli_error($dbcon));
        }
    }
    function shtoAnetar($emri,$mbiemri,$telefoni,$email,$fjalekalimi){
        global $dbcon;
        $sql="INSERT INTO antaret (emri, mbiemri, telefoni, email, fjalekalimi) VALUES ('$emri', '$mbiemri','$telefoni','$email','$fjalekalimi')";
        $result=mysqli_query($dbcon,$sql);

        if($result){
            header("Location: ../antaret.php");
            
        }else{
            die("Nuk arrita te shtoj anetarin!". mysqli_error($dbcon));
        }
    }

    function modifikoAnetar($antariid,$emri,$mbiemri,$telefoni,$email,$fjalekalimi){
        global $dbcon;
        $sql="UPDATE antaret  SET emri='$emri',mbiemri='$mbiemri', telefoni='$telefoni',email='$email', fjalekalimi='fjalekalimi' WHERE antariid=$antariid";
        $result=mysqli_query($dbcon,$sql);

        if($result){
            echo "Antari u modifiku me sukses";
            header("Location: ../antaret.php");
            
        }else{
            die("Nuk arrita te modifikoj anetarin!". mysqli_error($dbcon));
        }
}
    function fshijAntarin($antariid){
        global $dbcon;
        $sql="DELETE FROM antaret WHERE antariid=$antariid";
        $result=mysqli_query($dbcon,$sql);

        if($result){
            echo "Antari u fshi me sukses";
            header("Location: ../antaret.php");
            
        }else{
            die("Nuk arrita te fshij anetarin!". mysqli_error($dbcon));
        }
    }
?>

