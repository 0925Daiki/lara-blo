@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card text-center">
          <div class="card-header">
              投稿一覧
          </div>
          <div class="card-body">
              <h5 class="card-title">タイトル : おはよう</h5>
              <p class="card-text">
                内容 : 今日のセブは快晴
              </p>
              <p class="card-text">投稿者：Seed Techさん</p>
              <a href="#" class="btn btn-primary">詳細へ</a>
          </div>
          <div class="card-footer text-muted">
              投稿日時 : 2021/11/08
          </div>
      </div>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-primary">
          新規投稿
        </a>
      </div>
  </div>
</div>
@endsection
