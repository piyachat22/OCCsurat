<head>
<style>
    table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		font-size: 14px;
		}

		td, th {
			border: 1px solid black;
			text-align: left;
			border-collapse: collapse;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
    </style>
</head>
<?php
		$conn = new mysqli('localhost', 'root', '', 'education');
		// require 'db/DbConnect.php';
		$sql = "SELECT * FROM colleges ";
		$result = $conn->query($sql);
		?>
	<div style="margin: 20px 50px 20px 30px;">
		<h2>ข้อมูลสถานที่</h2>
		<div align="right">
			<input type="button" value="พิมพ์" class="btn-outline-light" onclick="window.location.href='#';" style="font-size: 18px; margin-bottom: 15px; background-color:#2E8B57;" >
		</div>
		<table>
			<thead>
				<tr>
					<th >#</th>
					<th >ชื่อสถานที่</th>
					<th >สถานที่ตั้ง</th>
					<th >รายละเอียด</th>
					<!-- <th >lat</th>
					<th >lng</th> -->
					<th ></th>
					<th ></th>
				</tr>
			</thead>
			<tbody style="font-size: 14px;">
				<?php while($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td class="name"><?php echo $row['name']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['type']; ?></td>
						<!-- <td><?php echo $row['lat']; ?></td>
						<td><?php echo $row['lng']; ?></td> -->
						<td><input type="button" class="btn-outline-light font-size: 12px;" style="background-color:#DAA520;" value="แก้ไข" onclick="javascript:window.location='edit.php?id=<?php echo $row['id'] ;?>';"></td>
						<td><input type="button" class="btn-outline-light font-size: 12px;" style="background-color:#B22222;"value="ลบ" onclick="javascript:window.location='delete.php?id=<?php echo $row['id'] ;?>';"></td>
					</tr>
					<?php endwhile ?>
					
			</tbody>
		</table>
		<div align="right">
			<input type="button" value="ย้อนกลับ" class="btn-outline-light" onclick="window.location.href='index.php';" style="font-size: 18px; margin-top: 15px; background-color:mediumorchid;" >
		</div>
	</div>
	<center>
    <footer class="footer" style="margin-top: 100px ; background-color:mediumorchid;">
        <span>xxxxxxxxxxxxxxxxxxxxxx </span>
    </footer>
    </center>
	
