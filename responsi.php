<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir PWEB</title>
<style>
	*{
		box-sizing: border-box;
	}
	body{
		font-family: times new roman;
		padding: 10px;
		background : #ffffff;
		background-image: url("t.jpg");
	}

	.header{
		padding: 30px;
		text-align: center;
		background: white;
	}

	.header h1{
		font-size: 50px;
	}

	.topnav{
		overflow: hidden;
		background-color: #333; 
	}

	.topnav a{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.topnav a:hover{
		background-color: #ddd;
		color: yellow;
	}

	.leftcolumn{
		float: left;
		width: 25%;
		background-color: black;
		padding-left: 20px
		font-size : 12%;
		text-align: justify;
	}

	.centercolumn{
		float: left;
		width: 40%;
		background-color: grey;
		padding-left: 10px
	}

	.rightcolumn{
		float: left;
		width: 30%;
		background-color: black;
		padding-left: 20px
	}

	.fakeimg{
		background-color: #aaa;
		width: 75%;
	}

	.card{
		background-color: grey;
		padding: 20px;
		margin-top: 20px;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 20px;
	}

	.leftcolumn, .rightcolumn{
		width: 100%
		padding0;
	}

	.topnav a{
		float: none;
	    width: 100%
	}

</style>
</head>
<body>
	<div class="header" style="background-color: skyblue;">
		<h1 style="font-family: serif; color: white;">Halo</h1>
		<p style="font-size: 35px; color: black; font-style:italic;">Sidikara Hakim</p>
		<p style="font-size: 35px; color: black; font-style:italic;">2100018015</p>
		<p style="font-size: 35px; color: black; font-style:italic;">Pemerograman Web</p>
	</div>

	<div class="rightcolumn" style="background-color: black;" >
			<div class="card" style="background-color: black;">
				<h1 style="color: white;"><center>PICTURES</center></h1><br><br><br>
				<div>
					<center><img src="monalisa.jpg" width="200px"></center>
				</div>
				<div class="card" style="background-color: black;"><br><br>
		    		<center style="color: white;">Copyright © 2022</center>
	       		</div>
		
    <br><br>

			</div>
		</div>

	<div class="row" style="background-color: black;">
		<div class="centercolumn" style="background-color: grey;">
			<div class="card"<h1 style="font-family: times new roman" style="color:black;" style="font-size:30px;"><center><b>Kalkulator</b></center></h1><br><br>
				<div>
			<table style="color:skyblue; background-color: black;" border="10" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">Reset</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">7</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">8</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">9</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">4</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">5</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">6</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">1</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">2</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">3</button></td>
                    <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">0</button></td>
                   <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">.</button></td>
                   <td><button style="color:skyblue; background-color: black;" onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
				</div>
				<br><br>

					<div align="center"><h2>DATA DIRI</h2></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="47%" border="10" align="center">
				    <tr>
					    <td style="color:white;">NAMA</td>
					    <td><input type="text" name="nama" id="nama" style="background-color:grey;"></td>
				    </tr>
				    <tr>
					    <td style="color:white;">NIM</td>
					    <td><input type="text" name="nim" id="nim" style="background-color:grey;"></td>
				    </tr>
				    <td style="color:white;">KELAS</td>
					    <td><input type="text" name="kelas" id="kelas" style="background-color:grey;"></td>
				    </tr>
				    <tr>
					<td style="color:white;">FAKULTAS</td>
					<td><select name="Fakultas" id="Fakultas" style="background-color:grey;">
						<option style="background-color:grey;">Teknologi Industri</option>
						<option style="background-color:grey;">Kedokteran</option>
						<option style="background-color:grey;">Farmasi</option>
						<option style="background-color:grey;">Hukum</option>
						<option style="background-color:grey;">Ekonomi</option>
					</select></td>
				</tr>
				 <tr>
					<td style="color:white;">PEKERJAAN</td>
					<td><select name="Pekerjaan" id="Pekerjaan" style="background-color:grey;">
						<option style="color:white;">Programer</option>
						<option style="color:white;">Dokter</option>
						<option style="color:white;">Apoteker</option>
						<option style="color:white;">Dipolomat</option>
						<option style="color:white;">Bisnis</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="Kirim" id="kirim" style="background-color:grey;"><input type="reset" name="reset" value="Batal" style="background-color:grey;"></td>
				</tr>
				
			</table>
		</form>
		<br><br>
		<div align="center" style="color: white;" style="font-size:35px;">Kalkulator</div>
			</div>
		</div>

		<div class="leftcolumn">
			<div class="card" style="background-color: black;">
				<h1 style="color: white;"><center>KALENDER</center></h1>
				<?php
	        //mengambil tanggal sistem saat ini (1-31)
	        $hari = date("d");
	        $hariini=$hari;
	        //mengambil bulan sistem saat ini (1-12)
	        $bulan = date("m");
	        //mengambil tahun sistem saat ini
	        $tahun = date("Y");
	        //mencari jumlah hari bulan dan tahun ini
	        $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
	        ?>

            <?php
	        switch ($bulan) {
            case 1: $nmbulan = "Jan"; break;
		    case 2: $nmbulan = "Feb"; break;
		    case 3: $nmbulan = "Mar"; break;
		    case 4: $nmbulan = "Apr"; break;
		    case 5: $nmbulan = "Mei"; break;
		    case 6: $nmbulan = "Jun"; break;
		    case 7: $nmbulan = "Jul"; break;
		    case 8: $nmbulan = "Agu"; break;
		    case 9: $nmbulan = "Sep"; break;
		    case 10: $nmbulan = "Okt"; break;
		    case 11: $nmbulan = "Nov"; break;
		    case 12: $nmbulan = "Des"; break;
	        }
	        echo "<center><h1>$nmbulan $tahun</h1></center>";
	        ?>	    
	        <br>
	<table style="border: 2px solid #000000" align="center" cellpadding="5">
		<tr bgcolor="skyblue">
			<td align="center"><font color="silver">Minggu</font></td>
			<td align="center"><font color="gold">Senin</font></td>
			<td align="center"><font color="purple">Selasa</font></td>
			<td align="center"><font color="green">Rabu</font></td>
			<td align="center"><font color="Grey">Kamis</font></td>
			<td align="center"><font color="Yellow">Jumat</font></td>
			<td align="center"><font color="light green">Sabtu</font></td>
		</tr>

        <?php
	    $s=date("w",mktime (0,0,0,$bulan,1,$tahun));
	    for ($ds=1; $ds<=$s; $ds++) { 
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) {
		//jika minggu ke 0, maka buat baris baru
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==0) {
			echo "<tr>";
		}

		$warna="#000000"; //warna default
		$warnasel="skyblue"; //warna sel default

		//jika hari minggu beri warna merah
		if (date("l",mktime (0,0,0,$bulan,$d,$tahun))=="Sunday") {
			$warna="#FF0000";
		}

		//blok sel yang sesuai hari ini
		if ($hariini==$d) {
			$warna="white";
			$warnasel="smokewhite";
		}

		//beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle bgcolor=$warnasel> <span style=\"color:$warna\">$d</span></td>";

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==6) {
			echo "</tr>";
		}
	} 
	echo '</table>';
    ?>
			</div>
		</div>
</body>
</html>