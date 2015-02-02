<ul>

    <li>
        {{ Form::label('Title', 'Title') }}
        {{ Form::text('title') }}
        {{ $errors->first('title', '<p class="error">:message</p>' ) }}
    </li>
    <li>
        {{ Form::label('body', 'Body') }}
        {{ Form::textArea('body') }}
        {{ $errors->first('body', '<p class="error">:message</p>' ) }}
    </li>
    <li>
        {{ Form::label('thumbnail', 'Thumbnail') }}
        {{ Form::file('thumbnail') }}
        {{ $errors->first('thumbnail', '<p class="error">:message</p>' ) }}
    </li>
    <li>
        {{ Form::submit('Save') }}

    </li>
</ul>
