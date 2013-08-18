class Orders.Order extends DS.Model
  orderDate: DS.attr 'sqldate'
  items: DS.attr 'number'
  price: DS.attr 'number'
