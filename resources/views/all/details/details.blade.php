@extends('all.master')

@section('title')
    Details
@endsection

@section('body')

<section class="py-5">
    <div class="container">
        <div class="row">
            <form action="{{ route('info',['id'=> $books->id]) }}">
                @csrf
                <div class="col-md-12">
                    <div class="card">
                        {{ $books->category }}
                        <div class="card-header">
                            <h1>{{ $books->name }}</h1>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($books->image) }}" alt="" height="500px"; width="400px"; >
                            <h1><b>Author Name:</b> {{ $books->author }}</h1>
                            <h4><b>Price: {{ $books->price }}</b></h4>
                        </div>
                        <div class="card-footer">
                            <h4><b>Details:</b> {{ $books->details }}</h4>
                            <br>
                            <h4><b>Description:</b> {{ $books->description }}</h4>
                        </div>
                    </div>
                    <label for=""><input type="checkbox">Agree With All terms & condition</label>
                    <div>
                        <input type="submit" class="btn-outline-info form-control" value="Buy This Book">
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
