<!DOCTYPE html>
<html>
<title>Data</title>

<head></head>

<body>
    <div style="text-align: right;">
        <form action="/absen/show" method="GET">
            <input type="text" name="cari" placeholder="Cari Data .." value="{{ old('cari') }}">
            <input type="submit" class="button button-hijau" value="CARI">
        </form>
    </div>
    <br>
    <table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:20%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>absen</th>
                <th>tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->absen }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format("d-m-Y") }}</td>
            </tr>
            @endforeach
        </tbody>
        </div>
        </section>

    </table>

</body>

</html>