@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
        <h5>User Edit</h5>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pengaturan</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">User Edit</a>
            </li>
        </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- User Profile Start  -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
        <!-- Left Section Start  -->
        <section class="col-span-1 flex h-min w-full flex-col gap-6 lg:sticky lg:top-20">
            <!-- User Avatar & Status  -->
            <div class="card">
                <div class="card-body flex flex-col items-center">
                    <div class="relative my-2 h-24 w-24 rounded-full">
                        <img src="{{ asset('images/avatar1.png') }}" alt="avatar-img" id="user-image"
                            class="h-full w-full rounded-full" />
                        <label for="upload-avatar"
                            class="absolute bottom-0 right-0 flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-slate-50 p-2 dark:bg-slate-900">
                            <span class="text-slate-600 dark:text-slate-300">
                                <i class="w-full" data-feather="camera"></i>
                            </span>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" class="hidden"
                                id="upload-avatar" />
                        </label>
                    </div>
                    <h2 class="text-[16px] font-medium text-slate-700 dark:text-slate-200">{{ $user->name }}</h2>
                    <div class="badge badge-soft-success my-3 inline-block px-4">{{ $user->roles?->first()?->name ?? '-' }}
                    </div>
                </div>
            </div>
        </section>
        <!-- Left Section End  -->
        <!-- Right Section Start  -->
        <section class="col-span-1 flex w-full flex-1 flex-col gap-6 lg:col-span-3 lg:w-auto">
            <!-- Personal Details  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Personal Details</h2>
                    <form action="{{ route('admin.users.update', $user) }}" method="POST" class="flex flex-col gap-5">
                        @method('PATCH')
                        @csrf
                        <!-- Name  -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 my-4">
                            <label class="label" for="name">
                                <span class="my-1 block">Nama Lengkap </span>
                                <input type="text" class="input" value="{{ old('name', $user->name) }}" id="name"
                                    name="name" />
                            </label>
                            <label class="label" for="email">
                                <span class="my-1 block">Email</span>
                                <input type="email" class="input" value="{{ old('email', $user->email) }}" id="email"
                                    name="email" />
                            </label>
                        </div>
                        {{-- <!-- Phone & Email  -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <label class="label" for="phone">
                                <span class="my-1 block">Nomor Telepon</span>
                                <input type="tell" class="input" value="" id="phone" />
                            </label>
                            <label class="label" for="email">
                                <span class="my-1 block">Email</span>
                                <input type="email" class="input" value="ahmedshakil@example.com" id="email" />
                            </label>
                        </div>
                        <!-- Street & City  -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <label class="label" for="street-address">
                                <span class="my-1 block">Street Address</span>
                                <input type="text" class="input" value="15205 North California,  Suite 100"
                                    id="street-address" />
                            </label>
                            <label class="label" for="city-state">
                                <span class="my-1 block">City/State</span>
                                <input type="text" class="input" value="California" id="city-state" />
                            </label>
                        </div>
                        <!-- Country & Zip  -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <label class="label" for="country">
                                <span class="my-1 block">Country</span>
                                <input type="text" class="input" value="United States" id="country" />
                            </label>
                            <label class="label" for="zip-code">
                                <span class="my-1 block">Zip Code</span>
                                <input type="text" class="input" value="90011" id="zip-code" />
                            </label>
                        </div> --}}
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <button type="cancel"
                                class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Change Password  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Ubah Password</h2>
                    <form method="get" class="flex flex-col gap-5">
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 my-4">
                            <label class="label" for="new-password">
                                <span class="my-1 block">New Password</span>
                                <input type="password" name="new_password" class="input" id="new-password" />
                            </label>
                            <label class="label" for="confirm-password">
                                <span class="my-1 block">Confirm Password</span>
                                <input type="password" name="confirm_password" class="input" id="confirm-password" />
                            </label>
                        </div>
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <button type="cancel"
                                class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Preferences  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Roles</h2>
                    <form method="POST" action="{{ route('admin.users.roles.assign', $user) }}"
                        class="flex flex-col gap-5">
                        @csrf
                        <div class="grid my-4">
                            <label class="label" for="new-password">
                                <span class="my-1 block">Pilih Hak Akses</span>
                                <select name="roles[]" class="select">
                                    <option value="">-- Pilih Hak Akses --</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}" {{ $user->hasRole($role) ? 'selected' : '' }}>
                                            {{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <button type="cancel"
                                class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">Assign Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Right Section End -->
    </div>
@endsection
