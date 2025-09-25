@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <client-show :client='@json($client)'></client-show>
</div>
@endsection