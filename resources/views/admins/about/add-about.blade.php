@extends('layout.admin')

@section('title')
    Home
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
                        <div class="ec-cat-form" wire:ignore.self>
                            <h4>Add New About</h4>
                            <form wire:submit.prevent='save'>
                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">About Title</label>
                                    <div class="col-12">
                                        <input id="text" name="text" wire:model.lazy='title'
                                            class="form-control here slug-title" type="text">
                                        @error('title')
                                            <span style='color:red'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row" wire:ignore>
                                    <label for="text" class="col-12 col-form-label">About Content</label>
                                    <div class="col-12">
                                        <textarea name="" id="" cols="30" wire:model='para' class="form-control here slug-title"
                                            rows="10"></textarea>
                                        @error('para')
                                            <span style='color:red'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Upload Image</label>
                                    <div class="col-12">
                                        <input class="form-control" wire:model='image' type="file">
                                        @error('image')
                                            <span style='color:red'>{{ $message }}</span>
                                        @enderror
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="48" height="48" />
                                        @endif
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
