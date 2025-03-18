@extends('layouts.app')

@section('title', 'Train Departures')

@section('content')
    <div class="container">
        <h1 class="text-primary text-center mb-4">Upcoming Train Departures</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Train Code</th>
                    <th>Carriages</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->departure_time)->format('d/m/Y H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->arrival_time)->format('d/m/Y H:i') }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriages }}</td>
                        <td>
                            @if ($train->cancelled)
                                <span class="badge bg-danger">Cancelled</span>
                            @elseif (!$train->on_time)
                                <span class="badge bg-warning">Delayed</span>
                            @else
                                <span class="badge bg-success">On Time</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
