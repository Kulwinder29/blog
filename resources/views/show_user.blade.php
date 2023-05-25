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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <h1 class="text-center">{{ $customer->u_name }}</h1>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        {{-- <pre>
                        @php
                            print_r($customer);
                        @endphp
                    </pre> --}}
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>Gender</th>
                        <th>DOB</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $customer->u_id }}</td>
                        <td>{{ $customer->u_name }}</td>
                        <td>{{ $customer->u_email }}</td>
                        <td><img style="width: 70px; border-radius:50px" src="{{ asset('storage/photos/') . "/" . $customer->img }}" alt="" width="100%" height="100%"></td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @endif
                            @if ($customer->gender == 'F')
                                Female
                            @endif
                            @if ($customer->gender == 'O')
                                Other
                            @endif
                        </td>
                        <td>{{ format_date($customer->dob, 'd-M-Y') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
