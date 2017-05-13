<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP data to AngularJS selector</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel="stylesheet" href="../node_modules/angular-material/angular-material.css"/>
    <link rel="stylesheet" href="assets/app.css"/>
</head>

<body ng-app="starterApp" ng-controller="SelectController as select">

<div layout="column">
    <div flex layout="row" layout-align="center center">
        <h2>DEMO selector</h2>
    </div>

    <?php
    $arrVar = [
        'oil' => ['weight' => 7, 'opt_text' => 'Super Oil'],
        'crumble' => ['weight' => 5, 'opt_text' => 'Crumble Flowers'],
        'bud' => ['weight' => 3, 'opt_text' => 'Bud for you']
    ];
    ?>
    <span ng-init='initOptions(<?php echo(json_encode($arrVar)); ?>)'></span>

    <div flex layout="row" layout-align="center center">
        <h3>Select type of item</h3>
    </div>
    <form>
        <div flex layout="row" layout-align="center center">
            <md-input-container flex="30">
                <label>Type of item</label>
                <md-select ng-model="selectedModel" ng-model-options="{trackBy: '$value.id'}">
                    <md-option ng-repeat="type in arrVar" ng-value="type">{{ type.value.opt_text }}</md-option>
                </md-select>
            </md-input-container>
        </div>
        <div flex layout="row" layout-align="center center">
            <h4>Select wight item</h4>
        </div>
        <div flex layout="row" layout-align="center center">
            <md-input-container flex="30">
                <label>Weight</label>
                <md-select ng-model="selectedWeight">
                    <md-option ng-value="weight" ng-repeat="weight in arrWight">Weight = {{ weight }}g
                    </md-option>
                </md-select>
            </md-input-container>
        </div>
        <div flex layout="row" layout-align="center center">
            <md-button class="md-primary">Send data</md-button>
        </div>
    </form>
    <div flex layout="row" layout-align="center center">
        <h4>Selected {{selectedModel.name}}: {{selectedWeight}}g</h4>
    </div>


</div>
<footer flex layout="row" layout-align="center center">
    <p>This Footer</p>
</footer>

<script src="../node_modules/angular/angular.js"></script>
<script src="../node_modules/angular-animate/angular-animate.js"></script>
<script src="../node_modules/angular-aria/angular-aria.js"></script>
<script type="text/javascript" src="../node_modules/angular-material/angular-material.js"></script>

<!--<script src="./src/users/Users.js"></script>-->
<script type="text/javascript">

    angular
        .module('starterApp', ['ngMaterial'])
        .config(function ($mdThemingProvider, $mdIconProvider) {

            $mdThemingProvider.theme('default')
                .primaryPalette('brown')
                .accentPalette('red');

            $mdIconProvider
                .defaultIconSet("./assets/svg/avatars.svg", 128)
                .icon("menu", "./assets/svg/menu.svg", 24)
                .icon("share", "./assets/svg/share.svg", 24)
                .icon("google_plus", "./assets/svg/google_plus.svg", 512)
                .icon("hangouts", "./assets/svg/hangouts.svg", 512)
                .icon("twitter", "./assets/svg/twitter.svg", 512)
                .icon("phone", "./assets/svg/phone.svg", 512);

        });

</script>
<script src="scripts/SelectController.js"></script>

</body>
</html>
