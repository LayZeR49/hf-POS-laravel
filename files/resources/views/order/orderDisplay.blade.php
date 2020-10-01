<div class="table-responsive table--no-card m-b-30" style="width:100%;">
    <table class="table table-borderless table-striped table-earning">
        <thead>
			@if(!$isList)
				<th style="width: 5%"></th>
			@endif
			<th>Name</th>
			<th class="text-right">Price</th>
			<th class="text-right">Quantity</th>
			<th class="text-right">Items Cost</th>
        </thead>
		<tbody>

	@foreach($cart as $cartitem)
		<tr>
			@if(!$isList)
				<td> <button data-val="{{ $cartitem->coid }}" class="deleteCartItem"><i class="fa fa-times "></i></a></button> </td>
			@endif
			<td>{{ $cartitem->item->iname }}</td>
			<td class="text-right">{{ $cartitem->item->iprice }}</td>
			<td class="text-right">{{ $cartitem->iqty }}</td>
			<td class="text-right">{{ $cartitem->item->iprice * $cartitem->iqty }}</td>
		</tr>
	@endforeach

		<tr style="background-color: #222222;">
			@if(!$isList)
				<td></td>
			@endif
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr style="background-color: #222222; color: #FFFFFF;">
			@if(!$isList)
				<td></td>
			@endif
            <td></td>
            <td class="text-right"></td>
            <th class="text-right">Total Cost: </th>
			<td class="text-right" style="color: #FFFFFF;"><strong>{{ $total }}</strong></td>
        </tr>
        </tbody>
    </table>
</div>