@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.aobut_title')}} @endslot
    @slot('description') {{__('text.about_description')}} @endslot
    @endcomponent
</div>
@endsection