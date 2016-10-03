angular.module('ionicApp', ['ionic'])

.controller('HomeCtrl', function($scope, $ionicModal) {
    $scope.triggerModal = function() {
        // JSFiddle didn't seem to like ng-template script tags...
        $ionicModal.fromTemplate('<ion-modal-view><ion-header-bar class="bar-positive"><h1 class="title">Modal form</h1></ion-header-bar><ion-content class="padding"><p style="text-align: center;">Please use shift + tab a few times and notice you\'ll be able to access the form below the modal.</p><form role="form"><ion-list><label class="item item-input" ion-item><input type="text" placeholder="Modal value" /></label></ion-list></form></ion-content></ion-modal-view>').show();
    };
})