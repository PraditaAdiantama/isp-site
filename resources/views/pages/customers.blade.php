@extends('layouts.default')

@section('content')
    <x-customers.list :customers=$customers :packets=$packets />
@endsection
