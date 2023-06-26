@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
        <h5>Tambah User</h5>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pengaturan</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Tambah User</a>
            </li>
        </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- User Profile Start  -->
    <div class="grid">
        <section class="col-span-1 flex w-full flex-1 flex-col gap-6 lg:col-span-3 lg:w-auto">
            <!-- Personal Details  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Personal Details</h2>
                    <form action="{{ route('admin.users.store') }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <!-- Name  -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-1">
                            <label class="label" for="name">
                                <span class="my-1 block">Nama Lengkap </span>
                                <input type="text" class="input" value="{{ old('name') }}" id="name"
                                    name="name" />
                            </label>
                            <label class="label" for="email">
                                <span class="my-1 block">Email</span>
                                <input type="email" class="input" value="{{ old('email') }}" id="email"
                                    name="email" />
                            </label>
                        </div>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <label class="label" for="new-password">
                                <span class="my-1 block">Password</span>
                                <input type="password" name="password" class="input" id="new-password" />
                            </label>
                            <label class="label" for="confirm-password">
                                <span class="my-1 block">Konfirmasi Password</span>
                                <input type="password" name="password_confirmation" class="input" id="confirm-password" />
                            </label>
                        </div>
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('admin.users.index') }}"
                                class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                                <i data-feather="arrow-left" height="1rem" width="1rem"></i>
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i data-feather="check" height="1rem" width="1rem"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
