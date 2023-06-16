<?php 
include 'curl/index.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="img/title.png">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        @font-face {
          font-family: kntl;
          src: url(fonts/Debrosee-ALPnL.ttf);
        }
        .logo{
            width: 260px;
            height: 35px;
            color:white;
            font-family: kntl;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div> 

    <header class="header-area" >


        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="hamiNav">

                        <a class="nav-brand" href=""><h3 class="logo"><?php echo $host; ?></h3></a>

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="https://wa.me/6285756448056" class="btn hami-btn live--chat--btn" style=""><i class="fa fa-whatsapp" aria-hidden="true"></i> Chat</a>
                                </div>
                                <div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a onclick="setmenu()" class="btn hami-btn live--chat--btn" style="color:white;"><i class="fa fa-plus-circle" aria-hidden="true"></i> SETTING</a>
                                </div>
                            </div>
    
                        </div>
 
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="welcome-area" style="margin-bottom: 20px">

        <div class="welcome-pattern">
            <img src="img/core-img/welcome-pattern.png" alt="">
        </div>
            <div class="single-welcome-slide" style="">
                <h4 style="color:white;position: absolute;top: 5%;left:22.5%;font-weight: bold;letter-spacing: 8px" class="ml-3">Add Package</h4>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 col-md-9 col-lg-7">
                                <div class="welcome-text mb-20"><center>
                                    <img src="img/favicon.png" style="width:130px;height:130px"><br>
                                    <p class="col-md-10 col-10">
                                        <input type="text" class="form-control" autocomplete="off" placeholder="Username" id="usernya" name="username" style="float: left;">

                                    </p>
                                    <button type="button"  class="btn hami-btn btn-2 ml-3" id="cariusername">Cari Username <i id="carik" class="fa fa-search"></i><i id="cariin" style="display: none;" class="fa fa-circle-o-notch fa-spin"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="welcome-thumbnail">
                    <img src="img/bg-img/1.png" alt="">
                </div>
            </div>
        <input type="hidden" id="status" name="status">
        <input type="hidden" id="owner" name="owner">
        <div class="clouds">
            <img src="img/core-img/cloud-1.png" alt="" class="cloud-1">
            <img src="img/core-img/cloud-2.png" alt="" class="cloud-2">
            <img src="img/core-img/cloud-3.png" alt="" class="cloud-3">
            <img src="img/core-img/cloud-4.png" alt="" class="cloud-4">
            <img src="img/core-img/cloud-5.png" alt="" class="cloud-5">
        </div>
    </section>   
<script type="text/javascript">
    function setmenu() {
        $('#setmen').show();
        $('.classy-menu').hide();
    }
    function h_setmenu() {
        $('#setmen').fadeOut();
        $('.classy-menu').show();
    }
    function addpkgroot() {
        $('#addpkgroot').show();
        $('.classy-menu').hide();
    }
    function rf_pkg_root() {
        $('#rfpkgroot').show();
        $('.classy-menu').hide();
    }
    function hd_rf_pkg_root() {
        $('#rfpkgroot').fadeOut();
    }
    function _smtp() {
        $('#pasangsmtp').show();
        $('.classy-menu').hide();
    }
    function h_smtp() {
        $('#pasangsmtp').fadeOut();
    }
    function _whmres() {
        $('#whmres').show();
        $('.classy-menu').hide();
    }
    function h_whmres() {
        $('#whmres').fadeOut();
    }
    function _lspeed() {
        $('#lspeed').show();
        $('.classy-menu').hide();
    }
    function h_lspeed() {
        $('#lspeed').fadeOut();
    }
    function rf_pkg_deff() {
        $('#rfpkgdeff').show();
        $('.classy-menu').hide();
    }
    function hd_rf_pkg_deff() {
        $('#rfpkgdeff').fadeOut();
    }
    function close_addpkg() {
        $('#addpkg').fadeOut();
    }
    function close_addpkgroot() {
        $('#addpkgroot').fadeOut();
    }
    function close_error() {
        $('#error').fadeOut();
    }
    function close_success() {
        $('#success').fadeOut();
    }
</script>
<div class="modal fade show modal-open" id="addpkg" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary" >
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="close_addpkg()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td style="padding:5px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:white;" colspan="3">USERNAME : <font id="username"></font></td>
            </tr>
            <tr>
                <td style="padding:5px;font-weight: bold;border-bottom: 2px solid #000;background: #017bff;color:white;" colspan="3">PACKAGE : <font id="package"></font></td>
            </tr>
            
            <div id="ambil"></div>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="tambahpkg">TAMBAH PACKAGE <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade show modal-open" id="setmen" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="h_setmenu()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button class="btn btn-primary" onclick="addpkgroot()">ADD PACKAGE ROOT <i class="fa fa-chevron-circle-right"></i></button><br><br>
        <button class="btn btn-primary" onclick="rf_pkg_root()">HAPUS ALL PKG <i class="fa fa-chevron-circle-right"></i></button><br><br>
        <button class="btn btn-primary" onclick="rf_pkg_deff()">HAPUS PKG DEFAULT <i class="fa fa-chevron-circle-right"></i></button><br><br>
        <button class="btn btn-primary" onclick="_smtp()">PASANG SMTP <i class="fa fa-chevron-circle-right"></i></button><br><br>
        <button class="btn btn-primary" onclick="_whmres()">INSTALL WHMRES <i class="fa fa-chevron-circle-right"></i></button><br><br>
        <button class="btn btn-primary" onclick="_lspeed()">INSTALL LITESPEED <i class="fa fa-chevron-circle-right"></i></button><br><br>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade show modal-open" id="addpkgroot" tabindex="-1" role="dialog" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"></h5><h3 class="logo"><?php echo $host; ?></h3>
        <button type="button" style="color: white" class="close" onclick="close_addpkgroot()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tbody><tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;"><i class="fa fa-user"></i> USERNAME : <input type="text" class="form-control" id="uroot" placeholder="Username root" readonly="" value="root"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;"><i class="fa fa-key"></i> PASSWORD : <input type="password" class="form-control" id="pwroot" placeholder="Password"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-bottom: 2px solid #000;background: #017bff;color:whitecolor:white;"><i class="fa fa-gear"></i> IP SERVER : <input type="text" class="form-control" id="login_ip" value="<?php echo $login_ip; ?>" readonly=""></td>
            </tr>
        </tbody></table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="tambahpkgroot">TAMBAH PACKAGE <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade show modal-open" id="rfpkgroot" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="hd_rf_pkg_root()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-user"></i> USERNAME : <input type="text" class="form-control" id="u_rfpkgroot" placeholder="Username root" readonly value="root"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> PASSWORD : <input type="password" class="form-control" id="pw_rfpkgroot" placeholder="Password"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-bottom: 2px solid #000;background: #017bff;color:whitecolor:white;" ><i class="fa fa-gear"></i> IP SERVER : <input type="text" class="form-control" id="ip_rfpkgroot" value="<?php echo $login_ip; ?>" readonly></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn_rfpkgroot">HAPUS ALL PACKAGE <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade show modal-open" id="rfpkgdeff" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="hd_rf_pkg_deff()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-user"></i> USERNAME : <input type="text" class="form-control" id="u_rfpkgdeff" placeholder="Username root" readonly value="root"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> PASSWORD : <input type="password" class="form-control" id="pw_rfpkgdeff" placeholder="Password"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-bottom: 2px solid #000;background: #017bff;color:whitecolor:white;" ><i class="fa fa-gear"></i> IP SERVER : <input type="text" class="form-control" id="ip_rfpkgdeff" value="<?php echo $login_ip; ?>" readonly></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn_rfpkgdeff">HAPUS ALL PKG DEFAULT <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade show modal-open" id="pasangsmtp" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="h_smtp()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <input type="hidden" class="form-control" id="ip_smtp" value="<?php echo $login_ip; ?>" readonly>
            <input type="hidden" class="form-control" id="u_smtp" readonly value="root">
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> Password ROOT : <input type="password" class="form-control" id="pw_smtp" placeholder="Password"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-user"></i> SMTP Server : <input type="text" class="form-control" id="ar_smtp" placeholder="Masukkan router smtp"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> Username SMTP : <input type="text" class="form-control" id="ausr_smtp" placeholder="Username AUTH"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> Password SMTP : <input type="password" class="form-control" id="apw_smtp" placeholder="Password AUTH"></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn_smtp">PASANG SMTP <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade show modal-open" id="lspeed" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="h_lspeed()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-user"></i> USERNAME : <input type="text" class="form-control" id="u_lspeed" placeholder="Username root" readonly value="root"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> PASSWORD : <input type="password" class="form-control" id="pw_lspeed" placeholder="Password"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-bottom: 2px solid #000;background: #017bff;color:whitecolor:white;" ><i class="fa fa-gear"></i> IP SERVER : <input type="text" class="form-control" id="ip_lspeed" value="<?php echo $login_ip; ?>" readonly></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn_lspeed">INSTALL LITESPEED<i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade show modal-open" id="whmres" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="h_whmres()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-user"></i> USERNAME : <input type="text" class="form-control" id="u_whmres" placeholder="Username root" readonly value="root"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-top: 1px solid #fff;border-bottom:1px solid white;background: #017bff;color:whitecolor:white;" ><i class="fa fa-key"></i> PASSWORD : <input type="password" class="form-control" id="pw_whmres" placeholder="Password"></td>
            </tr>
            <tr>
                <td style="padding:5px;font-size:13px;font-weight: bold;border-bottom: 2px solid #000;background: #017bff;color:whitecolor:white;" ><i class="fa fa-gear"></i> IP SERVER : <input type="text" class="form-control" id="ip_whmres" value="<?php echo $login_ip; ?>" readonly></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn_whmres">INSTALL WHMRESSELLER <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>










<div class="modal fade show modal-open" id="error" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="close_error()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td class="bg-danger" id="errornya" style="padding:5px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;color:white;">
                    
                </td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="close_error()">TUTUP <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade show modal-open" id="success" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title"><img src="img/favicon.png" style="width:40px;height:40px"><h3 class="logo"><?php echo $host; ?></h3></h5>
        <button type="button" style="color: white" class="close" onclick="close_success()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td class="bg-success" id="successnya" style="padding:5px;font-weight: bold;border-top: 2px solid #000;border-bottom:1px solid white;color:white;">
                    
                </td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="close_success()">TUTUP <i class="fa fa-chevron-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
    
            $("#cariusername").on('click', function() {
            var usernya   = $("#usernya").val();
            if(usernya == "") {
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan masukan username anda</small>');
            } else {
            $.ajax({
            url: "curl/index.php",
            type: "POST",
            data: 'ceknama=ceknama&usernya='+usernya,
            beforeSend: function() {
            $("#carik").hide();
            $("#cariin").show();
            },
            success: function(status) {
            $("#carik").show();
            $("#cariin").hide();
            var stat = $('#status').val(status);
            var isi_stat = stat.val();
            if(isi_stat == "not_register"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: IP anda tidak terdaftar</small>');
            }else if(isi_stat == "server error"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Cek ip dan password root</small>');
            }else if(isi_stat == "expired"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: IP anda telah expired</small>');
            }else if(isi_stat == "Invalid IP"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Mohon cek ulang IP server anda</small>');
            }else if (isi_stat == "gaada") {
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Username '+usernya+' tidak ditemukan</small>');
            }else{
            if (isi_stat == "Wakil Founder") {
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/weef.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else if (isi_stat == "Ceo") {
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/ceo.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else if (isi_stat == "Admin") {
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/admin.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else if(isi_stat == "Mwhm Mini" || isi_stat == "Mwhm Medium" || isi_stat == "Mwhm Super" || isi_stat == "Mwhm Extra"){
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/mwhm.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else if(isi_stat == "Whm Mini" || isi_stat == "Whm Medium" || isi_stat == "Whm Super" || isi_stat == "Whm Extra"){
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/whm.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else{
                    $('#addpkg').hide();
                    $('#addpkg').css('display','none');
                    $('#error').show();
                    $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: '+isi_stat+' tidak bisa diadd</small>');
                }
            }
            }
            });
            }
            });
            });

$(document).ready(function() {
                $("#tambahpkg").on('click', function() {
                 var usernya = $("#username").html();
                 var pkg = $("#package").html();
                 var own = $("#owner").val();
                if(pkg == "Wakil Founder") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Mini");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Medium");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Extra");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Super");
                        $("#whmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Mini");
                        $("#whmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Medium");
                        $("#whmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Extra");
                        $("#whmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Super");
                        $("#mwhmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Mini");
                        $("#mwhmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Medium");
                        $("#mwhmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Extra");
                        $("#mwhmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Super");
                        $("#admin").html("<i class='fa fa-circle-o-notch fa-spin'></i> Admin");
                        $("#ceo").html("<i class='fa fa-circle-o-notch fa-spin'></i> Ceo");
                    },
                    success: function(hasilnya) {
                        setTimeout(function() { 
                            $("#cpanelmini").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MINI");
                        }, 500);

                        setTimeout(function() { 
                            $("#cpanelmedium").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MEDIUM");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelextra").html("<i style='color: green;' class='fa fa-check'></i> CPANEL EXTRA");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelsuper").html("<i style='color: green;' class='fa fa-check'></i> CPANEL SUPER");
                        }, 1100);

                        setTimeout(function() { 
                            $("#whmmini").html("<i style='color: green;' class='fa fa-check'></i> Whm Mini");
                        }, 1500);
            
                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> Whm Medium");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmextra").html("<i style='color: green;' class='fa fa-check'></i> Whm Extra");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmsuper").html("<i style='color: green;' class='fa fa-check'></i> Whm Super");
                        }, 2300);

                        setTimeout(function() { 
                            $("#mwhmmini").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Mini");
                        }, 2600);
            
                        setTimeout(function() { 
                            $("#mwhmmedium").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Medium");
                        }, 2900);

                        setTimeout(function() { 
                            $("#mwhmextra").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Extra");
                        }, 2900);
            
                        setTimeout(function() { 
                            $("#mwhmsuper").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Super");
                        }, 3300);
            
                        setTimeout(function() { 
                            $("#admin").html("<i style='color: green;' class='fa fa-check'></i> Admin");
                        }, 3500);
            
                        setTimeout(function() { 
                            $("#ceo").html("<i style='color: green;' class='fa fa-check'></i> Ceo");
                        }, 3900);

                        setTimeout(function() { 
                            $('#addpkg').hide();
                            $('#addpkg').css('display','none');
                            $('#success').show();
                            $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                        }, 4200);
                    }
                });
            }else 
                if(pkg == "Ceo") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Mini");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Medium");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Extra");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> cPanel Super");
                        $("#whmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Mini");
                        $("#whmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Medium");
                        $("#whmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Extra");
                        $("#whmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Super");
                        $("#mwhmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Mini");
                        $("#mwhmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Medium");
                        $("#mwhmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Extra");
                        $("#mwhmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Super");
                        $("#admin").html("<i class='fa fa-circle-o-notch fa-spin'></i> Admin");
                    },
                    success: function(hasilnya) {
                        setTimeout(function() { 
                            $("#cpanelmini").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MINI");
                        }, 500);

                        setTimeout(function() { 
                            $("#cpanelmedium").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MEDIUM");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelextra").html("<i style='color: green;' class='fa fa-check'></i> CPANEL EXTRA");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelsuper").html("<i style='color: green;' class='fa fa-check'></i> CPANEL SUPER");
                        }, 1100);

                        setTimeout(function() { 
                            $("#whmmini").html("<i style='color: green;' class='fa fa-check'></i> Whm Mini");
                        }, 1500);
            
                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> Whm Medium");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmextra").html("<i style='color: green;' class='fa fa-check'></i> Whm Extra");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmsuper").html("<i style='color: green;' class='fa fa-check'></i> Whm Super");
                        }, 2300);

                        setTimeout(function() { 
                            $("#mwhmmini").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Mini");
                        }, 2600);
            
                        setTimeout(function() { 
                            $("#mwhmmedium").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Medium");
                        }, 2900);

                        setTimeout(function() { 
                            $("#mwhmextra").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Extra");
                        }, 2900);
            
                        setTimeout(function() { 
                            $("#mwhmsuper").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Super");
                        }, 3300);
            
                        setTimeout(function() { 
                            $("#admin").html("<i style='color: green;' class='fa fa-check'></i> Admin");
                        }, 3500);

                        setTimeout(function() { 
                            $('#addpkg').hide();
                            $('#addpkg').css('display','none');
                            $('#success').show();
                            $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                        }, 4200);
                    }
                });
            }else 
                if(pkg == "Admin") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MINI");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MEDIUM");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL EXTRA");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL SUPER");
                        $("#whmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Mini");
                        $("#whmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Medium");
                        $("#whmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Extra");
                        $("#whmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Super");
                        $("#mwhmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Mini");
                        $("#mwhmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Medium");
                        $("#mwhmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Extra");
                        $("#mwhmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Mwhm Super");
                    },
                    success: function(hasilnya) {
                        setTimeout(function() { 
                            $("#cpanelmini").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MINI");
                        }, 500);

                        setTimeout(function() { 
                            $("#cpanelmedium").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MEDIUM");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelextra").html("<i style='color: green;' class='fa fa-check'></i> CPANEL EXTRA");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelsuper").html("<i style='color: green;' class='fa fa-check'></i> CPANEL SUPER");
                        }, 1100);

                        setTimeout(function() { 
                            $("#whmmini").html("<i style='color: green;' class='fa fa-check'></i> Whm Mini");
                        }, 1500);
            
                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> Whm Medium");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmextra").html("<i style='color: green;' class='fa fa-check'></i> Whm Extra");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmsuper").html("<i style='color: green;' class='fa fa-check'></i> Whm Super");
                        }, 2300);

                        setTimeout(function() { 
                            $("#mwhmmini").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Mini");
                        }, 2600);
            
                        setTimeout(function() { 
                            $("#mwhmmedium").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Medium");
                        }, 2900);

                        setTimeout(function() { 
                            $("#mwhmextra").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Extra");
                        }, 2900);
            
                        setTimeout(function() { 
                            $("#mwhmsuper").html("<i style='color: green;' class='fa fa-check'></i> Mwhm Super");
                        }, 3300);

                        setTimeout(function() { 
                            $('#addpkg').hide();
                            $('#addpkg').css('display','none');
                            $('#success').show();
                            $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                        }, 3500);
                    }
                });
            }else if(pkg == "Whm Super" || pkg == "Whm Medium" || pkg == "Whm Mini" || pkg == "Whm Extra") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MINI");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MEDIUM");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL EXTRA");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL SUPER");
                    },
                    success: function(hasilnya) {
                        setTimeout(function() { 
                            $("#cpanelmini").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MINI");
                        }, 500);

                        setTimeout(function() { 
                            $("#cpanelmedium").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MEDIUM");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelextra").html("<i style='color: green;' class='fa fa-check'></i> CPANEL EXTRA");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelsuper").html("<i style='color: green;' class='fa fa-check'></i> CPANEL SUPER");
                        }, 1100);

                        setTimeout(function() { 
                            $('#addpkg').hide();
                            $('#addpkg').css('display','none');
                            $('#success').show();
                            $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                        }, 1300);
                    }
                });
            }else if(pkg == "Mwhm Super" || pkg == "Mwhm Medium" || pkg == "Mwhm Mini" || pkg == "Mwhm Extra") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MINI");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MEDIUM");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL EXTRA");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL SUPER");
                        $("#whmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Mini");
                        $("#whmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Medium");
                        $("#whmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Extra");
                        $("#whmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> Whm Super");
                    },
                    success: function(hasilnya) {
                        setTimeout(function() { 
                            $("#cpanelmini").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MINI");
                        }, 500);

                        setTimeout(function() { 
                            $("#cpanelmedium").html("<i style='color: green;' class='fa fa-check'></i> CPANEL MEDIUM");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelextra").html("<i style='color: green;' class='fa fa-check'></i> CPANEL EXTRA");
                        }, 800);

                        setTimeout(function() { 
                            $("#cpanelsuper").html("<i style='color: green;' class='fa fa-check'></i> CPANEL SUPER");
                        }, 1100);

                        setTimeout(function() { 
                            $("#whmmini").html("<i style='color: green;' class='fa fa-check'></i> Whm Mini");
                        }, 1500);
            
                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> Whm Medium");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> Whm Extra");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmsuper").html("<i style='color: green;' class='fa fa-check'></i> Whm Super");
                        }, 2300);

                        setTimeout(function() { 
                            $('#addpkg').hide();
                            $('#addpkg').css('display','none');
                            $('#success').show();
                            $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                        }, 2600);
                    }
                });
            }

        });
            });


$(document).ready(function () {
    $("#tambahpkgroot").on('click', function () {
        var uroot = $("#uroot").val();
        var pwroot = $("#pwroot").val();
        var login_ip = $("#login_ip").val();
        if (uroot == "" || pwroot == "" || login_ip == "") {
            $('#error').show();
            $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
        } else {
            $.ajax({
                url: "curl/index.php",
                type: "POST",
                data: 'tambahpkgroot=tambahpkgroot&pwroot=' + pwroot + '&uroot=' + uroot + '&login_ip=' + login_ip,
                beforeSend: function () {
                    $("#carik").hide();
                    $("#cariin").show();
                },
                success: function (status) {
                    $("#carik").show();
                    $("#cariin").hide();
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    if (isi_stat == "1") {
                        $('#addpkgroot').hide();
                        $('#addpkgroot').css('display', 'none');
                        $('#success').show();
                        $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                    } else {
                        $('#error').show();
                        $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: '+isi_stat+'</small>');
                    }
                }
            });
        }
    });
    
    
    
    $("#btn_rfpkgroot").on('click', function () {
        let u_rfpkgroot = $("#u_rfpkgroot").val();
        let pw_rfpkgroot = $("#pw_rfpkgroot").val();
        let ip_rfpkgroot = $("#ip_rfpkgroot").val();
        if (u_rfpkgroot == "" || pw_rfpkgroot == "" || ip_rfpkgroot == "") {
            $('#error').show();
            $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
        } else {
            $.ajax({
                url: "curl/index.php",
                type: "POST",
                data: 'rfpkgroot=rfpkgroot&pwroot=' + pw_rfpkgroot + '&uroot=' + u_rfpkgroot + '&login_ip=' + ip_rfpkgroot,
                beforeSend: function () {
                    $("#carik").hide();
                    $("#cariin").show();
                },
                success: function (status) {
                    $("#carik").show();
                    $("#cariin").hide();
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    if (isi_stat == "1") {
                        $('#rfpkgroot').hide();
                        $('#rfpkgroot').css('display', 'none');
                        $('#success').show();
                        $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Semua package telah dibersihkan</small>');
                    } else {
                        $('#error').show();
                        $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: '+isi_stat+'</small>');
                    }
                }
            });
        }
    });

    
    $("#btn_rfpkgdeff").on('click', function () {
        var u_rfpkgdeff = $("#u_rfpkgdeff").val();
        var pw_rfpkgdeff = $("#pw_rfpkgdeff").val();
        var ip_rfpkgdeff = $("#ip_rfpkgdeff").val();
        if (u_rfpkgdeff == "" || pw_rfpkgdeff == "" || ip_rfpkgdeff == "") {
            $('#error').show();
            $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
        } else {
            $.ajax({
                url: "curl/index.php",
                type: "POST",
                data: 'rfpkgdeff=rfpkgdeff&pwroot=' + pw_rfpkgdeff + '&uroot=' + u_rfpkgdeff + '&login_ip=' + ip_rfpkgdeff,
                beforeSend: function () {
                    $("#carik").hide();
                    $("#cariin").show();
                },
                success: function (status) {
                    $("#carik").show();
                    $("#cariin").hide();
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    if (isi_stat !== "1") {
                        $('#error').show();
                        $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: '+isi_stat+'</small>');
                    } else {
                        $('#rfpkgdeff').hide();
                        $('#rfpkgdeff').css('display', 'none');
                        $('#success').show();
                        $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package server telah dibersihkan</small>');
                    }
                }
            });
        }
    });

    
    $("#btn_smtp").on('click', function () {
        var ip_smtp = $("#ip_smtp").val();
        var u_smtp = $("#u_smtp").val();
        var pw_smtp = $("#pw_smtp").val();
        var ar_smtp = $("#ar_smtp").val();
        var ausr_smtp = $("#ausr_smtp").val();
        var apw_smtp = $("#apw_smtp").val();
        if (ip_smtp == "" || u_smtp == "" || pw_smtp == "" || ar_smtp == "" || ausr_smtp == "" || apw_smtp == "") {
            $('#error').show();
            $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
        } else {
            $.ajax({
                url: "curl/index.php",
                type: "POST",
                data: 'btn_smtp=btn_smtp&ip_smtp=' + ip_smtp + '&u_smtp=' + u_smtp + '&pw_smtp=' + pw_smtp + '&ar_smtp=' + ar_smtp + '&ausr_smtp=' + ausr_smtp + '&apw_smtp=' + apw_smtp,
                beforeSend: function () {
                    $("#carik").hide();
                    $("#cariin").show();
                },
                success: function (status) {
                    $("#carik").show();
                    $("#cariin").hide();
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    if (isi_stat !== "1") {
                        $('#error').show();
                        $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: cek pw root dan coba lagi</small>');
                    } else {
                        $('#pasangsmtp').hide();
                        $('#pasangsmtp').css('display', 'none');
                        $('#success').show();
                        $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Smtp sukses dipasang</small>');
                    }
                }
            });
        }
    });

    
    $("#btn_whmres").on('click', function () {
        var ip_whmres = $("#ip_whmres").val();
        var u_whmres = $("#u_whmres").val();
        var pw_whmres = $("#pw_whmres").val();
        if (ip_whmres == "" || u_whmres == "" || pw_whmres == "") {
            $('#error').show();
            $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
        } else {
            $.ajax({
                url: "curl/index.php",
                type: "POST",
                data: 'btn_whmres=btn_whmres&ip_whmres=' + ip_whmres + '&u_whmres=' + u_whmres + '&pw_whmres=' + pw_whmres,
                beforeSend: function () {
                    $("#carik").hide();
                    $("#cariin").show();
                },
                success: function (status) {
                    $("#carik").show();
                    $("#cariin").hide();
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    if (isi_stat !== "1") {
                        $('#error').show();
                        $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: cek pw root dan coba lagi</small>');
                    } else {
                        $('#whmres').hide();
                        $('#whmres').css('display', 'none');
                        $('#success').show();
                        $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: WHMReseller telah dipasang</small>');
                    }
                }
            });
        }
    });



    $("#btn_lspeed").on('click', function () {
        var ip_lspeed = $("#ip_lspeed").val();
        var u_lspeed = $("#u_lspeed").val();
        var pw_lspeed = $("#pw_lspeed").val();
        if (ip_lspeed == "" || u_lspeed == "" || pw_lspeed == "") {
            $('#error').show();
            $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
        } else {
            $.ajax({
                url: "curl/index.php",
                type: "POST",
                data: 'btn_lspeed=btn_lspeed&ip_lspeed=' + ip_lspeed + '&u_lspeed=' + u_lspeed + '&pw_lspeed=' + pw_lspeed,
                beforeSend: function () {
                    $("#carik").hide();
                    $("#cariin").show();
                },
                success: function (status) {
                    $("#carik").show();
                    $("#cariin").hide();
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    if (isi_stat !== "1") {
                        $('#error').show();
                        $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: cek pw root dan coba lagi</small>');
                    } else {
                        $('#lspeed').hide();
                        $('#lspeed').css('display', 'none');
                        $('#success').show();
                        $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: LiteSpeed telah dipasang</small>');
                    }
                }
            });
        }
    });
    //end
});
</script>
</div>
    <footer class="footer-area section-padding-100-0">


        <div class="bottom-footer-area bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>Masa Aktif: <?php echo $lisensi; ?><br>
Copyright &copy; <script>document.write(new Date().getFullYear());</script> <br><?php echo $host; ?>  <i class="fa fa-heart-o" aria-hidden="true"></i>
</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hami.bundle.js"></script>
    <script src="js/default-assets/active.js"></script>


</body>

</html>