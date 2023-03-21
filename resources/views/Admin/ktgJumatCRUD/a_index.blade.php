@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Katalog Jumat</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('katalog_jumat.create') }}">Buat Katalog Jumat Baru</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Katalog Jumat</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($katalog_jumat))
        @foreach ($katalog_jumat as $ktg_J)
        <tr>
            <td class="text-center">{{$ktg_J->id}}</td>
            <td>{{$ktg_J->nama_katalog_jumat}}</td>
            <td>{{$ktg_J->image_katalog_J}} </td>
            <td class="text-center">
                @csrf
                <?php
                    $e = strtotime("Today");
                        echo "Today is " . date("l", $e) . "<br>";

                    if ($e == strtotime("Monday")) {
                        echo (
                            "<form action='katalog_jumat/$ktg_J->id' method='POST'>
                                <a class='btn btn-info btn-sm' href='katalog_jumat/$ktg_J->id'>Show</a>

                                <a class='btn btn-primary btn-sm' href='katalog_jumat/$ktg_J->id/edit'>Edit</a>
                            </form>
                            <form action='katalog_jumat/$ktg_J->id' method='POST'>
                                <input type='hidden' name='_token' value=".csrf_token()." />
                                <input type='hidden' name='_method' value='DELETE' />
                                <button class='btn btn-danger btn-sm' onclick='return confirm('Apakah Anda yakin ingin menghapus data ini?')'>Delete</button>
                            </form>"
                        );
                    } elseif ($e != strtotime("Friday") && $e == 1) {
                        echo "Still Good";
                    }
                ?>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" colspan="4">Data Kosong!!! Have a nice day :)</td>
        </tr>
        @endif
    </table>
@endsection

