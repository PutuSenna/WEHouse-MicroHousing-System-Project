@extends('pages.base')
@section('main')
    <!-- LIST -->
<section>
    
    <div class="container">
        <span class="mobile">
            @include("components.sideMenu")
        </span>
        <div class="col-lg-9">
            <h3>Applications</h3>
            <div class="col-lg-12 box" style="margin-bottom:100px; padding-bottom: 20px;">
                <div class="col-lg-3 mobile" style="text-align: right; margin-bottom: 20px;">
                    <select name="" id="">
                        <option value="">Sort by Date</option>
                        <option value="">Sort by Name</option>
                        <option value="">Sort by Price</option>
                    </select>
                    <select name="" id="">
                        <option value="">Show All</option>
                        <option value="">Show Allocated</option>
                        <option value="">Show Unallocated</option>
                    </select>
                    {{-- <button class="awe-btn" style="width: 80%; margin-top: 10px;">Add Residences</button> --}}
                </div>
                <div class="col-lg-9">
                    @isset($residences)
                    @foreach ($residences as $i)
                   
                        <!-- ITEM -->
                        <div class="flight-item">

                            <div class="item-body">
                                <div class="col-lg-6 left">
                                    <div class="row">
                                        <div class="col-xs-12 item-title">{{$i->name}}</div>
                                        <div class="col-xs-12 bottom">{{$i->unit_available}} unit available </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 right">
                                    <div class="row">
                                        <div class="col-xs-12">Earliest date available : Today</div>
                                        <div class="col-xs-12 bottom">{{count($applications[$i->id])}} Application</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount">$30/m</span>
                                </div>
                                <a href="#" class="awe-btn">Edit</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                    @endforeach
                    @endisset
                    <!-- PAGINATION -->
                    <div class="page__pagination">
                        <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                    </div>
                    <!-- END / PAGINATION -->
                </div>
                <div class="col-lg-3 desktop" style="text-align: right;">
                    <select name="" id="">
                        <option value="">Sort by Name</option>
                        <option value="">Sort by Date</option>
                        <option value="">Sort by Price</option>
                    </select>
                    <select name="" id="">
                        <option value="">Show All</option>
                        <option value="">Show available</option>
                        <option value="">Show Unavailable</option>
                    </select>
                    <button data-toggle="modal" data-target="#exampleModal" class="awe-btn" style="width: 80%; margin-top: 10px;">Add Residences</button>
                </div>
            </div>
        </div>
        <span class="desktop">
            @include("components.sideMenu")
        </span>
    </div>
</section>


@endsection