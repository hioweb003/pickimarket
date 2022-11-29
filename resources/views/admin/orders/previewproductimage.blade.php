@extends('layouts.admin')
@section('title')
   product preview
@endsection


@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Product preview
                <a href="{{URL::previous()}}" class="btn btn-primary text-center btn-sm my-2 no-print">Back</a>
            </div>
                            <div class="card-body">
                            <h2>Product : {{$imgget->pro_name}}</h2>
                            <p>Brand : {{$imgget->pro_brand}}</p>
                                <img src="{{asset($imgget->featured_image)}}" width="200px" height="200px" alt="">  
                            </div>
                        </div>
@endsection

