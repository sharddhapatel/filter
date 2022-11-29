@extends('client.header-footer')
@section('content')
<!-- shop first image -->

<div class="shop_main_section">
    <section class="page-title centred brd-page">
        <div class="auto-container">
            <div class="content-box">
                <h1>Blog Classic</h1>
                <div class="contact_col_text">
                    <a href="acuasafe.html">Uaques</a> &nbsp;/&nbsp;Blog Classic
                </div>
            </div>
        </div>
    </section>
</div>


<!-- first section -->
@if(Session::has('message'))
<div class="alert alert-success">
    <i class="fa-lg fa fa-warning"></i>
    {!! session('message') !!}
</div>
@elseif(Session::has('error'))
<div class="alert alert-danger">
    <i class="fa-lg fa fa-warning"></i>
    {!! session('error') !!}
</div>
@endif

<form id="searchForm" method="get" name="search" action="">
    {{csrf_field()}}
    <div class="col-md-6 mb-6">
        <label>Price</label>
        <input type="number" id="min_price" value="{{$min_price}}" name="min_price" class="form-control" placeholder="Min Price">
        <input type="number" id="max_price" value="{{$max_price}}" name="max_price" class="form-control" placeholder="Max Price">
    </div>
    <button class="btn btn-primary " type="submit">Search</button>
</form>
<div class="blog_classic_main_section">
    <div class="blog_auto_container">
        <div class="blog_section">

            <div class="blog_section_row row">

                <?php $prod = App\Models\product::get(); ?>
                @foreach($data as $ans)
                <div class="col-lg-6 col-md-6 col-sm-12 news-block">

                    <div class="news-block-one">

                        <div class="inner-box">
                            <figure class="image-box">

                                <a class="post-thumbnail" href="https://smartdemowp.com/uaques/produce-top-level-purified-bottled-water-2/" aria-hidden="true" tabindex="-1">
                                    <img width="50px" height="500px" src="{{url('item_img')}}/{{$ans->img}}" class="attachment-uaques_blog_grid size-uaques_blog_grid wp-post-image" alt="Produce Top Level Purified Bottled Water" srcset="" sizes="(max-width: 780px) 100vw, 780px">

                                </a>
                            </figure>
                            <div class="lower-content ">
                                <div class="inner">

                                    <ul class="info-box clearfix">
                                        <!-- <li><a href="https://smartdemowp.com/uaques/author/admin/"><i class="fa-solid fa-user"></i>Emal Kanson</a></li> -->
                                        <li>RS:-{{$ans->rs}}</li>
                                        <li><a href="https://smartdemowp.com/uaques/produce-top-level-purified-bottled-water-2/"><i class="fa-solid fa-comment"></i>2 comments</a></li>
                                    </ul>
                                    <h2>{{$ans->proname}}</h2>
                                    <div class="text">
                                        <p> {!! nl2br($ans->discripation) !!}</p>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <div class="btn-box pull-left"><a href="{{url('addtocart')}}/{{$ans->id}}">Add to Card</a></div>
                                        <div class="share-box pull-right">
                                            <div class="share">
                                                <a href="#" class="share-link"><i class="fas fa-share-alt"></i>Share Post</a>
                                                <ul class="social-links">
                                                    <li>
                                                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.facebook.com/sharer/sharer.php?u=https://smartdemowp.com/uaques/produce-top-level-purified-bottled-water-2/"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://twitter.com/home?status=Produce+Top+Level+Purified+Bottled+Water-https://smartdemowp.com/uaques/produce-top-level-purified-bottled-water-2/"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://smartdemowp.com/uaques/produce-top-level-purified-bottled-water-2/" target="_blank">
                                                            <span class="fab fa-linkedin-in"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="http://www.stumbleupon.com/submit?url=https://smartdemowp.com/uaques/produce-top-level-purified-bottled-water-2/&amp;text=Produce+Top+Level+Purified+Bottled+Water"><span class="fab fa-mix"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{$data->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
