@extends('layouts.app_master')
@section('title')
    FactNews
@endsection
@section('content')
    <!-- Breaking News -->
    <div class="bg7">
        @include('components.breaking_news')
    </div>

    <!-- Feature post For Breaking News-->
    @include('components.feature_post')

    {{-- <!-- Post --> --}}
    <section class="bg0 p-t-30 bg7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="p-b-20">
                        {{-- <!-- New --> --}}
                        @include('components.new')

                        {{-- <!-- National --> --}}
                        @include('components.national')

                        {{-- <!-- Entertain --> --}}
                        @include('components.entertainment')

                        {{-- Ads --}}
                        <div class="tab01 p-b-20">
                            <img class="max-w-full" src="{{ asset('client/images/ads/Ads_3.png') }}">
                        </div>
                    </div>
                </div>
                <!-- Content right -->
                <div class="col-md-10 col-lg-4">
                    <div class="p-l-10 p-rl-0-sr991 p-b-20">
                        {{-- Most popular --}}
                        @include('components.most_popular')

                        <!--  -->
                        <div class="flex-c-s p-t-8">
                            <a href="#">
                                <img class="max-w-full" src="{{ asset('client/images/ads/Ads_1.gif') }}" alt="IMG">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Techonology & Feature Video -->
    <section class="bg0 p-t-10 p-b-30 bg7">
        <div class="container">
            <div class="row justify-content-center">
				{{-- Techonology --}}
				@include('components.technology')
				{{-- Feature video --}}
				@include('components.feature_video')
            </div>
        </div>
    </section>
@endsection
