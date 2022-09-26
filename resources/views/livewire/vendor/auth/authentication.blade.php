<div>
   <x-slot name='title'>{{__('Registration And Login')}}</x-slot>

   @if (session()->has('success'))
       {{session('success')}}
   @endif

   <form action="" wire:submit.prevent='create'>
    <input type="text" wire:model.lazy='name' placeholder="Enter name"> <br>
    @error('name')
        <span>{{$message}}</span>
    @enderror <br>
    <input type="email" wire:model.lazy='email' placeholder="Enter email"> <br>
    @error('email')
    <span>{{$message}}</span>
@enderror <br>
    <input type="text" wire:model.lazy='mobile' placeholder="Enter mobile "> <br>
    @error('mobile')
    <span>{{$message}}</span>
@enderror <br>
    <input type="text" wire:model.lazy='password' placeholder="Enter password"> <br>
    @error('password')
    <span>{{$message}}</span>
@enderror <br>
    <input type="checkbox" wire:model.lazy='gst' placeholder="Enter gst"> <br>
    <button type="submit" >Submit</button>
   </form>
</div>
