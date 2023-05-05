const imagemin = import("imagemin");
const imageminMozjpeg = import("imagemin-mozjpeg");
const imageminPngquant = import("imagemin-pngquant");

(async () => {
  const files = await imagemin(["./graphics/*.{jpeg,jpg,png}"], {
    destination: "./graphics/output/",
    plugins: [
      imageminMozjpeg({ quality: 90 }),
      imageminPngquant({ quality: [0.6, 0.8] }),
    ],
  });

  console.log(files);
  //=> [{data: <Buffer 89 50 4e …>, destinationPath: 'build/images/foo.jpg'}, …]
})();
