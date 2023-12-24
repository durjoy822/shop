@extends('frontend.layout.master')
@section('title')
    contact us
@endsection
@section('content')
<!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>Contact Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href="../"><i class="lni lni-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--contact-us-->
    <section id=contact-us class="contact-us section">
        <div class=container>
            <div class=contact-head>
                <div class=row>
                    <div class=col-12>
                        <div class=section-title>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class=contact-info>
                    <div class=row>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class=single-info-head>

                                <div class=single-info>
                                    <i class="lni lni-map"></i>
                                    <h3>Address</h3>
                                    <ul>
                                        <li>44 Shirley Ave. West Chicago,<br> IL 60185, USA.</li>
                                    </ul>
                                </div>


                                <div class=single-info>
                                    <i class="lni lni-phone"></i>
                                    <h3>Call us on</h3>
                                    <ul>
                                        <li><a href="tel:+18005554400">+1 800 555 44 00 (Toll free)</a></li>
                                        <li><a href="tel:+321556667890">+321 55 666 7890</a></li>
                                    </ul>
                                </div>


                                <div class=single-info>
                                    <i class="lni lni-envelope"></i>
                                    <h3>Mail at</h3>
                                    <ul>
                                        <li><a
                                                href="https://demo.graygrids.com/cdn-cgi/l/email-protection#cfbcbabfbfa0bdbb8fbca7a0bfa8bda6abbce1aca0a2"><span
                                                    class="__cf_email__"
                                                    data-cfemail="41323431312e33350132292e3126332825326f222e2c">[email&#160;protected]</span></a>
                                        </li>
                                        <li><a
                                                href="https://demo.graygrids.com/cdn-cgi/l/email-protection#f4979586919186b4879c9b8493869d9087da979b99"><span
                                                    class="__cf_email__"
                                                    data-cfemail="f6959784939384b6859e998691849f9285d895999b">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class=contact-form-head>
                                <div class=form-main>
                                    <form class=form method=post
                                        action="https://demo.graygrids.com/themes/shopgrids/assets/mail/mail.php">
                                        <div class=row>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class=form-group>
                                                    <input name=name type=text placeholder="Your Name" required=required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class=form-group>
                                                    <input name=subject type=text placeholder="Your Subject"
                                                        required=required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class=form-group>
                                                    <input name=email type=email placeholder="Your Email" required=required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class=form-group>
                                                    <input name=phone type=text placeholder="Your Phone" required=required>
                                                </div>
                                            </div>
                                            <div class=col-12>
                                                <div class="form-group message">
                                                    <textarea name=message placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class=col-12>
                                                <div class="form-group button">
                                                    <button type=submit class="btn ">Submit Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
