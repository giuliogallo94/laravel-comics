@extends('layouts.app')

@section('content')
<div class="main_index">

    <div class="image_100vw"></div>

    <div class="inner_index">
        <div class="content-title">
            <span>CURRENT SERIES</span>
        </div>
    

        <div class="d-flex justify-content-between align-items-center flex-wrap pt-4">
            @foreach ($comics as $item)
            <div class="ms_card">
                
                <img
                src="{{$item['thumb']}}"
                alt="{{$item['series']}}'s poster"
                />
                <span>{{$item['series']}}</span>
                
            </div>
            @endforeach

            <div class="load mx-auto">
                <button>LOAD MORE</button>
            </div>
        </div>

    </div>
    <div class="shop_section d-flex justify-content-between">
        @foreach ($shop as $shop_item)
            <div class="shop_card d-flex justify-content-center align-items-center me-3">
                <div class="buy_img me-1">
                    <img src="{{ Vite::asset('/resources/images/'.$shop_item['url'])}}" alt="" />
                </div>
                <div class="buy_title">
                    <span>
                        {{$shop_item['title']}}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection