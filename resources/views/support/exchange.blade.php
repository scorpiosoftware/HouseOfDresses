@extends('layouts.home')
@section('content')

<div class="max-w-2xl mx-auto text-start px-4">
         <p>
            @if(session('lang') == 'en')
            {!! $general->exchange !!}
            @else
            {!! $general->exchange_ar !!}
            @endif
         </p>
</div>

@endsection