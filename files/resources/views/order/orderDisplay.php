<?php
    include_once 'php/dbh.inc.php';
	session_start();
?>

<?php
if(isset($_SESSION["orderList"]))
	$orderList = $_SESSION["orderList"];
	
	if(isset($_POST['buttonValue']))
	{
		$value = $_POST['buttonValue'];
		if($value == "reset")
			unset($_SESSION["orderList"]);
		
		if($value == "submit")
		{
			if(!empty($orderList)) 
			{
				$arrQty = array_values($orderList);
				$count = 0;
				$sum = $_SESSION['total'];
				
				$sql = "SELECT `AUTO_INCREMENT`
					FROM  INFORMATION_SCHEMA.TABLES
					WHERE TABLE_SCHEMA = 'hfdatabase'
					AND   TABLE_NAME   = 'receipt';";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$rid = $row['AUTO_INCREMENT'];
				
				$sql = "INSERT INTO receipt(rtotal) VALUES ('$sum');";
				mysqli_query($conn, $sql);
					
				foreach(array_keys($orderList) as $prod){
					$sql = "UPDATE product SET pquantity = pquantity - '$arrQty[$count]' WHERE pid='$prod' AND pquantity > '$arrQty[$count]';";
					mysqli_query($conn, $sql);
					
					$sql = "INSERT INTO list(rid, pid, pqty) VALUES ('$rid', '$prod', '$arrQty[$count]');";
					mysqli_query($conn, $sql);
					$count++;
				}
				
				
			}
			unset($_SESSION["orderList"]);
		}
		
		
		
	}
		

	if(!isset($_SESSION["orderList"]))
	{
		$orderList = array();

		$_SESSION["orderList"] = $orderList;
	}
	else
	{
		$orderList = $_SESSION["orderList"];
		
		if(isset($_POST['product']))
		{
			$product = $_POST['product'];
			$qty = $_POST['quantity'];
			
			if(!empty($orderList[$product]))
				$orderList[$product] += $qty;
			else
				$orderList[$product] = $qty;
			
			$_SESSION["orderList"] = $orderList;
		}
	}
	
	//print_r($orderList);
	//print_r(array_keys($orderList));
	//print_r(array_values($orderList));
?>

<?php
if(isset($_POST['noX']))
		$noX = $_POST['noX'];
else
		$noX = 0;
?>


<div class="table-responsive table--no-card m-b-30" style="width:100%;">
<?php if($noX == 1) echo '<br>'; ?>
    <table class="table table-borderless table-striped table-earning">
        <thead>
			<?php if($noX == 0) echo '<th style="width: 5%"></th>'; ?>
			<th>Name</th>
			<th class="text-right">Price</th>
			<th class="text-right">Quantity</th>
			<th class="text-right">Items Cost</th>
        </thead>
		<tbody>

		
		<?php
	$sum = 0;
	
	

	if(!empty($orderList)) {
		$sql = 'SELECT * FROM product WHERE pid IN ('.implode(',', array_map('intval', array_keys($orderList))).') ORDER BY FIELD(pid, '.implode(',', array_map('intval', array_keys($orderList))).');';
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0)
		{
			$arrQty = array_values($orderList);
			$count = 0;
			while ($row = mysqli_fetch_assoc($result))
			{
				$itemsCost = $row['pprice']*$arrQty[$count];
				
				echo '<tr>';
				if($noX == 0)
					echo '<td> <button data-val="'.$row['pid'].'"><i class="fa fa-times"></i></a></button> </td>';
				echo '<td>'.$row['pname'].'</td>
				<td class="text-right">'.$row['pprice'].'</td>
				<td class="text-right">'.$arrQty[$count++].'</td>
				<td class="text-right">'.$itemsCost.'</td>
				</tr>';
				
				$sum += $itemsCost;
			}
			
			$_SESSION['total'] = $sum;
		}

	?>
		<tr style="background-color: #222222;">
		<?php if($noX == 0) echo '<td></td>'; ?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>

		<tr style="background-color: #222222; color: #FFFFFF;">
            <?php if($noX == 0) echo '<td></td>'; ?>
            <td></td>
            <td class="text-right"></td>
            <th class="text-right">Total Cost: </th>
			<td class="text-right" style="color: #FFFFFF;"><strong><?php echo $sum ?></strong></td>
        </tr>
		
		<?php 
	}
	?>
                    
        </tbody>
    </table>
</div>