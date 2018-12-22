@extends("layout.main")
@section("content")
<<<<<<< HEAD
        <div class="alert alert-success" role="alert">
            下面是搜索"中国"出现的文章，共3条
        </div>

        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/58" >自动放大舒服的撒</a></h2>
                <p class="blog-post-meta">May 11, 2017 by <a href="#">Mark</a></p>

                <p>我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持...</p>
                <p class="blog-post-meta">赞   | 评论 </p>
            </div>
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/51" >这是我的中国</a></h2>
                <p class="blog-post-meta">Apr 4, 2017 by <a href="#">Mark</a></p>

                <p>你好，中华人民共和国。你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和...</p>
                <p class="blog-post-meta">赞   | 评论 </p>
            </div>
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/52" >这是我的中国2</a></h2>
                <p class="blog-post-meta">Apr 4, 2017 by <a href="#">Mark</a></p>

                <p>你好，中华人民共和国。你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和国你好，中华人民共和...</p>
                <p class="blog-post-meta">赞   | 评论 </p>
            </div>


        </div><!-- /.blog-main -->
 

@endsection
=======
    </div>
        <div class="alert alert-success" role="alert">
            下面是搜索"{{$query}}"出现的文章，共{{$posts->total()}}条
        </div>

        <div class="col-sm-8 blog-main">

            @foreach($posts as $post)
                <div class="blog-post">
                    <h2 class="blog-post-title"><a href={{"/posts/$post->id"}} >{{$post->title}}</a></h2>
                    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a></p>

                    {!! str_limit($post->content, 100, '...')!!}
                    <p class="blog-post-meta">赞 {{$post->zans_count}} | 评论 {{$post->comments_count}}</p>
                </div>
            @endforeach

            {{$posts->links()}}

        </div><!-- /.blog-main -->
@endsection


>>>>>>> a392a99c6bea6ccbbbb900d14e0b5851c37a1f85
