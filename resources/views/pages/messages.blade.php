@extends('app')

@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>From</th>
                <th>Title</th>
                <th>Received</th>
            </tr>
            </thead>
            <tbody>
                @foreach($messages as $key => $message)
                <tr>
                    @include('partials.message', array('item' => $message, 'user' => $users[$key]))
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop