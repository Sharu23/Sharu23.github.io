const gulp = require('gulp');
const nunjucks = require('gulp-nunjucks');

gulp.task('default', () =>
    gulp.src('C:/Users/Sharugi/Desktop/Documents/Uni Related/Website/html/index.njk')
        .pipe(nunjucks.compile({name: 'Sharugi'}))
        .pipe(gulp.dest('C:/Users/Sharugi/Desktop/Documents/Uni Related/Website/html'))
);
