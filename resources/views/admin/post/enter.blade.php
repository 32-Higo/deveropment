@extends('layouts.admin')

@section('title', 'テックペディア投稿入力')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>投稿入力</h2>
            <div class="form-group row">
                <label class="col-md-8">メールアドレス</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
                    <label class="col-md-8">投稿内容</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                </div>
                <div class="col-md-10">
                {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="戻る">
                    <input type="submit" class="btn btn-primary" value="投稿">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection