@extends('layouts.chat')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-9">
                <chat></chat>
            </div>
            <div class="col-3 usuarios">
                <users></users>
            </div>
        </div>
    </div>

@endsection
