@extends('layouts.app')

@section('content')
  <div class="head-in" style="background-image: #fff; width:100%; height:50px;"></div>
    <div class="center-content ">
        <div class="main-content row" >
          <div class="content-rows-head" 
           style=" background-color: #79dcf1 ;padding-left:5%;  height: 65px;line-height: 50px;">
              <div class="processcing-content col-md-6"> 
                <a href="# "><img src="upload/logoHP.png" style="width:60px"></a>
                <a href="{{url('/introduce')}}" class="w3-bar-item w3-button" id="gt" style="color: rgb(236, 119, 22)"><h3><b>Giới thiệu</b></h3></a>
               <a href="#" class="w3-bar-item w3-button" id="tc" style="color:  rgb(236, 119, 22)"> <h3><b>Địa điểm du lịch</b></h3></a>
            </div> 
            <div class="col-md-4">
              <div class="search-main " style="margin-top:1%" >
                <input type="search" id="search" placeholder="Search..." class="form-control fas fa-search"> 
              </div>
            </div>    
            <div class="col-md-2">
                <a href="" class="w3-bar-item w3-button">  <i class="fas fa-user"> </i>
                <a href="" class="w3-bar-item w3-button"><i class="fas fa-shopping-cart"></i></a>
            </div>
          </div>
        </div>
      </div> 
      <div class="caro-info container">
        <div id="myCarousel" class="carousel slide point-nxt" style="  color: black;" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="upload/banner1.jpg" alt="Los Angeles" style="width:100%;">
            </div>
            {{-- <div class="item active">
              <img src="upload/banner3.jpg" alt="Chicago" style="width:100%;">
            </div>     --}}
            <div class="item">
                <img src="upload/banner4.jpg" alt="Chicago" style="width:100%;">
              </div>    
            
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  
      <div class="nt" id="nt">
      @include('introduce')
      </div>
      <div class="content-product container container--secondary " style="margin-top: 2% "> 
        <h2 style="color: #dd581a;text-align: center;"><b>MÓN ĂN CHÍNH</b></h2>
        <div class="br-break container" style="background-color:rgb(236, 119, 22);  width:50%; height:3px;" ></div>
          <div class="main-product row ">  
              @foreach ($records as $item)
                  <div id="noidung" class="slider col-md-4"  style="padding:2%" >
                    <div class="main-product">
                      <div class="detail-cont" style="border-radius: 1rem;  box-shadow: 1px 2px 4px 2px #dc6621; padding:3%;">
                        <div class="name-img "><picture style="osition: absolute;
                          transform-origin: 50% 50%;
                          transition: .2s ease-in-out;"><img src="./upload/{{$item->image}} " style="border-radius: 2rem;width:100%; height:250px;  padding:3%;"></picture></div>	 
                        <div class="name-food"> <h3> <i class="fas fa-hamburger"></i> <b>{{$item->name}}</b></h3></div>	 
                        <div class="name-place"><h4><i class="fas fa-location-arrow"></i> {{$item->place}}<h4>	 </div>
                      </div> 
                    </div>  
                  </div>
              @endforeach  
          </div>
      </div>
      <div class="content-product container container--secondary " style="margin-top: 2% "> 
        <h2 style="color: #dd581a;text-align: center;"><b>THỨC UỐNG</b></h2>
        <div class="br-break container" style="background-color:rgb(236, 119, 22);  width:50%; height:3px;" ></div>
          <div class="main-product row ">  
              @foreach ($recordr as $item)
                  <div id="noidung" class="slider col-md-4"  style="padding:2%" >
                    <div class="main-product">
                      <div class="detail-cont" style="border-radius: 1rem;  box-shadow: 1px 2px 4px 2px #dc6621; padding:3%;">
                        <div class="name-img ">
                            <img src="./upload/{{$item->image}} " style="border-radius: 2rem;width:100%; height:250px;  padding:3%;">
                        </div>	 
                        <div class="name-food"> <h3> <i class="fas fa-hamburger"></i> <b>{{$item->name}}</b></h3></div>	 
                        <div class="name-place"><h4><i class="fas fa-location-arrow"></i> {{$item->place}}<h4>	 </div>
                      </div> 
                    </div>  
                  </div>
              @endforeach  
          </div>
      </div>
      <div class="content-product container container--secondary " style="margin-top: 2% "> 
        <h2 style="color: #dd581a;text-align: center;"><b>BÁNH NGỌT</b></h2>
        <div class="br-break container" style="background-color:rgb(236, 119, 22);  width:50%; height:3px;" ></div>
          <div class="main-product row ">  
              @foreach ($recordc as $item)
                  <div id="noidung" class="slider col-md-4"  style="padding:2%" >
                    <div class="main-product">
                      <div class="detail-cont" style="border-radius: 1rem;  box-shadow: 1px 2px 4px 2px #dc6621; padding:3%;">
                        <div class="name-img "><picture style="osition: absolute;
                          transform-origin: 50% 50%;
                          transition: .2s ease-in-out;"><img src="./upload/{{$item->image}} " style="border-radius: 2rem;width:100%; height:250px;  padding:3%;"></picture></div>	 
                        <div class="name-food"> <h3> <i class="fas fa-hamburger"></i> <b>{{$item->name}}</b></h3></div>	 
                        <div class="name-place"><h4><i class="fas fa-location-arrow"></i> {{$item->place}}<h4>	 </div>
                      </div> 
                    </div>  
                  </div>
              @endforeach  
          </div>
      </div>
      <div class="content-product container container--secondary " style="margin-top: 2% "> 
        <h2 style="color: #dd581a;text-align: center;"><b>TRÁNG MIỆNG</b></h2>
        <div class="br-break container" style="background-color:rgb(236, 119, 22);  width:50%; height:3px;" ></div>
          <div class="main-product row ">  
              @foreach ($recordd as $item)
                  <div id="noidung" class="slider col-md-4"  style="padding:2%" >
                    <div class="main-product">
                      <div class="detail-cont" style="border-radius: 1rem;  box-shadow: 1px 2px 4px 2px #dc6621; padding:3%;">
                        <div class="name-img "><picture style="osition: absolute;
                          transform-origin: 50% 50%;
                          transition: .2s ease-in-out;"><img src="./upload/{{$item->image}} " style="border-radius: 2rem;width:100%; height:250px;  padding:3%;"></picture></div>	 
                        <div class="name-food"> <h3> <i class="fas fa-hamburger"></i> <b>{{$item->name}}</b></h3></div>	 
                        <div class="name-place"><h4><i class="fas fa-location-arrow"></i> {{$item->place}}<h4>	 </div>
                      </div> 
                    </div>  
                  </div>
              @endforeach  
          </div>
      </div>
      <div class="nd" id="nd">
        @include('travel')
      </div>
  <script type="text/javascript">
  $(document).ready(function() {
          $('#gt').click(function(e) {
             $.ajax({
              type : 'get', //kiểu post
              url  : '/introduce', //gửi dữ liệu sang trang submi
              success :  function(data)
                     {
                      console.log(data);
                         $('#nt').html(data); 
                     }
              });
          });
      });
      $(document).ready(function() {
          $('#tc').click(function(e) {
             $.ajax({
              type : 'get', //kiểu post
              url  : '/travel', //gửi dữ liệu sang trang submi
              success :  function(data)
                     {
                      console.log(data);
                         $('#nd').html(data); 
                     }
              });
          });
      });
      $('.slider').slick({
      infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
        autoplaySpeed:3000});
  </script>
  <style>
    .name-img {
      transition: transform .3s;
      margin: 0 auto;
      position: relative;
    }
    .name-img:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
    </style>
@endsection
