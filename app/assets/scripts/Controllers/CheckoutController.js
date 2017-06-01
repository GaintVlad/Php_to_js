(function () {
    angular
        .module('starterApp')
        .controller('CheckoutController', ['$scope', function ($scope) {
            $scope.shipping_address = {
                country : "Belarus",
                city : "Novopolotsk",
                region : "Vitebsk",
                index : "211440",
                address1 : "Olimpiyskaya, 5",
                address2 : "app. 5"
            };

        }
        ]);
})();
