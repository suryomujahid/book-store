<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Toko Buku</title>
</head>

<body onLoad="window.print()">

    <div class="container mt-5">
        <div class="text-center">
            <h3>Laporan Penjualan Buku</h3>
        </div>

        <div class="row">

            <div class="table-responsive">
                <table class=" table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No Faktur</th>
                            <th>Judul Buku</th>
                            <th>Jumlah Beli</th>
                            <th>Harga Satuan</th>
                            <th>PPN</th>
                            <th>Diskon</th>
                            <th>Total harga</th>
                            <th>Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $tr)
                        <tr>
                            <td>{{$tr->id_penjualan}}</td>
                            <td>{{$tr->book->judul}}</td>
                            <td>{{$tr->jumlah_beli}}</td>
                            <td>{{$tr->book->harga_pokok}}</td>
                            <td>{{$tr->book->ppn}}%</td>
                            <td>{{$tr->book->diskon}}%</td>
                            <td>{{intval(($tr->total_harga + ($tr->total_harga * $tr->book->ppn / 100)) - ($tr->total_harga * $tr->book->diskon / 100)) }}</td>
                            <td>{{$tr->tanggal}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    @include('Template.script')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>