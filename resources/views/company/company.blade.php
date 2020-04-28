@extends('include.master')

@section('title', 'Dev | KafriBung ')

@section('content')
<!--==========================
    Intro Section
  ============================-->
  @if (session('msg'))
    <p class="alert alert-info">{{session('msg')}}</p>
  @endif

  <section id="intro">

    <div class="intro-content">
      <h4>"penulis kode"</h4>
      <div>
        <a href="#about" class="btn-get-started scrollto">Melawan</a>
        <a href="#portfolio" class="btn-projects scrollto">Takdir</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img.svg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Sekilas</h2>
            <h3>{!!$user->about->about!!}</h3>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Hobby</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row">
            @foreach ($user->hobbies as $hobby)
            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                <div class="icon"><i class="fa fa fa-heart"></i></div>
                <h4 class="title"><a href="">{{$hobby->title}}</a></h4>
                <p class="description">{!!$hobby->description!!}</p>
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- #services -->


    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Motivasi</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            @foreach ($user->motivations as $motivation)
                <div class="testimonial-item">
                <p>
                    <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        {!!$motivation->description!!}
                    <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <h3>{{$motivation->owner}}</h3>
                <h4>{{$motivation->profession}}</h4>
                </div>
            @endforeach

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Ide tanpa aksi</h3>
            <p class="cta-text"> Ceritakan idemu akan kutuangkan dalam bentuk kode yang kusajikan dalam keindahan.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Berani melangkah</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>{{$user->contact->address}}</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Number Phone</h3>
              <p><a href="">{{$user->contact->handpone}}</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">{{$user->email}}</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.364421745159!2d119.49461071389653!3d-5.2052889539190215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3e50259069d%3A0xe12b8ca5fde10650!2sUIN%20Alauddin%20Makassar!5e0!3m2!1sid!2sid!4v1574818012477!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="/comments" method="POST" role="form">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="your name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                @if ($errors->has('name'))
                        <p class="alert alert-danger">{{$errors->first('name')}}</p>
                 @endif
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="your email" data-rule="email" data-msg="Please enter a valid email" />
                    @if ($errors->has('email'))
                    <p class="alert alert-danger">{{$errors->first('email')}}</p>
                    @endif
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                @if ($errors->has('subject'))
                <p class="alert alert-danger">{{$errors->first('subject')}}</p>
                @endif
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="message"></textarea>
                @if ($errors->has('message'))
                <p class="alert alert-danger">{{$errors->first('message')}}</p>
                @endif
            </div>
            <div class="text-center"><button type="submit">Send</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
@endsection
