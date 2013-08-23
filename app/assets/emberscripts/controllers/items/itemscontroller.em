class Orders.ItemsController extends Ember.ObjectController
	newItem: ->
		@item = Orders.Item.createRecord
			name: @name
			orderId: @id
		@item.save()
		@model.items.pushObject @item
		@transitionToRoute 'orders.show', @model