const webpack = require('webpack'); 		
const path = require('path');		
		
const config = {		
	entry: './app/index.js',	
	output: {	
		path: path.resolve(__dirname, 'public'),
		filename: 'bundle.js'
	},	
	module: {	
		rules: [
			{test: /\.(js|jsx)$/, use: 'babel-loader'}
		]
	}
};		
		
module.exports = config;		