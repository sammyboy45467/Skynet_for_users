@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>tracker</h2>
                @if(Auth::user()->hasRole('admin'))
                    <div class="col-md-12">
                        <div class="col-md-3">
                            @foreach($users as $user)
                                <a class="btn" href="/tracker/{{$user->id}}">{{$user->name}}</a>
                            @endforeach
                        </div>
                        <div class="col-md-9">
                            @foreach($datas as $data)
                                {{$data->id}}
                                <br/>
                                {{$data->machine}}
                                <br/>
                                
                            @endforeach
                        </div>
                    </div>
             
                @elseif(Auth::user()->hasRole('nonadmin'))
                    <h1>You are a non admin</h1>
                @else
                    <h1>You are not signed in</h1>
                @endif
            </div>
        </div>
    </div>

@endsection