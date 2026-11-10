@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

    <div class="card-body">

        <h2 class="mb-3">
            Pengelolaan Tim Esports
        </h2>

        <p>
            Admin :
            <strong>{{ $username }}</strong>
        </p>

        <table class="table table-striped table-bordered">

            <thead style="background-color:#800020;color:white;">

                <tr>
                    <th>No</th>
                    <th>Nama Tim</th>
                    <th>Kapten</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                @foreach($teams as $index => $team)

                <tr>

                    <td>{{ $index + 1 }}</td>

                    <td>{{ $team['nama'] }}</td>

                    <td>{{ $team['kapten'] }}</td>

                    <td>

                        @if($team['status'] == 'Verified')

                            <span class="badge bg-success">
                                Verified
                            </span>

                        @else

                            <span class="badge bg-warning text-dark">
                                Pending
                            </span>

                        @endif

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection