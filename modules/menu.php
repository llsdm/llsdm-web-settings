<?php

include 'connect.php';
include 'count.php';

?>

<div class="menu-block">

	<div class="menu-title">
		<div style="margin-top: 2px; float: left">Билборды</div>
	</div>

	<div class="menu-block-value" style="background-color: #ccff90">
		<div class="menu-block-value-title">standard</div>
		<div class="menu-block-value-num" id="standard"><b><?php echo $icon[0]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #ccff90">
		<div class="menu-block-value" style="background-color: #ccff90; position: relative; top: -10px; outline: 1px solid #1f1f1f">
			<div class="menu-block-value-title">all</div>
			<div class="menu-block-value-num" id="all"><b><?php echo $icon[7]; ?></b></div>
		</div>
	</div>
	<div class="menu-block-value" style="background-color: #ccff90">
		<div class="menu-block-value-title">created</div>
		<div class="menu-block-value-num" id="created"><b><?php echo $icon[5]; ?></b></div>
	</div>

	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">Los Santos</div>
	</div>
	<div class="menu-block-value" style="background-color: #ff7d55">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[12]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">Las Venturas</div>
	</div>
	<div class="menu-block-value" style="background-color: #ff7d55">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[14]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">San Fierro</div>
	</div>
	<div class="menu-block-value" style="background-color: #ff7d55">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[16]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">other</div>
	</div>
	<div class="menu-block-value" style="background-color: #ff7d55">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[20]; ?></b></div>
	</div>


	<div class="menu-block-value" style="background-color: #ff5353">
		<div class="menu-block-value-title">ID:1260</div>
		<div class="menu-block-value-num"><b><?php echo $icon[9]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #6bbbff; width: 88px; border-style: solid; border-width: 0 1px 0 1px; border-color: #1f1f1f">
		<div class="menu-block-value-title">ID:1259</div>
		<div class="menu-block-value-num"><b><?php echo $icon[10]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #ffc555">
		<div class="menu-block-value-title">ID:1267</div>
		<div class="menu-block-value-num"><b><?php echo $icon[11]; ?></b></div>
	</div>

	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title" style="color: white">MAX_BILLBOARDS</div>
		<div class="menu-block-value-num" style="color: white"><b><?php echo $icon[19]; ?></b></div>
	</div>
	<div class="menu-block-value" style="background-color: #595959">
		<div class="menu-block-value-title" style="color: white">_LOGO</div>
		<div class="menu-block-value-num" style="color: white"><b><?php echo $icon[11]*2; ?></b></div>
	</div>

	<div class="menu-block-value" style="background-color: #3c3c3c; width: 270px; height: 25px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title" style="color: #686868; font-size: 14px; font-weight: bold; line-height: 25px; opacity: 1; text-align: left; margin-left: 25px; ">all objects: <?php echo $all; ?></div>
	</div>

	<!-- -->
	<div class="menu-title" style="margin-top: 14px">
		<div style="margin-top: 2px; float: left">Транспорт</div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">AMBULANCE</div>
	</div>
	<div class="menu-block-value" style="background-color: #d91434">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[22]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">COLLECTOR</div>
	</div>
	<div class="menu-block-value" style="background-color: #114a38">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[23]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">TRUCK</div>
	</div>
	<div class="menu-block-value" style="background-color: #927860">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[24]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">POLICE_VAN</div>
	</div>
	<div class="menu-block-value" style="background-color: #1552b8">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[25]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">POLICE_LS</div>
	</div>
	<div class="menu-block-value" style="background-color: #efb400">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[26]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">POLICE_SF</div>
	</div>
	<div class="menu-block-value" style="background-color: #6dba00">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[27]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">POLICE_LV</div>
	</div>
	<div class="menu-block-value" style="background-color: #13b7a2">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[28]; ?></b></div>
	</div>

	
	<div class="menu-block-value" style="background-color: #595959; width: 179px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title menu-block-city">POLICE_JEEP</div>
	</div>
	<div class="menu-block-value" style="background-color: #8c2b92">
		<div class="menu-block-value-num" style="color: white; line-height: 40px"><b><?php echo $icon[29]; ?></b></div>
	</div>

	<div class="menu-block-value" style="background-color: #3c3c3c; width: 270px; height: 25px; border-style: solid; border-width: 0 1px 0 0; border-color: #1f1f1f">
		<div class="menu-block-value-title" style="color: #686868; font-size: 14px; font-weight: bold; line-height: 25px; opacity: 1; text-align: left; margin-left: 25px; ">all vehicles: <?php echo $all_vehs; ?></div>
	</div>

</div>
