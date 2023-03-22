/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./index.php"],
	theme: {
		minWidth: {
			phone: "230px",
		},
		minHeight: {
			phone: "230px",
		},
		extend: {},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [
		require("@tailwindcss/aspect-ratio"),
		// ...
	],
};
