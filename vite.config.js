import { defineConfig } from 'vite'

export default defineConfig(({ mode }) => ({
	publicDir: false,
	build: {
		outDir: 'public/dist',
		emptyOutDir: false,
		minify: mode === 'production',
		sourcemap: mode === 'development',
		rollupOptions: {
			input: {
				app: './src_front/js/app.js',
				styles: './src_front/scss/main.scss'
			},
			output: {
				entryFileNames: '[name].js',
				assetFileNames: '[name].[ext]'
			}
		}
	}
}))
