@extends('invester.layout')
@section('title')
    <title>{{ __('translate.Buyer || Dashboard') }}</title>
@endsection
@section('front-content')
    <main class="dashboard-main min-vh-100">
        <div class="d-flex flex-column gap-4">
        <!-- Page Header -->
        <div
            class="d-flex gap-4 flex-column flex-md-row align-items-md-center justify-content-between"
        >
            <div>
            <h3 class="text-24 fw-bold text-dark-300 mb-2">{{ __('translate.Dashboard') }}</h3>
            <ul class="d-flex align-items-center gap-2">
                <li class="text-dark-200 fs-6">{{ __('translate.Dashboard') }}</li>
            </ul>
            </div>
            <div>
            
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="p-4 d-flex align-items-center dashobard-widget justify-content-between bg-white rounded-4"
            >
                <div>
                <h3 class="dashboard-widget-title fw-bold text-dark-300">
                    {{ $active_orders }}
                </h3>
                <p class="text-18 text-dark-200">{{ __('translate.Active Order') }}</p>
                </div>
                <div class="dashboard-widget-icon">
                   
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <div
                class="p-4 d-flex align-items-center dashobard-widget justify-content-between bg-white rounded-4"
            >
                <div>
                <h3 class="dashboard-widget-title fw-bold text-dark-300">
                    {{ $complete_orders }}
                </h3>
                <p class="text-18 text-dark-200">{{ __('translate.Complete Order') }}</p>
                </div>
                <div class="dashboard-widget-icon">
                  
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <div
                class="p-4 d-flex align-items-center dashobard-widget justify-content-between bg-white rounded-4"
            >
                <div>
                <h3 class="dashboard-widget-title fw-bold text-dark-300">
                    {{ $cancel_orders }}
                </h3>
                <p class="text-18 text-dark-200">{{ __('translate.Cancel Order') }}</p>
                </div>
                <div class="dashboard-widget-icon">
                 

                </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div
                class="p-4 d-flex align-items-center dashobard-widget justify-content-between bg-white rounded-4"
            >
                <div>
                <h3 class="dashboard-widget-title fw-bold text-dark-300">
                    {{ $rejected_orders }}
                </h3>
                <p class="text-18 text-dark-200">{{ __('translate.Rejected Order') }}</p>
                </div>
                <div class="dashboard-widget-icon">
                  
                </div>
            </div>
            </div>
        </div>
        <!-- Content -->
        <div>
            <h3 class="text-24 fw-bold text-dark-300 mb-2">{{ __('translate.Latest Order') }}</h3>
            <!-- Table -->
            <div class="overflow-x-auto">
            <div class="w-100">
                <table class="w-100 dashboard-table">
                <thead class="pb-3">
                    <tr>
                        <th scope="col" class="ps-4">{{ __('translate.Service') }}</th>
                        <th scope="col">{{ __('translate.Amount') }}</th>
                        <th scope="col">{{ __('translate.Status') }}</th>
                        <th scope="col">{{ __('translate.Freelancer') }}</th>
                        <th scope="col">{{ __('translate.Delivery Date') }}</th>
                        <th scope="col" class="pe-4 text-end">{{ __('translate.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $index => $order)
                        <tr>
                            <td>
                            <div class="d-flex gap-3 align-items-center project-name" >
                                <div class="order-img">
                                    <a href="{{ route('service', $order?->listing?->slug) }}">
                                        <img  src="{{ asset($order?->listing?->thumb_image) }}"  alt="" />
                                    </a>
                                </div>
                                <div>
                                <p class="text-dark-200">
                                    <a href="{{ route('service', $order?->listing?->slug) }}">
                                        {{ html_decode($order?->listing?->title) }}
                                    </a>

                                </p>
                                <ul class="d-flex gap-1 order-category">
                                    <li class="text-dark-200">{{ html_decode($order?->listing?->category?->name) }}</li>

                                </ul>
                                </div>
                            </div>
                            </td>
                            <td class="text-dark-200">{{ currency($order->total_amount) }}</td>
                            <td>
                                @if ($order->approved_by_seller == 'approved')
                                    @if ($order->order_status == 'approved_by_seller')
                                        <span class="status-badge in-progress">
                                            {{ __('translate.In-Progress') }}
                                        </span>
                                    @elseif($order->completed_by_buyer == 'complete')
                                        <span class="status-badge in-progress">
                                            {{ __('translate.Complete') }}
                                        </span>
                                    @elseif($order->order_status == 'cancel_by_seller')
                                        <span class="status-badge pending">
                                            {{ __('translate.Cancel by Seller') }}
                                        </span>
                                    @elseif($order->order_status == 'cancel_by_buyer')
                                        <span class="status-badge pending">
                                            {{ __('translate.Cancel by Buyer') }}
                                        </span>

                                    @endif

                                @elseif ($order->approved_by_seller == 'rejected')
                                    <span class="status-badge pending">
                                        {{ __('translate.Rejected by Seller') }}
                                    </span>
                                @elseif ($order->order_status == 'cancel_by_buyer')
                                    <span class="status-badge pending">
                                        {{ __('translate.Cancel by Buyer') }}
                                    </span>
                                @else
                                    <span class="status-badge pending">
                                        {{ __('translate.Awaiting for Approval') }}
                                    </span>
                                @endif

                            </td>
                            <td class="text-dark-200">{{ html_decode($order?->seller?->name) }}</td>

                            <td class="text-dark-200">
                                {{ \Carbon\Carbon::parse($order->created_at)->addDays($order->delivery_date)->format('d M Y') }}

                            </td>

                            <td>
                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('buyer.order', $order->order_id) }}" class="dashboard-action-btn" >
                                    <svg
                                        width="26"
                                        height="19"
                                        viewBox="0 0 26 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                        d="M23.3187 6.66195C24.6716 8.08537 24.6716 10.248 23.3187 11.6714C21.0369 14.0721 17.1181 17.3333 12.6667 17.3333C8.21523 17.3333 4.29641 14.0721 2.01466 11.6714C0.661781 10.248 0.661781 8.08537 2.01466 6.66195C4.29641 4.26122 8.21523 1 12.6667 1C17.1181 1 21.0369 4.26122 23.3187 6.66195Z"
                                        stroke="#5B5B5B"
                                        stroke-width="1.5"
                                        />
                                        <circle
                                        cx="12.668"
                                        cy="9.16699"
                                        r="3.5"
                                        stroke="#5B5B5B"
                                        stroke-width="1.5"
                                        />
                                    </svg>
                                </a>
                            </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </main>
@endsection

