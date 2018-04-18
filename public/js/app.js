var app = angular.module("TIME", []);


app.constant('QueryEndpoint', {
    Base_endpoint:"http://api.openweathermap.org/data/2.5/weather?",
    Appid:'86723fd6d8b585f6ec7ab1a329dc6622',
    Units:'metric'
});

///////////CompanyCtrl CONTROLLER
app.controller("weather", ['$scope', '$http', 'QueryEndpoint' ,function($scope, $http, Endpoint ) {
 $scope.weather={}; 
 $scope.error=false;  

      $scope.save = function($event) {
        $event.preventDefault();
        var weather = $scope.weather;
        //weather["_token"] = $("input[name='_token']").val();
        if(weather.ciudad){
             $scope.error=false;
            var url=Endpoint.Base_endpoint+'q='+weather.ciudad+'&appid='+Endpoint.Appid+'&units='+Endpoint.Units;
    
            $http.get(url)
                .then(
                    function(response) { // success callback
                       console.log(response);
                       $scope.weather.humidity=response.data.main.humidity;
                       $scope.weather.temp=response.data.main.temp;
                       $scope.weather.temp_max=response.data.main.temp_max;
                       $scope.weather.temp_min=response.data.main.temp_min;
                    },
                    function(response) { // failure callback
                        console.log(response);
                    }
                ); //fin then
        }else{
            $scope.error=" Debe Seleccionar la Ciudad";
        }
    }; //fin save
   
}]); //fin controller 