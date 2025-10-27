@extends('layouts.app')

@section('title', 'Kontrol On/Off Relay | Melonponik Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kontrol On/Off Relay</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kontrol Relay</li>
    </ol>

    <div class="row">
        @php
            $devices = [
                ['nama' => 'Pompa Nutrisi A', 'icon' => 'fa-water'],
                ['nama' => 'Pompa Nutrisi B', 'icon' => 'fa-water'],
                ['nama' => 'Kipas Pendingin', 'icon' => 'fa-fan'],
                ['nama' => 'Lampu Growlight', 'icon' => 'fa-lightbulb'],
                ['nama' => 'Pompa Irigasi', 'icon' => 'fa-seedling'],
                ['nama' => 'Kipas Exhaust', 'icon' => 'fa-wind'],
            ];
        @endphp

        @foreach ($devices as $i => $device)
            <div class="col-xl-4 col-md-6">
                <div class="card text-white mb-4
                    {{ $i % 2 == 0 ? 'bg-success' : 'bg-primary' }}">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <span><i class="fas {{ $device['icon'] }} me-2"></i>{{ $device['nama'] }}</span>
                        <div class="form-check form-switch">
                            <input class="form-check-input relay-toggle" type="checkbox" id="relay{{ $i }}" {{ rand(0,1) ? 'checked' : '' }}>
                            <label class="form-check-label" for="relay{{ $i }}">
                                {{ rand(0,1) ? 'ON' : 'OFF' }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <i class="fas fa-history me-1"></i> Log Aktivitas Relay
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Device</th>
                        <th>Status</th>
                        <th>Operator</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 15; $i++)
                        <tr>
                            <td>{{ now()->subMinutes(rand(1, 300))->format('H:i d M Y') }}</td>
                            <td>{{ $devices[array_rand($devices)]['nama'] }}</td>
                            <td>
                                @if(rand(0,1))
                                    <span class="badge bg-success">ON</span>
                                @else
                                    <span class="badge bg-danger">OFF</span>
                                @endif
                            </td>
                            <td>{{ ['Andi', 'Budi', 'Siti', 'Rahman'][rand(0,3)] }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
