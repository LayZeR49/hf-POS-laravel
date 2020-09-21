
<div class="row">
	<div class="col-lg-6">
		{{ $order->odatetime }}
	</div>
	<div class="col-lg-6 ">
		Total: P{{ $order->ototal}}
	</div>
</div>

<br>

<table class="table table-data2 table-bordered" >
    <thead class="thead-light">
        <tr>
            <th>name</th>
            <th class="text-right">price</th>
            <th class="text-right">quantity </th>
			<th class="text-right">total</th>
        </tr>
    </thead>
    <tbody style="font-weight: normal;">

	@foreach($order->items as $item)
		<tr>
			<td>{{ $item->iname }}</td>
			<td class="text-right">{{ $item->iprice }}</td>
			<td class="text-right">{{ $item->pivot->iqty }}</td>
			<td class="text-right">{{ $item->iprice * $item->pivot->iqty }}</td>
					
		</tr>
	@endforeach
 
    </tbody>
</table>
