// For "hint" about "import path" with "~"
//  Go to "Settings -> Language & Frameworks -> Javascript -> Webpack" and choose this file.
//  https://github.com/nuxt/nuxt.js/issues/2936

// [Possible_alternative]-[BEGIN]
//  https://intellij-support.jetbrains.com/hc/en-us/community/posts/360006380799-NuxtJS-webpack-aliases
//
// Solved by creating ts-shims.d.ts:
// ---
// declare module '*.vue' {
//   import Vue from 'vue'
//   // noinspection JSUnusedGlobalSymbols
//   export default Vue
// }
// ---
// [Possible_alternative]-[END]

// About "path.resolve"
//  https://webpack.js.org/configuration/resolve/

const path = require('path')

module.exports = {
	resolve: {
		// for IDE (WebStorm, PyCharm, etc)
		extensions: ['.js', '.json', '.vue', '.ts', 'svg'],
		root: path.resolve(__dirname, 'client'),
		alias: {
			'@': path.resolve(__dirname, 'resources/assets/js'),
			'@estimate': path.resolve(__dirname, 'resources/assets/js/components/Estimate'),
			'~': path.resolve(__dirname, 'resources/assets/js'),
		}
	}
};
