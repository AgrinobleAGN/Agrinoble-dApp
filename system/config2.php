<?php

ini_set("display_errors",1);
      error_reporting(E_ALL);
function connection()
{

  $servername = "agrinoble.finance";
  $username = "noorsi6";
  $password = "louneslounesinmotion123$";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=noorsi6_airdrop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch(PDOException $e) {
  return 'error';
  }
}




function getAll_refs225()
{
  $sql = "SELECT `User_ID`,`BSC_Wallet` FROM `Agrinoble` WHERE `Ref_ID`=''  limit ".$_GET['min'].",".$_GET['max'];
  $result = connection()->query($sql);
$co=0;
$str="";
$sum=0;
$rowr = $result->fetchAll();
$data=[];
 /*foreach ($rowr as $row ) {
   // code...


   if($co!=0){
     $wallet=Getwallet($row['Ref_ID']);
     $sum=$sum+(((int)$row['tot']*1000)+1000);
       $str=$str. "
       <tr>
         <td>".$co."</td>
         <td>".$wallet."</td>
         <td>".$row['tot']."</td>
         <td>".$wallet."=".((int)$row['tot']*1000+1000)."</td>

         </tr>";
         $data[]=$wallet."=".((int)$row['tot']*1000+1000).
   }
$co++;
}*/
$str="";
$j=0;
while ($j <count($rowr)) {
  $str=$str."<tr>
    <td>".$j."</td>
    <td>groupe ".$j."</td><td>";
try {
  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
} catch (\Exception $e) {

}

$j++;




  $str=$str."</td></tr>";
}


 echo $str;

}




function getAll_refs()
{
  $sql = "SELECT `User_ID`,`BSC_Wallet` FROM `Agrinoble` WHERE `User_ID` NOT IN (SELECT `Ref_ID`FROM Agrinoble)  limit ".$_GET['min'].",".$_GET['max'];
  $result = connection()->query($sql);
$co=0;
$str="";
$sum=0;
$rowr = $result->fetchAll();
$data=[];
 /*foreach ($rowr as $row ) {
   // code...


   if($co!=0){
     $wallet=Getwallet($row['Ref_ID']);
     $sum=$sum+(((int)$row['tot']*1000)+1000);
       $str=$str. "
       <tr>
         <td>".$co."</td>
         <td>".$wallet."</td>
         <td>".$row['tot']."</td>
         <td>".$wallet."=".((int)$row['tot']*1000+1000)."</td>

         </tr>";
         $data[]=$wallet."=".((int)$row['tot']*1000+1000).
   }
$co++;
}*/
$str="";
$j=0;
while ($j <count($rowr)) {
  $str=$str."<tr>
    <td>".$j."</td>
    <td>groupe ".$j."</td><td>";
try {
  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                              $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                  $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                    $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                      $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                        $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                          $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
                                                                                            $str=$str."".$rowr[$j]['BSC_Wallet']."=".((int) 1000)."</br>";$j++;
} catch (\Exception $e) {

}

$j++;




  $str=$str."</td></tr>";
}


 echo $str;

}

function GetALL()
{
  $sql = "SELECT `User_ID`,`BSC_Wallet` FROM `Agrinoble` WHERE `Ref_ID`=''";
  $result = connection()->query($sql);
  $str="";
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {



        $str=$str. "
        <tr>
          <td>#</td>
          <td>".$row['BSC_Wallet']."</td>
          <td>".$row['BSC_Wallet']."=".((int)1000)."</td>

          </tr>";

  }

echo $str;
}


function Getwallet($id)
{
  $sql = "SELECT `BSC_Wallet` FROM `Agrinoble` WHERE `User_ID`='".$id."'";
  $result = connection()->query($sql);

 if($row = $result->fetch(PDO::FETCH_ASSOC)) {
     return $row['BSC_Wallet'];
 }else {
   return null;
 }

}


function getSUM()
{
  $sql = "SELECT COUNT(*)*1000 as howmuch FROM `Agrinoble` WHERE 1 ";
  $result = connection()->query($sql);
$co=0;
$str="";
$sum=0;
$sum1=0;
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {


     $sum=$sum+(((int)$row['howmuch']));


 }
 $sql = "SELECT (COUNT(`Ref_ID`)+1)*1000 as howmuch FROM `Agrinoble` WHERE 1 GROUP by `Ref_ID`";
 $result = connection()->query($sql);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {


     $sum1=$sum1+(((int)$row['howmuch']));


 }
 echo $sum+$sum1;

}


 ?>
