<div class="container-fluid">
    <div class="row">
     <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Ciudad:</strong>
            <select class="form-control" id="city" name="city" ng-model='weather.ciudad'>
                 <option value="" >Seleccione</option>
                  <option value="Bogota" >Bogota</option>
                  <option value="Medellin" >Medellin</option>
                  <option value="Cali" >Cali</option>
                  <option value="Miami" >Miami</option>
            </select>
        </div>
    </div>
  </div>
   <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6" style="background-color:lavender;">Temperatura: @{{weather.temp}}</div>
  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6" style="background-color:lavender;">Humedad: @{{weather.humidity}}</div>
  </div>
   <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6" style="background-color:lavender;">Temp. Mínima: @{{weather.temp_min}}</div>
  </div>
   <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6" style="background-color:lavender;">Temp. Máxima: @{{weather.temp_max}} </div>
  </div>
   <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6"><br/></div>
  </div>
   <div class="row">
     <div class="col-xs-6 col-sm-6 col-md-6 text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</div>