@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>                
            @endif
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Title: </label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Type a title" value="{{ old('title')}}">
                </div>
                <div class="form-group">
                        <label for="amount">Amount: </label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Type a title" value="{{ old('title')}}">
                    </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection