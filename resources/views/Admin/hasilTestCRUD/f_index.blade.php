@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Hasil Test</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('hasil_test.create') }}">Input Hasil Test Baru</a>
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
            <th>Nama Hasil Test</th>
            <th width="30%">PDF</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($hasil_test))
            @foreach ($hasil_test as $ht)
            <tr>
                <td class="text-center">{{$ht->id}}</td>
                <td>{{$ht->nama_hasil_test}}</td>
                <td>{{$ht->pdf_ht}} </td>
                <td class="text-center">
                    <form action="{{ route('hasil_test.destroy',$ht->id)}}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('hasil_test.show',$ht->id)}}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('hasil_test.edit',$ht->id)}}">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
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
