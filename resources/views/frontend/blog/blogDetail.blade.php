@extends('frontend.layouts.app-plesir')
@section('title', $detailBlog->title)
@section('excerpt', $detailBlog->excerpt)
@section('keyword', $detailBlog->keyword)
@section('image', $detailBlog->image)
@section('content')

    <!-- section portfolio item-->
    <div class="content-wrap page-news" style="padding-left: 30px; padding-right: 30px;">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>
                            {{ $detailBlog->title }}
                        </h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ Storage::disk('s3')->url($detailBlog->image) }}" alt="image"
                        class="border-radius sm-image-fixed">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    {!! $detailBlog->content !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="share-button">
                        <ul class="post-share">
                            <li class="text">Share</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="line-separate"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
