<html>
	<head>
		<title>
			TESTIMONI
		</title>
		<link rel="icon" type="image/png" href="../tugasakhir/logoo.png">
	</head>
	<head> 
	<style>
	table, th, td {
    border: 1px ;
    border-collapse: collapse;
	text : vijaya}
	</style>
	<style>
.dropbtn {
    background-color: white;
    color: white;
    padding: 11px;
    font-size: 10px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: pink;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>
	</head>
	<body bgcolor="#ac7339">
		<table width="80%" align="center" bgcolor="white">
			<tr>
				<td>
					<table width="100%" bgcolor="white">
						<tr>
						<th height="250px"><img src="../tugasakhir/labell.jpg" width="100%" height="100%" title="Ole_ole.com"></th>
						</tr>
						<tr>
						<th  bgcolor="white" height="10px"></th>
						</tr>
					</table>
					
					<table width="100%" background="pink1.png" align="center">
						<tr height="40px">
							<th width="50%">
								<div class="dropdown">
									<button class="dropbtn" bgcolor="pink"><font color ="BROWN" size="3" " align="left">Search..............................................................................................................
									<img src="../tugasakhir/pencarian.png" width="30px" height="30px" align="center" title="Search"></button>
									<div class="dropdown-content">
										<a href="batik.html">Batik		..............................................................................................................</a>
										<a href="food.html">Food		..............................................................................................................</a>
										<a href="miniatur.html">Miniatur	.......................................................................................................</a>
										<a href="cake.html">Cake		..............................................................................................................</a>
									</div>
								</div>
							</th> 
						
							<th width="35%">
								<table width="100%"bgcolor="white" align="center">
									<tr height="25px">
										<td width="100%"><font color ="BROWN" size="3" face="Lucida Calligraphy" align="left">  <?php echo $_GET["nama"]; ?> </td>
									</tr>
									<tr height="25px">
										<td width="100%"><font color ="BROWN" size="3" face="Lucida Calligraphy">  <?php echo $_GET["email"]; ?> </td>
									</tr>	
								</table>
							</th> 
							<th width="8%">
							<div class="dropdown">
									<button class="dropbtn" bgcolor="pink"><font color ="BROWN" size="3" " >
									<img src="../tugasakhir/orang.png" width="50px" height="50px" align="center" title="login"></button>
									<div class="dropdown-content">
										<a href="login.html">Log Out</a>
									</div>
								</div>
								</th>
						</tr>
					</table>
					<table width="100%" bgcolor="pink" align="center">
						<tr height="55px">
							<th><font color ="white" size="3" face="Lucida Handwriting"><a href="home.html">HOME</th> <th width="1%"></th>
							<th><font color ="white" size="3" face="Lucida Handwriting"><a href="aboutus.html">ABOUT US</a></th> <th width="1%"></th>
							<th><font color ="white" size="3" face="Lucida Handwriting"><a href="produk.html">PRODUCT</th> <th width="1%"></th>
							<th><font color ="white" size="3" face="Lucida Handwriting"><a href="newsand.html">NEWS & PROMOTIONS</th> <th width="1%"></th>
							<th><font color ="yellow" size="3" face="Lucida Handwriting"><a href="testimoni.html">TESTIMONI</th> <th width="1%"></th>
							<th><font color ="white" size="3" face="Lucida Handwriting"><a href="location.html">LOCATION</th>
						</tr>
						<tr height="10px">
							<th></th>
							<th></th>
						</tr>
					</table>
					<table width="100%" bgcolor="white" align="center"  ;>
						<tr>
				</body>
				<form action="testi2.php" method=get>
					Name:
					<br><input type="text" name="nama" size="30"><br>
					Email :
					<br><input type="text" name="email" size="30"><br>
					Gender :
					<br><input type="radio" name="genderr" value="male" checked> Male<br>
					<input type="radio" name="genderr" value="female">Female<br><br>
					Testimoni:
					<br><input type="text" name="testi" size="30"><br><br><br>
					<input type="submit" name="sbmit" value="Send" ><br><br><br><br><br><br><br><br><br>
	
				</form> </th>
	
				</tr>
						<tr height="200px">
							<th width="25%"><img src="../tugasakhir/cicak.jpg" width="150px" height="150px"  title="Testimoni @shireen_sungkar"><br>Shireen Sungkar</th>
							<th width="25%">
Nama			: <?php echo $_GET["nama"]; ?> <br>
jeni kelamin 	: <?php echo $_GET["gender"]; ?> <br>
Email			: <?php echo $_GET["email"]; ?> <br>
hobby anda adalah <?php echo $_GET["hoby"]; ?>  dan drawing
<br><br>

<?php echo $_GET["testi"]; ?> 
							</th>			
						</tr>
						<tr height="200px">
							<th width="25%"><img src="../tugasakhir/testimoni/shiren.jpg" width="150px" height="150px"  title="Testimoni @shireen_sungkar"><br>Shireen Sungkar</th>
							<th width="25%">Thank you very much<br> I very satisfied with the items ordered at ole-ole Indonesia ...I Love Indonesia</th>			
						</tr>
						<tr height="200px">
							<th width="25%"><img src="../tugasakhir/testimoni/bela.jpg" width="150px" height="150px  title="Testimoni @novi_bela13"><br>Bela Novitasari</th>
							<th width="25%">Ole-ole Indonesia very Good.. wait my next order</th>			
						</tr>
						<tr height="200px">
							<th width="25%"><img src="../tugasakhir/testimoni/amelia.jpg" width="150px" height="150px"  title="Testimoni @amelia_zahni99"><br>Zahniratul Amelian</th>
							<th width="25%">Miniatur very beautyfull. I statisfied</th>			
						</tr>
						<tr height="200px">
							<th width="25%"><img src="../tugasakhir/testimoni/mahmud.jpg" width="150px" height="150px"  title="Testimoni @mahmud_ma33"><br>Ali Mahmud Zaim</th>
							<th width="25%">number one for Ole-ole indonesia (y)</th>			
						</tr>
						<tr height="200px">
							<th width="25%"><img src="../tugasakhir/testimoni/sarah.jpg" width="150px" height="150px"  title="Testimoni @sarasa_sarah"><br>Sara Rahmad Yuni</th>
							<th width="25%">I am Sarah from America<br>but I am very proud of the product Indonesian<br>at Ole-ole Indonesia</th>			
						</tr>
					</table>
					<table>
						<tr height="40px">
							<th><p style="font:bold 30px Gabriola ;color:blue" align=center><marquee> PUSAT OLEH-OLEH INDONESIA PUSAT OLEH-OLEH INDONESIA PUSAT OLEH-OLEH INDONESIA PUSAT OLEH-OLEH INDONESIA PUSAT OLEH-OLEH INDONESIA </marquee></p></th>
						</tr>
						<tr height="10px">
							<th></th>
						</tr>
						<tr>
							<th><a href="#TOP"><br> Back to top </a></th>
						</tr>
					</table>
					
					<table width="100%" bgcolor="white" align="center">
						<tr height="120px">
							<th ><img src="../tugasakhir/logoo.png" width="180px" height="180px" title="Ole_ole.com"></th>
							<th >
								<pre><font color ="black" align="left" size="3px" face="Tahoma"> PT.OLEH-OLEH INA Tbk. <br>  Jl.Ifa Kholifah no 001 Jakarta Selatan  <br> Tlep. 021-31631631,31131131 <br>  Fax. 021-31231231  </pre>
							</th>
							<th ><a href="downloadapp.html"><img src="../tugasakhir/app.png" width="270px%" height="90px" title="App play store"><br><br><br><br></th>
							<th >
								<table width="100%"bgcolor="white" align="center">
									<tr height="60px">
										<th width="100%"><img src="../tugasakhir/r.png" width="370px" height="90px" title="PT. OLEH-OLEH INA Tbk."><br><br></th>
									</tr>
									<tr height="60px">
										<th width="100%"><pre>                           </pre></th>
									</tr>	
								</table>
							</th>
						</tr>
						<tr height="10px">
							<th></th>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>