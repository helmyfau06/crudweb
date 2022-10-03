<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        /* For mobile phones: */
        [class*="col-"] {
        width: 100%;
        }

        @media only screen and (min-width: 600px) {
        /* For tablets: */
        .col-s-1 {width: 8.33%;}
        .col-s-2 {width: 16.66%;}
        .col-s-3 {width: 25%;}
        .col-s-4 {width: 33.33%;}
        .col-s-5 {width: 41.66%;}
        .col-s-6 {width: 50%;}
        .col-s-7 {width: 58.33%;}
        .col-s-8 {width: 66.66%;}
        .col-s-9 {width: 75%;}
        .col-s-10 {width: 83.33%;}
        .col-s-11 {width: 91.66%;}
        .col-s-12 {width: 100%;}
        }

        @media only screen and (min-width: 768px) {
        /* For desktop: */
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}
        }

        .header {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .btnAct {
            text-align: center;
        }

        .tblNumber {
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="header">
        <h2 style="text-align:center;">Tambah Data Mahasiswa</h2>
    </div>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Npm</label>
                          <input name="npm" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gender</label>
                            <select name="jenkel" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Gender</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Prodi</label>
                            <select name="prodi" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Prodi</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fakultas</label>
                            <input name="fakultas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/mahasiswa"><button type="button" class="btn btn-warning">Kembali</button></a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>