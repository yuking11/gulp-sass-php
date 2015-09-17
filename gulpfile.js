var gulp        = require('gulp');
var $           = require("gulp-load-plugins")();
var browserSync = require('browser-sync').create();
var paths = {
  dest     : './public_html',
  sass     : './src/_sass',
  srcFonts : './src/_icons',
  dstFonts : './public_html/assets/fonts',
  images   : './public_html/assets/images',
  scripts  : './public_html/assets/javascripts',
  styles   : './public_html/assets/stylesheets'
}

gulp.task('default', ['browser-sync', 'watch']);

// Watch
gulp.task('watch', function() {
  //gulp.watch(paths.sass + '/**/*.scss', ['sass']);
  gulp.watch( paths.sass + '/**/*.scss', function(event) { gulp.run('sass'); } );
  gulp.watch( paths.scripts + '/*.js', ['scripts'] );
  gulp.watch( paths.dest + '/**/*.php', ['html'] );
});

// Script
gulp.task('scripts', function() {
  gulp.src( paths.scripts + '/application.js' )
  //gulp.src(paths.scripts + '/**/*.js')
    //.pipe(concat('application.js'))
    .pipe($.plumber())
    .pipe($.uglify())
    .pipe($.rename({ suffix: '.min' }))
    .pipe(gulp.dest( paths.scripts ))
    .pipe(browserSync.reload({ stream: true }));
});

// sass
gulp.task('sass', function () {
  gulp.src( paths.sass + '/**/*.scss' )
    .pipe($.plumber())
    .pipe($.sass({
      //outputStyle: 'compressed'
    })
    .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 3 versions', 'android >= 2.1']
    }))
    .pipe(gulp.dest( paths.styles ))
    .pipe(browserSync.reload({stream: true}));
});

// sprite
gulp.task('sprite', function(){
  var spriteData;
  spriteData = gulp.src( paths.images + '/sprites/*.png' )
  .pipe($.spritesmith({
    imgName: 'sprite.png',
    imgPath: 'images/sprite.png',
    cssName: '_sprites.scss',
    padding: 40
  }));
  spriteData.img.pipe(gulp.dest( paths.images ));
  return spriteData.css.pipe(gulp.dest( paths.sass + '/modules' ));
});
// sprite ( retina )
gulp.task('spriter', function(){
  var spriteData;
  spriteData = gulp.src( paths.images + '/sprites/*.png' )
  .pipe($.spritesmith({
    retinaSrcFilter: paths.images + '/sprites/*-2x.png',
    imgName: 'sprite.png',
    retinaImgName: 'sprite-2x.png',
    imgPath: 'images/sprite.png',
    retinaImgPath: paths.images + '/sprite-2x.png',
    cssName: '_sprites.scss',
    padding: 40
  }));
  spriteData.img.pipe(gulp.dest( paths.images ));
  return spriteData.css.pipe(gulp.dest( paths.sass + '/modules' ));
});

// iconfont
gulp.task( 'font', function() {
  var fontName = 'icon';
  return gulp.src( paths.srcFonts + '/*.svg' )
    .pipe( $.iconfont( {
      fontName: fontName,
      startCodepoint: 0xF001
    } ) )
    .on( 'codepoints', function( codepoints ) {
      var options = {
        className : fontName,
        fontName  :  fontName,
        fontPath  :  '../fonts/',
        timeStamp : Date.now(),
        glyphs    : codepoints
      };
      // CSS
      gulp.src( 'src/_icons/template.css' )
      .pipe( $.consolidate( 'lodash', options ) )
      .pipe( $.rename( {
        basename: '_iconfont',
        extname: '.scss'
      } ) )
      .pipe( gulp.dest( paths.sass + '/modules' ) );
      // フォント一覧 HTML
      gulp.src( 'src/_icons/template.html' )
      .pipe( $.consolidate( 'lodash', options ) )
      .pipe( $.rename( {
        basename: '_icon-sample',
        extname: '.php'
      }))
      .pipe( gulp.dest( paths.dest ) );
    } )
  .pipe( gulp.dest( paths.dstFonts ) );
} );

// css-min
gulp.task('cssmin', function () {
  gulp.src( paths.styles + '/application.css' )
  .pipe($.cssmin())
  .pipe($.rename({ suffix: '.min' }))
  .pipe(gulp.dest( paths.styles ));
});

// HTML
gulp.task('html', function() {
  gulp.src(paths.dest + '/**/*.php')
    .pipe($.plumber())
    .pipe(browserSync.reload({stream: true}));
});

// BrowserSync
gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'localhost:8080',// 環境にあわせて変更
    open: 'external'// URLをUPで開く
  });
});
