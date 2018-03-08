module.exports = (grunt) ->

  globalConfig = project: 'novster'

  grunt.loadNpmTasks 'grunt-webfont'
  grunt.loadNpmTasks 'grunt-penthouse'

  # load all grunt tasks
  (require 'grunt-task-loader')(grunt)

  grunt.initConfig

    globalConfig : globalConfig

    pkg: grunt.file.readJSON('package.json')

    clean:
      build: ['../assets/build/']
      font: ['../assets/fonts/']
      eot: ['src/eot/']

    webpack:
      options: require './webpack.config.js'
      theme:
        foo: 1

    browserSync:
      theme:
        bsFiles:
          src: [
            '../assets/build/**'
            '**/*.tpl'
          ]

    webfont: icons:
      src: 'img/icons/*.svg'
      dest: './webfont'
      destCss: './sass'
      options:
        types: 'eot,woff2,woff,ttf,svg'
        stylesheet: 'scss'
        relativeFontPath: '../webfont'
        hashes: true,
        fontFilename: 'icons-novster',
        font: 'icons-<%= globalConfig.project %>'
        templateOptions:
          baseClass: 'icon-<%= globalConfig.project %>'

    imagemin: dist:
      options:
        optimizationLevel: 7
        progressive: true
        interlaced: true
      files: [ {
        expand: true
        cwd: 'img/'
        src: [ '**/*.{png,jpg,gif,svg}' ]
        dest: '../assets/img/'
      } ]

    penthouse: 
      extract: 
        outfile: 'sass/critical.scss',
        css: '../assets/build/main.css',
        url: 'http://localhost/sigma/',
        width: 1300,
        height: 900,
        skipErrors: false 


  # Task aliases

  # Development Tasks
  grunt.registerTask 'build', ['imagemin','webpack']  # just start the server
  grunt.registerTask 'dev', ['build', 'browserSync']   # build and start watching
  grunt.registerTask 'font', ['webfont']   # build and start watching
  grunt.registerTask 'critical', ['penthouse'] 