@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{--<li>{{$error}}</li>--}}
                <li>{{$error == "The authorized field is required." ? 'Please sign below' : $error}}</li>
            @endforeach
        </ul>
    </div>

@endif

