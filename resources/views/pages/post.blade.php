@forelse ($posts as $post)
    <div class="boxed push-down-60">
        <div class="meta">
            @if ($post->image)
                <img class="wp-post-image" src="{{ $post->image }}" alt="Blog image" width="1138" height="493">
            @endif
            <div class="row">
                <div class="col-xs-12  col-sm-10  col-sm-offset-1  col-md-8  col-md-offset-2">
                    <div class="meta__container--without-image">
                        <div class="row">
                            <div class="col-xs-12  col-sm-8">
                                <div class="meta__info">
                                    <span class="meta__date"><span class="glyphicon glyphicon-calendar"></span> &nbsp; {{ getRusDate($post->created_at) }}</span>
                                </div>
                            </div>
                            <div class="col-xs-12  col-sm-4">
                                <div class="comment-icon-counter-detail">
                                    <span class="glyphicon glyphicon-comment comment-icon"></span>
                                    <span class="comment-counter">{{ $post->comments }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="sticky__box">
                    <span class="sticky__circle"></span>
                    <span class="sticky__circle"></span>
                    <span class="sticky__circle"></span>
                    <span class="sticky__circle"></span>
                </div>
        </div>
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1  ">
                <div class="post-content">
                    <h1>
                        <a href="#">{{ $post->title }}</a>
                    </h1>
                    <h3>{{ $post->tagline }}</h3>
                    {{ $post->fulltext }}
                </div>
                <div class="row">
                    <div class="col-xs-12  col-sm-6">
                        <div class="post-comments">
                            <a class="btn btn-primary" href="{{ url()->current() }}#postComments">Комментарии ({{ $post->comments }})</a>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6">
                        <div class="social-icons">
                            <a href="#" class="social-icons__container"> <span class="zocial-facebook"></span> </a>
                            <a href="#" class="social-icons__container"> <span class="zocial-twitter"></span> </a>
                            <a href="#" class="social-icons__container"> <span class="zocial-email"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="tags">
                            <h6>Тэги</h6>
                            <hr>

                                <a href="" class="tags__link">имя тега</a>

                                Пост не имеет тегов

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="comments" id="postComments">
                            <h6>Комментарии (00)</h6>
                            <hr>


                                <div class="comment clearfix">
                                    <div class="comment-avatar pull-left">
                                        <img src="http://www.ala-access.com/s/wp-content/uploads/2016/01/analyst-placeholder-avatar.png" alt="User Avatar" class="img-circle comment-avatar-image">
                                    </div>
                                    <div class="comment-body clearfix">
                                        <div class="comment-header">
                                            <strong class="primary-font">имя комента</strong>
                                            <small class="pull-right text-muted">
                                                <span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;дата созд
                                            </small>
                                        </div>
                                        <p class="comment-text">
                                            текст
                                        </p>
                                    </div>
                                </div>

                                Пока комментариев нет.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <p>Нет постов для отображения</p>
@endforelse
{{ $posts->links() }}