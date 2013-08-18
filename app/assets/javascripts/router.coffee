Orders.Router.map ->
	@resource "orders", path: '/', ->
		this.route('new');

Orders.OrdersRoute = Ember.Route.extend
  model: ->
    return Orders.Order.find()

Orders.OrdersIndexRoute = Ember.Route.extend
  model: ->
    return Orders.Order.find()

Orders.OrdersNewController = Ember.Route.extend
	renderTemplate: (controller) ->
    this.render('orders/create', {controller: controller});
