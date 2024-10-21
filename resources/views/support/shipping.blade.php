@extends('layouts.home')
@section('content')

<div class="max-w-2xl mx-auto text-start px-4">
         <p>
            @if(session('lang') == 'en')
            {!! $general->shipping !!}
            @else
            {!! $general->shipping_ar !!}
            @endif
         </p>
</div>

@endsection