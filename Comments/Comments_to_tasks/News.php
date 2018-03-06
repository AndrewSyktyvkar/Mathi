<!DOCTYPE html>
<html>
	<?php			
		if ($result = $mysqli->query("SELECT * FROM comments_to_tasks WHERE task_id = $N_task")) {
			$row_cnt = $result->num_rows;
		}
		
		$quantity=5;
		$limit=6;	
		
		if (empty(@$_GET['page']) || ($_GET['page'] <= 0)) {
			$page = 1;
		} else {
			$page = (int) $_GET['page']; 
		}		
		
		$pages = $row_cnt/$quantity;
		$pages = ceil($pages);
		$pages++;
		
		if ($page>$pages) $page = 1;
		
		if (!isset($list)) $list=0;
		
		$list=--$page*$quantity;
		
		$query = "SELECT * FROM comments_to_tasks WHERE task_id = $N_task LIMIT $quantity OFFSET $list";
		$result = $mysqli->query($query); $reg=0;
		
		while ($row = $result->fetch_assoc())
		{
		
		if ($row['comment_id']!=null) $reg=1;	
	?>	  

		<table align="center" >
			<tr>
				<th align="left" style="font-size: 15pt; text-decoration: underline;"><?php echo $row['comment_author']; ?></th>
			</tr>
			<tr>
				<td cellpadding="15px"><?php echo $row['comment_text']; ?></td>
			</tr>
			<tr>
				<td align="left" style="font-size: 8pt;" ><i><?php echo $row['comment_date']; ?></i></td>
			</tr>
			<tr>
				<td align="left">-----------------------------------------------------------------------------------</td>
			</tr>
		</table>

	<?php } if ($reg==0) { 
		echo '<p align="center"> В данный момент комментариев нет, но вы можете быть первым. </p>';
	} ?>

	<div align="center">
	<?php  
		if ($page>=1) {
			echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=1"><<</a> &nbsp; ';
			echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $page . '">< </a> &nbsp; ';
		}

		$this1 = $page+1;
		$start = $this1-$limit;
		$end = $this1+$limit;

		for ($j = 1; $j<$pages; $j++) {
			if ($j>=$start && $j<=$end) {
				if ($j==($page+1)) echo '<a href="' . $_SERVER['SCRIPT_NAME'] .'?page=' . $j . '"><strong style="color: #df0000">' . $j . '</strong></a> &nbsp; ';
					else echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $j . '">' . $j . '</a> &nbsp; ';
			}
		}

		if ($j>$page && ($page+2)<$j) {
			echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($page+2) . '"> ></a> &nbsp; ';
			echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($j-1) . '">>></a> &nbsp; ';
		}
	?>
</div>
<style>
	table {
		table-layout: fixed;
		width:450px
	}
	td {
		word-wrap:break-word;
	}
</style>
</html>