@extends('includes.headerFooter')
@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('public/images/big_image_1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/big_image_2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/big_image_3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="ion-ios-play"></span></a>

                <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> 

              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Welcome to University</h2>
              </div>
              <div class="text mb-5">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit deleniti nihil ad deserunt rerum incidunt nulla nemo eius molestiae architecto beatae asperiores doloribus animi.</p>
              </div>
              <p><a href="#" class="btn btn-primary reverse py-2 px-4">Read More</a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading">Knowledge is power</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="heading">Senior High School</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading">College of Arts &amp; Sciences</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading">Unmatched Proffessor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="images/img_2_b.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2>Education is Life</h2>
              </div>
              <div class="text mb-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit deleniti nihil ad deserunt rerum incidunt.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-student"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="12921">0</strong>
                    <span>Students</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="51">0</strong>
                    <span>Schools</span>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-books"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="3902">0</strong>
                    <span>Books</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="1921">0</strong>
                    <span>Graduates</span>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Popular Courses</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
            <p><a href="#" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Enroll Now</a></p>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>1,903/3,000</span>
                  </div>
                  <div class="price text-right"><span>$10.99</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Design &amp; Develop</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>23/100</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>1,903/3,000</span>
                  </div>
                  <div class="price text-right"><span>$10.99</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Design &amp; Develop</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>23/100</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      
    </div>
    <!-- END section -->


    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Teachers</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(../images/person_3.jpg);">
                <div class="box">
                  <h2>Job Smith</h2>
                  <p>Laravel Expert</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_3.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Job Smith <span class="position">Laravel Expert</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2 ">
            <div class="flipper">
              <div class="front" style="background-image: url(../images/person_1.jpg);">
                <div class="box">
                  <h2>Mellissa Cruz</h2>
                  <p>JavaScript Guru</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Mellissa Cruz <span class="position">JavaScript Guru</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(../images/person_2.jpg);">
                <div class="box">
                  <h2>Aldin Powell</h2>
                  <p>WordPress Ninja</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_2.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Aldin Powell <span class="position">WordPress Ninja</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
      </div>
    </div>
    <!-- END .block-2 -->


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Blog</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
        <div class="row element-animate">
          
          <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">

            <div class="block-20 ">
              <figure>
                <a href="#"><img src="images/img_1.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12 col-lg-6">
            
            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_1.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_2.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_3.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_3.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

          </div>
        </div>
      </div>
    </div>

    <div class="py-5 block-22">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
            <h2 class="heading">Create cool websites</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusantium optio und.</p>
          </div>
          <div class="col-md-6">
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="email" class="form-control email" placeholder="Enter email">
                <input type="submit" class="btn btn-primary submit" value="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 

@endsection