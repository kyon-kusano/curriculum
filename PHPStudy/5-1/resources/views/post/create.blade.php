@extends('layouts.app')
@section('content')
    <div class="header">
        <div class="header__home">ホーム</div>
        <form action="{{ action('Admin\PostController@create') }}" method="post" enctype="multipart/form-data" class="header__form">
            @csrf
            <input type="text" name="body" placeholder="いまどうしてる？" class="header__form__text">
            <input type="submit" value="つぶやく" class="header__form__submit">
        </form>
    </div>
    <div class="index">
        @foreach($post as $p)
        <div class="index__box">
            <div class="index__box__header">
                <div class="index__box__header__name">{{$p->user->name}}</div>
                <div class="index__box__header__date">{{$p->created_at->format('Y/m/d'." ".'H:i') }}</div>
            </div>
            <div class="index__box__footer">
                <div class="index__box__footer__body">{{$p->body}}</div>
                @if(Auth::user()->id == $p->user->id)<a href="{{ action('Admin\PostController@deleteData', ['id' => $p->id]) }}" class="index__box__footer__delete">削除</a>@endif
            </div>
        </div>
        @endforeach
    </div>


@endsection