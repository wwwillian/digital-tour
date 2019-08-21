@extends('layouts.conectado')
@section('content')

<div class="mt-5 pt-5">
        <app-root></app-root>
</div>
<script type="text/javascript" src="{{ asset('js/runtime.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/polyfills.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/styles.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection