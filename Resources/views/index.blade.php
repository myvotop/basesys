@extends('defBackEnd.be-skel')

@section('content')
<div class="container">

    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('basesys.name') !!}
    </p>
</div>
@endsection
