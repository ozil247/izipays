@extends('layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Welcome King</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Your crypto trade starts here</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                        class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                            class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="card card-bordered card-full">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-0">
                                                <div class="card-title">
                                                    <h6 class="subtitle">Total Payout</h6>
                                                </div>
                                                <div class="card-tools"><em class="card-hint icon ni ni-help-fill"
                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                        title="Total Payout"></em></div>
                                            </div>
                                            <div class="card-amount"><span class="amount"> $ <span
                                                        class="currency currency-usd">0.00</span></span><span
                                                    class="change up text-danger">
                                            </div>
                                            <div class="invest-data">
                                                <div class="invest-data-amount g-2">
                                                    <div class="invest-data-history">

                                                        <div class="amount">N <span
                                                                class="currency currency-usd">0.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="invest-data-ck"><canvas class="iv-data-chart"
                                                        id="totalDeposit"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-bordered card-full">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-0">
                                                <div class="card-title">
                                                    <h6 class="subtitle"></h6>
                                                </div>
                                                <div class="card-tools"><em class="card-hint icon ni ni-help-fill"
                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                        title="Total Withdraw"></em></div>
                                            </div>
                                            <div class="card-amount"><span class="amount"> Bulk Transaction?<span
                                                        class="currency currency-usd"></span></span>
                                            </div>
                                            <div class="invest-data">
                                                <div class="invest-data-amount g-2">
                                                    <div class="invest-data-history">
                                                        <div class="subtitle">Skip KYC and Trade faster on WhatsApp
                                                        </div>
                                                        <div class="subtitle">if you are trading more than $5,000. <span
                                                                class="currency currency-usd"><a href="">Start
                                                                    here</a></span></div>
                                                    </div>


                                                </div>
                                                <div class="invest-data-ck"><canvas class="iv-data-chart"
                                                        id="totalWithdraw"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                            class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                                class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em
                                                            class="icon ni ni-download-cloud"></em><span> Telegram
                                                        </span></a>
                                                </li>
                                                <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em
                                                            class="icon ni ni-reports"></em><span> Trade On Whatsapp
                                                        </span></a>
                                                </li>

                                                <li><a href="https://www.instagram.com/adahmiracle_?igsh=dnh5czIxMDV0MGlv&utm_source=qr" target="#" class="btn btn-white btn-dim btn-outline-primary"><em
                                                            class="icon ni ni-download-cloud"></em><span> Instagram
                                                        </span></a>
                                                </li>



                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xxl-">
                                    <div class="card card-bordered card-preview">
                                        <table class="table table-orders">
                                            <thead class="tb-odr-head">
                                                <tr class="tb-odr-item">
                                                    <th class="tb-odr-info"><span class="tb-odr-id">Logo
                                                            ID</span><span
                                                            class="tb-odr-date d-none d-md-inline-block">Currency</span>
                                                    </th>
                                                    <th class="tb-odr-amount"><span class="tb-odr-total">Buy</span><span
                                                            class="tb-odr-status d-none d-md-inline-block">Sell</span>
                                                    </th>
                                                    <th class="tb-odr-action">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tb-odr-body">

                                                @foreach ($currencies as $currency)
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info"><span class="tb-odr-id"><img
                                                                    src="/storage/image/{{ $currency->image }}"
                                                                    height="20" width="20"
                                                                    alt=""></span><span
                                                                class="tb-odr-date">{{ $currency->name }}</span>
                                                        </td>
                                                        <td class="tb-odr-amount"><span class="tb-odr-total"><span
                                                                    class="badge badge-dot bg-success">${{ $currency->buy }}</span></span><span
                                                                class="tb-odr-status"><span
                                                                    class="badge badge-dot bg-danger">${{ $currency->sell }}</span></span>
                                                        </td>

                                                    </tr>
                                                @endforeach





                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="col-md-6 col-xxl-6.5">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title card-title-sm">
                                                    <h6 class="title">Payout History</h6>
                                                </div>
                                                <div class="card-tools">

                                                    <div>
                                                        <li><a href="#"
                                                                class="btn btn-white btn-dim btn-outline-primary"><em
                                                                    class="icon ni ni-reports"></em><span> View All
                                                                </span></a>
                                                        </li>



                                                    </div>

                                                </div>
                                            </div>
                                            <div class="traffic-channel">
                                                <div class="traffic-channel-doughnut-ck"><canvas
                                                        class="analytics-doughnut"
                                                        id="TrafficChannelDoughnutData"></canvas></div>
                                                <div class="traffic-channel-group g-2">
                                                    <div class="traffic-channel-data">
                                                        <div class="title"><span class="dot dot-lg sq"
                                                                data-bg=""></span><span>No recent payout
                                                            </span></div>
                                                        <div class=""> <small> </small></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
