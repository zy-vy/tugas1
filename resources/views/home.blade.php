@extends('layouts.app')

@section('content')
    <h1>
        Hello World!
    </h1>

    @php
        $idx = 300;
    @endphp

    <div class="d-flex">


        @foreach ($gambars as $gambar)


            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/id/{{$idx}}/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$gambar}}</h5>
                    <p class="card-text">

                        @if ($gambar == 'beach')
                            <div>pantai</div>
                        @elseif ($gambar == 'forest')
                            <div>hutan</div>
                        @elseif($gambar == 'mountain')
                            <div>gunung</div>
                        @endif
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @php
                $idx +=1;
            @endphp
        @endforeach
    </div>
@endsection
