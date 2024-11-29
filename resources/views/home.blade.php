{{-- @include('layouts.app')
<h1>Home</h1> --}}


@extends('layouts.master')
@section('content')
    <div style="margin: 35em 1em 0em -36em">
        <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-9 col-lg-7 col-md-6 col-sm-12">
                            <div class="text-justified align-items-center">
                                <h3 class="text-dark font-weight-semibold mb-2 mt-0">Hi, Welcome Back <span
                                        class="text-primary">Nick!</span></h3>
                                <p class="text-dark tx-14 mb-3 lh-3"> You have used the 85% of free plan storage. Please
                                    upgrade your plan to get unlimited storage.</p>
                                <button class="btn btn-primary shadow">Upgrade Now</button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="chart-circle float-md-end mt-4 mt-md-0" data-value="0.85" data-thickness="8"
                                data-color=""><canvas width="100" height="100"></canvas>
                                <div class="chart-circle-value circle-style">
                                    <div class="tx-18 font-weight-semibold">85%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-xs-12">
            <div class="card sales-card">
                <div class="row">
                    <div class="col-8">
                        <div class="ps-4 pt-4 pe-3 pb-4">
                            <div class="">
                                <h6 class="mb-2 tx-12 ">Today Orders</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <h4 class="tx-20 font-weight-semibold mb-2">5,472</h4>
                                </div>
                                <p class="mb-0 tx-12 text-muted">Last week<i class="fa fa-caret-up mx-2 text-success"></i>
                                    <span class="text-success font-weight-semibold"> +427</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="circle-icon bg-primary-transparent text-center align-self-center overflow-hidden">
                            <i class="fe fe-shopping-bag tx-16 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-xs-12">
            <div class="card sales-card">
                <div class="row">
                    <div class="col-8">
                        <div class="ps-4 pt-4 pe-3 pb-4">
                            <div class="">
                                <h6 class="mb-2 tx-12">Today Earnings</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <h4 class="tx-20 font-weight-semibold mb-2">$47,589</h4>
                                </div>
                                <p class="mb-0 tx-12 text-muted">Last week<i class="fa fa-caret-down mx-2 text-danger"></i>
                                    <span class="font-weight-semibold text-danger"> -453</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="circle-icon bg-info-transparent text-center align-self-center overflow-hidden">
                            <i class="fe fe-dollar-sign tx-16 text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-xs-12">
            <div class="card sales-card">
                <div class="row">
                    <div class="col-8">
                        <div class="ps-4 pt-4 pe-3 pb-4">
                            <div class="">
                                <h6 class="mb-2 tx-12">Profit Gain</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <h4 class="tx-20 font-weight-semibold mb-2">$8,943</h4>
                                </div>
                                <p class="mb-0 tx-12 text-muted">Last week<i class="fa fa-caret-up mx-2 text-success"></i>
                                    <span class=" text-success font-weight-semibold"> +788</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="circle-icon bg-secondary-transparent text-center align-self-center overflow-hidden">
                            <i class="fe fe-external-link tx-16 text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-xs-12">
            <div class="card sales-card">
                <div class="row">
                    <div class="col-8">
                        <div class="ps-4 pt-4 pe-3 pb-4">
                            <div class="">
                                <h6 class="mb-2 tx-12">Total Earnings</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <h4 class="tx-22 font-weight-semibold mb-2">$57.12M</h4>
                                </div>
                                <p class="mb-0 tx-12  text-muted">Last week<i class="fa fa-caret-down mx-2 text-danger"></i>
                                    <span class="text-danger font-weight-semibold"> -693</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="circle-icon bg-warning-transparent text-center align-self-center overflow-hidden">
                            <i class="fe fe-credit-card tx-16 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
