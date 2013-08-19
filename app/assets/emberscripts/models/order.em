class Orders.Order extends DS.Model
  orderDate: DS.attr 'sqldate'
  items: DS.hasMany 'Orders.Item'
  price: DS.attr 'number'
