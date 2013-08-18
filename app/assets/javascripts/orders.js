// Generated by EmberScript 0.0.8
var set$ = Ember.set;
var get$ = Ember.get;
set$(window, 'Orders', Ember.Application.create());
Ember.Handlebars.helper('date', function (value, options) {
  if (typeof value === 'string')
    return value = moment(value);
  return value.format('DD MMMM YYYY');
});
Ember.Handlebars.helper('currency', function (value, options) {
  return accounting.formatMoney(value);
});
get$(Orders, 'Router').map(function () {
  return this.resource('orders', { path: '/' }, function () {
    return this.route('new');
  });
});
set$(Orders, 'OrdersRoute', Ember.Route.extend({
  model: function () {
    return get$(Orders, 'Order').find();
  }
}));
set$(Orders, 'OrdersIndexRoute', Ember.Route.extend({
  model: function () {
    return get$(Orders, 'Order').find();
  }
}));
set$(Orders, 'OrdersController', Ember.ArrayController.extend({
  createOrder: function () {
    var items, order, orderDate, price;
    orderDate = moment(this.get('newOrderDate'));
    items = this.get('newItems');
    price = this.get('newAmount');
    order = get$(Orders, 'Order').createRecord({
      orderDate: orderDate,
      items: items,
      price: price
    });
    order.save();
    return router.transitionTo('orders/index');
  }
}));
set$(Orders, 'OrdersIndexController', Ember.ArrayController.extend({
  total: function () {
    var price, prices, sum;
    prices = this.getEach('price');
    sum = 0;
    for (var i$ = 0, length$ = prices.length; i$ < length$; ++i$) {
      price = prices[i$];
      sum += price;
    }
    return sum;
  }.property('@each')
}));
set$(Orders, 'OrdersNewController', Ember.ArrayController.extend({
  createOrder: function () {
    var items, order, orderDate, price;
    orderDate = moment(this.get('newOrderDate'));
    items = this.get('newItems');
    price = this.get('newAmount');
    order = get$(Orders, 'Order').createRecord({
      orderDate: orderDate,
      items: items,
      price: price
    });
    order.save();
    return this.transitionToRoute('orders');
  }
}));
set$(Orders, 'Order', get$(DS, 'Model').extend({
  orderDate: DS.attr('sqldate'),
  items: DS.attr('number'),
  price: DS.attr('number')
}));
get$(DS, 'RESTAdapter').registerTransform('sqldate', {
  serialize: function (value) {
    return moment(value).format('YYYY-MM-DD');
  },
  deserialize: function (value) {
    return moment(value);
  }
});
get$(DS, 'RESTAdapter').reopen({ namespace: 'api' });
set$(Orders, 'Store', get$(DS, 'Store').extend({
  revision: 12,
  adapter: 'DS.RESTAdapter'
}));