module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      compile: {
        options: {
          style: 'expanded'
        },
        files: {
          'dist/grid.css' : 'src/grid.scss'
        }
      },
      minify: {
        options: {
          style: 'compressed'
        },
        files: {
          'dist/grid.min.css' : 'src/grid.scss'
        }
      }
    },
    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'})
        ]
      },
      dist: {
        src: 'dist/*.css'
      }
    },
    watch: {
      css: {
        files: ['src/*.scss'],
        tasks: ['sass', 'postcss']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask( 'default', ['watch'] );
  grunt.registerTask( 'dist', ['sass', 'postcss'] );
};