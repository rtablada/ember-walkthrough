var time_sheet = require('../models/time_sheet');

var NewTimeSheetRoute = Ember.Route.extend({

  renderTemplate: function() {
    this.render('edit_time_sheet', {controller: 'new_time_sheet'});
  },

  model: function() {
    return time_sheet.createRecord();
  },

  deactivate: function() {
    var model = this.get('controller.model');
    if (!model.get('isSaving')) {
      model.deleteRecord();
    }
  }

});

module.exports = NewTimeSheetRoute;

