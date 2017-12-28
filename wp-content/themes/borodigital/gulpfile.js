var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {

    gulp.src('./src/sass/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('./'));
});

gulp.task('watch', ['sass'], function(){
    gulp.watch('./src/sass/**/*.sass', ['sass']);
});

gulp.task('default', ['sass']);