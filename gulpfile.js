var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var connect = require('gulp-connect');

//gulp task take a name and the call back function - what to execute
gulp.task('sass', function(){
  gulp.src('sass/*.scss') // takes a sting- file location
  .pipe(sass().on("error", sass.logError)) //chaining commands
  .pipe(gulp.dest('./dist'));// put it in the dist folder
});

gulp.task('scripts', function(){
  return gulp.src([''])// array of files since they are not all in
  //the same location
  .pipe(concat('main.js')) //think of pipe as "then" - it waits
  //until the previous task is finished to fire
  .pipe(uglify()) //minify the file
  .pipe(gulp.dest('./dist')); // put it in the dist folder
})

//this watches the js files and calls the 'scripts function' when
//something changes
gulp.task('js-watch', function(){
  gulp.watch(['./js/*.js'],['scripts']);
})
//this watches the sass files and calls the 'sass' function when
//something changes
gulp.task('sass-watch', function(){
  gulp.watch(['./sass/*.scss'],['sass']);
})

//start the default web server
gulp.task('webserver', function(){
  connect.server(); // can be blank of take arguments for the port etc
})

//allows you to just type 'gulp' can kick off all functions
gulp.task('default', ['sass-watch','js-watch','webserver']);
