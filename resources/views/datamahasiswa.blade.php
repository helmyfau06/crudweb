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
        <h2 style="text-align:center;">Data Mahasiswa</h2>
    </div>
    

    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @endif
       <a href="/tambah"><button type="button" class="btn btn-success" style="margin-bottom: 10px; margin-left:-12px">Tambah Data</button></a> 
        <div class="row">
            <table class="table table-bordered">
                <thead style="text-align: center;">
                    <th>No</th>
                    <th>Npm</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th colspan="2">Aksi</th>
                </thead>
                <tbody>
                    {{-- Looping Statement --}}
                    @php ($count=0)
                    @foreach ($data as $row)
                    @php($count++)
                    <tr>
                        <td class="tblNumber">{{$count}}</td>
                        <td class="tblNumber">{{ $row->npm }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jenkel }}</td>
                        <td>{{ $row->prodi }}</td>
                        <td>{{ $row->fakultas }}</td>
                        <td class="btnAct"><a href="/show/{{$row->id}}" class="btn btn-info">Ubah</a></td>
                        <td class="btnAct"><a href="/delete/{{$row->id}}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>