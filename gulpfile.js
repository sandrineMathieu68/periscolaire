var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
    gulp.src('./assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
        	browsers: ['last 2 versions'],
        	cascade: false
        }))
        .pipe(gulp.dest('./build/css'));
});

gulp.task('default', ['sass'], function() {
    return gulp.watch('./assets/sass/**/*.scss', ['sass']);
});