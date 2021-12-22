
    @if (Auth::user()->is_favorites($micropost->id))
        {{-- お気にいり削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn  btn-outline-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気にいりボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn  btn-outline-primary btn-sm" ]) !!}
        {!! Form::close() !!}
    @endif