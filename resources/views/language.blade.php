@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.languages_select')}} @endslot
    @slot('description') {{__('text.languages_description')}} @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label for="language">{{__('text.select_language')}}</label>
                    <select class="form-control" name="Language" id="language">
                      <option @if(Session::get('language') == "en") selected="selected" @endif value="en" name="en" id="en">English</option>
                      <option @if(Session::get('language') == "he") selected="selected" @endif value="he" name="he" id="he">Hebrew</option>
                    </select>
                    <span class="text-danger">{{$errors->first('language')}}</span>
                  </div>

                <button type="submit" class="btn btn-primary">{{__('text.save')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection