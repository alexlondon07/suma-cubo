@extends('hello')
@section('output')
@foreach($items as $item)
    @if( !is_null($item) )
      <span class="label label-success">{{ $item }}</span>
    @endif
@endforeach
@stop
