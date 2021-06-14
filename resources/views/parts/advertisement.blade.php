<div class="row result">
    <div class="col-md-5">
  
  
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('contents/images/home/advertisement.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('contents/images/home/advertisement.png')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('contents/images/home/advertisement.png')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>
      
  
    </div>
    <div class="col-md-7">

  
      
        <div class="hpc_video">
          <iframe src="https://www.youtube.com/embed/gxr_SVhGz-g?start=2" frameborder="0" ></iframe>
        </div>
           
        <div class="row table1 table-wrapper-scroll-y my-custom-scrollbar">
          <table class="table table-light table-responsive table-striped table-hover">
            <thead>
              <tr class="table-info">
                <th>Year</th>
                <th>Group</th>
                <th>No. Of Examinees</th>
                <th>Attend Examinees</th>
                <th>A+</th>
                <th>A</th>
                <th>A-</th>
                <th>B-D</th>
                <th>Fail</th>
                <th>Total Pass</th>
      
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ffss</td>
                <td>sdfgjs</td>
                <td>sgsg</td>
                <td>ffss</td>
                <td>sdfgjs</td>
                <td>sgsg</td>
                <td>ffss</td>
                <td>sdfgjs</td>
                <td>sgsg</td>
                <td>djfgvjdfg</td>
              </tr>
              @foreach($photos as $pic)
                <tr>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                  <td> {{$pic->title}} </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    