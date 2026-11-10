@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

    <div class="card-body">

        <h2 class="mb-4">
            Profile Organizer
        </h2>

        <div class="alert alert-danger">
            Informasi akun pengelola turnamen esports.
        </div>

        <table class="table">

            <tr>
                <th width="200">Username</th>
                <td>{{ $username }}</td>
            </tr>

            <tr>
                <th>Role</th>
                <td>Tournament Organizer</td>
            </tr>

            <tr>
                <th>Main Game</th>
                <td>Mobile Legends Bang Bang</td>
            </tr>

            <tr>
                <th>Region</th>
                <td>Indonesia</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>
                    <span class="badge bg-success">
                        Active
                    </span>
                </td>
            </tr>

        </table>

        <a
            href="/pengelolaan?username={{ $username }}"
            class="btn btn-maroon">

            Kelola Tim

        </a>

    </div>

</div>

@endsection