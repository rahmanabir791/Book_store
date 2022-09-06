@extends('all.master')
@section('title')
    Add Book
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    @if(Session::has('message'))
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    @endif
                    <div class="">
                        <form action="{{ route('add-books') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <h1 class="text-center">Insert Your Book</h1>
                            </div>
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Book Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="category" class="col-md-4">Author Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="text" name="author" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="brand" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category"  class="form-control">
                                        <option value="story" checked >Story</option>
                                        <option value="country">Country</option>
                                        <option value="sports">Sports</option>
                                        <option value="cartoon">Cartoon</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <div class="row mt-3">
                                <label for="details" class="col-md-4">Details</label>
                                <div class="col-md-8">
                                    <input type="text" name="details" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="description" class="col-md-4">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="Image" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="Image" class="col-md-4">Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mt-3">
                                <label for="Image" class="col-md-4">Publish Your Book</label>
                                <div class="col-md-8">
                                    <input type="submit"  class="form-control btn-outline-info">
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



