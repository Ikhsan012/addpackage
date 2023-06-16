<?php 
$root_username = "root";
$root_password = '@@IkhsanServer@@'; //MASUKAN PW ROOT ANDA
$ip_mu = "174.138.31.201"; // contoh : 13.99.99.211
$title = "Addpack"; // judul web
$host = "Tools-IkhsanHost"; // nama host


function asu($ipmu){
function nmc($eds){
    if(strlen($eds) === 3){
        return "***";
    } else if(strlen($eds) === 2){
        return "**";
    } else if(strlen($eds) === 1){
        return "*";
    }
}
    $delmin = explode('.', $ipmu);
    return nmc($delmin[0]) . ".$delmin[1]." . nmc($delmin[2]) . ".$delmin[3]";
}
$login_ip = asu($ip_mu);
 if(isset($_POST['ceknama'])) {
    $usernya  = $_POST['usernya'];
    if ($usernya == "root") {
        echo "root error";
    }else{
    $alamatcurl  = "https://kamukontol.com/1.0/search.php";
    $dataApi = "&pass=".urlencode($root_password)."&ip=".$ip_mu."&user=".$usernya;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $alamatcurl);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataApi);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    print_r($result);
    }
 }else if (isset($_POST['menambah'])) {
     $usernya = $_POST['usernya'];
     $pkg  = $_POST['pkg'];
        $addUrl  = "https://kamukontol.com/1.0/package.php";
        $dataUrl = "pass=".urlencode($root_password)."&ip=".$ip_mu."&user=".$usernya."&pkg=".$pkg;
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }else if (isset($_POST['tambahpkgroot'])) {
     $uroot = $_POST['uroot'];
     $pwroot  = $_POST['pwroot'];
     $login_ip  = $_POST['login_ip'];
        $addUrl  = "https://kamukontol.com/1.0/package_root.php";
        $dataUrl = "ip=".$ip_mu."&pass=".urlencode($pwroot);
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }else if (isset($_POST['rfpkgroot'])) {
     $pwroot  = $_POST['pwroot'];
     $login_ip  = $_POST['login_ip'];
        $addUrl  = "https://kamukontol.com/1.0/remove_package_root.php";
        $dataUrl = "ip=".$ip_mu."&pass=".urlencode($pwroot);
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }else if (isset($_POST['rfpkgdeff'])) {
     $pwroot  = $_POST['pwroot'];
     $login_ip  = $_POST['login_ip'];
        $addUrl  = "https://kamukontol.com/1.0/remove_package.php";
        $dataUrl = "ip=".$ip_mu."&pass=".urlencode($pwroot);
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }else if (isset($_POST['btn_smtp'])) {
     $ip_smtp  = $_POST['ip_smtp'];
     $u_smtp  = $_POST['u_smtp'];
     $pw_smtp  = $_POST['pw_smtp'];
     $ar_smtp  = $_POST['ar_smtp'];
     $ausr_smtp  = $_POST['ausr_smtp'];
     $apw_smtp  = $_POST['apw_smtp'];
        $addUrl  = "https://kamukontol.com/1.0/add_smtp.php";
        $dataUrl = "ip=".$ip_mu."&pass=".urlencode($pw_smtp)."&pw=".urlencode($apw_smtp)."&user=".$ausr_smtp."&router=".$ar_smtp;
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }else if (isset($_POST['btn_whmres'])) {
     $ip_whmres  = $_POST['ip_whmres'];
     $u_whmres  = $_POST['u_whmres'];
     $pw_whmres  = $_POST['pw_whmres'];
        $addUrl  = "https://kamukontol.com/1.0/install_whmreseller.php";
        $dataUrl = "ip=".$ip_mu."&pass=".urlencode($pw_whmres);
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }else if (isset($_POST['btn_lspeed'])) {
     $ip_lspeed  = $_POST['ip_lspeed'];
     $u_lspeed  = $_POST['u_lspeed'];
     $pw_lspeed  = $_POST['pw_lspeed'];
        $addUrl  = "https://kamukontol.com/1.0/install_litespeed.php";
        $dataUrl = "ip=".$ip_mu."&pass=".urlencode($pw_lspeed);
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $addUrl);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $dataUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $result2 = curl_exec($ch2);
        curl_close($ch2);
        echo $result2;
 }
 
 
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://kamukontol.com/1.0/check_ip.php");
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, "&ip=".$ip_mu);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $lisensi = curl_exec($ch2);
        curl_close($ch2);
?>