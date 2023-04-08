@extends('Promosi')

@section('contentPromosi')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Katalog Jumat</u></li>
    </ul>
    <hr>
    <div class="row">
        @if (count($katalog_jumat))
            @foreach ($katalog_jumat as $k=>$item)
            <?php
                $t = date("l");
                    echo $t . "<br>";
                $d = strtotime("Friday");
                    echo "Tomorrow is " . date("l", $d) . "<br>";
                if ($t != $d) {
                    echo "<div class='col-lg-6 col-md-6'>
                            <br>
                            <img class='img' src='public/katalogJumat/$item->image_katalog_J' width='100%' alt='...' title=''>
                         </div>";
                } else {
                    echo "Have a good day!
                    <div class='col-lg-6 col-md-6'>
                        <br>
                        <img class='img' src='public/maintenance/UM3.png' width='70%' alt='...' title=''>
                    </div>";
                };
            ?>
            {{-- <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="{{ url('public/katalogJumat/'.$item->image_katalog_J) }}" width="100%" alt="..." title="">
            </div> --}}
            @endforeach
        @else
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="public/maintenance/UM3.png" width="70%" alt="..." title="">
            </div>
        @endif
    </div>
@endsection
