@extends('client_layout.master')
@section('title')
Company
@endsection
@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Company</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">     
        <!-- Service Blcoks -->  
        <div class="row">
                            <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-building-o"></i>
                    <div class="info-blocks-in">
                        <h3><a href="/hiringcompany/Copreros">Copreros</a></h3>
                        <!-- <p>weqwe</p> -->
                        <p>Address :Mabinay&#039;s</p>
                        <p>Contact No. :03565</p>
                    </div>
                </div>
                            <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-building-o"></i>
                    <div class="info-blocks-in">
                        <h3><a href="{{url('hiringcompany')}}">URC</a></h3>
                        <!-- <p>weqwe</p> -->
                        <p>Address :Bry Camugao</p>
                        <p>Contact No. :023654</p>
                    </div>
                </div>
                            <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-building-o"></i>
                    <div class="info-blocks-in">
                        <h3><a href="/hiringcompany/Quest">Quest</a></h3>
                        <!-- <p>weqwe</p> -->
                        <p>Address :Kabankalan City</p>
                        <p>Contact No. :23165</p>
                    </div>
                </div>
                            <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-building-o"></i>
                    <div class="info-blocks-in">
                        <h3><a href="/hiringcompany/IT Company">IT Company</a></h3>
                        <!-- <p>weqwe</p> -->
                        <p>Address :Kabankalan City</p>
                        <p>Contact No. :04564123</p>
                    </div>
                </div>
                            <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-building-o"></i>
                    <div class="info-blocks-in">
                        <h3><a href="/hiringcompany/Palacios Company">Palacios Company</a></h3>
                        <!-- <p>weqwe</p> -->
                        <p>Address :Kabankalan City</p>
                        <p>Contact No. :0625656899</p>
                    </div>
                </div>
            

        </div> 
    </div>
</section>  
<!-- end content -->
@endsection