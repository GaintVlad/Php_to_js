(function () {
    angular
        .module('starterApp')
        .controller('SelectController', ['$scope', function ($scope) {

            $scope.initOptions = function (phpJson) {
                var arrOptions = [];
                var obj = angular.fromJson(phpJson);
                var inkr = 0;
                for (var key in obj) {
                    inkr++;
                    var newObj = {"id": inkr, "name":key, "value":obj[key]};
                    arrOptions.push(newObj);
                }
                $scope.arrVar = arrOptions;
                $scope.selectedModel = arrOptions[0];
            };

            var setWeight = function () {
                $scope.arrWight = [];
                var maxWight = 100;
                var summ = $scope.selectedModel.value.weight;
                while (summ <= maxWight) {
                    $scope.arrWight.push(summ);
                    summ += $scope.selectedModel.value.weight;
                }
                $scope.selectedWeight = $scope.selectedModel.value.weight;
            };

            $scope.$watch('selectedModel', function(newValue, oldValue) {
                if (newValue) {
                    setWeight();
                }
            }, true);
        }
        ]);
})();
