@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="card shadow">

            <div class="card-body">

                <h1 class="text-center gold-text fw-bold">
                    SISFO CUP 2026
                </h1>

                <p class="text-center text-muted mb-4">
                    Sistem Pengelolaan Turnamen Esports
                </p>

                <form action="/dashboard" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            Username
                        </label>

                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="Masukkan Username"
                            required>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-maroon w-100">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection