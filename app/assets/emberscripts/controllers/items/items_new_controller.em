class Orders.ItemsNewController extends Ember.ObjectController
	orderId: ( ->
		return @model.order.get 'id'
	).property()
