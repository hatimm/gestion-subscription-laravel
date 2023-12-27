@extends('layouts.navbar')
<title>
    Home client
</title>
@section('content')
@extends('layouts.alert')
        <!--<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
                <title>Check</title>
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
            </symbol>
        </svg>-->
        <div class="container text-center py-5">
            <h1 class="display-5">Packs</h1>
        </div>
        <div class="container">
            <!--Pricing cards-->
            <!--<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col ">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">  
                            <h1 class="my-0 font-weight-normal">$0 <small class="text-muted fw-light">/Mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="/payment" style="text-decoration: none;">
                            <button class="w-100 btn btn-outline-primary btn-lg btn-block" >
                                 Sign up
                            </button>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card mb-4 rounded-3 shadow-lg">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">  
                            <h1 class="my-0 font-weight-normal">$15 <small class="text-muted">/Year</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>4GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="/payment" style="text-decoration: none;">
                            <button class="btn btn-primary btn-lg btn-block">
                                Sign up
                            </button></a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Premium</h4>
                        </div>
                        <div class="card-body">  
                            <h1 class="my-0 font-weight-normal">$30 <small class="text-muted">/Mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>6GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="/payment" style="text-decoration: none;">
                            <button class="btn btn-primary btn-lg btn-block">
                                Sign up
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://dotsmaker.com/wp-content/uploads/2022/03/How-to-choose-Domain.png" alt="host and domain subscription" class="card-img h-100">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Domain Name and Hosting Pack 1 ! <span class="badge" style="background-color: #e6faff ;">50$/Year</span></h5>
                            <p class="card-text">
                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-database"></i> Web site hosting</span>
                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-computer"></i> domain name</span>
                            </p>
                            <p class="card-text">Host static & dynamic websites in the cloud with Click to Deploy or customized solutions. 
                            Use a free trial to start hosting your website or web app with any Google Cloud product.Host static & dynamic websites in the cloud with Click to Deploy or customized solutions. 
                            Use a free trial to start hosting your website or web app with any Google Cloud product.</p>
                            <div class="clear-fix"></div>
                            <form action="/payment" method="post">
                            @csrf
                             <input type="integer" name="price" id="" value="50" hidden>
                             <select name="pack" hidden>
                                    <option value="P1">P1</option>
                                </select>
                             <button type="submit" class="btn btn-primary">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://www.hostpapa.com/blog/wp-content/uploads/2019/08/domain-registration.jpg" alt="host and domain subscription" class="card-img h-100">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Domain Name and Hosting Pack 2 ! <span class="badge" style="background-color: #e6faff ;">100$/Year</span></h5>
                            <p class="card-text">
                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-database"></i> Web site hosting</span>
                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-computer"></i> domain name</span>
                            </p>
                            <p class="card-text">Host static & dynamic websites in the cloud with Click to Deploy or customized solutions. 
                            Use a free trial to start hosting your website or web app with any Google Cloud product.Host static & dynamic websites in the cloud with Click to Deploy or customized solutions. 
                            Use a free trial to start hosting your website or web app with any Google Cloud product.</p>
                            <div class="clear-fix"></div>
                            <form action="/payment" method="post">
                                @csrf
                             <input type="integer" name="price" id="" value="100" hidden>
                             <select name="pack" hidden>
                                    <option value="P2">P2</option>
                                </select>
                             <button type="submit" class="btn btn-primary">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://www.hostingadvice.com/wp-content/uploads/2020/11/domainregistrar.jpg" alt="host and domain subscription" class="card-img h-100">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Domain Name and Hosting Pack 3 ! <span class="badge" style="background-color: #e6faff ;">300$/Year</span></h5>
                            <p class="card-text">
                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-database"></i> Web site hosting</span>
                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-computer"></i> domain name</span>
                            </p>
                            <p class="card-text">Host static & dynamic websites in the cloud with Click to Deploy or customized solutions. 
                            Use a free trial to start hosting your website or web app with any Google Cloud product.Host static & dynamic websites in the cloud with Click to Deploy or customized solutions. 
                            Use a free trial to start hosting your website or web app with any Google Cloud product.</p>
                            <div class="clear-fix"></div>
                            <form action="/payment" method="post">
                                @csrf
                             <input type="integer" name="price" id="" value="300" hidden>
                             <select name="pack" hidden>
                                    <option value="P3">P3</option>
                                </select>
                             <button type="submit" class="btn btn-primary">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--<h2 class="display-6 text-center py-4 mb-4">Compare plans</h2>

            <div class="table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">Free</th>
                    <th style="width: 22%;">Pro</th>
                    <th style="width: 22%;">Premium</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="text-start">Public</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Private</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                    <th scope="row" class="text-start">Permissions</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Sharing</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Unlimited members</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Extra security</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                </tbody>
            </table>
            </div>-->
        </div>
@endsection