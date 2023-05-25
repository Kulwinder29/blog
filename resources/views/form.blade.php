@extends('main')

@section('main-section')
    <!doctype html>
    <html lang="en">

    <head>
        <title>
            @isset($title)
                {{ $title }}
            @endisset
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body>

        <div class="container p-4 shadow mt-4">
            <h1 class="text-center">{{ $title }}</h1>
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf

                @isset($customer->img)
                <img style="width: 300px" src="{{ asset('storage/photos/') . "/" . $customer->img }}" alt="" width="100%" height="100%">
                @endisset

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Name :</label>
                        <input type="name" name="name" class="form-control" id=""
                            value="@isset($customer->u_name){{ $customer->u_name }}@endisset">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email :</label>
                        <input type="email" name="email" class="form-control" id=""
                            value="@isset($customer->u_email){{ $customer->u_email }}@endisset">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Image :</label>
                    <input type="file" name="image" class="form-control" id="" {{-- value="@isset($customer->u_name)
                                {{ $customer->u_name }}
                                @endisset"> --}} </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Password :</label>
                            <input type="password" name="password" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Comfirm Password :</label>
                            <input type="password" name="password_confirmation" class="form-control" id=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Country :</label>
                            <input type="text" name="country" class="form-control" id=""
                                value="@isset($customer->country){{ $customer->country }}@endisset">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control" id=""
                                value="@isset($customer->state){{ $customer->state }}@endisset">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Address :</label>
                            <textarea name="address" id="" cols="150" rows="">@isset($customer->address){{ $customer->address }}@endisset</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Gender :</label>
                            <div class="input-group-text">
                                Male : <input type="radio" name="gender" value="M"
                                    @isset($customer->gender){{ $customer->gender == 'M' ? 'checked' : '' }}@endisset
                                    aria-label="Radio button for following text input">
                            </div>
                            <div class="input-group-text">
                                Female : <input type="radio" name="gender" value="F"
                                    @isset($customer->gender){{ $customer->gender == 'F' ? 'checked' : '' }}@endisset
                                    aria-label="Radio button for following text input">
                            </div>
                            <div class="input-group-text">
                                Other : <input type="radio" name="gender" value="O"
                                    @isset($customer->gender){{ $customer->gender == 'O' ? 'checked' : '' }}@endisset
                                    aria-label="Radio button for following text input">
                            </div>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Date of birth :</label>
                            <input type="date" name="dob" class="form-control" id=""
                                value="@isset($customer->dob){{ $customer->dob }}@endisset">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-outline-dark w-50">Sign in</button>
                    </div>
            </form>
        </div>

        {{-- <form action="{{ url('/') }}/register" method="post">
        @csrf
        <div class="container shadow p-2">
            <h1 class="text-center">Registration</h1>
            <div class="form-group">
                <x-input type="text" name="name" label="Name :" />
                <x-input type="email" name="email" label="Email :" />
            </div>
            <x-input type="password" name="password" label="Password :" />
            <x-input type="password" name="password_confirmation" label="Comfirm Password :" />
            <x-input type="text" name="country" label=" Country :" />
            <x-input type="text" name="state" label=" State :" />
            <x-input type="text" name="address" label=" Address :" />
            <label for="">Gender :</label>
            Male : <input type="radio" name="gender" id="">
            Female : <input type="radio" name="gender" id="">
            Other : <input type="radio" name="gender" id="">
            <x-input type="date" name="country" label=" Date of birth :" />
            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-dark px-5" type="submit" name="submit">Submit</button>
            </div>
        </div>
    </form> --}}

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
