
@extends('home.layout')
@section('content')
<section class="bg-white rounded-2xl m-4 pt-10 p-7 w-full">
  @php
    $user = Auth::user();
  @endphp
  <div class="flex justify-between items-center">

    <h2 class="flex items-center gap-x-4 ml-5"><span class="font-bold text-4xl my-4 mb-6">Dashboard For Student</span></h2>

    <div class="flex gap-x-3">

      <div class=" py-2 px-3 bg-white outline outline-1 rounded-full outline-custom-lgray">
      <i class="fa-solid fa-magnifying-glass"></i>
      </div>

      <div class="relative py-2 px-3 bg-white outline outline-1 rounded-full outline-custom-lgray">
        <i class="fa-regular fa-bell"></i>
        <div class="w-2 h-2 absolute bg-red-700 rounded-full top-0 right-0"></div>
      </div>

      <div class="w-10 h-10 rounded-full overflow-hidden">
          <a href="{{route('profile.edit')}}">
            <img src="{{asset('storage/users-avatar/'.Auth::user()->avatar)}}" alt="">
            </a>
      </div>
    </div>
  </div>

  <p class="px-8 text-custom-lgray">Here the information about your activity and mental condition.</p>

  @if($user->studentProfile)
  <p>{{$user->studentProfile->first_name}}</p>
  @else

  <div class="flex justify-between items-center px-5 pr-10 pt-16">

    <div class="flex items-center">
      <i class="fa-regular fa-bell fa-shake text-3xl"></i>
      <p class=" font-bold px-5 ">Finish up your account by creating necessary student account informations.</p>
    </div>

    <a href="{{ route('students.create') }}" class="px-3 py-2 bg-custom-blue text-white font-bold rounded-md" >
      Finish Up
    </a>
  </div>
  @endif
 
  
  <section class="p-3 rounded-xl bg-custom-graish mt-10 flex justify-start h-auto">
    <div class="w-custom-4  rounded-xl overflow-hidden">
      <img src="{{asset('images/zachary-nelson.jpg')}}" alt="">
    </div>
    <div class="flex flex-col py-20 px-28">
      <p class="font-semibold">Learn university life psychology now and teach your friend always to be happy!</p>
      <button class="bg-black text-white w-40 p-3 text-sm rounded-full mt-5"><span>Learn More</span> &gt;</button>
    </div>
  </section>

  <script src="{{asset('script/navBar.js')}}"></script>
</section>
@endsection
