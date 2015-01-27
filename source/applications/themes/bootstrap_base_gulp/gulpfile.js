var gulp = require('gulp'),
    concat = require('gulp-concat'),
    addsrc = require('gulp-add-src'),
    notify = require('gulp-notify'),

    compass = require('gulp-compass'),
    autoprefixer = require('gulp-autoprefixer'),

    minifycss = require('gulp-minify-css'),

    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),

    runSequence = require('run-sequence'),
    livereload = require('gulp-livereload');

// Compass
gulp.task('compass', function() {
  return gulp.src('sass/style.scss')
    .pipe(compass({
      comments: true,
      css: 'css/dev',
      require: ['compass/import-once/activate', 'breakpoint']
    }))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('css/dev'))
    .pipe(notify({message: 'Compass build task complete'}));
});

// Build CSS
gulp.task('build_css', function() {
  return gulp.src(['css/dev/lib/*.css', 'css/dev/style.css'])
    .pipe(concat('style.min.css'))
    .pipe(minifycss({
      keepSpecialComments: 0
    }))
    .pipe(gulp.dest('css/build'))
    .pipe(notify({message: 'CSS build task complete'}));
});

// Build JS
gulp.task('build_js', function() {
   return gulp.src('js/dev/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(concat('scripts.js'))
    .pipe(uglify({
      compress: {
        drop_console: true
      }
    }))
    .pipe(addsrc.prepend(['js/dev/lib/*.js', '!js/dev/lib/jquery.min.js']))
    .pipe(addsrc.prepend('js/dev/lib/jquery.min.js'))
    .pipe(concat('scripts.min.js'))
    .pipe(uglify({
      compress: false,
      mangle: false
    }))
    .pipe(gulp.dest('js/build'))
    .pipe(notify({message: 'JS build task complete'}));
});

// Watch
gulp.task('watch', function() {
  livereload.listen();

  gulp.watch(['js/dev/*.js', 'js/dev/lib/*.js'], ['build_js']);
  gulp.watch(['sass/*.scss', 'css/dev/lib/*.css'], function() {
   runSequence('compass', 'build_css');
  })

  gulp.watch(['css/dev/style.css', 'css/dev/lib/*.css']).on('change', livereload.changed);
});

// Default
gulp.task('default', function() {
  runSequence(['compass', 'build_js'], 'build_css', 'watch');
});
