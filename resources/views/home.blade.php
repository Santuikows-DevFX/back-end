<!DOCTYPE html>
<html lang>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CUSTOME PAGE</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- BS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    </head>
    <body class="antialiased">

        <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">

            <form class="border rounded shadow p-3" style="width: 500px;" method="post" action="{{ url('checkData') }}">


                <h1 class = "text-center"><strong> LOGIN FORM</strong></h1>

                {{-- error handling --}}
                {{-- kinda like the if(isset($_GET)) in normal PHP --}}
                @if ($message = Session::get('error')) 

                    <div class="alert alert-danger alert-block">

                        {{-- displaying the error message from the return back()->with() --}}
                        {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
                        <strong>{{ $message }}</strong>

                    </div>
                    
                @endif

                {{--check if the error is greater than 0 therefore there is an error  --}}
                @if (count($errors) > 0) 

                    <div class="alert alert-danger">

                        <ul>
                            @foreach ($errors->all() as $error)

                            {{-- this will be the one who will be used in session::get() --}}
                                <li>{{ $error }}</li>
                                
                            @endforeach
                        </ul>

                    </div>
                
                @endif

                {{ csrf_field() }}

                <div class="mb-3">

                    <label for="exampleInputEmail1" class="form-label">Student ID</label>
                    <input type="text" class="form-control" name="student_id" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">

                </div>

                <div class="d-grid mx-auto">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>
     
    </body>
</html>
