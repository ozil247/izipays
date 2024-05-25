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
                                    <h4 class="nk-block-title">Price Chart</h4>
                                    <p>iziPays Excha</p>
                                </div>
                            </div>
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
                                                    src="/storage/image/{{ $currency->image }}" height="20" width="20"
                                                            alt=""></span><span class="tb-odr-date">{{ $currency->name }}</span>
                                                </td>
                                                <td class="tb-odr-amount"><span class="tb-odr-total"><span
                                                            class="badge badge-dot bg-success">${{ $currency->buy }}</span></span><span
                                                        class="tb-odr-status"><span
                                                            class="badge badge-dot bg-danger">${{ $currency->sell }}</span></span>
                                                </td>
                                                <td class="tb-odr-action">
                                                    <div class="tb-odr-btns d-none d-md-inline"><a
                                                            href="{{ route('rate', $currency->id) }}" class="btn btn-sm btn-primary">Edit
                                                            Rate</a></div>
                                                    <div class="dropdown"><a
                                                            class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown" data-offset="-8,0"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="{{ route('delete.currency', $currency->id) }}" class="text-danger">Delete</a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach




                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
