@extends('layouts.app_original')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h5>タイトル：</h5>
                </div>
                <div class="card-body">
                <p class="card-text">内容：</p>
                <p>投稿日時：</p>
                <a href="#" class="btn btn-primary">編集する</a>
                <form action='#' method='post'>
                    <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
              <button type="button" class="btn btn-primary">コメントする</button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 mt-5">
        コメント一覧
          <div class="card mt-3">
              <h5 class="card-header">投稿者：Seedさん</h5>
              <div class="card-body">
                  <h5 class="card-title">投稿日時：2021/11/08</h5>
                  <p class="card-text">内容：今日のセブは快晴</p>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
