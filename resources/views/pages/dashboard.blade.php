@extends('layouts.app')

@section('title', 'Dashboard Admin | Melonponik')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        {{-- Semua konten kartu, grafik, dan tabel dipindahkan ke sini --}}
        {{-- Bisa dipisah lagi ke komponen blade jika mau --}}
        @include('pages.partials.cards')
        @include('pages.partials.charts')
        @include('pages.partials.table')
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
@endsection
