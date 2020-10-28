@extends('layouts.frontend')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 row m-0 p-0">
                    @foreach($blogData as $data)
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="user-post-data">
                                    <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img mr-3">
                                            <img class="rounded-circle img-fluid" src="{{asset('frontend/images/user/01.jpg')}}" alt="">
                                        </div>
                                        <div class="media-support-info mt-2">
                                            <h5 class="mb-0 d-inline-block"><a href="#" class="">{{$data->user->firstname}} {{$data->user->lastname}}</a></h5>
{{--                                            <p class="mb-0 d-inline-block">Add New Post</p>--}}
                                            <p class="mb-0 text-primary">    {{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</p>
                                        </div>
                                        <div class="iq-card-post-toolbar">
                                            <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                                <div class="dropdown-menu m-0 p-0">
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="icon font-size-20"><i class="ri-user-unfollow-line"></i></div>
                                                            <div class="data ml-2">
                                                                <h6>Unfollow User</h6>
                                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h3>{{$data->title}}</h3>
                                    <p>{{$data->description}}</p>
                                </div>
                                <div class="user-post">
                                    <div class="d-flex">
                                        <div class="col-md-12">
                                            <a href="javascript:void();"><img src="{{asset($data->photo)}}" alt="post-image" class="img-fluid rounded w-100"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="like-block position-relative d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="like-data">
                                                    <div class="dropdown">
                                                        <div id="like" style="display: block">
                                                            <a onclick="like()" class="ml-2 mr-2 like-Unlike" data-toggle="tooltip" data-placement="top" data-original-title="Like"><img src="{{asset('frontend/images/icon/02.png')}}" class="img-fluid" alt=""></a>
                                                            <a onclick="dislike()" class="ml-2 mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Like"><img src="{{asset('frontend/images/icon/01.png')}}" class="img-fluid" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="total-like-block ml-2 mr-3">
                                                    <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                                </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="total-comment-block">
                                                <div class="dropdown">
                                             <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             20 Comment
                                             </span>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Max Emum</a>
                                                        <a class="dropdown-item" href="#">Bill Yerds</a>
                                                        <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                        <a class="dropdown-item" href="#">Tara Misu</a>
                                                        <a class="dropdown-item" href="#">Midge Itz</a>
                                                        <a class="dropdown-item" href="#">Sal Vidge</a>
                                                        <a class="dropdown-item" href="#">Other</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                        <li class="mb-2">
                                            <div class="d-flex flex-wrap">
                                                <div class="user-img">
                                                    <img src="{{asset('frontend/images/user/02.jpg')}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                </div>
                                                <div class="comment-data-block ml-3">
                                                    <h6>Monty Carlo</h6>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center comment-activity">
                                                        <a href="javascript:void();">like</a>
                                                        <a href="javascript:void();">reply</a>
                                                        <a href="javascript:void();">translate</a>
                                                        <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-wrap">
                                                <div class="user-img">
                                                    <img src="{{asset('frontend/images/user/03.jpg')}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                </div>
                                                <div class="comment-data-block ml-3">
                                                    <h6>Paul Molive</h6>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center comment-activity">
                                                        <a href="javascript:void();">like</a>
                                                        <a href="javascript:void();">reply</a>
                                                        <a href="javascript:void();">translate</a>
                                                        <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                            <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                            <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="col-lg-4">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Products</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="media-story m-0 p-0">
                                <li class="d-flex mb-4 align-items-center ">
                                    <img src="{{asset('frontend/images/page-img/s4.jpg')}}" alt="story-img" class="rounded-circle img-fluid">
                                    <div class="stories-data ml-3">
                                        <h5>Web Workshop</h5>
                                        <p class="mb-0">1 hour ago</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="{{asset('frontend/images/page-img/s5.jpg')}}" alt="story-img" class="rounded-circle img-fluid">
                                    <div class="stories-data ml-3">
                                        <h5>Fun Events and Festivals</h5>
                                        <p class="mb-0">1 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Services</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01" style="">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="suggested-page-story m-0 p-0 list-inline">
                                <li class="mb-3">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('frontend/images/page-img/42.png')}}" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                        <div class="stories-data ml-3">
                                            <h5>Iqonic Studio</h5>
                                            <p class="mb-0">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src="{{asset('frontend/images/small/img-1.jpg')}}" class="img-fluid rounded" alt="Responsive image">
{{--                                    <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>--}}
                                </li>
                                <li class="">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('frontend/images/page-img/42.png')}}" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                        <div class="stories-data ml-3">
                                            <h5>Cakes & Bakes </h5>
                                            <p class="mb-0">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src="{{asset('frontend/images/small/img-2.jpg')}}" class="img-fluid rounded" alt="Responsive image">
{{--                                    <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                </div>
            </div>
        </div>
    </div>

@endsection
