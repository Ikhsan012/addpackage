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
            if (isi_stat == "gaada") {
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Username tidak ditemukan</small>');
            }else if(isi_stat == "server error"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Mohon Cek Konfigurasi</small>');
            }else if(isi_stat == "{Error:[{'Token Error'}]}"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Token tidak Valid</small>');
            }else if(isi_stat == "{Error:[{'IP Error'}]}"){
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Silahkan chat shagitz untuk setting IP</small>');
            }else{
            if (isi_stat == "ADMIN HOST KECE") {
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/admin.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else if(isi_stat == "M.WHM MINI" || isi_stat == "M.WHM MEDIUM" || isi_stat == "M.WHM SUPER" || isi_stat == "M.WHM EXTRA"){
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/mwhm.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else if(isi_stat == "WHM MINI" || isi_stat == "WHM MEDIUM" || isi_stat == "Whm Super" || isi_stat == "WHM EXTRA"){
                    $('#addpkg').show();
                    $('#addpkg').css('display','block');
                    $('#ambil').load("section/whm.php");
                    $('#username').html(usernya);
                    $('#package').html(status);
                }else{
                    $('#addpkg').hide();
                    $('#addpkg').css('display','none');
                    $('#error').show();
                    $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: '+isi_stat+' Tidak bisa diadd</small>');
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
                if(pkg == "ADMIN HOST KECE") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MINI");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MEDIUM");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL EXTRA");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL SUPER");
                        $("#whmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM MINI");
                        $("#whmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM MEDIUM");
                        $("#whmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM EXTRA");
                        $("#whmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM SUPER");
                        $("#mwhmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> M.WHM MINI");
                        $("#mwhmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> M.WHM MEDIUM");
                        $("#mwhmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> M.WHM EXTRA");
                        $("#mwhmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> M.WHM SUPER");
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
                            $("#whmmini").html("<i style='color: green;' class='fa fa-check'></i> WHM MINI");
                        }, 1500);
            
                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> WHM MEDIUM");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmextra").html("<i style='color: green;' class='fa fa-check'></i> WHM EXTRA");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmsuper").html("<i style='color: green;' class='fa fa-check'></i> WHM SUPER");
                        }, 2300);

                        setTimeout(function() { 
                            $("#mwhmmini").html("<i style='color: green;' class='fa fa-check'></i> M.WHM MINI");
                        }, 2600);
            
                        setTimeout(function() { 
                            $("#mwhmmedium").html("<i style='color: green;' class='fa fa-check'></i> M.WHM MEDIUM");
                        }, 2900);

                        setTimeout(function() { 
                            $("#mwhmextra").html("<i style='color: green;' class='fa fa-check'></i> M.WHM EXTRA");
                        }, 2900);
            
                        setTimeout(function() { 
                            $("#mwhmsuper").html("<i style='color: green;' class='fa fa-check'></i> M.WHM SUPER");
                        }, 3300);

                        setTimeout(function() { 
                            $('#addpkg').hide();
                            $('#addpkg').css('display','none');
                            $('#success').show();
                            $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
                        }, 3500);
                    }
                });
            }else if(pkg == "WHM SUPER" || pkg == "WHM MEDIUM" || pkg == "WHM MINI" || pkg == "WHM EXTRA") {
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
            }else if(pkg == "M.WHM SUPER" || pkg == "M.WHM MEDIUM" || pkg == "M.WHM MINI" || pkg == "M.WHM EXTRA") {
                $.ajax({
                    url: "curl/index.php",
                    type: "POST",
                    data: "menambah=menambah&pkg="+pkg+"&usernya="+usernya,
                    beforeSend: function() {
                        $("#cpanelmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MINI");
                        $("#cpanelmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL MEDIUM");
                        $("#cpanelextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL EXTRA");
                        $("#cpanelsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> CPANEL SUPER");
                        $("#whmmini").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM MINI");
                        $("#whmmedium").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM MEDIUM");
                        $("#whmextra").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM EXTRA");
                        $("#whmsuper").html("<i class='fa fa-circle-o-notch fa-spin'></i> WHM SUPER");
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
                            $("#whmmini").html("<i style='color: green;' class='fa fa-check'></i> WHM MINI");
                        }, 1500);
            
                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> WHM MEDIUM");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmmedium").html("<i style='color: green;' class='fa fa-check'></i> WHM EXTRA");
                        }, 1800);

                        setTimeout(function() { 
                            $("#whmsuper").html("<i style='color: green;' class='fa fa-check'></i> WHM SUPER");
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

            $(document).ready(function() {
            $("#tambahpkgroot").on('click', function() {
            var uroot   = $("#uroot").val();
            var pwroot   = $("#pwroot").val();
            var login_ip   = $("#login_ip").val();
            if(uroot == "" || pwroot == "" || login_ip == "") {
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error : Silahkan isi semua data</small>');
            } else {
            $.ajax({
            url: "curl/index.php",
            type: "POST",
            data: 'tambahpkgroot=tambahpkgroot&pwroot='+pwroot+'&uroot='+uroot+'&login_ip='+login_ip,
            beforeSend: function() {
            $("#carik").hide();
            $("#cariin").show();
            },
            success: function(status) {
            $("#carik").show();
            $("#cariin").hide();
            var stat = $('#status').val(status);
            var isi_stat = stat.val();
            if (isi_stat == "usergaada") {
                $('#error').show();
                $('#errornya').html('<i class="fa fa-info-circle"></i> <small>Error: Username tidak ditemukan</small>');
            }else{
                $('#addpkgroot').hide();
                $('#addpkgroot').css('display','none');
                $('#success').show();
                $('#successnya').html('<i class="fa fa-info-circle"></i> <small>Success: Package berhasil ditambahkan</small>');
            }
            }
            });
            }
            });
            });