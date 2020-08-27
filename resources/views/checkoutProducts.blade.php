
@extends('layouts.main')


@section('center')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Billing Address</li>
            </ol>
        </div>
       
       

         <!-- REMOVE THIS IF YOU WANT TO LET GUEST USERS TO MAKE SHOPPING -->
         
       
       

       
       
            <div class="container">
                
            
                    
                        <div class="bill-to">
                            <p> Shipping/Bill To</p>
                            <div class="form">
                                <form action="{{route('createNewOrder')}}" method="post">



                                                                
                                                                 {{csrf_field()}}
                                                                 
                        
                                    <input class="form-control" type="text" name="email" placeholder="Email*" required>
                                    
                                    <input class="form-control" type="text" name="first_name" placeholder="First Name *" required>
                                    <input class="form-control" type="text" name="middle_name" placeholder="Middle Name" >
                                    <input class="form-control" type="text" name="last_name" placeholder="Last Name *"  required>
                                    <input class="form-control" type="text" name="address" placeholder="Address 1 *" required>
                                    <input class="form-control" type="text" placeholder="Address 2">
                                                                        
                                                                        
                                   <input class="form-control" type="text" name="zip" placeholder="Zip / Postal Code *" required>
                                    <select class="form-control">
                                        <option>-- Country --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Romania</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <select class="form-control">
                                        <option>-- State / Province / Region --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Romania</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    
                                    <input class="form-control" type="text" name="phone" placeholder="Phone *" required>
                                    <input class="form-control" type="text" placeholder="Mobile Phone">
                                <button class="btn btn-default check_out" type="submit" name="submit" >Proceed To Payment</button>
                                                                       
                                </form>
                            </div>
                            
                        </div>
                    
                           
                
            </div>
            
           
    </div>
</section> <!--/#cart_items-->

@if(!Auth::check())
<section id="do_action">
    <div class="container">
        <br>
        <div class="alert alert-danger" role="alert">
            <strong>You</strong> can <a href="{{route('login') }}?next=products/checkoutProducts">Log in</a> or <a href="/register">Register</a> if you want
        </div>

    </div>
</section><!--/#do_action-->
@endif

@endsection




