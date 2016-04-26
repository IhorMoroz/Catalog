'use strict';

var gulp = require('gulp'),
    bs = require('browser-sync').create(),
    rigger = require('gulp-rigger'),
    cleanCSS = require('gulp-clean-css'),
    concatCss = require('gulp-concat-css'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass');

gulp.task('serve', ['sass', 'html', 'js'], function() {

    bs.init({
        server: "./App"
    });

    gulp.watch("App_dev/scss/*.scss", ['sass']);
    gulp.watch("App_dev/html/*.html", ['html']);
    gulp.watch("App_dev/js/*.js", ['js']);
});

gulp.task('sass', function(){
    gulp.src("App_dev/scss/*.scss")
    .pipe(sass())
    .pipe(concatCss("main.css"))
    .pipe(autoprefixer({browsers: ['last 5 versions']}))
    //.pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest("App/css"))
    .pipe(bs.stream());
});

gulp.task('html', function(){
    gulp.src("App_dev/html/*.html")
    .pipe(rigger())
    .pipe(gulp.dest("App/"))
    .pipe(bs.stream());
});

gulp.task('js', function(){
    gulp.src("App_dev/js/*.js")
    .pipe(concat('main.js'))
    .pipe(gulp.dest("App/js"))
    .pipe(bs.stream());
});

gulp.task('default', ['serve']);
