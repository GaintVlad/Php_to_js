<!DOCTYPE html>
<html lang="en">
<head>
    <title>checkout AngularJS </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel="stylesheet" href="../node_modules/angular-material/angular-material.css"/>
    <link rel="stylesheet" href="assets/styles/app.css"/>
</head>

<body ng-app="starterApp" ng-controller="CheckoutController as checkout">

<div layout="column">
    <div flex layout="row" layout-align="center center">
        <h2>Checkout</h2>
    </div>


    <div>
        <h3>Select type of item</h3>

        <form flex layout="row" layout-align="center">
            <div flex="33">

                <md-list>
                    <md-list-item>
                        <span>{{shipping_address.address1}}</span>
                    </md-list-item>


                    <md-list-item ng-show="shipping_address.address2">
                        <span>{{shipping_address.address2}}</span>
                    </md-list-item>
                    <md-list-item>
                        <span>{{shipping_address.region}}</span>
                    </md-list-item>
                    <md-list-item>
                        <span>{{shipping_address.index}}</span>
                    </md-list-item>
                    <md-list-item>
                        <span>{{shipping_address.city}}</span>
                    </md-list-item>
                    <md-list-item>
                        <span>{{shipping_address.country}}</span>
                    </md-list-item>
                    <md-list-item>
                        <span>{{shipping_address.index}}</span>
                    </md-list-item>
                </md-list>

            </div>

            <div flex="33" layout-align="center">
                <md-input-container>
                    <label>Weight</label>
                    <md-select ng-model="selectedWeight">
                        <md-option ng-value="weight" ng-repeat="weight in arrWight">Weight = {{ weight }}g
                        </md-option>
                    </md-select>
                </md-input-container>
            </div>
            <div flex="33" layout-align="center">
                <md-button class="md-primary">Send data</md-button>
            </div>
        </form>
    </div>
</div>
<footer flex layout="row" layout-align="center center">
    <p>The Footer</p>
</footer>

<script src="../node_modules/angular/angular.js"></script>
<script src="../node_modules/angular-animate/angular-animate.js"></script>
<script src="../node_modules/angular-aria/angular-aria.js"></script>
<script type="text/javascript" src="../node_modules/angular-material/angular-material.js"></script>

<!--<script src="./src/users/Users.js"></script>-->
<script type="text/javascript" src="assets/scripts/app.js"></script>
<script src="assets/scripts/Controllers/CheckoutController.js"></script>

</body>
</html>
