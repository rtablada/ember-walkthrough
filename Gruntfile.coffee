module.exports = (grunt) ->

  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')

    coffee:
      glob_to_multiple:
        options:
          bare: true
        expand: true
        cwd: 'app/assets/coffee'
        src: ['**/*.coffee']
        dest: 'app/assets/src/js/'
        ext: '.js'

    emberscript:
      compile:
        files:
          'app/assets/javascripts/orders.js': [
            'app/assets/emberscripts/*.em'
            'app/assets/emberscripts/**/*.em'
          ]

    emberTemplates:
      compile:
        options:
          templateBaseDir: "app/assets/handlebars/"
        files:
          "app/assets/javascripts/templates.js": 'app/assets/handlebars/**/*.hbs'

    watch:
      emberscript:
        files: [
          'app/assets/emberscripts/**/*.em'
          'app/assets/handlebars/**/*.hbs'
        ]
        tasks: ['emberscript', 'handlebars']
        options:
          interrupt: true

  # Load the plugin that provides the 'uglify' task.
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.loadNpmTasks 'grunt-contrib-clean'
  grunt.loadNpmTasks 'grunt-ember-script'
  grunt.loadNpmTasks 'grunt-ember-templates';

  # Default task(s).
  # grunt.registerTask('watch', ['livereload-start', 'regarde']);
  grunt.registerTask 'default', ['emberscript', 'emberTemplates']

