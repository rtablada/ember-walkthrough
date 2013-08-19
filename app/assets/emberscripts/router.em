Orders.Router.map ->
  @resource "orders", path: '/', ->
    @route 'new'
    @route 'show', path: ':order_id'
    @resource 'items', path: ':order_id/items/new'

class Orders.OrdersRoute extends Ember.Route
  model: ->
    return Orders.Order.find()

class Orders.OrdersIndexRoute extends Ember.Route
  model: ->
    return Orders.Order.find()

class Orders.ItemsRoute extends Ember.Route
  model: (params)->
    return Orders.Item.createRecord
      order: Orders.Order.find params.order_id