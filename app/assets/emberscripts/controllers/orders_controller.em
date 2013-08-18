class Orders.OrdersController extends Ember.ArrayController
	createOrder: ->
		orderDate = moment(@get 'newOrderDate')
		items = @get 'newItems'
		price = @get 'newAmount'

		order = Orders.Order.createRecord
			orderDate: orderDate
			items: items
			price: price

		order.save()

		router.transitionTo 'orders/index'
