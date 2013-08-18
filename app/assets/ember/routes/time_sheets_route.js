var TimeSheet = require('../models/time_sheet');

var TimeSheetRoute = Ember.Route.extend({

  model: function() {
    return TimeSheet.find();
  }

});

module.exports = TimeSheetRoute;

