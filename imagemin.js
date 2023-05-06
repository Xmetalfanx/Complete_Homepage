import imagemin from 'imagemin';
import imageminJpegtran from 'imagemin-jpegtran';
import imageminPngquant from 'imagemin-pngquant';
import imageminGifsicle from 'imagemin-gifsicle';


const files = await imagemin(['graphics/*.{jpg,png}'], {
	destination: 'build/images',
	plugins: [
		// imageminJpegtran(),
		// imageminPngquant({
		// 	quality: [0.6, 0.8]
		// })

        // imageminGifsicle({ interlaced: true }),
        imagemin.mozjpeg({ quality: 90, progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),

	]
});

console.log(files);