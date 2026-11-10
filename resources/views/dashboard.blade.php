@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

    <div class="card-body">

        <h1 class="fw-bold mb-3">
            Dashboard Turnamen Esports
        </h1>

        <div class="alert alert-success">
            Selamat Datang, <strong>{{ $username }}</strong>
        </div>

        <div class="row">

            <div class="col-md-3 mb-3">
                <div class="card card-maroon shadow">
                    <div class="card-body">
                        <h6>Total Tim</h6>
                        <h2>16</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card card-maroon shadow">
                    <div class="card-body">
                        <h6>Total Match</h6>
                        <h2>8</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card card-maroon shadow">
                    <div class="card-body">
                        <h6>Game</h6>
                        <h2>MLBB</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card card-maroon shadow">
                    <div class="card-body">
                        <h6>Prize Pool</h6>
                        <h2>Rp 5 Juta</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="card mt-4 border-0 bg-light">

            <div class="card-body">

                <h4 class="mb-3">Informasi Turnamen</h4>

                <ul>
                    <li>Nama Turnamen : SISFO CUP 2026</li>
                    <li>Game : Mobile Legends Bang Bang</li>
                    <li>Status : Pendaftaran Dibuka</li>
                    <li>Region : Indonesia</li>
                    <li>Format : Single Elimination</li>
                </ul>

            </div>

        </div>

        <div class="mt-4">

            <a href="/profile?username={{ $username }}"
               class="btn btn-maroon">
                Lihat Profile
            </a>

        </div>

    </div>

</div>

@endsection