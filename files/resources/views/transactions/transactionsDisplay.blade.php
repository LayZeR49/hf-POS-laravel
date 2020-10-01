

<div class="table-responsive table--no-card m-b-30" >
    <table id="orderTable" class="table table-borderless table-earning" >
        <thead>
            <tr>
                <th style="width: 20%">Order ID</th>
                <th>Date</th>
                <th class="text-right">total</th>
            </tr>
        </thead>
        <tbody id="orderDisplayBlock">

		@foreach($orders as $order)
			<tr class="order" data-val="{{ $order->oid }}" data-toggle="modal" data-target="#largeModal">
				<td>{{ $order->oid }}</td>
				<td>{{ $order->odatetime }}</td>
				<td class="text-right">${{ $order->ototal }}</td>
			</tr>
		@endforeach
        </tbody>
    </table>
</div>


<script>


	$(function() {
	if ( ! $.fn.DataTable.isDataTable( '#orderTable' ) ) {
		$('#orderTable').DataTable();
	}
	else
	{
		$('#orderTable').DataTable().draw(false);
		
	}
	

	//$('#itemTable').DataTable.destroy();
} );
</script>