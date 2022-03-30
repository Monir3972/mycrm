<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pricing Order</title>
  </head>
  <body>
  
<div class="col-12 col-md-9 mx-auto">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

                <div class="card card-body shadow p-2 p-md-4 rounded">
                        <div class="row align-items-center p-2">
                            <div class="col-12 row">
                            
                            </div>
                            <div class="col-12 mt-4">
                                <h2 class="text-center fw-bold">Customer Billing</h2>
                                          <div class="row">
                                           <div class="col-12">
                                            <p class="text-center">Please fill the form and start your journey</p>
                                        </div>
                                         <div class="col-12  col-md-6 ">
                                        <div class="h-100 p-2">
                                            <h3>Product Details</h3>
                                            <table class="table">
                                                <thead class="border-white">
                                                    <tr><th>Source</th>
                                                    <th class="text-end">Details</th>
                                                </tr></thead>
                                                <tbody id="pkDetails">
                                                    <td>Product Name</td>
                                                        <td class="text-end">{{$pricing->productName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price (Monthly)</td>
                                                        <td class="text-end">{{$pricing->monthlyPrice}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price (Annual)</td>
                                                        <td class="text-end">{{$pricing->annualPrice}}</td>
                                                    </tr>
                                                       <tr>
                                                        <td>Storage</td>
                                                        <td class="text-end">{{$pricing->storage}}</td>
                                                    </tr>
                                                </table>
                                            
                                            <!-- <p class="fw-bold">Change Package</p>
                                                <div class="form-group mb-2 mt-0">
                                                    <label class="form-label fw-bold" for="package">Package</label>
                                                    <select class="form-control" name="package" id="pkId" onchange="packChange()">
                                                 <option value="4">Elite Package($497-90)</option>
                                                </div> -->
                                                <div class="form-group mb-2">
                                                    <label class="form-label fw-bold" for="payment">Payment</label>
                                                    <select class="form-control" name="payment" id="pm" onchange="window.location.href=this.value;">
                                                        <option>Please Select One</option>
                                                        <option  value="{{ route('paymentOrder')}}">Paypal</option>
                                                        <option value="{{ route('paymentOrder')}}">Perfect Money</option>
                                                        <option value="{{ route('paymentOrder')}}">Bitcoin</option>
                                                    </select>
                                                </div>
                                           </div>
                                         </div>
                                         <div class="col-12 col-md-6">
                                        <div class="shadow h-100 p-2">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                  <!--   <button class="nav-link active" id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register" aria-selected="true">
                                                        New Customer
                                                    </button> -->
                                                  <!--   <button class="nav-link" id="nav-login-tab" data-bs-toggle="tab" data-bs-target="#nav-login" type="button" role="tab" aria-controls="nav-login" aria-selected="false">Already Account</button> -->
                                                </div>
                                            </nav>
                                            <!-- <div class="tab-content" id="nav-tabContent"> -->
                                               <!--  <div class="tab-pane fade active show" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab"> -->
                                                Have not any account?  <a href="{{ route('register')}}" class="btn btn-success btn-sm mt-3">Click here</a><br>
                                                  
                                                   Already Have a Account <a href="{{ route('login')}}" class="btn btn-success btn-sm mt-3">Click here</a>
                                                <!-- </div> -->
                                               <!--  <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">

                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>