<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Sản phẩm</h6>
                        <p style="font-family: sans-serif;">bảng giá cà phê hạt 20KG/ĐƠN (cập nhật giá 05/12/2023)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach($data as $data)

                    <div class="item">
                        <div style="background-image: url('/productsimage/{{$data->Image}}');" class='card '>
                            <div class="price"><h6>{{$data->Price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->Title}}</h1>
                              <p class='description'>{{$data->Description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>  
                