@extends('layouts.admin_dashboard')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">


                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="title nk-block-title">Add Currency</h4>
                                    <div class="nk-block-des">
                                        <p>Currency added will be displed to the users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-bordered">
                                <div class="card-inner">

                                    <form method="POST" action="{{ route('update.rate',  $currencies->id) }}"
                                        enctype="multipart/form-data">@csrf
                                        <div class="row g-4">
                                            <div class="col-lg-12">
                                                <div class="form-group"><label class="form-label" for="full-name-1">Update
                                                        Rate</label>
                                                    <div class="form-control-wrap"><input name="name" value="{{ $currencies->name }}" type="text"
                                                            class="form-control" id="full-name-1"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"><label class="form-label" for="email-address-1">Buy
                                                        Rate</label>
                                                    <div class="form-control-wrap"><input name="buy" value="{{ $currencies->buy }}" type="text"
                                                            class="form-control" id="email-address-1"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"><label class="form-label" for="phone-no-1">Sell
                                                        Rate</label>
                                                    <div class="form-control-wrap"><input name="sell" value="{{ $currencies->sell }}" type="text"
                                                            class="form-control" id="phone-no-1"></div>
                                                </div>
                                            </div>



                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2"><button type="submit"
                                                            class="btn btn-lg btn-primary">Update</button></div>
                                                </div>
                                            </div>
                                        </div>
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
