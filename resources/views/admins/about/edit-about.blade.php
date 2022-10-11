@extends('layout2.admin')

@section('title')
    Update
@endsection
@section('content')
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>{{ __('About') }}</h1>
                <p class="breadcrumbs"><span><a href="index.html">{{ __('Home') }}</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>{{ __('About') }}
                </p>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                        </div>
                        <div class="ec-cat-form" >
                            <h4>Update About</h4>
                            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.update-about', ['id'=>$abouts->id]) }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">About Title</label>
                                    <div class="col-12">
                                        <input id="text"  name='title' value="{{ $abouts->title }}"
                                            class="form-control here slug-title" type="text">
                                        @error('title')
                                            <span style='color:red'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <label for="text" class="col-12 col-form-label">About Content</label>
                                    <div class="col-12">
                                        <textarea  id="4" cols="30" name='para' class="form-control here slug-title"
                                            rows="10">{{ $abouts->para }}</textarea>
                                        @error('para')
                                            <span style='color:red'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Upload Image</label>
                                    <div class="col-12">
                                        <input class="form-control" name='new_image' type="file">
                                        <img src="{{asset('storage')}}/{{$abouts->image}}" width="48" alt="">
                                        <input type="hidden" name="old_image" value="{{$abouts->image}}" id="">
                                        @error('image')
                                            <span style='color:red'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
