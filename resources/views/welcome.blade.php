@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welocme </div>

                <div class="panel-body">
                    This is Your Application Page.
                </div>
             </div>
            </div>
        </div>
    <div id = "upload">
    <center>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <label class="btn btn-default">
                <input type='file' id="file" />
            </label> 

            <img id="myImg" src="#" alt="" height="400" width="800" />

        </div>

    </div>

     <div class="col-md-8 col-md-offset-2" id="confirm">
        <div class="btn btn-primary">
            Apply Filter.
        </div>
     </div>

    </center>
    </div>


    </div>
</div>
@endsection
