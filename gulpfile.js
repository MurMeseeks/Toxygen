var gulp         = require('gulp');
var browserSync  = require('browser-sync').create();
var sass         = require('gulp-sass');
var concat 			 = require('gulp-concat');
var uglifycss    = require('gulp-uglifycss');
var autoprefixer = require('gulp-autoprefixer');

// Static Server + watching scss/html files
gulp.task('sass', function() {
		return gulp.src("src/scss/**/*.scss")
        .pipe(sass())
				.pipe(concat('style.css'))
				.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
				.pipe(uglifycss({
							"maxLineLen": 80,
							"uglyComments": true
						}))
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
});
gulp.task('serve', gulp.series('sass', function() {

    browserSync.init({
        server: "./src"
    });
		gulp.watch("src/scss/**/*.scss", gulp.series('sass'));
		gulp.watch("src/**/*.html").on('change', browserSync.reload);
		gulp.watch("src/js/**/*.js").on('change', browserSync.reload);
}));

// Compile sass into CSS & auto-inject into browsers
gulp.task('default', gulp.series('serve', function() {
	return ;
}));
