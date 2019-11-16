var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
    .when('/', {
      templateUrl: 'views/login.php',
      controller: "loginController"
    })
      .when('/dashboard', {
        // resolve: {
        //   check: function($location, transferService) {
        //     if(!transferService.isloggedin()) {
        //       $location.path('/');
        //     }
        //   },
        // },
        templateUrl: 'views/dashboard.php',
        controller: "DashboardController"
      })
      .when('/product', {
        templateUrl: 'views/product.php',
        controller: "ProductController"
      })
      .when('/searchProduct', {
        templateUrl: 'views/searchProduct.php',
        controller: "searchProductController"
      })
      .when('/searchCompany', {
        templateUrl: 'views/searchCompany.php',
        controller: "searchCompanyController"
      })
      .when('/profile', {
        templateUrl: 'views/profile.php',
        controller: "ProfileController"
      })
      .otherwise({
          redirectTo: "/dashboard"
      });

  });

  // app.run( function($rootScope, $location) {

  //   // register listener to watch route changes
  //   $rootScope.$on( "$routeChangeStart", function(event, next, current) {
  //     if ( $rootScope.loggedUser == null ) {
  //       // no logged user, we should be going to #login
  //       if ( next.templateUrl != "partials/login.html" ) {
  //         // not going to #login, we should redirect now
  //         $location.path( "/login" );
  //       }
  //     }
  //   });
