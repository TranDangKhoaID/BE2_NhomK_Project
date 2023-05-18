@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- my account area start -->
        <div class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> my account</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Shopping Options</h2>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Feature</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        
                                        <li>
                                            <a href="{{ route('change.password') }}">
                                                Change Password
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-9">
                        <div class="my-account-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                               @endif
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-list-ol"></i>
                                                Order history and details
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="account-title">
                                                        <h4>Here are the orders you've placed since your account was created.</h4>
                                                    </div>
                                                        <div class="table-responsive table-billing-history">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="border-gray-200" scope="col">Transaction ID</th>
                                                                        <th class="border-gray-200" scope="col">Date</th>
                                                                        <th class="border-gray-200" scope="col">Amount</th>
                                                                        <th class="text-center border-gray-200" scope="col">Status</th>
                                                                        <th class="border-gray-200" scope="col">Detail</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($billings as $billing)
                                                                    <tr>
                                                                        <td>#{{$billing->id}}</td>
                                                                        <td>{{$billing->created_at}}</td>
                                                                        <td>{{$billing->amount}}</td>
                                                                        @if($billing->status == 'wait for confirmation')
                                                                            <td class="text-center">
                                                                                <span class="label label-default">{{$billing->status}}</span>
                                                                            </td>
                                                                        @elseif($billing->status == 'confirmed')
                                                                            <td class="text-center">
                                                                                <span class="label label-warning">{{$billing->status}} - shipping</span>
                                                                            </td>
                                                                        @elseif($billing->status == 'delivered')
                                                                            <td class="text-center">
                                                                                <span class="label label-success">{{$billing->status}}</span>
                                                                            </td>
                                                                        @elseif($billing->status == 'cancel')
                                                                            <td class="text-center">
                                                                                <span class="label label-danger">{{$billing->status}}</span>
                                                                            </td>
                                                                        @endif
                                                                        <td><a href="{{route('billing', ['id' => $billing->id])}}">Show</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fa fa-user"></i>
                                                My personal information
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                                                <div class="delivery-details">
                                                <form action="{{ route('account.update.profile') }}" method="POST">
                                                    @csrf
                                                    <div class="list-style">
                                                        <div class="account-title">
                                                            <h4>Please be sure to update your personal information if it has changed.</h4>
                                                        </div>
                                                        <div class="form-name">
                                                            <label>First Name <em>*</em></label>
                                                            <input type="text" name="fname" placeholder="First Name" value="{{ $profile->fname ?? '' }}">
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Last Name <em>*</em></label>
                                                            <input type="text" name="lname" placeholder="Last Name" value="{{ $profile->lname ?? '' }}">
                                                        </div>

                                                        <div class="form-name">
                                                            <label>Address<em>*</em></label>
                                                            <input type="text" name="address" placeholder="Address" value="{{ $profile->address ?? '' }}">
                                                        </div>
                                                        <div class="form-name">
                                                            <label>City <em>*</em></label>
                                                            <input type="text" name="city" placeholder="City" value="{{ $profile->city ?? '' }}">
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Phone <em>*</em></label>
                                                            <input type="text" name="phone" placeholder="Phone" value="{{ $profile->phone ?? '' }}">
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Post Code <em>*</em></label>
                                                            <input type="text" name="post_code" placeholder="Post Code" value="{{ $profile->post_code ?? '' }}">
                                                        </div>
                                                        <div class="save-button">
                                                            <button>Save</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-button">
                                <div class="back-btn"> <a href="#">Back to your Account</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- my account area end -->
@section('footer')
        @include('footer')
@endsection