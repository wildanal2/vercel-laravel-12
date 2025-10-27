@extends('layouts.app')

@section('title', 'Aktivitas Petani | Melonponik Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Aktivitas Petani</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Aktivitas Petani</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user fa-fw me-1"></i>
            Log Aktivitas Petani Hari Ini
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Nama Petani</th>
                        <th>Greenhouse</th>
                        <th>Kegiatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $activities = [
                            'Pengecekan sensor suhu',
                            'Pemberian nutrisi A dan B',
                            'Pembersihan sistem irigasi',
                            'Pengecekan pH larutan',
                            'Penggantian air pupuk',
                            'Pemanenan buah melon',
                            'Perawatan daun dan batang',
                            'Kalibrasi sensor TDS',
                            'Pengecekan pompa air',
                            'Penyiraman tanaman'
                        ];
                        $names = ['Andi', 'Budi', 'Siti', 'Rahman', 'Tika', 'Eko', 'Ayu', 'Farhan'];
                    @endphp

                    @for ($i = 0; $i < 20; $i++)
                        <tr>
                            <td>{{ now()->subMinutes(rand(5, 300))->format('H:i d M Y') }}</td>
                            <td>{{ $names[array_rand($names)] }}</td>
                            <td>Greenhouse {{ rand(1, 10) }}</td>
                            <td>{{ $activities[array_rand($activities)] }}</td>
                            <td>
                                @if(rand(0,1))
                                    <span class="badge bg-success">Selesai</span>
                                @else
                                    <span class="badge bg-warning">Proses</span>
                                @endif
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
