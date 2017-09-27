<style type="text/css">
    /** The Magic **/
    .btn-breadcrumb .btn:not(:last-child):after {
      content: " ";
      display: block;
      width: 0;
      height: 0;
      border-top: 17px solid transparent;
      border-bottom: 17px solid transparent;
      border-left: 10px solid white;
      position: absolute;
      top: 50%;
      margin-top: -17px;
      left: 100%;
      z-index: 3;
    }
    .btn-breadcrumb .btn:not(:last-child):before {
      content: " ";
      display: block;
      width: 0;
      height: 0;
      border-top: 17px solid transparent;
      border-bottom: 17px solid transparent;
      border-left: 10px solid rgb(173, 173, 173);
      position: absolute;
      top: 50%;
      margin-top: -17px;
      margin-left: 1px;
      left: 100%;
      z-index: 3;
    }

    /** The Spacing **/
    .btn-breadcrumb .btn {
      padding:6px 12px 6px 24px;
    }
    .btn-breadcrumb .btn:first-child {
      padding:6px 6px 6px 10px;
    }
    .btn-breadcrumb .btn:last-child {
      padding:6px 18px 6px 24px;
    }

    /** Default button **/
    .btn-breadcrumb .btn.btn-default:not(:last-child):after {
      border-left: 10px solid #fff;
    }
    .btn-breadcrumb .btn.btn-default:not(:last-child):before {
      border-left: 10px solid #ccc;
    }
    .btn-breadcrumb .btn.btn-default:hover:not(:last-child):after {
      border-left: 10px solid #ebebeb;
    }
    .btn-breadcrumb .btn.btn-default:hover:not(:last-child):before {
      border-left: 10px solid #adadad;
    }

    /** Primary button **/
    .btn-breadcrumb .btn.btn-primary:not(:last-child):after {
      border-left: 10px solid #428bca;
    }
    .btn-breadcrumb .btn.btn-primary:not(:last-child):before {
      border-left: 10px solid #357ebd;
    }
    .btn-breadcrumb .btn.btn-primary:hover:not(:last-child):after {
      border-left: 10px solid #3276b1;
    }
    .btn-breadcrumb .btn.btn-primary:hover:not(:last-child):before {
      border-left: 10px solid #285e8e;
    }

    /** Success button **/
    .btn-breadcrumb .btn.btn-success:not(:last-child):after {
      border-left: 10px solid #5cb85c;
    }
    .btn-breadcrumb .btn.btn-success:not(:last-child):before {
      border-left: 10px solid #4cae4c;
    }
    .btn-breadcrumb .btn.btn-success:hover:not(:last-child):after {
      border-left: 10px solid #47a447;
    }
    .btn-breadcrumb .btn.btn-success:hover:not(:last-child):before {
      border-left: 10px solid #398439;
    }

    /** Danger button **/
    .btn-breadcrumb .btn.btn-danger:not(:last-child):after {
      border-left: 10px solid #d9534f;
    }
    .btn-breadcrumb .btn.btn-danger:not(:last-child):before {
      border-left: 10px solid #d43f3a;
    }
    .btn-breadcrumb .btn.btn-danger:hover:not(:last-child):after {
      border-left: 10px solid #d2322d;
    }
    .btn-breadcrumb .btn.btn-danger:hover:not(:last-child):before {
      border-left: 10px solid #ac2925;
    }

    /** Warning button **/
    .btn-breadcrumb .btn.btn-warning:not(:last-child):after {
      border-left: 10px solid #f0ad4e;
    }
    .btn-breadcrumb .btn.btn-warning:not(:last-child):before {
      border-left: 10px solid #eea236;
    }
    .btn-breadcrumb .btn.btn-warning:hover:not(:last-child):after {
      border-left: 10px solid #ed9c28;
    }
    .btn-breadcrumb .btn.btn-warning:hover:not(:last-child):before {
      border-left: 10px solid #d58512;
    }

    /** Info button **/
    .btn-breadcrumb .btn.btn-info:not(:last-child):after {
      border-left: 10px solid #5bc0de;
    }
    .btn-breadcrumb .btn.btn-info:not(:last-child):before {
      border-left: 10px solid #46b8da;
    }
    .btn-breadcrumb .btn.btn-info:hover:not(:last-child):after {
      border-left: 10px solid #39b3d7;
    }
    .btn-breadcrumb .btn.btn-info:hover:not(:last-child):before {
      border-left: 10px solid #269abc;
    }
    .price-tag {
      position: absolute;
      top: 10px;
      color: #FFF;
      padding: 0.5em;
      background-color: rgba(000,000,000,0.50);
    }
</style>

<!-- Latest Products -->
<div id="products">
    <div class="content-lg container">
       <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Breadcrumb Default</h2>
                <div class="btn-group btn-breadcrumb">
                    <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
                    <a href="#" class="btn btn-default">Browse</a>
                    <a href="#" class="btn btn-default">Compare</a>
                    <a href="#" class="btn btn-default">Order</a>
                    <a href="#" class="btn btn-default">Checkout</a>
                </div>
            </div>
        </div>

        <br />

        <div class="row">
            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/01.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 100,500.00 </div>
                </div>
                <h4><a href="#">Obudu Weekly Special</a> <span class="text-uppercase margin-l-20">3 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->

            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/02.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 160,500.00 </div>
                </div>
                <h4><a href="#">Holy Pilgrimage to Makkah</a> <span class="text-uppercase margin-l-20">5 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->

            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/03.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 120,000.00 </div>
                </div>
                <h4><a href="#">Destination Singapore</a> <span class="text-uppercase margin-l-20">4 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->
        </div>
        <br />
        <div class="row">
          <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/03.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 230,000.00 </div>
                </div>
                <h4><a href="#">Explore Johannesburg</a> <span class="text-uppercase margin-l-20">4 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->
            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/01.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 160,000.00 </div>
                </div>
                <h4><a href="#">Obudu Weekly Special</a> <span class="text-uppercase margin-l-20">3 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->

            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/02.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 230,000.00 </div>
                </div>
                <h4><a href="#">Holy Pilgrimage to Makkah</a> <span class="text-uppercase margin-l-20">5 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->
        </div>
        <br />
        <div class="row">

            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/03.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 180,500.00 </div>
                </div>
                <h4><a href="#">Destination Singapore</a> <span class="text-uppercase margin-l-20">4 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->

            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/03.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 110,000.00 </div>
                </div>
                <h4><a href="#">City of Johannesburg</a> <span class="text-uppercase margin-l-20">4 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->

            <!-- Latest Products -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <img class="img-responsive" src="public/img/970x647/03.jpg" alt="Latest Products Image">
                    <div class="price-tag"> &#8358; 100,500.00 </div>
                </div>
                <h4><a href="#">Explore Johannesburg</a> <span class="text-uppercase margin-l-20">4 Days</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Details</a>
            </div>
            <!-- End Latest Products -->
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Latest Products -->