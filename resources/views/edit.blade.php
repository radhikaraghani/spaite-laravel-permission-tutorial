@extends('layouts.app')

@section('content')
<form action="/posts/{{$posts->id}}" method="post">
{{csrf_field()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('POST') }}
                         
                </div>
                
                <div class="card-body">
                <div class="form-group row">
                <form method="POST" action="/posts/{{$posts->id}}">
                      @csrf
                      @method('PUT')

                            <div class="col-md-12">
                                <input id="post" type="" class="form-control" name="post" value="{{$posts->title}}">

                            </div>
                            <br/><br/>
                            <div class="col-md-12">
                                <!-- <input  id="dec" type="multiline" class="form-control " name="dec" > -->
                                <input id="desc" type="" class="form-control" name="desc" value="{{$posts->decs}}">

                            </div><br><br>
                            <div>
                                &nbsp;&nbsp;&nbsp;&nbsp;<button >update</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
