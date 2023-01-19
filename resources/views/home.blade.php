@extends ('adminlte::page')



@section('title')

   home 

@endsection


@section('content_header')

 <div class="conteiner"
  <div class="row.my-5">
      <div class="col-md-4">
      
        
            <div class="small-box bg-info">
                <div class="inner"><h3>{{App\Models\clients::count()}}</h3>
            <p>clients</p>
            <div class="inner"><h3>
            
            </div>
            <div class="icon">  <i class="fas fa-users"></i></div>
            <a href="{{url('home/clients')}}" class="small-box-footer"> information <i class="fas fa-arrow-circle-right"></i></a>
              
          
             
              </div>
           
      
      
          </div>
      </div>
      <h3>  
  </div>

  </div>
  <div class="conteiner">
  <div class="row.my-5">
      <div class="col-md-4">
      
        
            <div class="small-box bg-info">
                <div class="inner"><h3>{{App\Models\prospects::count()}}</h3>
            <p>prospects</p>
            <div class="inner"><h3>
            
            </div>
            <div class="icon">  <i class="fas fa-users"></i></div>
            <a href="{{url('home/prospect')}}" class="small-box-footer"> information <i class="fas fa-arrow-circle-right"></i></a>
              
          
             
              </div>
           
      
      
          </div>
      </div>
      <h3>  
  </div>
  <div class="col-md-4">
      
        
      <div class="small-box bg-info">
          <div class="inner"><h3>{{App\Models\contacts::count()}}</h3>
      <p>contact</p>
      <div class="inner"><h3>
      
      </div>
      <div class="icon">  <i class="fas fa-users"></i></div>
      <a href="{{url('home/contact')}}" class="small-box-footer"> information <i class="fas fa-arrow-circle-right"></i></a>
        
    
       
        </div>
     


    </div>
    <div class="col-md-20">
      
        
      <div class="small-box bg-info">
          <div class="inner"><h3>{{App\Models\opportunités::count()}}</h3>
      <p>opportunités</p>
      <div class="inner"><h3>
      
      </div>
      <div class="icon">  <i class="fas fa-users"></i></div>
      <a href="{{url('home/opportunite')}}" class="small-box-footer"> information <i class="fas fa-arrow-circle-right"></i></a>
        
    
       
        </div>
     


    </div>
    </div>
  
   
</div>

</div>

</div>

  </div>
  
 @endsection 