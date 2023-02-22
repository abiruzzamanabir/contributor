<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contributor Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/assets/img/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 py-3 my-3">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <a href="{{ route('form.index') }}"><img width="100px" src="{{ asset('storage/assets/img/logo.png') }}" alt=""></a>
                    </div>

                    <div class="card-body">
                        @include('validate')
                        <form action="{{ route('form.store')}}" method="POST" class="was-validated">
                            @csrf
                            <div class="border p-3 shadow">
                                {{-- <h4 class="text-center">Information</h4> --}}
                                <div class="mb-2">
                                    <label for="validationName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Name</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationEmail" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Email</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationContact" class="form-label">Contact</label>
                                    <input type="text" name="contact" class="form-control" value="{{old('contact')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Contact Details</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationDesignation" class="form-label">Occupation/Designation</label>
                                    <input type="text" name="designation" class="form-control" value="{{old('designation')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Occupation/Designation</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationOrganizatioon" class="form-label">Institution/Organizatioon</label>
                                    <input type="text" name="organizatioon" class="form-control" value="{{old('organizatioon')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Institution/Organizatioon</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationTopic" class="form-label">Topic</label>
                                    <input type="text" name="topic" class="form-control" value="{{old('topic')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Topic</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationReference" class="form-label">Reference</label>
                                    <input type="text" name="reference" class="form-control" value="{{old('reference')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Reference</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationVisuals" class="form-label">Visuals</label>
                                    <input type="text" name="visuals" class="form-control" value="{{old('visuals')}}"
                                        required>
                                    <div class="invalid-feedback">Enter Your Visuals</div>
                                </div>
                                <div class="mb-2">
                                    <label for="validationWriteup" class="form-label">Writeup</label>
                                    <textarea name="writeup" class="form-control" cols="30"
                                        rows="5" required>{{old('writeup')}}</textarea>
                                    <div class="invalid-feedback">Enter Your Writeup</div>
                                </div>
                                <div class="mt-2 text-center">
                                    <button style="width: 100%" class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
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