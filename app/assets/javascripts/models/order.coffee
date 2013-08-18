Orders.Order = DS.Model.extend
  orderDate: DS.attr 'sqldate'
  items: DS.attr 'number'
  price: DS.attr 'number'
