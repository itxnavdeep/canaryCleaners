<section class="light-banner customer-account-page" style="background-image: url('assets/images/white-pattern.png')">
    <div class="container">
        <div class="customer-white-wrapper">
            <div class="row no-mrg">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 no-padd">
                    <div class="blue-bg-wrapper bar_left">
                        <div class="blue-bg-heading">
                            <h4>Settings</h4>
                        </div>
                        @include('common.sidebar')
                        <div class="blue-logo-block text-center max-width-100">
                            <a href="javascript::void(0)"><img src="assets/images/logo/logo.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 no-padd">
                    <div class="row no-mrg">
                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 no-padd cleaner_account_section">
                            <div class="customer-account-forms">
                                <div class="form-headeing-second mb-4">
                                    <h3 class="border-bottom pb-3">Account Photo</h3>
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
                                <div class="customer-account-information cleaner_account_2">
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Name:</h6>
                                            @if (@$fieldStatus == true && $action == 'name')
                                            <input type="text" value="{{ $user->name }}" wire:model="name" />
                                            <span class="edit"><a class="link-design-2" wire:click="updateData('name')">Save</a></span>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="cancle">Cancle</a></span>
                                            @else
                                            <p class="name">{{auth()->user()->name}}</p>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="editData('{{auth()->user()->id}}', 'name')"> Edit</a></span>
                                            @endif

                                        </li>

                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Phone:</h6>
                                            @if (@$fieldStatus == true && $action == 'contact_number')
                                            <input type="text" value="{{$user->contact_number}}" wire:model="contact_number" />
                                            <span class="edit"><a class="link-design-2" wire:click="updateData('contact_number')">Save</a></span>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="cancle">Cancle</a></span>
                                            @else
                                            <p class="phone"><a href="tel:+1 512-559-9582">{{$user->contact_number}}</a></p>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="editData('{{auth()->user()->id}}', 'contact_number')">Edit</a></span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Email:</h6>
                                            @if (@$fieldStatus == true && $action == 'email')
                                            <input type="text" value="{{$user->email}}" wire:model="email" />
                                            <span class="edit"><a class="link-design-2" wire:click="updateData('email')">Save</a></span>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="cancle">Cancle</a></span>
                                            @else
                                            <p class="mail"><a href="mailto:ajone235@gmail.com">{{$user->email}}</a></p>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="editData('{{auth()->user()->id}}', 'email')">Edit</a></span>
                                            @endif
                                        </li>
                                        
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label">Address:</h6>
                                            @if (@$fieldStatus == true && $action == 'address') 
                                            <input type="text" value="{{$user->details->address}}" wire:model="address" />
                                            <span class="edit"><a class="link-design-2" wire:click="updateData('address')">Save</a></span>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="cancle">Cancle</a></span>
                                            @else
                                            <p>{{$user->details->address}}</p>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="editData('{{auth()->user()->id}}', 'address')">Edit</a></span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-spacebw">
                                            <h6 class="title-label"> Timezone:</h6>
                                            @if (@$fieldStatus == true)
                                            <input type="text" value="{{$user->contact_number}}" wire:model="contact_number" />
                                            <span class="edit"><a class="link-design-2" wire:click="updateData('name')">Save</a></span>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="cancle">Cancle</a></span>
                                            @else
                                            <p class=""><a href="#">-5:00 GMT (Central US) - Current Time 11:11am</a></p>
                                            <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="editData({{auth()->user()->id}})">Edit</a></span>
                                            @endif
                                        </li>
                                        <li>
                                            <!-- <select class="form-control" id="timezone">
                                                @foreach (timezone_identifiers_list() as $timezone)
                                                <option value="{{ $timezone }}" {{ $timezone == old('timezone') ? ' selected' : '' }}>{{ $timezone }}</option>
                                                @endforeach
                                            </select> -->

                                        </li>
                                    </ul>
                                </div>

                                @if (@$fieldStatus == true && $action == 'bio')
                                <div class="h4-design d-flex justify-content-spacebw px-3 mt-5 mb-2">
                                    <h4>About</h4>
                                    <span class="edit"><a class="link-design-2" wire:click="updateData('bio')">Save</a></span>
                                    <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="cancle">Cancle</a></span>
                                </div>

                                <div class="about_text">
                                    <textarea value="" wire:model="bio"></textarea>
                                </div>
                                @else
                                    <div class="h4-design d-flex justify-content-spacebw px-3 mt-5 mb-2">
                                        <h4>About</h4>
                                        <span class="edit"><a href="javascript::void(0)" class="link-design-2" wire:click="editData({{auth()->user()->id}}, 'bio')">Edit</a></span>
                                    </div>

                                    <div class="about_text">
                                        <p>{{$user->details->bio}} </p>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function() {
        var timezone = moment.tz.guess();
        $('#timezone').val(timezone);
    })
</script>


@endpush