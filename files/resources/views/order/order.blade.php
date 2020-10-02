@extends('layouts.layout')

@section('content')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- TOP ROW -->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Order Creation</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END TOP ROW-->

            			
            <!-- MAIN CONTENT -->
            <div class="container">
                <div class="row">

                    <!-- CONTAINER TOP ROW -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 m-b-35">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <h3 class="title-5"><strong>Order</strong> Details</h3>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER TOP ROW -->
						
                    <!-- ITEM ORDER -->
					<div style="width:100%; min-height: 700px;" class="text-center">
						<div class="card-body card-block" >

                            <!-- ADD ITEM ORDER FORM -->
                            <form action="" method="POST" id="orderListForm">
                                @csrf
                                <div class="row">

                                    <!-- ITEM SELECTION -->
                                    <div class="col-6 col-md-4">
                                        <select id="itemSelect" style="width: 50%" class="js-example-basic-single" name="product" required>
                                            <option style="display: none;"></option>
                                            @foreach($items as $item)
                                                <option class="itemChoice" value="{{ $item->iid }}" data-price="{{ $item->iprice }}" data-max="@isset($item->cart->iqty){{ $item->iquantity - $item->cart->iqty }}@else{{ $item->iquantity }}@endisset">{{ $item->iname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <!-- END ITEM SELECTION -->

                                    <!-- ITEM PRICE DISPLAY -->
                                    <div class="col-3 col-md-2">
                                        <span><strong>Price: &nbsp;&nbsp;&nbsp;</strong></span>
                                        <span id="priceP">0</span>
                                    </div>
                                    <!-- END ITEM PRICE DISPLAY -->

                                    <!-- ITEM QUANTITY INPUT -->
                                    <div class="col-3 col-md-2">
                                        <input id="inputQuantity" name="quantity" type="number" placeholder="Qty." min="1" max="10" required>
                                    </div>
                                    <!-- END ITEM QUANTITY INPUT -->

                                    <!-- ITEM ADD BUTTON -->
                                    <div class="col-3 col-md-2">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i> Add
                                        </button>
                                    </div>
                                    <!-- END ITEM ADD BUTTON -->

                                </div>
                            </form>
                            <!-- END ADD ITEM ORDER FORM -->

                        </div>

                        <br><br>

                        <!-- ORDER LIST -->
                        <div id="orderListTableContainer" class="col-lg-12">
                        </div>
                        <!-- END ORDER LIST -->

                        <!-- SUBMIT/RESET BUTTONS -->
						<div>
                            <button id="orderDetailsButton" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#largeModal">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#smallmodal">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                        <!-- END SUBMIT/RESET BUTTONS -->
					</div>
                    <!-- END ITEM ORDER -->

                    <!-- RESET CONFIRMATION MODAL -->
                    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">

                                <!-- RESET CONFIRMATION MODAL HEADER -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="smallmodalLabel">RESET</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!-- END RESET CONFIRMATION MODAL HEADER -->

                                <!-- RESET CONFIRMATION MODAL BODY -->
                                <div class="modal-body">
                                    <p>
                                        Are you sure you want to reset?
                                    </p>
                                </div>
                                <!-- END RESET CONFIRMATION MODAL BODY -->

                                <!-- RESET CONFIRMATION MODAL FOOTER-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button id="reset" value="reset" type="reset" class="btn btn-danger" data-dismiss="modal">Confirm</button>
                                </div>
                                <!-- END RESET CONFIRMATION MODAL FOOTER -->
                            </div>
                        </div>
                    </div>
                    <!-- END RESET CONFIRMATION MODAL -->

                    <!-- SUBMIT RESPONSE MODAL -->
                    <div class="modal fade" id="submitResponsemodal" tabindex="-1" role="dialog" aria-labelledby="submitResponsemodalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">

                                <!-- SUBMIT RESPONSE MODAL HEADER -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="submitResponsemodalLabel">SUCCESS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!-- END SUBMIT RESPONSE MODAL HEADER -->

                                <!-- SUBMIT RESPONSE MODAL BODY -->
                                <div class="modal-body">
                                    <p id="submitResponse">
                                        Order Sucessfully Placed!
                                    </p>
                                </div>
                                <!-- END SUBMIT RESPONSE MODAL BODY -->

                                <!-- SUBMIT RESPONSE MODAL FOOTER-->
                                <div class="modal-footer">
                                </div>
                                <!-- END SUBMIT RESPONSE MODAL FOTTER-->

                            </div>
                        </div>
                    </div>
                    <!-- END SUBMIT RESPONSE MODAL -->
                    
                    <!-- ORDER DETAILS MODAL -->
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                            <div class="modal-content text-center" >

                                <!-- ORDER DETAILS MODAL HEADER -->
                                <div class="card-header">
                                        <strong>Order</strong> Details
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- END ORDER DETAILS MODAL HEADER -->
                                
                                <!-- ORDER DETAILS MODAL BODY -->
                                <div id="orderDetailsBlock" class="card-body card-block" style="min-height: 600px;"> 
                                </div>
                                <!-- END ORDER DETAILS MODAL BODY -->

                                <!-- ORDER DETAILS MODAL FOOTER -->
                                <div class="card-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button id="submit" value="submit" type="submit"  class="btn btn-primary" data-dismiss="modal">Confirm</button>
                                    <button id="submitResponseButton" style="display: none;" data-toggle="modal" data-target="#submitResponsemodal"></button>
                                </div>
                                <!-- END ORDER DETAILS MODAL FOOTER -->
                            </div>
                        </div>
                    </div>
                    <!-- END ORDER DETAILS MODAL -->
                
                </div>
            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END PAGE CONTENT -->

    </div>	
@endsection
	
@section('scripts')
<script>

    //SELECT2
    $(function() {
        $('.js-example-basic-single').select2({
            placeholder: "Select a product",
            allowClear: true,
            width: 'resolve',
        });
    });

    //CSRF TOKEN (AJAX CALLS USING ONLY BUTTON [no @csrf])
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //DISPLAY ITEM ORDERS
    $(function() {
        $("#orderListTableContainer").load('{{ Route('orderDisplay') }}');
        $("#orderDetailsBlock").load('{{ Route('orderDisplay.list') }}');
    });

    //ADD ITEM ORDER
    $(function() {
        $("form").on("submit", function(event) {
            event.preventDefault();

            data = $(this).serializeArray();
            
            $.ajax({
                url: '{{ Route('order.add') }}',
                type: 'post',
                data: data,
                success: function(){  
                    var option = $('.itemChoice[value=' + data[1]["value"] + ']');
                    var max = option.data('max');
                    max = max - data[2]["value"];
                    option.data('max', max);
                }
            });


            $("#orderListTableContainer").load('{{ Route('orderDisplay') }}');
            $("#orderDetailsBlock").load('{{ Route('orderDisplay.list') }}');
            
            $('#itemSelect').val('').trigger('change')
            $("#inputQuantity").val(' ');
        
        });
    });

    //Update order details table only when displayed
    //Small amount of loading before order details correctly appears
    /*
    $(function() {
        $("#orderDetailsButton").on("click", function(event) {
            event.preventDefault();

            $("#orderDetailsBlock").load('{{ Route('orderDisplay.list') }}');
        });
    });
    */

    //DELETE ITEM ORDER
    $(function() {
        $("#orderListTableContainer").on("click", ".deleteCartItem", function() {
            IDValue = $(this).data('val');
            console.log(IDValue);
            $.ajax({
                url: 'order/delete/' + IDValue, //to use named routes, ajax call and read response is needed
                type: 'delete',
            });

            $("#orderListTableContainer").load('{{ Route('orderDisplay') }}');
            $("#orderDetailsBlock").load('{{ Route('orderDisplay.list') }}');
        });
    });
    
    //EMPTY ITEM ORDER
    $(function() {
        $("#reset").on("click", function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ Route('order.clear') }}',
                type: 'delete'
            });
            $("#orderListTableContainer").load('{{ Route('orderDisplay') }}');
            $("#orderDetailsBlock").load('{{ Route('orderDisplay.list') }}');
        });
    });

    //SUBMIT ITEM ORDER
    $(function() {
        $("#submit").on("click", function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ Route('order.order') }}',
                type: 'post',
                success: function(response){                
                    if(response == "empty") {
                        $("#submitResponsemodalLabel").html("FAILED");
                        $("#submitResponse").html("Order List is Empty!");
                    }
                    else {
                        $("#submitResponsemodalLabel").html("SUCCESS");
                        $("#submitResponse").html("Order Sucessfully Placed!");
                    }

                    $("#submitResponseButton").click();
                }
            });
            $("#orderListTableContainer").load('{{ Route('orderDisplay') }}');
            $("#orderDetailsBlock").load('{{ Route('orderDisplay.list') }}');
        });
    });

    //CHANGE ITEM SELECTION (CHANGE PRICE DISPLAY AND INPUT MAX)
    $(document).ready(function(){
        $("select.js-example-basic-single").change(function(){
            var price = $(this).children("option:selected").data('price');
            var max = $(this).children("option:selected").data('max');
            $("#priceP").html(price);
            
            $("#inputQuantity").attr('max', max);

            /*
            if(max == 0) {
                $("#inputQuantity").attr('disabled', true);
            }
            */ 
        });
    });
</script>

@endsection
