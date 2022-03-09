<?php
session_start();
global $dbconn;
connectionDBB();
function connectionDBB(){
    global $dbconn;
    $dbconn=mysqli_connect('localhost','root','','projektiweb');
    if(!$dbconn){
        die("Koneksioni me DB nuk u be!". mysqli_error($dbconn));
    }
}
function login($email,$fjalekalimi){
    global $dbconn;
    $sql="SELECT antariid, emri, mbiemri, telefoni, email,fjalekalimi,roli FROM antaret ";
    $sql.=" WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $result=mysqli_query($dbconn,$sql);
    if($result){
        $antari=array();
        $data=mysqli_fetch_assoc($result);
        $antari['antariid']=$data['antariid'];
        $antari['emridhembiemri']=$data['emri'] . " " . $data['mbiemri'];
        $antari['roli']=$data['roli'];
        $_SESSION['antari']=$antari;
        header('Location: home.php');
    }else{
        die("Nuk arrita te marr shenimet !". mysqli_error($dbconn));
    }
}
 
function merrTrajnimet($antariid){
    global $dbconn;
    $sql = " SELECT t.trajnimetid, p.emri, t.data, t.pershkrimi FROM trajnimet t INNER JOIN projektet p ON t.projektiid = p.projektiid ";
    if(!empty($antariid)){
        $sql.=" WHERE antariid=$antariid";
     } 
     $result = mysqli_query($dbconn,$sql);
     if($result){
         return $result;
     }
     else{
        die("Nuk arrita te marr shenimet!". mysqli_error($dbconn));
    }

}
function merrTrajnimetId($trajnimet){
    global $dbconn;
    $sql = " SELECT t.trajnimetid, p.projektiid, p.emri, t.data, t.pershkrimi FROM trajnimet t INNER JOIN projektet p ON t.projektiid = p.projektiid ";
    $sql.=" WHERE  t.trajnimetid=$trajnimet";
    $result = mysqli_query($dbconn,$sql);
    if ($result) {
        return mysqli_fetch_assoc($result);
    }
    else{
        die("Nuk arrita te marr shenimet!".mysqli_error($dbconn));
    }
}
function shtoTrajnimet($projektiid,$data,$pershkrimi){
    global $dbconn;
    $antariid = $_SESSION['antari']['antariid'];
    $sql="INSERT INTO trajnimet (antariid,projektiid, data, pershkrimi) VALUES ('$antariid','$projektiid','$data','$pershkrimi')";
    $result=mysqli_query($dbconn,$sql);

    if($result){
        $_SESSION['mesazhi'] = "Projekti u shtu me sukses";
        header("Location: ../antaret.php");
        
    }else{
        die("Nuk arrita te shtoj projektin!". mysqli_error($dbconn));
    }
}

function modifikoTrajnimet($trajnimetid,$projektiid,$data,$pershkrimi){
    global $dbconn;
    $sql="UPDATE trajnimet  SET projektiid='$projektiid',data='$data', pershkrimi='$pershkrimi' WHERE trajnimetid=$trajnimetid";
    $result=mysqli_query($dbconn,$sql);

    if($result){
        
        header("Location: ../antaret.php");
        
    }else{
        die("Nuk arrita te modifikoj anetarin!". mysqli_error($dbconn));
    }
}

function fshijTrajnimet($trajnimetid){
    global $dbconn;
    $sql="DELETE FROM trajnimet WHERE trajnimetid=$trajnimetid";
    $result=mysqli_query($dbconn,$sql);

    if($result){
        
        header("Location: ../antaret.php");
        
    }else{
        die("Nuk arrita te fshij anetarin!". mysqli_error($dbconn));
    }
}


function merrProjektet(){
    global $dbconn;
    $sql = "SELECT * FROM projektet";
    $result=mysqli_query($dbconn,$sql);
    if($result){
        return $result;
        
    }else{
        die("Nuk arrita te fshij anetarin!". mysqli_error($dbconn));
    }
}
function merrProjektId($pid){
    global $dbconn; 
    $sql="SELECT * FROM projektet WHERE projektiid=$pid";
    $result=mysqli_query($dbconn,$sql);
    if($result){
        return mysqli_fetch_assoc($result);  
    }else{
        die("Nuk arrita te marr punet!". mysqli_error($dbconn));
    }
}
?>