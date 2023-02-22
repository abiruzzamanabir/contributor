<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nomination Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.2/datatables.min.css" />
    <script src="https://use.fontawesome.com/b477068b8c.js"></script>
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/assets/img/favicon.png') }}" type="image/x-icon">


</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-12">
                <div class="card my-3 shadow">
                    <div class="card-header text-center">
                        @if ($page=='dashboard')
                        <a href="{{ route('trash.index') }}" class="btn btn-sm btn-danger">Trash <span class="badge bg-light text-dark ms-1">{{$count}}</span></a>
                        @else
                        <a href="{{ route('dashboard.index') }}" class="btn btn-sm btn-info">Dashboard <span class="badge bg-light text-dark ms-1">{{$count}}</span></a>
                        @endif
                    </div>
                    <div class="card-body overflow-scroll">
                        @include('validate')
                        <table id="dashboard" class="table table-striped border">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Occupation/Designation</th>
                                    <th scope="col">Institution/Organizatioon</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Visuals</th>
                                    <th scope="col">Writeup</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_contribution as $item)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->contact}}</td>
                                    <td>{{$item->designation}}</td>
                                    <td>{{$item->organizatioon}}</td>
                                    <td>{{$item->topic}}</td>
                                    <td>{{$item->reference}}</td>
                                    <td>{{$item->visuals}}</td>
                                    <td>{{$item->writeup}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                    <td>
                                        @if ($item->trash)
                                        <span class="d-flex">
                                            <a class="btn btn-sm btn-success me-1" href="{{ route('trash.update',$item->id) }}"><i
                                                class="fa fa-undo" aria-hidden="true"></i></a>
                                        <form class="d-inline delete-form" action="{{ route('dashboard.destroy', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></button>
                                        </form>
                                        </span>
                                        @else
                                        <a class="btn btn-sm btn-danger" href="{{ route('trash.update',$item->id) }}"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <p class="m-0 p-3">Contributor Form | Bangladesh Brand Forum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.2/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".delete-form").submit(function (e) {
            let conf = confirm("Are you sure?");

            if (conf) {
                return true;
            } else {
                e.preventDefault();
            }
        });
    $('#dashboard').DataTable();
});
    </script>
</body>

</html>