<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="ha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h4 style="text-align: center;">{{ $title }}</h4>
    <p style="text-align: center;">{{ $permohonan->user->name }}</p>
    <p>Anda telah melakukan permohonan pencatatan perkawinan pada aplikasi pekanos sebagai berikut:</p>

    <div class="card">
        <div class="card-header">Detail Permohonan</div>
        <div class="card-body">
            <table class="table table-borderless small" style="line-height: 10px;">
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td>{{ $permohonan->id }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$permohonan->created_at}}</td>
                </tr>
                <tr>
                    <td>No Kartu Keluarga</td>
                    <td>:</td>
                    <td>{{$permohonan->no_kk}}</td>
                </tr>
                <tr>
                    <td>NIK / Nama Suami</td>
                    <td>:</td>
                    <td>{{$permohonan->nik_suami}} / {{$permohonan->nama_suami}}</td>
                </tr>
                <tr>
                    <td>NIK / Nama Istri</td>
                    <td>:</td>
                    <td>{{$permohonan->nik_istri}} / {{$permohonan->nama_istri}}</td>
                </tr>
                <tr>
                    <td>No Akta Pernikahan</td>
                    <td>:</td>
                    <td>{{$permohonan->no_akta_nikah}}</td>
                </tr>
                <tr>
                    <td>Status Permohonan</td>
                    <td>:</td>
                    <td>{{$permohonan->status_pengajuan}}</td>
                </tr>

            </table>
        </div>
    </div>

</body>
</html>