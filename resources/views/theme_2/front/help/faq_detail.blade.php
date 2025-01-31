@extends('theme2.master')
@section('title', "$data->title")
@section('content')

@include('admin.message')
@php
$gets = App\Breadcum::first();
@endphp
@if(isset($gets))
<section id="business-home" class="business-home-main-block">
    <div class="business-img">
        @if($gets['img'] !== NULL && $gets['img'] !== '')
        <img src="{{ url('/images/breadcum/'.$gets->img) }}" class="img-fluid" alt="{{$gets->text}}" />
        @else
        <img src="{{ Avatar::create($gets->text)->toBase64() }}" alt="{{ __('course')}}" class="img-fluid">
        @endif
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading">{{ $data->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- faq detail start -->
<section id="faq-detail-block" class="faq-detail-main-block">
    <div class="container-xl">
    	<div class="blog-link btm-30">
            <a href="{{ route('help.show') }}" title="{{ __('back to blog')}}">
                <i class="fa fa-chevron-left"></i>{{ __('Back to faq') }}
            </a>
        </div>
    	<p>{!! $data->details !!}</p>
    </div>
</section>
<!-- faq detail end -->

@endsection
