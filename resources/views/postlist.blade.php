@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('POST') }}
                         <div class="float-right"><a href="#">New</a></div>
                </div>
                
                <div class="card-body">
                <table>
                    @foreach(@)
                </table>
                    <ul>
                        <li><a href="#">CLick Lorem ipsum dolor sit.</a> </li>
                        <li><a href="#">CLick Lorem ipsum dolor sit.</a> </li>
                        <li><a href="#">CLick Lorem ipsum dolor sit.</a> </li>
                        <li><a href="#">CLick Lorem ipsum dolor sit.</a> </li>
                        <li><a href="#">CLick Lorem ipsum dolor sit.</a> </li>
                        <li><a href="#">CLick Lorem ipsum dolor sit.</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
