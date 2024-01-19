const round = (num) =>
	num.toFixed(7)
		.replace(/(\.[0-9]+?)0+$/, '$1')
		.replace(/\.0$/, '')
const rem = (px) => `${round(px / 16)}rem`

module.exports = {
	content: ['./**/*.{php, html}'],
	theme: {
		fontFamily: {
			'font-name': ['Font Name'],
		},
		maxWidth: {
			'content': rem(1200),
		},
		extend: {
			colors: {
				'primary': '#fff',
			},
		},
	},
	plugins: []
}