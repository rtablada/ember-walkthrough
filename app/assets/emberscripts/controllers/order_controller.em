class Orders.OrderController extends Ember.ObjectController
	itemsCount:( ->
		@items.get 'length'
	).property('items')

	delete: ->
		order = @model
		order.deleteRecord()
		order.save()