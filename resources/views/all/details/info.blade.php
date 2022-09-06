@extends('all.master')

@section('title')
    Check Info
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="">
                        <form action="{{ route('add-info', ['id'=>$books->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <dev class="">
                                <h1>Book Name: {{ $books->name }}</h1>
                                <h1>Book Author: {{ $books->author }}</h1>
                                <h1>Book Price: {{ $books->price }}</h1>
                                <img src="{{asset($books->image)}}" alt="" width="300px"; height="300px";>
                            </dev>
                            <br>
                            <br>
                            <br>
                            <div>
                                <h1 class="text-center">Insert Your All Details For Delivery</h1>
                            </div>
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="category" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="text" name="email" class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row mt-3">
                                <label for="details" class="col-md-4">Phone No:</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="description" class="col-md-4">Full Delivery Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" id="" cols="" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <label for="" ><input type="checkbox" class="form-control">Cash On Delivery With Confirm This price
                                    <br><h3><label for="" class="fa fa-money"> = {{ $books->price }}</label></h3></label>

                            </div>
                           <br>
                            <br>
                            <br>
                            <div class="row mt-3">
                                <label for="Image" class="col-md-4">Please Confirm Buy This Book</label>
                                <div class="col-md-8">
                                    <input type="submit"  class="form-control btn-outline-info" VALUE="Confirm" onclick="return confirm('Are you sure to buy this book?')">
                                </div>
                            </div>
                            <br>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

@endsection
