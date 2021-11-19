<!DOCTYPE html>
<html>
  <head>
    <title>Tugas Pemrograman Mobile TI 19AB</title>
	
	<!-- include css file here-->
   <link rel="stylesheet" href="css/style.css"/>
   
	<!-- include JavaScript file here-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form  method="get" action="index.php" id="form">
			<h2>INPUTKAN DATA MAHASISWA</h2><hr/>		
			
			<label>NPM :</label>
			<input type="text" name="fnpm" id="fnpm" />

			<label>Nama :</label>
			<input type="text" name="fnama" id="fnama" />
			
			<label>Alamat :</label>
			<input type="text" name="lalamat" id="lalamat" />
			
			<div>
            Jurusan :<br/> <input type="radio" name="jurusan" value="S1 Teknologi Informasi">S1 Teknologi Informasi<br/>
			<input type="radio" name="jurusan" value="S1 Teknik Komputer">S1 Teknik Komputer<br/>
			<input type="radio" name="jurusan" value="S1 Teknik Informatika"checked>S1 Teknik Informatika<br/>
			<input type="radio" name="jurusan" value="S1 Sistem Informasi"checked>S1 Sistem Informasi<br/>
			<input type="radio" name="jurusan" value="S1 Manajemen"checked>S1 Manajemen<br/>
            </div>
			<BR/>
			<label>Pilih Metode :</label>
			<span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="method" value="post" > POST </span>	
			
			<input type="submit" name="submit" id="submit" value="Submit">
		  </form>
		<?php include "proses.php";?>
		</div>
   </div>

  </body>
</html>