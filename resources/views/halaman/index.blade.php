@extends('layout/main')

@section('title', 'Halaman')

    @section('container')
<!DOCTYPE html>
<html>
<head>
    <title>Halaman</title>
    <style media="screen">
        /*untuk teks heading di tag <body>*/
        h2
        {
            background-color: white;
            color: black;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }

 
        body
        {
            background: url(khania.jpg);
            padding:0;
            margin:0;
            background-size: cover;
        }

        .button{
            width: 100%;
            height: 50 px;
        }
        .right{
            float: right;
            display: block;
        }
        .button ul a{
            padding: 10px;
            background: rgb(116,181,12);
            color: white;
        }
    </style>
   {{-- <background img src="wikrama.jpg" class="img-responsive" alt=""></background> --}}
</head>
<body>
 
    
 
</body>

</html>
<div class="container">
    <div class="row">
        <div class="col-10">
        </div>
    </div> 
    {{-- <a href="/pendaftaran"><button type="button" class="btn btn-dark">Daftar</button></a> --}}
</div>


@endsection