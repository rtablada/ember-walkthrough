var TimeSheet = DS.Model.extend({

  description: DS.attr('string'),

  minutes: DS.attr('number')

});

module.exports = TimeSheet;

