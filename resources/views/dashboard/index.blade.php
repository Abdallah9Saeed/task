@extends("layouts.layout")
@section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="element-wrapper">
                <h6 class="element-header">
                   New tasks 
                </h6>
                <div class="element-box">
                        <ul>
                        @if($data)
                            @foreach($data as $item)
                                <li><b>list:</b>{{ $item['list']}} <br/> <b>task:</b>{{ $item['name']}}</li>
                            @endforeach
                        @endif
                    
                        </ul>
                </div>
            </div>
        </div>
</div>
      
@stop