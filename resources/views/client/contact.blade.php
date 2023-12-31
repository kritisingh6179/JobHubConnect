@extends('client_layout.master')
@section('title')
Contact Us
@endsection
@section('content')
     <!-- start content -->
     <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Contact Us</h2>
                </div>
            </div>
        </div>
    </section> 

    <section id="content">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="about-logo">
                        <h3>Voluptatem Accusantium Doloremque</h3>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>
                    
                    <!-- Form itself -->
                    <form name="sentMessage" id="contactForm"  novalidate>
                        <h3>Contact me</h3>
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" class="form-control" 
                                placeholder="Full Name" id="name" required
                                data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
                            </div>
                        </div> 	
                            
                        <div class="control-group">
                            <div class="controls">
                                <textarea rows="10" cols="100" class="form-control"  placeholder="Message" id="message" required
                                    data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" 
                                    maxlength="999" style="resize:none">
                                </textarea>
                            </div>
                        </div> 	

                        <div id="success"> </div>
                        
                        <button type="submit" class="btn btn-primary pull-right">Send</button><br />
                    </form>

                </div>                    
            </div>
        </div>

    </section>
<!-- end content -->
@endsection