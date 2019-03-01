{{-- @extends('layouts.app')
@section('content')
    <div class="preview">

    </div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NMR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   
    <div class="preview">
        <h5 class="center red darken-4 white-text">Medical Examination and Diagnostic Certificate</h5>
        <div class="row">
            <div class="col m3">
                <p class="top-round">Serial no: </p>
            </div>
            <div class="col m6">
                <p class="top-round">To: </p>
            </div>
            <div class="col m3">
                <p class="top-round">Date: </p>
            </div>
        </div>
        <div class="row">
            <div class="col m3 photo">
                <br><br><br><br><br><br><br>
                <p>Photograph</p>
                <br><br><br><br><br><br><br>
            </div>
            <div class="col m9">
                <div class="row">
                    <div class="col m12 right-photo">
                        <p>Full Name: </p>
                    </div>
                    <div class="col m12 right-photo">
                        <p>Address: </p>
                    </div>
                    <div class="col m8 right-photo">
                        <p>Recruiting Agency: </p>
                    </div>
                    <div class="col m4 right-photo">
                        <p>L L no: </p>
                    </div>
                    <div class="col m8 right-photo">
                        <p>Passport Number: </p>
                    </div>
                    <div class="col m4 right-photo">
                        <p>Place of issue: </p>
                    </div>
                    <div class="col m8 right-photo">
                        <p>Position Applied for: </p>
                    </div>
                    <div class="col m4 right-photo">
                        <p>Age: </p>
                    </div>
                    <div class="col m8 right-photo">
                        <p>Nationality: </p>
                    </div>
                    <div class="col m4 right-photo">
                        <p>Sex: </p>
                    </div>
                    <div class="col m8 right-photo">
                        <p>Marital Status: </p>
                    </div>
                    <div class="col m2 right-photo">
                        <p>Height: </p>
                    </div>
                    <div class="col m2 right-photo">
                        <p>Weight: </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="medical-history">
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.tabs').tabs();
        });
    </script>
</body>
</html>
