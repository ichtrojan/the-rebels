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
        <div class="row margin-b-40">
            <div class="col-md-12">
               <div id="load-all"></div> 
            </div>
        </div>
        <script type="text/javascript">
            $("#load-all").load("__factory/load-index-packages.php");
        </script>
    </div>
</div>
<!-- End Latest Products -->