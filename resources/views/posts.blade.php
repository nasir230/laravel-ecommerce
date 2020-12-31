@extends('layouts.app1')
@section('title','BlogUs')
@section('content')

 <!-- catg header banner section -->
 <section id="aa-catg-head-banner">
    <img src="{{asset('front/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Blog Archive</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>         
           <li class="active">Blog Archive</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->


  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area aa-blog-archive-2">
            <div class="row">
              <div class="col-md-9">
                <div class="aa-blog-content">
                  <div class="row">

                    @if($post)

                    @foreach ($post as $posts)
                    <div class="col-md-4 col-sm-4">
                        <article class="aa-latest-blog-single">
                          <figure class="aa-blog-img">                    
                          <a href="{{route('show',$posts->title)}}"><img alt="img" src="{{$posts->thumbnail}}"></a>  
                              <figcaption class="aa-blog-img-caption">
                              <span href="#"><i class="fa fa-eye"></i>5K</span>
                              <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                              <a href="#"><i class="fa fa-comment-o"></i>20</a>
                              <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                            </figcaption>                          
                          </figure>
                          <div class="aa-blog-info">
                            <h3 class="aa-blog-title"><a href="#">{{$posts->title}}</a></h3>
                            {{-- str_limit($post->description, 100, '') --}}

                             <p>{{$posts->des}}</p>  
                            <a class="aa-read-mor-btn" href="{{route('show',$posts->title)}}">Read more <span class="fa fa-long-arrow-right"></span></a>
                          </div>
                        </article>
                      </div>
                    @endforeach
                 
                  @endif
                  
                 
                   
                  
                                 
                  </div>
                </div>

                <!-- Blog Pagination -->
                <div class="aa-blog-archive-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a aria-label="Previous" href="#">
                          <span aria-hidden="true">«</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a aria-label="Next" href="#">
                          <span aria-hidden="true">»</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>

            <!-- Blog Pagination -->

            {{-- Start Sidebar  --}}
            <div class="col-md-3">
                <aside class="aa-blog-sidebar">
                  <div class="aa-sidebar-widget">
                    <h3>Category</h3>
                    <ul class="aa-catg-nav">
                      <li><a href="#">Men</a></li>
                      <li><a href="">Women</a></li>
                      <li><a href="">Kids</a></li>
                      <li><a href="">Electornics</a></li>
                      <li><a href="">Sports</a></li>
                    </ul>
                  </div>
                  <div class="aa-sidebar-widget">
                    <h3>Tags</h3>
                    <div class="tag-cloud">
                      <a href="#">Fashion</a>
                      <a href="#">Ecommerce</a>
                      <a href="#">Shop</a>
                      <a href="#">Hand Bag</a>
                      <a href="#">Laptop</a>
                      <a href="#">Head Phone</a>
                      <a href="#">Pen Drive</a>
                    </div>
                  </div>
                  <div class="aa-sidebar-widget">
                    <h3>Recent Post</h3>
                    <div class="aa-recently-views">
                      <ul>
                        <li>
                        <a class="aa-cartbox-img" href="#"><img src="{{asset('front/img/woman-small-2.jpg')}}" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>March 26th 2016</p>
                          </div>                    
                        </li>
                        <li>
                        <a class="aa-cartbox-img" href="#"><img src="{{asset('front/img/woman-small-1.jpg')}}" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="#">Lorem ipsum dolor.</a></h4>
                            <p>March 26th 2016</p>
                          </div>                    
                        </li>
                         <li>
                         <a class="aa-cartbox-img" href="#"><img src="{{asset('front/img/woman-small-2.jpg')}}" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="#">Lorem ipsum dolor.</a></h4>
                            <p>March 26th 2016</p>
                          </div>                    
                        </li>                                      
                      </ul>
                    </div>                            
                  </div>
                </aside>
              </div>


            {{-- End Sidebar  --}}
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog Archive -->




@endsection