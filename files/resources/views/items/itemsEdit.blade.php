

<form action="itemEdit.php" method="POST" id="itemEditForm">
@csrf
    <div class="form-group">
        <input class="itemInput" name="productID" value="{{ $item->iid }}" style="display: none;">
        <input class="itemInput" name="name" value="{{ $item->iname }}" placeholder="Name" type="text" required />
        <input class="itemInput" name="price" value="{{ $item->iprice }}" placeholder="Price" type="number" required />
        <input class="itemInput" name="quantity" value="{{ $item->iquantity }}" placeholder="Quantity" type="number" required />
		<select id="editCategory" name="category" placeholder="Category" required >

		@foreach($categories as $category)
			<option value="{{ $category->cid }}">{{ $category->cname }}</option>
		@endforeach
		
		</select>
    </div>
</form>

	<script>
	$(function() {
		$("#editCategory").val({{ $item->cid }});
		
	});
	</script>