module.exports = {
	content: ['./**/*.{php, html}'],
    safelist: ['shadow-xl', 'grid-rows-[1fr]'],
	theme: {
		fontFamily: {
			'primary': ['Montserrat'],
		},
		maxWidth: {
			'content': '1296px',
		},
		extend: {
			colors: {
				'primary': '#302C42',
                'secondary': '#C0B7E8',
                'accent': '#8176AF'
			},
		},
	},
	plugins: []
}