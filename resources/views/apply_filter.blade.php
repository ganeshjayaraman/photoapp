@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome </div>

                <div class="panel-body">
                    This is Filter Page.
                </div>
             </div>
            </div>
        </div>
    <div id = "upload">
    <center>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- <label class="btn btn-default">
                <input type='file' />
            </label>  -->   

            <img id="myImg" src="/{{ $id }}" alt="" height="400" width="800" />
            <div id="getid" value="{{ $id }}" type="hidden"> </div>
        </div>

    </div>

     
        <div class="dropdown col-md-2 col-md-offset-2">
            <label for="sel2">Select Filter : </label>
            <select id="filters" >
                <option></option>
                <option>Black and White</option>
                <option>Normal</option>
                <option>Contrast</option>
            </select>
        </div>

        <a class="btn btn-success btn-md" id="download_image" href="/{{ $id }}" download="output_{{ $id }}">
            <span class="glyphicon glyphicon-download-alt"></span> Download
        </a>
        

    

    </center>
    </div>


    </div>
</div>
@endsection
