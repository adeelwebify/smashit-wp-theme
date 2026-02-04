import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
	plugins: [tailwindcss()],
	build: {
		outDir: 'assets/dist',
		emptyOutDir: true,
		manifest: true,
		rollupOptions: {
			input: {
				main: 'assets/src/js/main.js',
			},
			output: {
				entryFileNames: 'js/[name].js',
				chunkFileNames: 'js/[name].js',
				assetFileNames: ({ name }) => {
					if (name && name.endsWith('.css')) {
						return 'css/main.css';
					}

					return 'assets/[name]';
				},
			},
		},
	},
});
