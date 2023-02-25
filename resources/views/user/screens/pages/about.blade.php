@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "About"
    </script>
    <main>
        <section class="inner-banner about">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <div class="banner-overlay"></div>
                        <h1 class="inner-banner-text">About</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-sec inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <h2 class="inner-title mb-60">The Story Behind Chris Aire</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-12">
                        <img src="{{ asset('assets/images/about-img-1.png')}}" class="about-img-1 img-fluid mr-b-30" alt="">
                    </div>
                    <div class="col-md-7 col-12">
                        <p class="inner-para mb-46">
                            Chris Aire is a tried and tested veteran of the luxury watch and jewelry industry.
                            One of the most talented and influential jewelry and watch designers in the world
                            today, Chris Aire has dazzled his loyal celebrity and high net-worth clientele for over
                            30 years with his timeless range of finely crafted products. And as the creator of the
                            widely-acclaimed RED GOLD® brand, he has demonstrated an inexhaustible capacity
                            for innovation, changing the trajectory of the watch and jewelry industry in the process.
                            Chris Aire timepieces, like his jewelry collections, are highly coveted among tastemakers
                            around the globe. Each new series, such as the latest Parlay, reaches new heights in
                            design and artisanship.
                        </p>
                        <p class="inner-para mb-46">
                            African-born Aire moved to the United States as a teen and attended college in
                            California. He worked full-time at a restaurant to make ends meet and slept in his rusty
                            old BMW. After a post-college foray into music and acting, a friend's father gave him his
                            first opportunity at what would become his life's work: jewelry. Aire discovered a keen
                            interest in beautiful gemstones and intricate craftsmanship and an aptitude for
                            developing both to their fullest potential.


                        </p>
                        <p class="inner-para mb-40">
                            After six years of working as a jeweler's apprentice, Aire used his life savings ($5,000!)
                            to create some design prototypes of his own. He set up shop at various hot spots
                            around L.A., hoping to engage the interest of a high-profile "dream clientele."
                        </p>
                        <p class="inner-para mb-50">
                            His big break occurred when legendary NBA Hall of Famer Gary Payton ordered
                            platinum basketball pendants, charms, and bracelets for his crew. Soon after, Aire
                            became the go-to jeweler for the NBA's most notable stars, the film industry's A-list,
                            and watch and luxury aficionados around the world. He enthralls these influencers by
                            his signature dog tag pendants, bespoke commissions, and, of course, his impeccably
                            crafted watches, as well as his now-legendary Signature RED GOLD® Collection.
                        </p>
                    </div>
                    <div class="col-md-12 col-12">
                        <p class="inner-para mb-46">
                            Aire introduced his Signature RED GOLD® collection in 1988, which demonstrated his intuitive
                            understanding of his male clientele. He knew they would
                            resonate with the more masculine-sounding "red gold" than the traditional "rose gold," which was
                            getting no traction in the market. Aire was correct: the
                            collection exponentially expanded his business. In 2003, he officially trademarked the term and
                            has continued to produce watches and jewelry using this
                            name. Aire has repeatedly and successfully defended RED GOLD® over the years against brands that
                            have sought to emulate his revolutionary accomplishment.
                        </p>
                        <p class="inner-para">
                            Aire once again made history in 2004 when he became the first jeweler to stage a runway show of
                            his jewelry in New York Fashion Week. Supermodel
                            Naomi Campbell walked that first show in a diamond halter, followed by May Andersen in 2006, who
                            wore a $41 million bejeweled dress. His creativity,
                            in-depth knowledge of the industry, personal relationships with customers, and solid loyalty are
                            all qualities that will take the company to its rightful place
                            in the luxury market.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-sec about-inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 col-12">
                        <h2 class="sec-title mb-25">Our Mantra</h2>
                        <p class="para mb-25">
                            Our Mantra at Chris Aire is to uphold the utmost respect for the earth and
                            our fellow human beings. We guarantee all diamonds, gold and other raw
                            materials used in the production of our pieces have either been mined directly
                            by us or acquired from our affiliates who are not involved in funding conflicts.
                        </p>
                        <p class="inner-para change mb-25">
                            Our diamonds and gold are produced in compliance with
                            internationally recognized "best practice" principles and
                            expressly forbids the use of sweatshops or child labor.

                        </p>
                        <p class="para mr-b-30">
                            We believe in supporting our communities and empowering the underprivileged.
                        </p>

                    </div>
                    <div class="col-md-6 col-12">
                        <img src="{{asset('assets/images/about-img-2.png')}}" class="about-img-2 img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="about-sec about-inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12">
                        <img src="{{asset('assets/images/about-img-3.png')}}" class="img-fluid about-img-3 mr-b-30" alt="">
                    </div>
                    <div class="col-md-6 col-12">
                        <h2 class="sec-title mb-25">Our Philosophy</h2>
                        <p class="para italic mb-46">"The bond that links your true family is not one of blood, but of
                            respect and joy in each other lives." - Richard Bach</p>
                        <p class="para mb-46">
                            Here at Chris Aire, we believe that our customers are our family. Our company
                            is firstly a human institution - not solely a money-making establishment.
                            We are here to serve you. We understand that money is the by-product of
                            genuinely listening and catering to the needs of our customers. We hope that
                            you are granted light, peace and joy during the course of your dealings with us
                            and that we impact you in ways that make you think of us as a part of your
                            extended family.
                        </p>
                        <p class="para mb-46">
                            May your experience be pleasant and fulfilling. May the power that brought you
                            our way prosper. May your purchases add to your success and happiness. May
                            your light shine and that those you love will always be near you. Upon the
                            conclusion of your transaction, may your experience be so uplifting that you
                            look forward to the next opportunity to shop with us.
                        </p>
                        <p class="para mb-46">
                            Although I may not get to meet you personally, you are no stranger; I know the
                            truth of who you are. You are the light. May The Highest Power in the Universe
                            fill your heart with peace, joy, love and your face with uncountable smiles.
                        </p>
                        <p class="para">Peace and Blessings,</p>
                        <p class="inner-para change bold">Chris Aire</p>
                        <p class="para">President & Designer of Chris Aire</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
