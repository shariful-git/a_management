@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card  rounded-0">
                <div class="card-header">{{ __('Support Contact') }}

                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-12 mx-auto">
                            <div class="my-4">
                                <form action="/submitContact" method="POST" class="row g-3 was-validated" novalidate>
                                    @csrf
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">First Name</label>
                                        <input type="text" class="form-control rounded-0" id="validationCustom02" name="first_name" placeholder="Mark" title="First Name" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Last Name</label>
                                        <input type="text" class="form-control rounded-0" id="validationCustom02" name="last_name" placeholder="Otto" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustomEmail" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                        <span class="input-group-text rounded-0" id="inputGroupPrepend"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control rounded-0" id="validationCustomEmail" aria-describedby="inputGroupPrepend" value="{{Auth::user()->email}}" disabled>
                                        <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
                                        <div class="invalid-feedback">
                                            Please choose a email.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">City</label>
                                        <input type="text" class="form-control rounded-0" id="validationCustom03" name="city" placeholder="Type your current city" required>
                                        <div class="invalid-feedback">
                                        Please provide a valid city.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label">Division</label>
                                        <select class="form-select rounded-0" id="validationCustom04" name="division" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Dhaka</option>
                                        <option>Chottogram</option>
                                        <option>Sylhet</option>
                                        <option>Barishal</option>
                                        <option>Rajshahi</option>
                                        <option>Rangpur</option>
                                        <option>Dinajpur</option>
                                        <option>Mymenshing</option>
                                        </select>
                                        <div class="invalid-feedback">
                                        Please select a valid state.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Postal Code</label>
                                        <input type="text" class="form-control rounded-0" id="validationCustom05" name="post_code" required placeholder="1216">
                                        <div class="invalid-feedback">
                                        Please provide a post code.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                        <input class="form-check-input rounded-0" type="checkbox" value="1" id="invalidCheck" name="permission" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting. <br>
                                            1. I agree with above. <br>
                                            2. Nice <br>
                                        </div>
                                        <div class="valid-feedback">
                                        Thank You!
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-success rounded-0" type="submit" value= "UPDATE">Send</button>
                                        <a type="button" class="btn btn-outline-danger rounded-0" href="{{route('home')}}">Cancel</a>
                                    </div>
                                    <div style="page-break-after: always"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
