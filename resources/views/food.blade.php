<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Rasakan Kelezatan dari setiap suapan dari menu yang kami hadirkan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post">
                        @csrf
                        <div class="item">
                            <div style="background-image: url('/foodimage/{{$data->img}}')" class='card'>
                                <div class="price"><h6>{{$data->price}}TK</h6></div>
                                <div class='info'>
                                <h1 class='title'>{{$data->title}}</h1>
                                <p class='description'>{{$data->description}}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                                </div>
                            </div>
                            <div style="padding-top: 10px;">
                                <input type="number" name="quantity" min="1" style="width: 80px;" value="1">
                                                              
                                <!-- <input type="submit" class="btn btn-success" value="Add Cart">                                -->
                                <button class="btn btn-success">Add Cart</button>
                            </div>
                        </div>
                    </form>    
                    @endforeach    
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Burjomatsu</h6>
                        <h2>Spesial Menu</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Menyajikan ayam dan sayuran yang fresh dan berkualitas</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp15.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Dengan jeruk berkualitas yang dipetik dari perkebunan indonesia</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp8.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Dengan buah berkualitas yang ditanam didaerah pegunungan</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp20.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Omelet telur yang lembut dipadukan dengan sambal yang segar dan pedas</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp18.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Sop Kepala Ikan</h4>
                                                            <p>Sajian sup kepala ikan yang sangat gurih dan enak</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp20.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette dan keju</h4>
                                                            <p>Kelembutan omelet dipadukan dengan keju yang gurih dan unik</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp25.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Omelet telur yang lembut dipadukan dengan sambal yang segar dan pedas</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp25.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Sop Kepala Ikan</h4>
                                                            <p>Sajian sup kepala ikan yang sangat gurih dan enak</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp20.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette dan keju</h4>
                                                            <p>Kelembutan omelet dipadukan dengan keju yang gurih dan unik</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp25.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Menyajikan ayam dan sayuran yang fresh dan berkualitas</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp15.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Dengan jeruk berkualitas yang dipetik dari perkebunan indonesia</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp8.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Dengan buah berkualitas yang ditanam didaerah pegunungan</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp20.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Omelet telur yang lembut dipadukan dengan sambal yang segar dan pedas</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp25.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Dengan jeruk berkualitas yang dipetik dari perkebunan indonesia</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp8.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Dengan buah berkualitas yang ditanam didaerah pegunungan</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp20.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Menyajikan ayam dan sayuran yang fresh dan berkualitas</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp15.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Sop Kepala Ikan</h4>
                                                            <p>Sajian sup kepala ikan yang sangat gurih dan enak</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp20.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Omelette dan keju</h4>
                                                            <p>Kelembutan omelet dipadukan dengan keju yang gurih dan unik</p>
                                                            <div class="price">
                                                                <h6 style="width: 100px">Rp25.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->