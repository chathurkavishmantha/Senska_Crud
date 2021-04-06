@extends('layout.shop')

@section('content')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="row">
            <div class="content col-xl-4 d-flex flex-column justify-content-center">
              <img src="assets/img/services.png" class="img-fluid" alt="">
            </div>
            <div class="col-xl-7">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    
                        <form action="" method="POST">
                          {{csrf_field()}} 
                          <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Code</th>
                                <th scope="col">Product Description</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Image</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                            @if(count($products)>0)
                               @foreach($products as $product)
                              <tr>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->product_description}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_img}}</td>                                
                                <td><button
                                  class="btn btn-warning" 
                                  class="btn btn-primary"
                                  data-mdb-toggle="modal"
                                  data-mdb-target="#exampleModal"><a href="/edit_product/{{$product->product_id}}">Edit</a></button></td>  

                                <td><button class="btn btn-danger">Delete</button></td>

                              </tr>
                                @endforeach    
                            @endif
                              
                            </tbody>
                          </table>
                          
                          
                        </form>
                      </div>
                    
                </div><!-- End .content-->
              </div>
            </div>
  
        </div>
        </div>
        
      </section><!-- End Services Section -->
    
    
@endsection