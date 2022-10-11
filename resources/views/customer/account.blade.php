@extends('layouts.app')
@section('content')
<section class="light-banner customer-account-page" style="background-image: url('assets/images/white-pattern.png')">
    <div class="container">
        <div class="customer-white-wrapper">
            <div class="row no-mrg">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 no-padd">
                    <div class="blue-bg-wrapper bar_left">
                        <div class="blue-bg-heading">
                            <h4>Settings</h4>
                        </div>
                        <div class="customer-side-navigation navigation-tab-desing">
                            <ul class="list-unstyled">
                                <li><a href="customer-account.html" class="active">Account</a></li>
                                <li><a href="customer-appoitments.html">Appointments</a></li>
                                <li><a href="billing-customer.html">Billing</a></li>
                                <li><a href="customer-notification.html">Notifications</a></li>
                                <li><a href="customer-support-past-service.html">Support</a></li>
                            </ul>
                        </div>
                        <div class="blue-logo-block text-center max-width-100">
                            <a href="#"><img src="assets/images/logo/logo.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 no-padd">
                    <div class="row no-mrg">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 no-padd">
                            <div class="customer-account-forms">
                                <div class="form-headeing-second">
                                    <h4>Account Photo</h4>
                                </div>
                                <div class="customer-avatar-upload-div">
                                    <div class="customer-avatar-upload">
                                        <div class="customer-avatar-edit">
                                            <input type='file' id="customerimageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="customerimageUpload">Upload a profile pic</label>
                                        </div>
                                        <div class="customer-avatar-preview position-relative">
                                            <div id="customerimagePreview" style="background-image: url(assets/images/thumbnail.png);">
                                                <button class="delete-btn"><img src="assets/images/icons/delete.svg"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h3-p-design">
                                        <h3>Profile Photo</h3>
                                        <p>Upload a new profile photo.</p>
                                    </div>
                                </div>
                                <div class="h4-design">
                                    <h4>Account Information</h4>
                                </div>
                                <div class="customer-account-information">
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Name:</h6>
                                            <p class="name">Alex Jones</p>
                                            <span class="edit"></span>
                                        </li>
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Phone:</h6>
                                            <p class="phone"><a href="tel:+1 512-559-9582">+1 512-559-9582</a></p>
                                            <span class="edit"><a href="#" class="link-design-2">Edit</a></span>
                                        </li>
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Email:</h6>
                                            <p class="mail"><a href="mailto:ajone235@gmail.com">ajone235@gmail.com</a></p>
                                            <span class="edit"><a href="#" class="link-design-2">Edit</a></span>
                                        </li>
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Address:</h6>
                                            <address>Canary Dr., Austin, TX 78745</address>
                                            <span class="edit"><a href="#" class="link-design-2">Edit</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection