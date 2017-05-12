<!DOCTYPE html>
<html lang="en">
<head>
    <title>Angular Material - Starter App</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="initial-scale=1"/>

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel="stylesheet" href="../node_modules/angular-material/angular-material.css"/>
    <link rel="stylesheet" href="assets/app.css"/>
</head>

<body ng-app="starterApp" layout="column" ng-controller="SelectController as select">


<div flex layout="row" layout-align="center center">
    <div>
        <?php
        $arrVar = [
            'id' => 1, 'oil' => ['weigth'=> 5, 'opt_text'=>'Super Oil'],
            'id' => 2, 'bud' => ['weigth'=> 5, 'opt_text'=>'Bud for you']
        ];
        ?>
        <?php echo (json_encode($arrVar));?>
        <div ng-init= 'initOptions(<?php echo (json_encode($arrVar)) ;?>)'></div>
        <div>{{ arrVar }}</div>
        <form>
            <md-input-container>
                <label>User</label>
                <md-select ng-model="selectedModel" ng-model-options="{trackBy: '$value.id'}">
                    <md-option ng-repeat="user in arrVar" ng-value="user">{{ user.opt_text }}</md-option>
                </md-select>
            </md-input-container>
            <md-input-container>
                <label>Weight</label>
                <md-select ng-model="selectedWeight">
                    <md-option ng-value="weight" ng-repeat="weight in arrWight">Weight = {{ weight }}g</md-option>
                </md-select>
            </md-input-container>
        </form>
    <div>{{selectedModel.name}} select {{selectedWeight}}g<div>
    </div>

</div>

<script src="../node_modules/angular/angular.js"></script>
<script src="../node_modules/angular-animate/angular-animate.js"></script>
<script src="../node_modules/angular-aria/angular-aria.js"></script>
<script type="text/javascript" src="../node_modules/angular-material/angular-material.js"></script>

<script src="./src/users/Users.js"></script>
<script src="./src/users/SelectController.js"></script>

<script type="text/javascript">

    angular
            .module('starterApp', ['ngMaterial', 'users'])
            .config(function($mdThemingProvider, $mdIconProvider){

                $mdThemingProvider.theme('default')
                        .primaryPalette('brown')
                        .accentPalette('red');

                $mdIconProvider
                        .defaultIconSet("./assets/svg/avatars.svg", 128)
                        .icon("menu"       , "./assets/svg/menu.svg"        , 24)
                        .icon("share"      , "./assets/svg/share.svg"       , 24)
                        .icon("google_plus", "./assets/svg/google_plus.svg" , 512)
                        .icon("hangouts"   , "./assets/svg/hangouts.svg"    , 512)
                        .icon("twitter"    , "./assets/svg/twitter.svg"     , 512)
                        .icon("phone"      , "./assets/svg/phone.svg"       , 512);

            });

</script>


</body>
</html>
