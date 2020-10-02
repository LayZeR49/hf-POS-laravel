@extends('layouts.layout')

@section('content')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Item List</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
	
            <!--BLANK-->
            <div class="container">
			     <div class="row m-t-30 ">					
					<!----->
						
                    
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 m-b-35">
                                    <div class="au-breadcrumb-content">
                                        <div class="au-breadcrumb-left">
                                            <h3 class="title-5">All Items</h3>
                                            
                                        </div>
                                            <button id="itemAddButton" type="button" class="btn btn-outline-secondary btn-lg" data-toggle="modal" data-target="#staticModal">
                                                <i class="fa fa-plus-square"></i>&nbsp; Add Item</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<!-- modal static -->
			<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-dialog-centered" role="document"  style="width: 360px;">
					<div class="modal-content text-center" >
						<div class="card-header itemAdd">
                                <strong>Item</strong> Details
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                        </div>

                        <div class="card-header itemEdit">
                                <strong>Edit</strong> Item
								<button id="modalClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                        </div>

                        
						
						<div class="card-body card-block itemAdd">
                                <form action="/items" method="POST" id="additemFormID">
                                @csrf
                                    <div class="form-group">
                                        <input class="itemInput" id="inputName" name="name" placeholder="Name" type="text" required />
                                        <input class="itemInput" id="inputPrice" name="price" placeholder="Price" type="number" required />
                                        <input class="itemInput" id="inputQuantity" name="quantity" placeholder="Quantity" type="number" required />
										<select class="itemInput" id="inputCategory" name="category" placeholder="Category" required >
										<option value="" disabled selected hidden>Category</option>

                                        @foreach($categories as $category)
                                            <option value="{{ $category->cid }}">{{ $category->cname }}</option>
                                        @endforeach
										
										</select>
									</div>
                                </form>
                            </div>

                        <div id="itemEditBlock" class="card-body card-block itemEdit">  
                        </div>  
						
						<div class="card-footer itemAdd">
                                <button id="modalItemAdd" type="submit" value="add" form="additemFormID" class="btn btn-success btn-sm submit" >
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button id="modalReset" type="reset" form="additemFormID" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                        </div>

                        <div class="card-footer itemEdit">
                                <button id="modalItemEdit" type="submit" value="edit" form="itemEditForm" class="btn btn-primary btn-sm submit">
                                    <i class="fa fa-check-square-o"></i> Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#smallmodal">
                                    <i class="fa fa-trash-o"></i> Delete
                                </button>
                        </div>


					</div>
				</div>
			</div>
			<!-- end modal static -->
			
			<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">DELETE</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Are you sure you want to delete?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button id="modalItemDelete" type="submit" value="delete" form="itemEditForm" class="btn btn-danger" data-dismiss="modal">Confirm</button>
						</div>
					</div>
				</div>
			</div>
                    

                       
							
					<!----->
					
                    <div id="itemTableContainer" class="col-lg-12">
                        
                        
                    </div>
                </div>
            </div>
            
        </div>

    </div>
@endsection

	
@section('scripts')	
	<script src="vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function() {
           $("#itemTableContainer").load('{{ Route('itemsDisplay') }}');
		   
        });
		
		$(function() {
			$(":submit").on("click", function(event) {
				event.preventDefault();

				submitValue = $(this).val();
				
				if(submitValue == "add") {
                    data = $("#additemFormID").serializeArray();

                    $.ajax({
                        url: '{{ Route('items.add') }}',
                        type: 'post',
                        data: data
                    });
                }
				else {
                    data = $("#itemEditForm").serializeArray();

                    if(submitValue == "edit") {

                        $.ajax({
                            url: '{{ Route('items.edit') }}',
                            type: 'put',
                            data: data
                        });
                    }
                    else if (submitValue == "delete") {
                        $.ajax({
                            url: '{{ Route('items.delete') }}',
                            type: 'delete',
                            data: data
                        });
                    }
                    else {
                        console.log("FormSubmitError: Incorrect Submit Value");
                    }
                }
					
				$("#itemTableContainer").load('{{ Route('itemsDisplay') }}');
				$("#modalReset").click();
				$("#modalClose").click();
			});
		});



        $(function() {
            $("#itemAddButton").click(function() {
                $(".itemEdit").css("display", "none");
                $(".itemAdd").css("display", "block");
            });
        });
		
		$(function() {
            $("#itemTableContainer").on("click", ".itemEditButton", function() {

                $(".itemEdit").css("display", "block");
                $(".itemAdd").css("display", "none");
                IDValue = $(this).data('val');
                
                $("#itemEditBlock").load('/itemsEdit/' + IDValue);
                //to use named routes, ajax call and read response is needed	
            });
        });
    </script>
@endsection