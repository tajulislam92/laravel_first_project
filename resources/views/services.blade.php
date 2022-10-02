@extends('master')

@section('content')
<div class="page-title">
    <h1>Services Page</h1>
    @for ($i=0;$i<4;$i++)
        {{ $services_1[$i] }}<br>

    @endfor
</div>
@endsection
