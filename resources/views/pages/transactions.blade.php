@extends('layouts.default')

@section('content')
    <x-transactions.list :transactions=$transactions />
@endsection
