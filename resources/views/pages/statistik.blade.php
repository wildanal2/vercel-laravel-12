@extends('layouts.app')

@section('title', 'Data Statistik Sensor | Melonponik Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Statistik Sensor</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Statistik Sensor</li>
    </ol>

    <div class="row">
        {{-- Kelembapan vs Suhu --}}
        <div class="col-xl-6 col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Grafik Suhu & Kelembapan Greenhouse
                </div>
                <div class="card-body">
                    <canvas id="chartTempHumid" width="100%" height="40"></canvas>
                </div>
                <div class="card-footer small text-muted">Diperbarui: {{ now()->format('d M Y H:i') }}</div>
            </div>
        </div>

        {{-- pH vs TDS --}}
        <div class="col-xl-6 col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-flask me-1"></i>
                    Grafik pH & TDS Pupuk
                </div>
                <div class="card-body">
                    <canvas id="chartPhTds" width="100%" height="40"></canvas>
                </div>
                <div class="card-footer small text-muted">Diperbarui: {{ now()->format('d M Y H:i') }}</div>
            </div>
        </div>
    </div>

    {{-- Data Table --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Log Data Sensor (7 Hari Terakhir)
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Suhu (°C)</th>
                        <th>Kelembapan (%)</th>
                        <th>pH</th>
                        <th>TDS (ppm)</th>
                        <th>Intensitas Cahaya (W/m²)</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 6; $i >= 0; $i--)
                        @php
                            $date = now()->subDays($i);
                            $temp = rand(26, 33);
                            $humidity = rand(65, 85);
                            $ph = rand(55, 70) / 10;
                            $tds = rand(1100, 1800);
                            $light = rand(650, 950);
                        @endphp
                        <tr>
                            <td>{{ $date->format('d M Y') }}</td>
                            <td>{{ $temp }}</td>
                            <td>{{ $humidity }}</td>
                            <td>{{ number_format($ph, 1) }}</td>
                            <td>{{ $tds }}</td>
                            <td>{{ $light }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Grafik Suhu & Kelembapan
    const ctx1 = document.getElementById("chartTempHumid");
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: {!! json_encode(collect(range(6, 0))->map(fn($i) => now()->subDays($i)->format('d M'))) !!},
            datasets: [
                {
                    label: "Suhu (°C)",
                    data: [29, 30, 31, 32, 31, 30, 29],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false,
                    tension: 0.4
                },
                {
                    label: "Kelembapan (%)",
                    data: [70, 74, 72, 68, 75, 80, 78],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: false,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            scales: { y: { beginAtZero: false } }
        }
    });

    // Grafik pH & TDS
    const ctx2 = document.getElementById("chartPhTds");
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: {!! json_encode(collect(range(6, 0))->map(fn($i) => now()->subDays($i)->format('d M'))) !!},
            datasets: [
                {
                    label: "pH",
                    data: [6.0, 6.2, 6.1, 6.3, 6.0, 6.1, 6.2],
                    backgroundColor: 'rgba(75, 192, 192, 0.7)',
                    yAxisID: 'y'
                },
                {
                    label: "TDS (ppm)",
                    data: [1200, 1300, 1250, 1400, 1350, 1450, 1500],
                    backgroundColor: 'rgba(255, 205, 86, 0.7)',
                    yAxisID: 'y1'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: { type: 'linear', position: 'left' },
                y1: { type: 'linear', position: 'right' }
            }
        }
    });
</script>
@endsection
