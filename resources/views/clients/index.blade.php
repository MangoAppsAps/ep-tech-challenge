@extends('layouts.app')

@section('content')
<div class="container">
    <clients-list :clients='@json($clients)'></clients-list>
</div>
@endsection