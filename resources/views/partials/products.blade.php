@extends('layouts.app')

@section('content')
<main>
    <div class="container products">
        <h2>LE LUNGHE</h2>
        <section id="lunghe">
            @foreach($pastas as $pasta)
                @if($pasta['tipo'] == 'lunga')
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                @endif
            @endforeach
        </section>
        <h2>LE CORTE</h2>
        <section id="corte">
            @foreach($pastas as $pasta)
                @if($pasta['tipo'] == 'corta')
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                @endif
            @endforeach
        </section>
        <h2>LE CORTISSIME</h2>
        <section id="cortissime">
            @foreach($pastas as $pasta)
                @if($pasta['tipo'] == 'cortissima')
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                @endif
            @endforeach
        </section>
    </div>
</main>
@endsection