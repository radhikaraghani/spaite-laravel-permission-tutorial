@extends('layouts.app')

@section('content')
<form action="/create" method="post">
{{csrf_field()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('POST') }}
                         
                </div>
                
                <div class="card-body">
                <div class="form-group row">
                            

                            <div class="col-md-12">
                                <input id="post" type="" class="form-control" name="post" >

                            </div>
                            <br/><br/>
                            <div class="col-md-12">
                                <!-- <input  id="dec" type="multiline" class="form-control " name="dec" > -->
                                <textarea name="desc" id="" cols="92" rows="10"> </textarea>

                            </div>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
