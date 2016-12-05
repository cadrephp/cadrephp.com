var gulp = require('gulp'),
    less = require("gulp-less");

// task
gulp.task('less', function () {
    gulp.src([
        './web/less/bootstrap.less',
        './web/less/freelancer.less'
    ]) // path to your file
    .pipe(less())
    .pipe(gulp.dest('./web/css'));
});

gulp.task('watch', function () {
    gulp.watch(['./web/less/**/*.less'], ['less']);
});
