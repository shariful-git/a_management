@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card rounded-0">
                    <div class="card-header">{{ __('Admin') }}</div>

                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- start -->
                        <div class="my-4">
                            <div class="container">
                                <div class="row gutters-sm">
                                    <div class="col-md-4 d-none d-md-block">
                                        <div class="card rounded-0">
                                            <div class="card-body">
                                                <nav class="nav flex-column nav-pills nav-gap-y-1">
                                                    <a href="#profile" data-toggle="tab"
                                                        class="nav-item nav-link has-icon nav-link-faded active rounded-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-user mr-2">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>Dashboard
                                                    </a>
                                                    <a href="#account" data-toggle="tab"
                                                        class="nav-item nav-link has-icon nav-link-faded rounded-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-settings mr-2">
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                            <path
                                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                            </path>
                                                        </svg>Layouts
                                                    </a>
                                                    <a href="#security" data-toggle="tab"
                                                        class="nav-item nav-link has-icon nav-link-faded rounded-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-shield mr-2">
                                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                                        </svg>Pages
                                                    </a>
                                                    <a href="#notification" data-toggle="tab"
                                                        class="nav-item nav-link has-icon nav-link-faded rounded-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-bell mr-2">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>Table
                                                    </a>
                                                    <a href="#billing" data-toggle="tab"
                                                        class="nav-item nav-link has-icon nav-link-faded rounded-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-credit-card mr-2">
                                                            <rect x="1" y="4" width="22"
                                                                height="16" rx="2" ry="2"></rect>
                                                            <line x1="1" y1="10" x2="23"
                                                                y2="10"></line>
                                                        </svg>MailBox
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card rounded-0">
                                            <div class="card-header border-bottom mb-3 d-flex d-md-none">
                                                <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                                                    <li class="nav-item">
                                                        <a href="#profile" data-toggle="tab"
                                                            class="nav-link has-icon active"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                                <circle cx="12" cy="7" r="4">
                                                                </circle>
                                                            </svg></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#account" data-toggle="tab"
                                                            class="nav-link has-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-settings">
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                                <path
                                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                                </path>
                                                            </svg></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#security" data-toggle="tab"
                                                            class="nav-link has-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-shield">
                                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z">
                                                                </path>
                                                            </svg></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#notification" data-toggle="tab"
                                                            class="nav-link has-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-bell">
                                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9">
                                                                </path>
                                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                            </svg></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#billing" data-toggle="tab"
                                                            class="nav-link has-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-credit-card">
                                                                <rect x="1" y="4" width="22"
                                                                    height="16" rx="2" ry="2"></rect>
                                                                <line x1="1" y1="10" x2="23"
                                                                    y2="10"></line>
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body tab-content">
                                                <div class="tab-pane active" id="profile">
                                                    <h6>YOUR PROFILE INFORMATION</h6>
                                                    <hr>
                                                    <div id="reportrange"
                                                        style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                                        <i class="fa fa-calendar"></i>&nbsp;
                                                        <span></span> <i class="fa fa-caret-down"></i>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        <form action="{{ route('add-article-post') }}" method="POST">
                                                            @csrf
                                                            <textarea class="w-100 rounded-0" name="post" id="post" rows="3"></textarea>
                                                            </br>
                                                            <button type="submit"
                                                                class="btn btn-success rounded-0">Create Post</button>
                                                        </form>
                                                        <hr>
                                                        @foreach ($articles as $article)
                                                            <div class="card mt-2 rounded-0">
                                                                <div class="card-header font-weight-bold rounded-0">
                                                                    <span class="float-left"><i class="fa fa-user-o"
                                                                            aria-hidden="true"></i>&nbsp;</span>
                                                                    <span>{{ $article->user->name }}</span>
                                                                    <span class="float-right">
                                                                        {{ $article->created_at->diffForHumans() }}</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span style="white-space: pre-line"
                                                                        class="card-text">{{ $article->post }}</span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="account">
                                                    <h6>ACCOUNT SETTINGS</h6>
                                                    <hr>
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control rounded-0"
                                                                id="username" aria-describedby="usernameHelp"
                                                                placeholder="Enter your username. Example: sharifulkawsar"
                                                                value="">
                                                            <small id="usernameHelp" class="form-text text-muted">After
                                                                changing your username, your old username becomes available
                                                                for anyone else to claim.</small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label class="d-block text-danger">Delete Account</label>
                                                            <p class="text-muted font-size-sm">Once you delete your
                                                                account, there is no going back. Please be certain.</p>
                                                        </div>
                                                        <button class="btn btn-danger rounded-0" type="button">Delete
                                                            Account</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="security">
                                                    <h6>SECURITY SETTINGS</h6>
                                                    <hr>
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="d-block">Change Password</label>
                                                            <input type="text" class="form-control rounded-0"
                                                                placeholder="Enter your old password">
                                                            <input type="text" class="form-control mt-1 rounded-0"
                                                                placeholder="New password">
                                                            <input type="text" class="form-control mt-1 rounded-0"
                                                                placeholder="Confirm new password">
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="d-block">Two Factor Authentication</label>
                                                            <button class="btn btn-info rounded-0" type="button">Enable
                                                                two-factor
                                                                authentication</button>
                                                            <p class="small text-muted mt-2">Two-factor authentication adds
                                                                an additional layer of security to your account by requiring
                                                                more than just a password to log in.</p>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <form>
                                                        <div class="form-group mb-0">
                                                            <label class="d-block">Sessions</label>
                                                            <p class="font-size-sm text-secondary">This is a list of
                                                                devices that have logged into your account. Revoke any
                                                                sessions that you do not recognize.</p>
                                                            <ul class="list-group list-group-sm">
                                                                <li class="list-group-item has-icon rounded-0">
                                                                    <div>
                                                                        <h6 class="mb-0">Bangladesh @php
                                                                            echo $clientIP = request()->ip();
                                                                        @endphp
                                                                        </h6>
                                                                        <small class="text-muted">Your current session seen
                                                                            in Bangladesh</small>
                                                                    </div>
                                                                    <button class="btn btn-light btn-sm ml-auto rounded-0"
                                                                        type="button">More info</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="notification">
                                                    <h6>NOTIFICATION SETTINGS</h6>
                                                    <hr>
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="d-block mb-0">Security Alerts</label>
                                                            <div class="small text-muted mb-3">Receive security alert
                                                                notifications via email</div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck1" checked="">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1">Email each time a vulnerability is
                                                                    found</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck2" checked="">
                                                                <label class="custom-control-label"
                                                                    for="customCheck2">Email a digest summary of
                                                                    vulnerability</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label class="d-block">SMS Notifications</label>
                                                            <ul class="list-group list-group-sm">
                                                                <li class="list-group-item has-icon rounded-0">
                                                                    Comments
                                                                    <div
                                                                        class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customSwitch1" checked="">
                                                                        <label class="custom-control-label"
                                                                            for="customSwitch1"></label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item has-icon">
                                                                    Updates From People
                                                                    <div
                                                                        class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customSwitch2">
                                                                        <label class="custom-control-label"
                                                                            for="customSwitch2"></label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item has-icon">
                                                                    Reminders
                                                                    <div
                                                                        class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customSwitch3" checked="">
                                                                        <label class="custom-control-label"
                                                                            for="customSwitch3"></label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item has-icon">
                                                                    Events
                                                                    <div
                                                                        class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customSwitch4" checked="">
                                                                        <label class="custom-control-label"
                                                                            for="customSwitch4"></label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item has-icon">
                                                                    Pages You Follow
                                                                    <div
                                                                        class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customSwitch5">
                                                                        <label class="custom-control-label"
                                                                            for="customSwitch5"></label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="billing">
                                                    <h6>BILLING SETTINGS</h6>
                                                    <hr>
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="d-block mb-0">Payment Method</label>
                                                            <div class="small text-muted mb-3">You have not added a payment
                                                                method</div>
                                                            <button class="btn btn-info rounded-0" type="button">Add
                                                                Payment
                                                                Method</button>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label class="d-block">Payment History</label>
                                                            <div
                                                                class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">
                                                                You have not made any payment.</div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ShowRoundedCorner: "true",
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });
    </script>
@endsection
