@extends('layouts.app')

@section('title', 'Tambah Role')

@section('content')
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
        <h5>Tambah Role</h5>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pengaturan</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Tambah Role</a>
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
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300 mb-1">Form Role</h2>
                    <form action="{{ route('admin.roles.store') }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <!-- Name  -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-1">
                            <label class="label" for="name">
                                <span class="my-1 block">Nama Role </span>
                                <input type="text" class="input" value="{{ old('name') }}" id="name"
                                    name="name" />
                            </label>
                            <label class="label" for="guard">
                                <span class="my-1 block">Guard</span>
                                <input type="text" class="input" value="{{ old('guard_name') }}" id="guard"
                                    name="guard_name" placeholder="web" />
                            </label>
                        </div>
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('admin.roles.index') }}"
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
