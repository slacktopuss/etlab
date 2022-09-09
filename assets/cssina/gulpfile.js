const gulp      = require('gulp'),
      postcss   = require('gulp-postcss'),
      uncss     = require('postcss-uncss'),
      cleanCss  = require('gulp-clean-css');

// здесь пишем название файла, в котором мы разместили стили со всего нашего сайта
const styleFile = 'etlab.css';

gulp.task('default', function() {
    var plugins = [
        uncss({ // ниже перечисляем те страницы, которые у нас получились на пункте 5
            html: ['01.html']
            // если Вы пропустили пункт 5 и решили вписывать URL вместо сохранения html-кода, то вписываем выше URL, через запятую, каждый URL отдельно, в кавычках. Подробнее - здесь
        }),
    ];
    return gulp.src(styleFile)
        .pipe(postcss(plugins))
        .pipe(cleanCss({
            level: 2, // это самый сильный вариант объединения стилей. Подробнее - здесь
            format: 'keep-breaks' // с этим значением итоговые стили будут написаны с переносом каждого правила на новую строчку. Подробнее - здесь
        }))
        .pipe(gulp.dest('dist'));
});