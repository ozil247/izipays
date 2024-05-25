@extends('layouts.guest')

@section('content')
    <section class="register login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">

                        <p class="desc fs-20">
                            'Thanks for signing up! Before getting started, could you verify your email address by <br>
                            clicking on the link we just emailed to you? If you didn't receive the email, we will gladly
                            send you another.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="flat-tabs">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-text center">

                                @if (session('status') == 'verification-link-sent')
                                    <div class="mb-4 font-medium text-sm text-success">
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>



                    <div class="content-tab">

                        <div class="content-inner">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <button type="submit" class="btn-action">Reset Password</button>
                            </form>


                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>
@endsection
