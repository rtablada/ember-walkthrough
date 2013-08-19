class Orders.ItemsController extends Ember.ObjectController
	newItem: ->
		@model.save()
		@model.order.items.pushObject @model
		@transitionToRoute 'orders.show', @model.order