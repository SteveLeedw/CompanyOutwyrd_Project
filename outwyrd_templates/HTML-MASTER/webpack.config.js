const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = {
	entry: "./assets/index.js",
	output: {
		path: path.resolve(__dirname, "dist"),
		filename: "./js/index.bundle.js"
	},
	// Generate sourcemaps for proper error messages
	devtool: "source-map",
	performance: {
		// Turn off size warnings for entry points
		hints: false
	},
	module: {
		rules: [
			{
				test: /\.(html)$/,
				loader: "html-loader",
				options: {
					// Interpolation syntax for ES6 template strings
					interpolate: true,
					// Disable minifcation during production mode
					minimize: false
				},
				exclude: /node_modules/
			},
			{
				test: /\.(css|sass|scss)$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
						options: {
							publicPath: "../",
							hmr: process.env.NODE_ENV === 'production',
						}
					},
					{
						loader: "css-loader",
						options: {
							importLoaders: 2,
							sourceMap: true,

						}
					},
					{
						loader: "resolve-url-loader"
					},
					{
						loader: "postcss-loader",
						options: {
							plugins: () => [require("autoprefixer")],
							sourceMap: true
						}
					},
					{
						loader: "sass-loader",
						options: {
							sourceMap: true
						}
					}
				],
				exclude: /node_modules/
			},
			{
				enforce: "pre", // checked before being processed by babel-loader
				test: /\.(js)$/,
				loader: "eslint-loader",
				exclude: /node_modules/
			},
			{
				test: /\.(js)$/,
				loader: "babel-loader",
				exclude: /node_modules/
			},
			{
				test: /\.(jpe?g|png|gif|svg)$/,
				use: [
					{
						loader: "file-loader",
						options: {
							outputPath: (url, resourcePath, context) => {
								if (/icon\.png|tile\.png|tile-wide\.png/.test(resourcePath)) {
									return url;
								} else {
									return `images/${url}`;
								}
							},
							name: "[name].[ext]"
						}
					},
					{
						loader: "image-webpack-loader",
						options: {
							disable: process.env.NODE_ENV !== "production", // Disable during development
							mozjpeg: {
								progressive: true,
								quality: 75
							}
						}
					}
				],
				exclude: /node_modules/
			},
			{
				test: /(favicon\.ico|site\.webmanifest|browserconfig\.xml|robots\.txt|humans\.txt)$/,
				loader: "file-loader",
				options: {
					name: "[name].[ext]"
				},
				exclude: /node_modules/
			},
			{
				test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
				loader: "file-loader",
				options: {
					outputPath: "fonts",
					name: "[name].[ext]"
				},
				exclude: /node_modules/
			}
		]
	},
	// DevServer
	// https://webpack.js.org/configuration/dev-server/
	devServer: {
		contentBase: path.join(__dirname, "dist"),
		compress: true,
		port: 9000
	},
	plugins: [

		new HtmlWebpackPlugin({
			template: "./assets/html/homepage-v1.html",
			filename: "homepage-v1.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/homepage-v2.html",
			filename: "homepage-v2.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/homepage-v3.html",
			filename: "homepage-v3.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/homepage-v4.html",
			filename: "homepage-v4.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/homepage-v5.html",
			filename: "homepage-v5.html",
			hash: true
		}),

		new HtmlWebpackPlugin({
			template: "./assets/html/single-detail-v1.html",
			filename: "single-detail-v1.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/single-detail-v2.html",
			filename: "single-detail-v2.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/single-detail-v3.html",
			filename: "single-detail-v3.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/single-detail-v4.html",
			filename: "single-detail-v4.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/single-detail-v5.html",
			filename: "single-detail-v5.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/listing-style-v1.html",
			filename: "listing-style-v1.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/listing-style-v2.html",
			filename: "listing-style-v2.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/listing-style-v3.html",
			filename: "listing-style-v3.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/listing-style-v4.html",
			filename: "listing-style-v4.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/listing-style-v5.html",
			filename: "listing-style-v5.html",
			hash: true
		}),

		new HtmlWebpackPlugin({
			template: "./assets/html/agents-v1.html",
			filename: "agents-v1.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/agents-v2.html",
			filename: "agents-v2.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/agents-detail.html",
			filename: "agents-detail.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/agency-v1.html",
			filename: "agency-v1.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/agency-v2.html",
			filename: "agency-v2.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/agency-detail.html",
			filename: "agency-detail.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/blog.html",
			filename: "blog.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/blog-single.html",
			filename: "blog-single.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/about-us.html",
			filename: "about-us.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/login.html",
			filename: "login.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/register.html",
			filename: "register.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/contact.html",
			filename: "contact.html",
			hash: true
		}),
		new HtmlWebpackPlugin({
			template: "./assets/html/404.html",
			filename: "404.html",
			hash: true
		}),


		new MiniCssExtractPlugin({
			filename: "./css/styles.css"
		}),


	]
};
