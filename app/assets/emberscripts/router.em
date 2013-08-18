Orders.Router.map ->
  @resource "orders", path: '/', ->
    @route('new')

class Orders.OrdersRoute extends Ember.Route
  model: ->
    return Orders.Order.find()

class Orders.OrdersIndexRoute extends Ember.Route
  model: ->
    return Orders.Order.find()