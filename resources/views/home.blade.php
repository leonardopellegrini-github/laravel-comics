@extends ('layouts.main')

@section ('content')

<div>
  <div class="jumbotron">

  </div>
  
  

  <div class="main">

    <div class="container d-flex flex-row flex-wrap">
      <div class="etichetta d-flex align-items-center">
        <h3>CURRENT SERIES</h3>
      </div>

      <div   class="singleCard">
        <div class="overlay">
          <div class="text">
            
            <h5></h5>
            <h5></h5>
            <h5></h5>
            
          </div>
       </div>
        <img :src="immaginiData.thumb" alt="1">
        /*
        <h4></h4>
        */
      </div>
      
    </div>
  
      <div class="bottoneLoad d-flex align-items-center justify-content-around">
        <a href="#">LOAD MORE...</a> 
      </div>
          
  </div>
  
</div>

@endsection