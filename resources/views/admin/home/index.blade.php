@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <!-- Page Title Starts -->
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
        <h5>Dashboard</h5>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Beranda</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
        </ol>
    </div>
    <!-- Page Title Ends -->
@endsection

@section('content')
    <main class="container flex-grow p-4 sm:p-6">
        <div class="space-y-6">
            <!-- Overview Section Start -->
            <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <!-- Product Views  -->
                <div class="card">
                    <div class="card-body flex items-center gap-4">
                        <div
                            class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-primary-500 bg-opacity-20 text-primary-500">
                            <i class="ti ti-building text-3xl"></i>
                        </div>
                        <div class="flex flex-1 flex-col gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Total OPD</p>
                            <div class="flex flex-wrap items-baseline justify-between gap-2">
                                <h4>64</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Sold  -->
                <div class="card">
                    <div class="card-body flex items-center gap-4">
                        <div
                            class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-success-500 bg-opacity-20 text-success-500">
                            <i class="ti ti-broadcast text-3xl"></i>
                        </div>
                        <div class="flex flex-1 flex-col gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Total Konsultan</p>
                            <div class="flex flex-wrap items-baseline justify-between gap-2">
                                <h4>76</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Likes  -->
                <div class="card">
                    <div class="card-body flex items-center gap-4">
                        <div
                            class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-warning-500 bg-opacity-20 text-warning-500">
                            <i class="ti ti-crane text-3xl"></i>
                        </div>
                        <div class="flex flex-1 flex-col gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Total Pekerjaan</p>
                            <div class="flex flex-wrap items-baseline justify-between gap-2">
                                <h4>83</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Conversation Rate  -->
                <div class="card">
                    <div class="card-body flex items-center gap-4">
                        <div
                            class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-500 bg-opacity-20 text-red-500">
                            <i class="ti ti-wall-off text-3xl"></i>
                        </div>
                        <div class="flex flex-1 flex-col gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Kecelakaan</p>
                            <div class="flex flex-wrap items-baseline justify-between gap-2">
                                <h4>6</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Overview Section End -->
        </div>
    </main>
@endsection
