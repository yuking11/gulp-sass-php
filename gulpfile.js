var gulp = require('gulp');
var compass = require('gulp-compass');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();
var public = './public_html';

gulp.task('default', ['browser-sync', 'watch']);

// Watch
gulp.task('watch', function() {
  //gulp.watch('./_sass/**/*.scss', ['compass']);
  gulp.watch('./_sass/**/*.scss', function(event) { gulp.run('compass'); });
  gulp.watch(public + '/assets/javascripts/*.js', ['scripts']);
  gulp.watch(public + '/**/*.php', ['html']);
});

// Script
gulp.task('scripts', function() {
  gulp.src(public + '/assets/javascripts/application.js')
  //gulp.src(public + '/assets/javascripts/**/*.js')
    //.pipe(concat('application.js'))
    .pipe(uglify())
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest(public + '/assets/javascripts'))
    .pipe(browserSync.reload({stream: true}));
});


// compass
gulp.task('compass', function(){
  gulp.src('_sass/**/*.scss')
    .pipe(compass({
      config_file: 'config.rb',
      comments: false,
      css: public + '/assets/stylesheets/',
      sass: '_sass/'
    }))
    .on('error', function(error) {
      // Would like to catch the error here
      console.log(error);
      this.emit('end');
    })
    .pipe(gulp.dest(public + '/assets/stylesheets'))
    .pipe(browserSync.reload({stream: true}));
});

// HTML
gulp.task('html', function() {
  gulp.src(public + '/**/*.php')
    .pipe(browserSync.reload({stream: true}));
});

// BrowserSync
gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'localhost:80'// 環境にあわせて変更
  });
});
