@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.home_title')}} @endslot
    @slot('description') {{__('text.home_description')}} @endslot
    @endcomponent
</div>
@endsection