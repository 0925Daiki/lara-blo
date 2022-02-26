@extends('layouts.app_original')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h5>タイトル：{{ $post->title }}</h5>
                </div>
                <div class="card-body">
                <p class="card-text">内容：{{ $post->body }}</p>
                <p>投稿日時：{{ $post->created_at }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編集する</a>
                <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
                    @csrf
                    @method('delete')
                    <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
              <button type="button" class="btn btn-primary" onclick="location.href='{{ route('comments.create', $post->id) }}'">コメントする</button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 mt-5">
        コメント一覧
        @foreach($post->comments as $comment)
          <div class="card mt-3">
              <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
              <div class="card-body">
                  <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                  <p class="card-text">内容：{{ $comment->body }}</p>
              </div>
          </div>
        @endforeach
      </div>
    </div>
</div>
@endsection
