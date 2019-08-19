@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('POST') }}
                    @role('writer')
                         <div class="float-right">
                         <a href="/posts/create">New</a></div>
                </div>
                @endrole
                <div class="card-body">
                <table>   
                        @foreach($postes as $p)
                                  <tr>
                                    <td style="width:1200px;">{{$p->decs}}</td>   
                                    <td><a href="posts/{{$p->id}}/edit">edit</a></td>         
                                </tr>
                        @endforeach

                </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
