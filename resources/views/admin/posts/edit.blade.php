@extends('admin.layouts.master')

@section('title', '編輯文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯文章 <small>編輯文章內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 文章管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>  <strong>警告！</strong> 請修正表單錯誤：
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/posts/{{$post->id}}" method="POST" role="form">
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label for="title">標題：</label>
                <input name="title" class="form-control" placeholder="請輸入文章標題" value="{{old('title',$post->title)}}">
            </div>

            <div class="form-group">
                <label for="content">內容：</label>
                <textarea id="content" name="content" class="form-control" rows="10">{{old('content',$post->content)}}</textarea>
            </div>

            <div class="form-group">
                <label for="is_feature">精選？</label>
                <select id="is_feature" name="is_feature" class="form-control">
                    <option value="0" {{(!$post->is_feature)?'selected':''}}>否</option>
                    <option value="1" {{($post->is_feature)?'selected':''}}>是</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
