@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="images/icon/hf01.png" alt="CoolAdmin" width="250px" height="150px">
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="/">
                                    <i class="fas fa-tachometer-alt"></i>Daily Overview
                                    <span class="bot-line"></span></a>
                            </li>
							<li>
                                <a href="/analysis">
                                    <i class="fas fa-chart-bar"></i>
                                    <span class="bot-line"></span>Sales Statistics</a>
                            </li>
                            <li>
                                <a href="/items">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Manage Products</a>
                            </li>
							<li>
                                <a href="/transactions">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>View Orders</a>
                            </li>
							<li>
                                <a href="#">
                                    <i class="fas fa-plus"></i>
                                    <span class="bot-line"></span>Create Order</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="php/logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Overview</a>
                        </li>
                        <li>
                            <a href="items.php">
                                <i class="fas fa-shopping-basket"></i>Items</a>
                        </li>
                        <li>
                            <a href="analysis.html">
                                <i class="fas fa-chart-bar"></i>Analysis</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-copy"></i>Transactions</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="php/logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

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
                                            <a href="#">Order Creation</a>
                                        </li>
                                    </ul>
                                </div>
								<!--
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for transactions...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
								-->
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
                                            <h3 class="title-5"><strong>Order</strong> Details</h3>
                                            
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
						


					<div style="width:100%; min-height: 700px;" class="text-center">
						
						
						<div class="card-body card-block" >
                                <form action="" method="POST" id="orderListForm">
									<div class="row">
									  <div class="col-6 col-md-4">
											<select style="width: 50%" class="js-example-basic-single" name="product" required>
												<option style="display: none;"></option>
												@foreach($items as $item)
                                                    <option value="{{ $item->iid }}" data-price="{{ $item->iprice }}" data-max="{{ $item->iquantity }}">{{ $item->iname }}</option>
                                                @endforeach
                                            </select>
										</div>

										
										<div class="col-3 col-md-2">
											<span><strong>Price: &nbsp;&nbsp;&nbsp;</strong></span>
											<span id="priceP">0</span>

										</div>
										<div class="col-3 col-md-2">

											<input id="inputQuantity" name="quantity" type="number" placeholder="Qty." min="1" max="10" required>
										</div>
										<div class="col-3 col-md-2">
											<button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check"></i> Add
                                </button>
										</div>
										
                                    </div>
                                </form>
								<br><br>
				<div id="orderListTableContainer" class="col-lg-12">
                        
                        
                    </div>
                            </div>
						
						<div>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#largeModal">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#smallmodal">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
					</div>
			
			
			
			<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">RESET</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Are you sure you want to reset?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button id="reset" value="reset" type="reset" class="btn btn-danger" data-dismiss="modal">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			
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
						
						<div class="card-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button id="submit" value="submit" type="submit"  class="btn btn-primary" data-dismiss="modal">Confirm</button>
						</div>
					</div>
				</div>
			</div>
                    

                       
							
					<!----->
					
                    <div class="col-lg-12">
                        
                    </div>
                </div>
            </div>
            
        </div>

    </div>

	

	
@endsection
	
@section('scripts')
	  <script>
$(function() {
    $('.js-example-basic-single').select2({
    placeholder: "Select a product",
    allowClear: true,
	 width: 'resolve'
});
});

$(function() {
   $("#orderListTableContainer").load("newOrderDisplay.php");
   $("#orderDetailsBlock").load("newOrderDisplay.php", {
	   noX: 1
   });
});

$(function() {
	$("form").on("submit", function(event) {
		event.preventDefault();

		data = $(this).serializeArray();

		$("#orderListTableContainer").load("newOrderDisplay.php", data);
		$("#orderDetailsBlock").load("newOrderDisplay.php", {
			noX: 1
		});
		
		$("#inputQuantity").val(' ');
		
		
	});
});
		
$(function() {
	$("#reset").on("click", function(event) {
		event.preventDefault();
		
		value = $(this).val();
		$("#orderListTableContainer").load("newOrderDisplay.php", {
			buttonValue: value
		});
		$("#orderDetailsBlock").load("newOrderDisplay.php", {
			noX: 1
		});
	});
});

$(function() {
	$("#submit").on("click", function(event) {
		event.preventDefault();
		
		value = $(this).val();
		$("#orderListTableContainer").load("newOrderDisplay.php", {
			buttonValue: value
		});
		$("#orderDetailsBlock").load("newOrderDisplay.php", {
			noX: 1
		});
	});
});

$(document).ready(function(){
    $("select.js-example-basic-single").change(function(){
        var price = $(this).children("option:selected").data('price');
		var max = $(this).children("option:selected").data('max');
		$("#priceP").html(price);
		
		$("#inputQuantity").attr('max', max);
    });
});
		
		

  </script>

@endsection
