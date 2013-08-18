window.Orders = Ember.Application.create();

Ember.Handlebars.helper 'date', (value, options)  ->
	if typeof value == 'string'
		return moment(value).format('DD MMMM YYYY')
	else
		return value.format('DD MMMM YYYY')
