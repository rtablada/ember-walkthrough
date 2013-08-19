Orders.Router.map ->
  @resource "orders", path: '/', ->
    @route 'new'
    @route 'show', path: ':order_id'
    @resource 'items', path: ':order_id/items', ->
    	@route 'new'

class Orders.OrdersRoute extends Ember.Route
  model: ->
    return Orders.Order.find()

class Orders.OrdersIndexRoute extends Ember.Route
  model: ->
    return Orders.Order.find()

class Orders.ItemsNewRoute extends Ember.Route
  model: (params) ->
    return {
      id: params.order_id
    }