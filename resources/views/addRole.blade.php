@extends('layouts.app')

@section('content')
<form action="" method="">
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
                                <input id="role" type="" class="form-control" name="role" >

                            </div>
                            <br/><br/>
                            
                            <div>
                                <button >Submit</button>
                            </div>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
