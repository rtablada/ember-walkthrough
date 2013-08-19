class Orders.Item extends DS.Model
  name: DS.attr 'string'
  order: DS.belongsTo 'Orders.Order'
