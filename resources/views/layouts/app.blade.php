<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISFO CUP 2026</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f8f5f5;
        }

        .maroon-bg{
            background-color: #800020;
        }

        .maroon-dark{
            background-color: #5b0016;
        }

        .gold-text{
            color: #d4af37;
        }

        .btn-maroon{
            background-color: #800020;
            color: white;
            border: none;
        }

        .btn-maroon:hover{
            background-color: #5b0016;
            color: white;
        }

        .card-maroon{
            background-color: #800020;
            color: white;
        }
    </style>
</head>
<body>

    <x-navbar />

    <div class="container mt-4">
        @yield('content')
    </div>

    <x-footer />

</body>
</html>