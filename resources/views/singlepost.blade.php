@extends('layouts.app1')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('title','Post')

@section('content')
    

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area">
            <div class="row">
              <div class="col-md-9">
                <!-- Blog details -->
                <div class="aa-blog-content aa-blog-details">
                  <article class="aa-blog-content-single">                        
                  <h2><a href="#">{{$post->title}}</a></h2>

                     <div class="aa-article-bottom">
                      <div class="aa-post-author">
                        Posted By <a href="#"> {{$post->authore}}</a>
                      </div>
                      <div class="aa-post-date">
                        {{date_format($post->created_at,"d-m-Y")}}
                      </div>
                    </div>
                    <figure class="aa-blog-img">
                      <a href="#"><img class="img-responsive" src="{{$post->thumbnail}}"  alt="fashion img"></a>
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                  
                   
                    
                   
                    <div class="blog-single-bottom">
                      <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <div class="blog-single-tag">
                            <span>Tags:</span>
                            <a href="#">Fashion,</a>
                            <a href="#">Beauty,</a>
                            <a href="#">Lifestyle</a>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="blog-single-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </article>
                  <!-- blog navigation -->
                  <div class="aa-blog-navigation">
                  <a class="aa-blog-prev" href="#"><span class="fa fa-arrow-left"></span>Prev Post</a>
                    <a class="aa-blog-next" href="">Next Post<span class="fa fa-arrow-right"></span></a>
                  </div>
                  <!-- Blog Comment threats -->
                  <div class="aa-blog-comment-threat">
                    <h3>Comments {{ count($comeent)}} </h3>
                    <div class="comments">
                     
                          <div class="media">
                            {{-- <div class="media-left">    
                            <img class="media-object news-img" src="{{asset('front/img/testimonial-img-2.jpg')}}" alt="img">      
                            </div> --}}

                            @include('replies', ['comments' => $post->comments, 'post_id' => $post->id])
                           
                            {{-- <div class="media-body">
                             <h4 class="author-name">Charlie Balley</h4>
                             <span class="comments-date"> March 26th 2016</span>
                             <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                             <a href="#" class="reply-btn">Reply</a>
                            </div> --}}
                          </div>
                     
                    
                    </div>
                  </div>
                  <!-- blog comments form -->
                  <div id="respond">
                    <h3 class="reply-title">Leave a Comment</h3>

                    <form method="post" action="{{ route('comment.add') }}" class="mb-5">
                        @csrf
                        <div class="form-group">
                            <textarea name="comment" cols="45" id="mytextarea" class="form-control" rows="8" aria-required="true" required="required"></textarea>

                            {{-- <input type="text" required name="comment" class="form-control" /> --}}
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit"   class="aa-browse-btn" value="Post Comment" />
                        </div>
                    </form>

                    {{-- <form id="commentform">
                      <p class="comment-notes">
                        Your email address will not be published. Required fields are marked <span class="required">*</span>
                      </p>
                     
                      <p class="comment-form-comment">
                        <label for="comment">Comment</label>
                        <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                      </p>
                     
                      <p class="form-submit">
                        <input type="submit" name="submit" class="aa-browse-btn" value="Post Comment">
                      </p>        
                    </form> --}}
                  </div>
                </div>
              </div>

              <!-- blog sidebar -->
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
            </div>           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog Archive -->
