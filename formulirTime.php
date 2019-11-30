<?php
	if (isset($_POST['submit'])) {
		var_dump($_POST);
	}
?>
<div id="content">
	<form action="" method="POST">
		<input type="text" id="time" name='waktu' value="--:--" onclick="ShowHideTable();">
		<div id="timeSelect" style="position: absolute; display: none;">
		<table border="1" style="width: 130px; float: left; margin-right: 5px;">
		<tr>
			<th colspan="6">Jam</th>
		</tr>		
		<script> 
			var sc = '';
			var hr = 0;
			for (i=1; i <= 6; i++) {
				sc+='<tr>';
				for ($j=0; $j < 4; $j++) {
					hr++; 
					sc+= "<td onclick='jam(this);' class='tdjam'>";
					sc+=hr.toString().padStart(2, "0"); 
					sc+= "</td>";
				}
				sc+='</tr>';
			}
			document.write(sc);
		</script>
		</table>
		<table border="1" style="width: 350px; float: left;">
		<tr>
			<th colspan="10">Menit</th>
		</tr>		
		<script> 
		var mt = 0;
		var sc = '';
			for (i=1; i <= 6; i++) {
			sc+= "<tr>"; 
				for (j=0; j < 10; j++) {
					sc+="<td onclick='menit(this);' class='tdmenit'>";
					sc+= mt.toString().padStart(2, "0"); 
					sc+="</td>";
				mt++; 
				}
			sc+="</tr>";
			}
			document.write(sc);
		</script>
		</table>
		</div>
		<input type="submit" value="Submit" name="submit">
	</form>
	<style>
		table{
			border-collapse: collapse;
			text-align: center;
			cursor: pointer;
			background: red;
			border-color: #FFFFFF;
		}
		td:hover{
			background: gray;
		}
		th{
			background: #000000;
			color: #FFFFFF;

		}
		input{
			padding: 5px 10px;
			font-size: 14px;
		}
	</style>
	<script type="text/javascript">
		var inpTime = document.getElementById('time');
		
		function menit(data) {

			var tdmenit = document.getElementsByClassName('tdmenit');
			for (var i = 0; i < tdmenit.length; i++) {
				tdmenit[i].style.background = 'red';
			}
			var dataTime = inpTime.value.split(":");
			var dataMenit = dataTime[1];
			inpTime.value = dataTime[0]+":"+data.innerHTML;
			data.style.background = 'gray';
		}

		function jam(data) {
			var tdjam = document.getElementsByClassName('tdjam');
			for (var i = 0; i < tdjam.length; i++) {
				tdjam[i].style.background = 'red';
			}
			var dataTime = inpTime.value.split(":");
			var dataMenit = dataTime[0];
			inpTime.value = data.innerHTML+":"+dataTime[1];
			data.style.background = 'gray';
		}

		function ShowHideTable() {
			var tbl = document.getElementById('timeSelect');
			if (tbl.style.display=='none') {
				tbl.style.display='block';
			}else{
				tbl.style.display='none';
			}
		}
	</script>
</div>