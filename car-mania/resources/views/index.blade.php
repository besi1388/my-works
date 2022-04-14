@extends('layouts.main')

@section('content')

<div style="margin-top: 5px;">
    <img style="width: 100%; padding: 10px;" src="{{ asset('imgs/main.jpeg') }}" alt="">
</div>

<div class="container-lg" style="margin: 0 auto">
    <div class="row mt-5">

     

        @foreach ( $cars as $car )
        

        <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo 'imgs/'.$car->image; ?>" style="width:350px  height:250px;">
                <div class="card-body">
                    
                    <div class="card-title">{{ $car->make }}</div>
                    <div class="card-text">{{ $car->model }} - {{ $car->year }}</div>
                    <div class="card-text">Price: ${{ $car->price }}</div>
                    <div class="card-text">Seats: {{ $car->seats }}</div>
                    <div class="card-text">Specs: {{ $car->specs }}</div>
                    
                    <form method="POST">
                        <input type="text" value="{{ $car->id }}" style="display: none;">
                        <input type="submit" value="Buy" class="mt-2 btn btn-primary">
                    </form>
                    
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>

@endsection