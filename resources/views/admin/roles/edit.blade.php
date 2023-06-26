@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
        <h5>Edit Role</h5>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pengaturan</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Edit Role</a>
            </li>
        </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- Edit Role Start  -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <!-- Left side Div Start -->
        <section class="flex flex-col gap-8 lg:col-span-1">
            <!-- General  -->
            <div class="sticky top-20 rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Role</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">Mengatur hak akses</p>
                <div class="py-2">
                    <label class="label label-required mb-1 font-medium" for="name"> Nama Role </label>
                    <input type="text" name="name" class="input" id="name"
                        value="{{ old('name', $role->name) }}" />
                </div>
                <div class="py-2">
                    <label class="label label-required mb-1 font-medium" for="code"> Guard </label>
                    <input type="text" name="guard_name" class="input" id="code"
                        value="{{ old('guard_name', $role->guard_name) }}" />
                </div>
                <div class="flex items-center justify-end gap-4 mt-4">
                    <button type="cancel"
                        class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </section>
        <!-- Left Side Div End  -->

        <!-- Right Side Div Start  -->
        <section class="h-full lg:col-span-2">
            <!-- Permissions -->
            <div class="rounded-primary bg-white p-6 shadow dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Permissions</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">Mengatur permission untuk setiap role</p>
                <div class="grid max-w-6xl grid-cols-1 gap-4">
                    @foreach ($permissions->groupBy(fn($permission) => Str::plural(Str::afterLast($permission->name, ' '))) as $model => $modelPermission)
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ Str::title($model) }}</h4>
                                <div class="card-content">
                                    <div class="flex flex-wrap gap-4">
                                        @foreach ($modelPermission as $permission)
                                            <div class="flex items-center gap-1.5">
                                                <input id="checkbox-primary" class="checkbox checkbox-primary"
                                                    type="checkbox" name="permissions[{{ $permission->name }}]"
                                                    value="{{ $permission->name }}"
                                                    {{ $role->hasPermissionTo($permission) || collect(old('permissions', []))->has($permission->name) ? 'checked' : '' }} />
                                                <label for="checkbox-primary" class="label">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-end gap-4 mt-4">
                    <button type="cancel"
                        class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">Assign Permission</button>
                </div>
            </div>
        </section>
        <!-- Right Side Div End  -->
    </div>
@endsection
