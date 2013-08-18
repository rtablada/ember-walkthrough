DS.RESTAdapter.registerTransform 'sqldate',
  serialize: (value) ->
    return moment(value).format("YYYY-MM-DD")
  deserialize: (value) ->
    return moment(value)

Orders.Store = DS.Store.extend
  revision: 12,
  adapter: 'DS.RESTAdapter'

DS.RESTAdapter.reopen
	namespace: 'api'

