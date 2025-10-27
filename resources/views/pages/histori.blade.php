@extends('layouts.app')

@section('title', 'Data Histori Sensor | Melonponik Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Histori Sensor</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Histori Sensor</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Log Pembacaan Sensor Harian (30 Data Terakhir)
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Suhu (°C)</th>
                        <th>Kelembapan (%)</th>
                        <th>pH</th>
                        <th>TDS (ppm)</th>
                        <th>Cahaya (W/m²)</th>
                        <th>Greenhouse</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 30; $i++)
                        @php
                            $timestamp = now()->subHours($i);
                        @endphp
                        <tr>
                            <td>{{ $timestamp->format('d M Y H:i') }}</td>
                            <td>{{ rand(26, 33) }}</td>
                            <td>{{ rand(65, 85) }}</td>
                            <td>{{ number_format(rand(58, 68)/10, 1) }}</td>
                            <td>{{ rand(1100, 1800) }}</td>
                            <td>{{ rand(700, 950) }}</td>
                            <td>Greenhouse {{ rand(1, 10) }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
