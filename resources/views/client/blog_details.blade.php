@extends('client.layouts.master')

@section('content')
    <div class="container">
        <div class="col-lg- posts-list">
            <div class="single-post">
                <div class="feature-img">
                    @if ($newsDetail->image && \Storage::exists($newsDetail->image))
                        <img width="100px" src="{{ \Storage::url($newsDetail->image) }}" alt=""
                            style="width:100px;height:auto;">
                    @endif
                </div>
                <div class="blog_details">
                    <h2 style="color: #2d2d2d;">{{ $newsDetail->title }}
                    </h2>

                    <p>
                        {{ $newsDetail->content }}
                    </p>
                </div>
            </div>
            <div class="comments-area">
                <h4>05 Comments</h4>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="assets/img/blog/comment_3.png" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which
                                    them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">Emilly Blunt</a>
                                        </h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-form">
                <h4>Comment</h4>
                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                    placeholder="Write Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="website" id="website" type="text"
                                    placeholder="Website">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
