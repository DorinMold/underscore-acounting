const gulp = require('gulp'),
    sass = require('gulp-sass'),
	browserSync = require('browser-sync').create(),
	sourcemaps = require('gulp-sourcemaps');
	//watch = require('gulp-watch'),
	//combine = require('gulp-scss-combine'),
	//concat = require('gulp-concat');
	
	function style(){
		return gulp.src('./sass/**/*.scss')
		       .pipe(sourcemaps.init())
			   .pipe(sass())
			   .pipe(sourcemaps.write('.'))
			   .pipe(gulp.dest('./build'))
			   .pipe(browserSync.stream());
	}
	
	function watch(){
		browserSync.init({
			server: {
				baseDir: './',
				//index: 'front-page.php'
			}
		});
		
		gulp.watch('./sass/**/*.scss', style);
		gulp.watch('./*.php').on('change', browserSync.reload);
	}
	
	exports.style = style;
	exports.watch = watch;
	
/*	gulp.task('sass', function(){
		return gulp.src(['sass/folder double star/*.scss'])
				   .pipe(sass())
		           .pipe(gulp.dest('build'))
				   .pipe(browserSync.stream());
	});
	
	gulp.task('serve', ['sass'], function(){
		browserSync.init({
			server: '.'
		})
		
		gulp.watch(['sassfolder double star/*.scss'],['sass']);
		gulp.watch(['*.html', '*.php']).on('change', browserSync.reload);
	})
	
	gulp.task('default', ['serve']) */
	
/*gulp.task('browserSync', function(){
	browserSync.init({
		//server:{ baseDir: '*.*' }
			proxy: 'http://localhost/Wordpress-underscore_s/wordpress/'
	});
});
	
gulp.task('sass', function(){
	return gulp.src('sass/folder doua stelute/*.scss')
	        .pipe(sourcemaps.init())
		   .pipe(combine())
	       .pipe(concat('./sass/style.scss'))
		   .pipe(sass().on('error', sass.logError))
		   .pipe(sass())
		   .pipe(sourcemaps.write( './' ))
           .pipe(gulp.dest('build/'))
		   .pipe(browserSync.reload({
			   stream: true
		   }));
})

gulp.task('watch', gulp.series(gulp.parallel('browserSync', 'sass'), function(){
	gulp.watch('sass/folder doua stelute/*.scss', ['sass']);
	gulp.watch('sass/folder doua stelute/*.scss', browserSync.reload);
}));  */

/*	
gulp.task('sass', function(){
	return gulp.src('./sass/style.scss')
	        .pipe(sass().on('error', sass.logError)
			.pipe(gulp.dest('./build/css'))
}); */
