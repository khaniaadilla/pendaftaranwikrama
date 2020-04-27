@extends('layout/main')

@section('title', 'Halaman')

    @section('container')
<!DOCTYPE html>
<html>
<head>
    <title>Halaman1</title>
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
            background: url(dele.jpg);
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

    <div class="jumbotron">
        <h1 class="display-4">Pendaftaran Berhasil!</h1>
        <p class="lead">Berikut Persyaratan yang Harus di Bawa : </p>
        <p> - Fotokopi Rapot SMP kelas 7-9 semeter 1 </p>
        <p> - Fotokopi Akte Kelahiran </p>
        <p> - Fotokopi Kartu Keluarga </p>
        <p> - Pas Foto (berwarna) Berkemeja ukuran 3 x 4 (6 lembar)</p>
        <hr class="my-4">
        <p>Bawa persyaratan berikut di test selanjutnya</p>
        <a href="/halaman"><button type="button" class="btn btn-dark">Finish</button></a>
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
      </div>
    
    {{-- <form><p style="text-align:center" class="h2">Pendaftaran Berhasil!</p></form> --}}
    
   
</div>


@endsection