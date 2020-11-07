@extends('layouts.app')
@section('title', 'Form WA')
@section('content')
<main role="main">
    <div class="container my-3">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection