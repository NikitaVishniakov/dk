<?php 
include("connection.php");
include("form_control.php");
if(isset($_POST['submit'])){
$a = "";
    foreach($_POST['dkp']  as $key => $val) {
        if(is_array($val)){
            foreach($_POST['dkp']['car'] as $key => $val) {
                $a = $a."'".$val."', ";
            }   
        }
        else {
            $a =$a."'".$val."', ";
        }
    }
echo strlen($a);
echo strlen(", ");
$a = substr($a, 0, strlen($a)-2);

$sql = ("INSERT INTO `dkp`(`make`, `model`, `color`, `vin`, `engine`, `shasi_num`, `body_num`, `year`, `type`, `reg_num`, `num_srts`, `serie_srts`, `srts_giving_date`, `strs_who_gave`, `num_pts`, `serie_pts`, `pts_giving_date`, `pts_who_gave`, `sellerFio`, `sellerDocumentSeries`, `sellerDocumentNumber`, `sellerDocumentDate`, `sellerDocumentOrganization`, `sellerAddress`, `sellerTrusteeFio`, `sellerTrusteeDocumentSeries`, `sellerTrusteeDocumentNumber`, `sellerTrusteeDocumentDate`, `sellerTrusteeDocumentOrganization`, `sellerTrusteeAddress`, `sellerTrusteeWarrantSeries`, `sellerTrusteeWarrantNumber`, `sellerTrusteeWarrantDate`, `sellerTrusteeWarrantOrganization`, `buyerFio`, `buyerDocumentSeries`, `buyerDocumentNumber`, `buyerDocumentDate`, `buyerDocumentOrganization`, `buyerAddress`, `buyerTrusteeFio`, `buyerTrusteeDocumentNumber`, `buyerTrusteeDocumentSeries`, `buyerTrusteeDocumentDate`, `buyerTrusteeDocumentOrganization`, `buyerTrusteeAddress`, `buyerTrusteeWarrantNumber`, `buyerTrusteeWarrantSeries`, `buyerTrusteeWarrantDate`, `buyerTrusteeWarrantOrganization`, `carPrice`, `attorneyFio`, `attorneyFioRP`, `attorneyCompany`, `city`, `documentDate`, `attorneyAddress`, `agentPrice`) VALUES (".$a.")");
}
if(isset($_POST['submit_update'])){
    $a = [];
     foreach($_POST['dkp']  as $key => $val) {
        if(is_array($val)){
            foreach($_POST['dkp']['car'] as $key => $val) {
                                array_push($a, $val);
            };   
        }
        else {
                array_push($a, $val);
        }
    }
    
}
$sql = "UPDATE `dkp` SET `make`='".$a[0]."',`model`='".$a[1]."',`color`='".$a[2]."',`vin`='".$a[3]."',`engine`='".$a[4]."',`shasi_num`='".$a[5]."',`body_num`='".$a[6]."',`year`='".$a[7]."',`type`='".$a[8]."',`reg_num`='".$a[9]."',`num_srts`='".$a[10]."',`serie_srts`='".$a[11]."',`srts_giving_date`='".$a[12]."',`strs_who_gave`='".$a[13]."',`num_pts`='".$a[14]."',`serie_pts`='".$a[15]."',`pts_giving_date`='".$a[16]."',`pts_who_gave`='".$a[17]."',`sellerFio`='".$a[18]."',`sellerDocumentSeries`='".$a[19]."',`sellerDocumentNumber`='".$a[20]."',`sellerDocumentDate`='".$a[21]."',`sellerDocumentOrganization`='".$a[22]."',`sellerAddress`='".$a[23]."',`sellerTrusteeFio`='".$a[24]."',`sellerTrusteeDocumentSeries`='".$a[25]."',`sellerTrusteeDocumentNumber`='".$a[26]."',`sellerTrusteeDocumentDate`='".$a[27]."',`sellerTrusteeDocumentOrganization`='".$a[28]."',`sellerTrusteeAddress`='".$a[29]."',`sellerTrusteeWarrantSeries`='".$a[30]."',`sellerTrusteeWarrantNumber`='".$a[31]."',`sellerTrusteeWarrantDate`='".$a[32]."',`sellerTrusteeWarrantOrganization`='".$a[33]."',`buyerFio`='".$a[34]."',`buyerDocumentSeries`='".$a[35]."',`buyerDocumentNumber`='".$a[36]."',`buyerDocumentDate`='".$a[37]."',`buyerDocumentOrganization`='".$a[38]."',`buyerAddress`='".$a[39]."',`buyerTrusteeFio`='".$a[40]."',`buyerTrusteeDocumentNumber`='".$a[41]."',`buyerTrusteeDocumentSeries`='".$a[42]."',`buyerTrusteeDocumentDate`='".$a[43]."',`buyerTrusteeDocumentOrganization`='".$a[44]."',`buyerTrusteeAddress`='".$a[45]."',`buyerTrusteeWarrantNumber`='".$a[46]."',`buyerTrusteeWarrantSeries`='".$a[47]."',`buyerTrusteeWarrantDate`='".$a[48]."',`buyerTrusteeWarrantOrganization`='".$a[49]."',`carPrice`='".$a[50]."',`documentDate`='".$a[51]."' WHERE `id` = '".$a[52]."    ' ";


$query = $link->query($sql);
if($query){
header("location:dkp_list.php");
}
?>