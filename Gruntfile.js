module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    compass: {
      dist: {
        options: {
          sassDir: 'assets/sass',
          cssDir: 'assets/css',
          outputStyle: 'compressed'
        }
      }
    },
    watch: {
      css: {
        files: [
          '**/*.sass',
          '**/*.scss'
        ],
        tasks: ['compass']
      },
      js: {
        files: [
          'assets/js/*.js',
          'Gruntfile.js'
        ],
        tasks: ['jshint', 'uglify']
      }
    },
    browser_sync: {
      files: {
        src : [
          'assets/css/global.css',
          'assets/img/*',
          '**/*.php',
        ],
      },
      options: {
        watchTask: true,
        host : 'mattwest.dev'
      }
    },
    uglify: {
      global: {
        options: {
          banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
            '<%= grunt.template.today("yyyy-mm-dd") %> */'
        },
        files: {
          'assets/js/build/global.min.js': ['assets/js/libs/jquery-1.8.3.min.js', 'assets/js/libs/jquery.transit.min.js', 'assets/js/lightshow.js', 'assets/js/app.js']
        }
      }
    },
    imagemin: {
      dynamic: {
        options: {
          pngquant: true
        },
        files: [{
          expand: true,
          cwd: 'assets/img/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'assets/img/'
        }]
      }
    },
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: ['Gruntfile.js', 'assets/js/*.js']
    }
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask('default', ['browser_sync', 'watch']);
};