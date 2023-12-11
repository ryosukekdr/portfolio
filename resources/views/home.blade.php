@extends('layouts.app')

@section('content')
<div style="width: 50%; margin: 0 auto;">
<ul class="user-list">
    
@foreach ($users as $user)
   <li class="fas fa-plane"><a href="{{ route('userpage', ['user_id' => $user->id]) }}">{{ $user->name }}</a></li>
                                <br>
                            @endforeach
                            
                            <a href="{{ route('mypage') }}">マイページ</a>
                            </ul>
                            </div>
                            @endsection