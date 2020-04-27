@extends('layout/main')

@section('title', 'Pendaftaran')



    @section('container')
    <!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
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
            background: url(ddd.jpg);
            padding:0;
            margin:0;
            background-size: cover;
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
                <h1 class="mt-3">Pendaftaran</h1>
                <hr />
                <table class="table">
                    <thead>
               <h6><th scope="col">Penerimaan</th></h6>
                    </thead>
                    <body>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Reguler
                    </label>
                  </div></td>

                  <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                      Beasiswa
                    </label>
                  </div></td>
                    </body>
                </table>
                 
                <h5> I. DATA CALON MURID </h5>
                <hr />
                <form>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword">
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                     
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <td><div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                          </label>
                        </div></td>
      
                        <td><div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                          <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                          </label>
                        </div></td>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tempat,tanggal lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Cita-cita</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Hoby</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Anak ke</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah saudara</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Berat badan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tinggi badan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Golongan darah</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>
                  </form>

                  <hr />
                  <h5> II. KETERANGAN TEMPAT TINGGAL </h5>
                  <hr />
                  <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <small id="emailHelp" class="form-text text-muted">Isi alamat lengkap,kelurahan,kecamatan,kota/kabupaten, propinsi disertai kode pos, no telpon rumah,dan alamat email .</small>
                     </div>

                     <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Tinggal dengan</label>
                     <div class="form-check">
                         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                         <label class="form-check-label" for="exampleRadios1">
                           Orang Tua
                         </label>
                       </div>
     
                       <div class="form-check">
                         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                         <label class="form-check-label" for="exampleRadios2">
                           Asrama
                         </label>
                       </div>

                       <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                        <label class="form-check-label" for="exampleRadios2">
                          Saudara
                        </label>
                      </div>

                      <hr />
                      <h5> III. KETERANGAN KESEHATAN </h5>
                      <hr />

                      <h6>Penyakit yang pernah diderita: </h6>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">TBC</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="emailHelp" class="form-text text-muted">jawab ya/tidak dan beri keterangan bila masih menderita penyakit tersebut, jika sudah tidak, berikan keterangan waktu kapan menderita penyakit tersebut.</small>
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Malaria</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="emailHelp" class="form-text text-muted">jawab ya/tidak dan beri keterangan bila masih menderita penyakit tersebut, jika sudah tidak, berikan keterangan waktu kapan menderita penyakit tersebut.</small>
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Chotipa</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="emailHelp" class="form-text text-muted">jawab ya/tidak dan beri keterangan bila masih menderita penyakit tersebut, jika sudah tidak, berikan keterangan waktu kapan menderita penyakit tersebut.</small>
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Cacar</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="emailHelp" class="form-text text-muted">jawab ya/tidak dan beri keterangan bila masih menderita penyakit tersebut, jika sudah tidak, berikan keterangan waktu kapan menderita penyakit tersebut.</small>
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Lain-lain</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="emailHelp" class="form-text text-muted">jawab ya/tidak dan beri keterangan bila masih menderita penyakit tersebut, jika sudah tidak, berikan keterangan waktu kapan menderita penyakit tersebut.</small>
                     </div>

                     
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Kelainan lainnya</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="emailHelp" class="form-text text-muted">Tulis jika ada dan jelaskan kelainan seperti apa.</small>
                     </div>

                     <hr />
                     <h5> IV. DATA ORANG TUA/WALI </h5>
                     <hr />
                     <h5>A.Ayah</h5>
                     <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                          <small id="emailHelp" class="form-text text-muted">Beri keterangan (masih ada/almarhum)</small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tempat, tanggal lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kewarganegaraan dan Agama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">No HP dan WA</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <h5>B.Ibu</h5>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                          <small id="emailHelp" class="form-text text-muted">Beri keterangan (masih ada/almarhum)</small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tempat, tanggal lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kewarganegaraan dan Agama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">No HP dan WA</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <h5>C. Wali</h5>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama Wali</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tempat, tanggal lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Hubungan dengan murid</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kewarganegaraan dan Agama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">No HP dan WA</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat E-mail</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword">
                          <small id="emailHelp" class="form-text text-muted">Isi jika punya</small>
                        </div>
                      </div>

                      <hr />
                      <h5>VI.NILAI RAPOR</h5>
                      <hr />
                      <h6>Semester 1</h6>

                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas 7</th>
                            <th scope="col">Kelas 8</th>
                            <th scope="col">Kelas 9</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>PAI</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bahasa Indonesia</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bahasa Inggris</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Matematika</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>IPA</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>IPS</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Prestasi yang pernah diraih</td>
                            <td colspan="4">  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></td>
                          
                          </tr>
                        </tbody>
                      </table>

                      <h6>Semester 2</h6>

                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas 7</th>
                            <th scope="col">Kelas 8</th>
                            <th scope="col">Kelas 9</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>PAI</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bahasa Indonesia</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bahasa Inggris</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Matematika</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>IPA</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>IPS</td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                            <td> <input type="number" class="form-control" id="inputPassword" size="1"></td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Prestasi yang pernah diraih</td>
                            <td colspan="4">  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></td>
                          
                          </tr>
                        </tbody>
                      </table>

                      <h6> Informasi SMK Wikrama 1 Garut dari: </h6>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Family
                    </label>
                  </div></td>

                  <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Website
                    </label>
                  </div></td>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Teman
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Brosur
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Sekolah SMP
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Facebook
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Karyawan/Guru
                    </label>
                  </div>
                  <h6></h6>
                  <h6></h6>
                  <hr />

                  <a href="/halaman1"><button type="button" class="btn btn-dark">Finish</button></a>

                 


                  </form>
              </div>
          </div>
      </div>
      @endsection 
   

    