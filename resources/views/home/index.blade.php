@extends('layouts.app')

@section('content')
<div class="main_index">

    <div class="image_100vw"></div>

    <div class="inner_index">
    <div class="content-title">
        <span>CURRENT SERIES</span>
    </div>
    

        <div class="cards_container d-flex justify-content-between flex-wrap pt-4">
            @foreach ($comics as $item)
            <div class="ms_card">
                
                <img
                src="{{$item['thumb']}}"
                alt="{{$item['series']}}'s poster"
                />
                <span>{{$item['series']}}</span>
                
            </div>
            @endforeach
        </div>

</div>

@endsection