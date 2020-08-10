@extends('layouts.app')
@section('title', 'つぶやきSNS')

@section('content')
    <div class="container">
    <h2>TwitterDemo</h2>
        <div class="row"> 
                <form action="{{ action('Admin\TodoController@create') }}" method="post" enctype="multipart/form-data" class="formlayout">
                    @if (count($errors) > 0)
                        <ul class="red">
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row form-inline">
                        <div class="col-md-10">
                            <textarea type="text" class="form-controller" name="body" value="{{ old('title') }}" placeholder="いまどうしてる？"></textarea>
                            
                            {{ csrf_field() }}
                    <input type="submit" class="tweet-btn" value="つぶやく">
                        </div>
                    </div>
                </form>
                <!-- <div class="formitems">
                    <div class="live formitem "><a href="#">ライブ</a></div>
                    <div class="img formitem"><a href="#">動画・写真</a></div>
                    <div class="activity formitem"><a href="#">アクティビィティ</a></div>
                </div> -->
        <!-- <div class="rows"> -->
        @forelse($tweets as $tweet)
        <div class="txtarea">
         @if($tweet->user)
            <div class="textareas clearfix">
                <div class="name">@&nbsp;{{ $tweet->user->name }}</div>
                <div class="time">&nbsp;&nbsp;&nbsp;{{ date('Y/m/d H:i', strtotime($tweet->created_at)) }}</div>
                @endif
                @if( Auth::id() == $tweet->user_id )
                <div class="delete_bottom red"><a href="{{ action('Admin\TodoController@delete', ['id' => $tweet->id]) }}">削除</a></div>
                @endif
            </div>
            <div class="commentarea">
                <div class="coment">{{ $tweet->body }}</div>
            </div>

        </div>
        @empty
                tweetがありません
                @endforelse


        <!-- <table class="table">
            <div class="col-md-8 mx-auto">
                @forelse($tweets as $tweet)
                <tr class="aaaa">
                    <th>@ @if($tweet->user){{ $tweet->user->name }}
                    {{ date('Y/m/d H:i', strtotime($tweet->created_at)) }}
                    </th>
                </tr>       
                @endif
                <tr>
                    <td>{{ $tweet->body }}</td>
                    @if( Auth::id() == $tweet->user_id )
                    <td><a href="{{ action('Admin\TodoController@delete', ['id' => $tweet->id]) }}">削除</a></td>
                    @endif 
                </tr>
                @empty
                tweetがありません
                @endforelse
            </div>
        </table> -->
      <!-- </div> -->
      </div>
    </div>
@endsection
