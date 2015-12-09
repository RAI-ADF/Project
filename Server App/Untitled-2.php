php artisan crud:generate Item --fields=":string:required, email:string, age:number, message:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin

php artisan crud:generate Bid --fields="id:string:required, item_id:string:required, buyer:string:required, current_bid:bigint:required, bid_date:date:required" --route=yes --pk=id

php artisan crud:generate Item --fields=":string:required, email:string, age:number, message:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin

<th>Index</th>
                    <th>Item Id</th>
                    <th>Item Name</th>
                    <th>Seller ID</th>
                    <th>Last Bid</th>
                    <th>Status</th>
                    <th>Actions</th>


php artisan crud:generate Item --fields="item_id:string:required, item_name:string:required, item_desc:text, item_img:binary, start_bid:bigint, buy_now_price:bigint, last_bid:bigint ,status:string, start_date:date, max_date:date, seller:string"


@extends('template')
@section('content')

<div class="container">    
        <div id="loginbox" style="margin-top:40px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="signupform" class="form-horizontal" role="form">
                            <div class="panel-heading">
                    </div>  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="lastname" placeholder="Full Address"> </textarea>
                                    </div>
                                </div>  
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Phone Number">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button> 
                                    </div>
                                </div>
                                                                
                            </form>
    </div>
    </div>
    </div>
</div>
@stop