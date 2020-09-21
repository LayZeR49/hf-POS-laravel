
<?php


if(isset($_POST['submit']))
{
	echo "<script>alert(woah);</script>";
	$submit = $_POST['submit'];
	echo $submit;
	/*
	$submit = $_POST['submit'];
	
		if($submit == "edit" || $submit == "delete")
			$ID = $_POST['productID'];
		
		if($submit == "add" || $submit == "edit")
		{
			$name = $_POST['name'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			$category = $_POST['category'];
		}
		if($submit == "add")
			$sql = "INSERT INTO product (pname, pprice, pquantity, cid) VALUES ('$name', '$price', '$quantity', '$category');";
		else if ($submit == "edit")
			$sql = "UPDATE product SET pname='$name', pprice='$price', pquantity='$quantity', cid='$category'
					WHERE pid='$ID';";
		else
			$sql = "DELETE FROM product WHERE pid ='$ID';";


	mysqli_query($conn, $sql);
*/
}
?>


<div class="table-responsive table--no-card m-b-30">
    <table id="itemTable" class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
			<th style="width: 5%"></th>
            <th style="width: 15%" class="text-center">Product ID</th>
			<th>category</th>
            <th>name</th>
            <th  class="text-right">price</th>
            <th class="text-right">quantity</th>
			
        </tr>
    </thead>
    <tbody id="itemDisplayBlock">

	@foreach($items as $item)
		<tr>
            <td class="text-center"> <button data-toggle="modal" data-target="#staticModal"><i data-val="{{ $item->iid }}"class="fa fa-pencil-square-o itemEditButton"></i></a></button> </td>
            <td class="text-center">{{ $item->iid }}</td>
			<td>{{ $item->category->cname }}</td>
            <td>{{ $item->iname }}</td>
            <td class="text-right">{{ $item->iprice}}</td>
            <td class="text-right">{{ $item->iquantity }}</td>
		</tr>
    @endforeach
            </tbody>
        </table>
    
    </div>

<script>


	$(function() {
	if ( ! $.fn.DataTable.isDataTable( '#itemTable' ) ) {
		$('#itemTable').DataTable();
	}
	else
	{
		$('#itemTable').DataTable().draw(false);
		
	}
	

	//$('#itemTable').DataTable.destroy();
} );
</script>