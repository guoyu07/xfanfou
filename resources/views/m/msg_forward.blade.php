@extends('m.base')
@section('html')
    <h2>转发</h2>
    <form method="post" action="{{ route('M.postHome') }}">
        <p>
            <textarea maxlength="280" class="i" name="status" rows="3">转{{ '@'.$status->user->name }} {{ $status->text }}</textarea>
        </p>
        <p>
            {{ csrf_field() }}
            <input type="hidden" name="repost_status_id" value="{{ $msg_id }}">
            <input type="submit" value="发送">
        </p>
    </form>
    <div id="nav">
        <p class="s">
            0<a href="" accesskey="0">首页</a>
            1<a href="/lito" accesskey="1">空间</a>
            2<a href="/friends" accesskey="2">关注的人</a>
            7<a href="/privatemsg" accesskey="7">私信</a>
            <br>
            3<a href="/browse" accesskey="3">随便看看</a>
            8<a href="/photo.upload" accesskey="8">发照片</a>
            9<a href="/search" accesskey="9">搜索</a>
        </p>
    </div>
    <br>
    <p>
        <a href="/logout/fd109fd4">退出</a>
    </p>
@endsection
