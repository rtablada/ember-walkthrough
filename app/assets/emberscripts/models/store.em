DS.RESTAdapter.registerTransform 'sqldate',
  serialize: (value) ->
    return moment(value).format("YYYY-MM-DD")
  deserialize: (value) ->
    return moment(value)

DS.RESTAdapter.reopen
	namespace: 'api'

class Orders.Store extends DS.Store
  revision: 12,
  adapter: 'DS.RESTAdapter'
