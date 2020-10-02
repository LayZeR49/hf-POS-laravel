@extends('layouts.layout')

@section('content')
        <!-- PAGE CONTENT -->
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
                                            <a href="#">Data Analysis</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END TOP ROW->

            <!-- MAIN CONTENT-->
			<div class="page-content--bgf7">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h3 class="title-5 m-b-35">Graphs / Charts</h3> 
                        <div class="row">
                             
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Sales Composition</h3>
										<h5>March 1-7, 2020</h5>
                                        <canvas id="doughutChart"></canvas>
                                    </div>
                                </div>
                            </div>
          
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Weekly Sales</h3>
										<h5>March 1-7, 2020</h5>
                                        <canvas id="singelBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

        </div>
        <!-- END PAGE CONTENT -->

    </div>

@endsection
