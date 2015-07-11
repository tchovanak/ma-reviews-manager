var app = angular.module('app', [ 'ngRoute' ])
	.config(function configure($routeProvider) {
		$routeProvider
		.when('/', { controller: 'CustomersController', templateUrl: './templates/customers.html' })
		.when('/customer/:id', { controller: 'CustomerController', templateUrl: './templates/customer.html' })
		.otherwise({ redirect: '/' });
	});