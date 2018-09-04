/*// Alternativa de user u2b
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('sass/**//*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('sass/**//*.sass', ['sass']);
});*/

/* #### Aula do THIAGO #### **/

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

// task teste
//gulp.task('default', function(){
//	console.log('Olá Caio Coder');
//});

// task sass
gulp.task('sass', function(){
	return gulp.src('sass/**//*.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('css'));
});

// task watch
gulp.task('watch', function(){
	gulp.watch('sass/**/*.sass', ['sass']);
});

// task default gulp
gulp.task('default', ['sass', 'watch']);