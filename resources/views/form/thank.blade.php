<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You {{$name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('storage/assets/img/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 py-3 my-3">
                @include('validate')
                <div class="card shadow">
                    <div class="card-header text-center">
                        <a href="{{ route('form.index') }}"><img width="100px" src="{{ asset('storage/assets/img/logo.png') }}" alt=""></a>
                    </div>

                    <div class="card-body">
                        <h4 class="text-center">Thank you <b class="text-capitalize">{{$name}}</b> for your interest in writing for Bangladesh Brand Forum.</h4>
                    </div>
                    <div class="card-footer text-center">
                        <p>Contributor Form | Bangladesh Brand Forum</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
</body>

</html>