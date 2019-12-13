 <div class="container-fluid" style="background-color: black; padding-top: 8%;padding-bottom: 8%;">
    	<div class="container">
    		<div class="card" style="background: transparent;">
			    <div class="card-body" style="background: transparent;">
		        	<div class="card-deck" style="background: transparent;">
				  		<div class="card" style="background: transparent;">
					    	<div class="card-body">
						     	<h5 class="card-title" style="color: white;">VISI SMK NEGERI 2 LANGSA</h5>
						     	<?php  
									include "../koneksi.php";
									$sql = mysqli_query($koneksi, "SELECT * from tbl_visi");
									$data = mysqlI_fetch_array($sql);
								?>
						      	<p class="card-text" style="color: #666;"><?php echo $data['visi']; ?></p>
					    	</div>
						</div>
						<div class="card" style="background: transparent;">
					    	<div class="card-body">
						     	<h5 class="card-title" style="color: white;">MEDIA SOSIAL</h5>
						     	<a href="">
						      	<p class="card-text">
						        	<font style="color: indigo; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/facebook.png" width="30px"></font>
						        	<p>
						        		Facebook SMK Negeri 2 Langsa.
						        	</p>
						        </p></a>
						        <a href="">
						        <p class="card-text">
						        	<font style="color: indigo; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/twitter-box.png" width="30px"></font>
						        	<p>
						        		Twitter SMK Negeri 2 Langsa.
						        	</p>
						        </p></a>
						        <a href="">
						        <p class="card-text">
						        	<font style="color: indigo; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/ig2.png" width="30px"></font>
						        	<p>
						        		Instagram SMK Negeri 2 Langsa.
						        	</p>
						        </p></a>
						        <a href="">
						        <p class="card-text">
						        	<font style="color: indigo; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/yt2.png" width="30px"></font>
						        	<p>
						        		Youtube SMK Negeri 2 Langsa.
						        	</p>
						        </p></a>
					    	</div>
						</div>
						<div class="card" style="background: transparent;">
				    		<img src="img/smkBisa.png" class="card-img-top" alt="...">
						</div>
					</div>
				</div>
			</div>
			<hr style="border: 1px solid white; ">
			<font style="color: #666;"><center>&copy; GroupTefa. </font><a href="#">TeachingFactoring</a></center>
    	</div>
    </div>