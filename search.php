<?php 
 if(isset($_GET['strict'])){
            $strict = "strict=true";
        }
    if(isset($_GET['id']) && isset($_GET['cat']) || isset($_POST['search'])) {
       
        header("location:".$_GET['cat'].".php?id=".$_GET['id']."&".$strict);        
    }
 if(isset($_POST['search'])){
            $_GET['id'] = $_POST['search'];
             header("location:users_list.php?id=".$_GET['id']."&".$strict);
        }
?>