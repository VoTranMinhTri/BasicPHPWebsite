<?php
$ds1=array(
array("Noidung"=>"Research"),
array("Noidung"=>"Design and Development</"),
array("Noidung"=>"Porting and Optimization"),
array("Noidung"=>"System integration"),
array("Noidung"=>"Verification, Validation and Testing"),
array("Noidung"=>"Maintenance and Support"),
);
$ds2=array(
array("Noidung"=>"Multimedia Systems"),
array("Noidung"=>"Digital media adapters"),
array("Noidung"=>"Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms"),
);
?>
 	<!-- start tabs -->
				   	<section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">overview</label>
			
		            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
			        <label for="tab-2" class="tab-label-2">consumer</label>
			
		            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
			        <label for="tab-3" class="tab-label-3">comment</label>
	          
				    <div class="clear-shadow"></div>
					
			        <div class="content">
				        <div class="content-1">
				        	<p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
							<ul>
							<?php
							foreach($ds1 as $tp1)
							{
							?>
								<li><?php echo $tp1["Noidung"]?></li>
							<?php
							}
							?>
							</ul>
							<div class="clear"></div>
						</div>
				        <div class="content-2">
							<p class="para"><span>WELCOME </span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
							<ul class="qua_nav">
									<?php
							foreach($ds2 as $tp2)
							{
							?>
								<li><?php echo $tp2["Noidung"]?></li>
							<?php
							}
							?>
							</ul>
						</div>
				        <div class="content-3" style="height:100%;">
						<div style="opacity:100;position:relative;height:300px;overflow-y: scroll;">
							<ul style="margin-left:0;" id="chatbox">
							<?php
							foreach($dsbl as $tp)
							{
							?>
							<li style='border: 1px solid rgb(224, 224, 224); padding:5px;margin-bottom:2px;width:98%;font-size:20px;'>
							<?php 
							include("../DB.php");
							$ma=$tp["MATK"];
							$result=$db->prepare('select USERNAME from TAIKHOAN WHERE MATK=:ma');
							$result->bindValue(':ma',$ma,PDO::PARAM_INT);
							$result->execute();
							$ten=$result->fetchALL();
							echo $ten[0][0]." - ".$tp["THOIGIAN"]." - ".$tp["MASP"]." - ".$tp["SIZE"]
							?><p><?php echo $tp["NOIDUNG"]?></p></li>
							<?php
							}
							?>
							</ul>
						</div>
							<form style="position:absolute;bottom:25px;width:98%;">
							<textarea id="usermsg" style="opacity:100;width:98%;border: 1px solid rgb(224, 224, 224);top:auto;left:4px;height:100px;resize:none;font-size: 20px;" placeholder="Comment here..."></textarea>
							</form>
							<div ></div>
							<div class="clear"></div>
						</div>
			        </div>
			        </section>
		         	<!-- end tabs -->
			   	</div>