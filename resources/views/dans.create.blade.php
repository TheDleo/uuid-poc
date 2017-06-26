@section('main')

<h1>Create Dan</h1>

{{ Form::open(array('route' => 'dans.store')) }}
    <ul>

        <li>
            {{ Form::label('uuid', 'Uuid:') }}
            {{ Form::text('uuid') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
