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
            <td class="text-center"> <button data-toggle="modal" data-target="#staticModal"><i data-val="{{ $item->iid }}" class="fa fa-pencil-square-o itemEditButton"></i></a></button> </td>
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