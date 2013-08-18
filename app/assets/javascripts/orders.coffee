window.Orders = Ember.Application.create();

Ember.Handlebars.helper 'date', (value, options)  ->
	if typeof value == 'string'
		return value = moment(value)
	return value.format 'DD MMMM YYYY'

Ember.Handlebars.helper 'currency', (value, options) ->
	return accounting.formatMoney value
