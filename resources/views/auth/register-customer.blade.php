@extends('layouts.app')

@section('content')
<section class="authentication-sec light-banner signup-page" style="background-image: url('assets/images/white-pattern.png')">
    <div class="container customer_signup_container signup_all_container">
        <div class="signup-selection-wrapper">
            <h2>Welcome to the Canary Clean family.</h2>
            <div class="selection-wrap d-flex justify-content-spacebw">
                <div class="select-inner-box position-relative customer active">
                    <div class="select-signup-img">
                        <img src="assets/images/customer.png">
                    </div>
                    <div class="select-signup-cntnt">
                        <p>I’m a Customer</p>
                    </div>
                    <a href="{{route('signup-customers')}}" class="link-overlay"></a>
                </div>
                <div class="select-inner-box position-relative cleaner">
                    <div class="select-signup-img">
                        <img src="assets/images/cleaner.png">
                    </div>
                    <div class="select-signup-cntnt">
                        <p>I’m a Cleaner</p>
                    </div>
                    <a href="{{route('signup-cleaner')}}" class="link-overlay"></a>
                </div>
            </div>
        </div>
        <div class="authentication-form-wrapper">
            <form class="form-design" method="post" action="{{route('register')}}" enctype="multipart/form-data">
                @csrf

                @foreach ($errors->all() as $error)
                {{ $error }}<br />
                @endforeach
                <input type="hidden" name="user_type" value="customer">
                <div class="row no-mrg">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 no-padd">
                        <div class="blue-bg-wrapper">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload">Upload a profile pic</label>
                                    @error('image')<div class="alert ">{{ $message }}</div>@enderror
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url(assets/images/thumbnail.png);">
                                        <button class="delete-btn"><img src="assets/images/icons/delete.svg"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouph textarea-single-design">
                                <label>About yourself (Optional)</label>
                                <textarea name="bio"></textarea>
                                @error('bio')<span class="alert ">{{ $message }}</span>@enderror
                            </div>
                            <div class="folow-us">
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li><span>Follow Us</span></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="blue-logo-block text-center">
                                <a href="#"><img src="assets/images/logo/logo.svg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 no-padd">
                        <div class="singup_auth-design">
                            <div class="account-header-heading text-center">
                                <h4><img src="assets/images/icons/white-circle-user.svg"> Account Info</h4>
                            </div>
                            <div class="form-heading-h4 text-center">
                                <h4>Please enter the following information to create your account</h4>
                            </div>
                            <div class="signup-form-grouph">
                                <div class="form-flex two-column">
                                    <div class="form-left-block">
                                        <div class="form-grouph input-design mb-30">
                                            <input type="text" placeholder="First name" name="first_name">
                                            @error('first_name')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="text" placeholder="Last Name" name="last_name">
                                            @error('last_name')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="email" name="email" placeholder="Email (this will be your login)">
                                            @error('email')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="text" name="address" placeholder="Address">
                                            @error('address')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph mb-30 input-select-abs">
                                            <div class="inputs-box">
                                                <input type="text" name="city" placeholder="City">
                                                @error('city')<span class="alert ">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="selecti-box">
                                                <select class="select-custom-design" name="state">
                                                    @foreach ($states as $state )
                                                    <option value='{{ $state->id }}'>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')<span class="alert ">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-right-block">
                                        <div class="form-grouph input-design mb-30">
                                            <input type="password" name="password" placeholder="Password">
                                            @error('password')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                                            @error('confirm_password')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="number" name="contact_number" placeholder="Phone Number">
                                            @error('contact_number')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="number" name="apt_or_unit" placeholder="Apt # or Unit #">
                                            @error('apt_or_unit')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph input-design mb-30">
                                            <input type="number" name="zip_code" placeholder="Zip">
                                            @error('zip_code')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-grouph select-design mb-30">
                                            <select class="select-custom-design" name="payment_method">
                                                <option disabled>Payment Method</option>
                                                <option value="PayPal">PayPal</option>
                                                <option value="Direct Deposit">Direct Deposit</option>
                                            </select>
                                            @error('payment_method')<span class="alert ">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="checkbox" name="term">
                                @error('term')<span class="alert ">{{ $message }}</span>@enderror
                                <div class="form-flex two-column">
                                    <div class="form-left-block">
                                        <div class="terms-text">
                                            <p>By clicking “Create My Account”, you agree with all Canary Clean’s <a href="#" class="link-design-2">terms and conditions</a> and <a href="#" class="link-design-2">privacy policy</a></p>
                                        </div>
                                    </div>
                                    <div class="form-right-block">
                                        <div class="form-grouph submit-design mb-30">
                                            <input type="submit" placeholder="Create My Account" value="Create My Account" class="subit-btn-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection