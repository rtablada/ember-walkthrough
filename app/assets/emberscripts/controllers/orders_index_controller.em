class Orders.OrdersIndexController extends Ember.ArrayController
	total: ( ->
		prices = @getEach('price')
		sum = 0
		for price in prices
			sum += price

		return sum
	).property('@each')
