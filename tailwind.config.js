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
		extend: {
			spacing: {
				"10%": "10%",
				"5%": "5%",
				"100px": "100px",
			},
		},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [
		require("@tailwindcss/aspect-ratio"),
		// ...
	],
};
