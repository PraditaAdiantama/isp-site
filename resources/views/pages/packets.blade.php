@extends('layouts.default')

@section('content')
    <x-packets.add />
    <x-packets.list :packets=$packets />
@endsection
