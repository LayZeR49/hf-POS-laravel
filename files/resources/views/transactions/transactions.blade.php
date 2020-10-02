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
                                        <a href="#">Transaction Log</a>
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
            <div class="row">
            
            <!----->
                    
                
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 m-b-35">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <h3 class="title-5">All Orders</h3>
                                        
                                    
                            </div>
                        </div>
                    </div>
                    

            
                <!----->
                
                <!-- modal static -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true"
            >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                <div class="modal-content text-center" >
                    <div class="card-header">
                            <strong>Order</strong> Details
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div id="orderDetailsBlock" class="card-body card-block" style="min-height: 600px;">
                            
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal static -->
        
                
                <div id="orderTableContainer" class="col-lg-12" style="min-height:600px;">
                    
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
        $("#orderTableContainer").load('{{ Route('transactionsDisplay') }}');
    });
    
    $(function() {
        $("#orderTableContainer").on("click", "div table tbody .order", function() {
            IDValue = $(this).data('val');
            $("#orderDetailsBlock").load('/transactionsDetails/' + IDValue);
            //to use named routes, ajax call and read response is needed
        });
    });
    
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
        placeholder: "Select a product",
        allowClear: true
    });
    });

</script>
@endsection



