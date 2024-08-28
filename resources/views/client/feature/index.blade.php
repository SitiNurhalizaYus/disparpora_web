@extends('client.layouts.app')

@section('content')
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="text-white mb-4">Features</h3>
                    <h6 class="text-white">Home <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M12.1415 6.5899C11.9075 6.71614 11.7616 6.95618 11.7616 7.21726V11.2827H3.73429C3.32896 11.2827 3 11.604 3 12C3 12.3959 3.32896 12.7172 3.73429 12.7172H11.7616V16.7827C11.7616 17.0447 11.9075 17.2848 12.1415 17.4101C12.3755 17.5372 12.6614 17.5286 12.8875 17.39L20.6573 12.6073C20.8708 12.4753 21 12.2467 21 12C21 11.7532 20.8708 11.5247 20.6573 11.3927L12.8875 6.60998C12.7681 6.5373 12.632 6.5 12.4959 6.5C12.3745 6.5 12.2521 6.5306 12.1415 6.5899Z"
                                fill="currentColor" />
                        </svg> Features</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-uppercase">
                        Features
                    </p>
                    <h2 class=" mb-4">Features Provided <span class="text-primary">For You </span></h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach($features as $feature)
                <div class="col">
                    <div class="card page-bg card-block card-stretch card-height">
                        <div class="card-body">
                            <img src="{{ asset('/' . str_replace("/xxx/", "/300/", $feature['image'])) }}" height="70px" ><br><br>
                            <h6 class="mb-3">{{ $feature['name'] }}</h6>
                            <p class="">{{ $feature['description_short'] }}</p>
                            {{-- <a href="#">Know More</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
