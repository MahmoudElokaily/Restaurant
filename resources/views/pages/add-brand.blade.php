@extends('index')
@section('title' , 'Add Brand')
@section('content')
    <form class="rd-form rd-mailform form-style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('admin.store-brand')}}" enctype="multipart/form-data">
        @csrf
        <div class="row row-20 gutters-20">
            <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                    <input class="form-input" id="contact-your-name-6" type="file" name="image" data-constraints="required">
                </div>
                @error('image')
                <small style="color: red;" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            </div>
        <div class="row row-20 gutters-20">
            <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                    <input class="form-input" id="contact-your-name-6" type="text" name="name" data-constraints="required">
                    <label class="form-label" for="contact-your-name-6">Name</label>
                </div>
                @error('name')
                <small style="color: red;" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="row row-20 gutters-20">
            <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                    <input class="form-input" id="contact-your-name-6" type="text" name="description" data-constraints="required">
                    <label class="form-label" for="contact-your-name-6">Description</label>
                </div>
                @error('description')
                <small style="color: red" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>

        </div>
        <div class="group-custom-1 group-middle oh-desktop">
            <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Save</button>
        </div>
    </form>


@endsection
