<ul>
    <li>
        {{ Form::label('work_id', 'work') }}
        {{ Form::select('work_id', Work::lists('title', 'id')) }}
        {{ $errors->first('work_id', '<p class="error">:message</p>' ) }}
    </li>
    <li>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title') }}
        {{ $errors->first('title', '<p class="error">:message</p>' ) }}
    </li>
    <li>
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image') }}
        {{ $errors->first('image', '<p class="error">:message</p>' ) }}
    </li>
    <li>
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description') }}
    </li>
    <li>
        {{ Form::submit('Save') }}

    </li>
</ul>
