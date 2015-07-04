@extends('layout.FrontMaster')

@section('frontMasterContainer')
<div id="right-header">
</div>
<div id="total-article">
    @foreach($articles as $article)
        <div class="article">
            <div class="jumbotron" id="my-jumbotron">
                <div class="clearfix">
                    <h3 class="pull-left">{{ HTML::link('article/'.$article->article_id, $article->article_title) }}</h3>
                    <ul class="pull-right">
                        <li class="article-time">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"> </span>
                            {{$article->created_at}}
                        </li>
                        <li class="article-comment">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"> </span>
                            @if ($article->comment->count() == 0)
                                <span>暂无评论</span>
                            @else
                                <span>{{HTML::link('article/'.$article->article_id.'#show_comment', $article->comment->count().'条评论')}}</span>
                            @endif
                        </li>
                    </ul>
                </div>
                <p>{{mb_substr(strip_tags($article->article_content), 0, 200)}}</p>
                <P>{{HTML::link('article/'.$article->article_id, '   阅读全文...') }}</P>
            </div>
        </div>
    @endforeach
    <div>
        {{$articles->links()}}
    </div>
</div>
<div class="center-block">
    <p class="center-block">&copy; 2013-2015 <b>Lulu爱</b>. <a href="http://www.miitbeian.gov.cn/" title="赣ICP备15000527号" target="_blank">赣ICP备15000527号</a></p>
</div>
@stop