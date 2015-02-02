var gulp = require('gulp');

var bowerDir = './components';

gulp.task('bootstrap', function() {
    gulp.src(bowerDir + '/bootstrap/dist/css/bootstrap.min.css')
    .pipe(gulp.dest('./public/css'));

    gulp.src(bowerDir + '/bootstrap/dist/fonts/*')
        .pipe(gulp.dest('./public/fonts'));

    gulp.src(bowerDir + '/bootstrap/dist/js/bootstrap.min.js')
        .pipe(gulp.dest('./public/js'));

    gulp.src(bowerDir + '/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('./public/js'));

});

gulp.task('watch', function() {
    //gulp.watch(config.sassPath + '/**/*.scss', ['css']); 
});

gulp.task('default', ['bootstrap']);
