@extends('layouts.master')

@include('layouts.navbars.navbar-nav')

<form class="container" action="" method="post">
    <div class="row justify-content-end vertical-center">
        <div class="col-md-6" style="backf">

        </div>
        <div class="register-group col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Your Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email address">
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                <button class="btn btn-submit-reg" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
