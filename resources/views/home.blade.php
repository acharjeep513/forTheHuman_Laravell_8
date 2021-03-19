@extends('layouts.app')
@section('content')

<nav class="btn btn-lg nav navbar-expand-sm bg-light navbar-light sticky-top col"  >
    <div class="container">
        <button type="button" class="navbar-toggler" data-target="#manu" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" id="manu">
            <ul class="navbar-nav mr-auto">
                <li ><a style="color: white" href="index.php" class="nav-link"><strong>Home</strong></a></li>
                <ul></ul>

                <li><a style="color: white" href="detail-product.php" class="nav-link"><strong>Product</strong></a></li>
                <ul></ul>
                <li><a style="color: white" href="cart.php" class="nav-link"><strong>Search</strong></a></li>
                <ul></ul>
                <li><a style="color: white" href="cart.php" class="nav-link"><strong>Cart</strong></a></li>
                <ul></ul>

                <li><a style="color: white" href="login.php" class="nav-link"><strong>Sign In</strong></a></li>
                <ul></ul>

                <li><a style="color: white" href="register.php" class="nav-link"><strong>Sign out</strong></a></li>
                <ul></ul>

            </ul>
        </div>
    </div>
</nav >
@endsection



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
