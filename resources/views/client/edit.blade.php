@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     
     
     *{
    padding: 0;
    margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
    background: #2d3e3f;
    width: 500px;
    height: 600px;
    padding-bottom: 20px;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: auto;
  padding: 70px 50px 20px 50px;
}

.fl{
    float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
    float: right;
}

.clr{
    clear: both;
}

.box{
    width: 360px;
    height: 35px;
    margin-top: 10px;
    font-family: verdana;
    font-size: 12px;
}

.textBox{
    height: 35px;
    width: 190px;
    border: none;
  padding-left: 20px;
  background: rgb(214, 199, 199);
}

.new{
  float: left;
}

.iconBox{
    height: 35px;
    width: 40px;
    line-height: 38px;
    text-align: center;
  background: #ff6600;
}

.radio{
    color: white;
    background: #2d3e3f;
    line-height: 38px;
}

.terms{
    line-height: 35px;
    text-align: center;
    background: #2d3e3f;
    color: white;
}

.submit{
    float: right;
    border: none;
    color: white;
    width: 220px;
    height: 35px;
    background: #ff6600;
    text-transform: uppercase;
  cursor: pointer;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}

    </style>
  </head>
  <div class="container">
    <form action= "{{url('home/client/'. $client->id)}}" method="POST"  class=" form-control-sm mb-3">

        <input type="hidden" name="_method" value="PUT">
    
        {{ csrf_field()}}
          <div class="box">
        <label for="firstName" class="fl fontLabel"> Societe: </label>
              <div class="new iconBox">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
              <div class="fr">
                      <input   type="text" name="societe" value="{{$client->societe}}"
            class="textBox" autofocus="on" required >
              </div>
              <div class="clr"></div>
          </div>
          <!--First name-->

      <!--Second name-->
          <div class="box">
        <label for="secondName" class="fl fontLabel"> Telephone: </label>
              <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
              <div class="fr">
                      <input type="text" name="tel" value="{{$client->telephone}}"
            placeholder="Telephone" class="textBox">
              </div>
              <div class="clr"></div>
          </div>
          <!--Second name-->

          <div class="box">
            <label for="secondName" class="fl fontLabel"> Adresse: </label>
                  <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input   type="text" name="adresse" value="{{$client->adresse}}"
                 class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>

             

                      <div class="box">
                        <label for="secondName" class="fl fontLabel"> Site Web: </label>
                              <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                              <div class="fr">
                                      <input   type="text" name="site" value="{{$client->site_web}}"
                            placeholder="Prix" class="textBox">
                              </div>
                              <div class="clr"></div>
                          </div>
          <!---Phone No.------>
          <div class="box" style="background: #2d3e3f">
            <input type="Submit" name="Submit" class="submit" value="Modifier">
    </div>
          </div>
          <!---Phone No.---->

          <!---Email ID---->
       
        
          <!---Gender----->
   
          <!---Gender--->

          <!--Terms and Conditions------>

        

          <!---Submit Button------>
        
          <!---Submit Button----->
    </form>
</div>
<!--Body of Form ends--->
</body>
</html>



@endsection