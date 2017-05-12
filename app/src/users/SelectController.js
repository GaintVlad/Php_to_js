(function () {
    angular
        .module('users')
        .controller('SelectController', ['$scope', function ($scope) {
            $scope.users = [
                { id: 1, name: 'Bob', weight: 5 },
                { id: 2, name: 'Alice', weight: 2 },
                { id: 3, name: 'Steve', weight: 7 }
            ];
            $scope.selectedModel = { id: 1, name: 'Bob', weight: 5 };
            var setWeight = function () {
                $scope.arrWight = [];

                var maxWight = 100;
                var summ = $scope.selectedModel.weight;
                while (summ <= maxWight) {
                    $scope.arrWight.push(summ);
                    summ += $scope.selectedModel.weight;
                }
                $scope.selectedWeight = $scope.selectedModel.weight;
            };

            $scope.$watch('selectedModel', function(newValue, oldValue) {
                if (newValue) {
                    setWeight();
                }
            }, true);

            $scope.initOptions = function (phpJson) {
                var arrOptions = [];
                arrOptions.push(phpJson);
                console.log(arrOptions);
                $scope.arrVar = arrOptions;
                //return arrOptions;
            };

           //console.log($scope.arrVar);
        }
        ]);
})();
