<?php
	include "con.php";
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
            <th>ID</th><th>FILE NAME</th><th>SIZE (KB)</th><th>DOWNLOADS</th><th>ACTION</th><th>DELETE</th>

			</thead>
				<tbody>
					<?php
						$sql1=mysqli_query($con,"select * from `file`");
						while($urow=mysqli_fetch_array($sql1)){
							?>
								<tr>
									<td><?php echo $urow['id']; ?></td>
									<td><?php echo $urow['name']; ?></td>
									<td><?php echo $urow['siz']; ?></td>
									<td><?php echo $urow['down']; ?></td>
									<td><button class="btn btn-success down" value = "<?php echo $urow['id']; ?>"> Download</button> | <button class="btn btn-danger delete" value="<?php echo $urow['id']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>									
									</td>
								</tr>
							<?php
						}					
					?>
				</tbody>
			</table>
		<?php
	}
?>