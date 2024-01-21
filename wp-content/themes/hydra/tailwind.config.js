module.exports = {
	content: ['./**/*.{php, html}'],
    safelist: ['shadow-xl', 'grid-rows-[1fr]', '!bg-primary'],
	theme: {
		fontFamily: {
			'primary': ['Montserrat'],
		},
		maxWidth: {
			'content': '1320px',
		},
		extend: {
			colors: {
				'primary': '#302C42',
                'primary-focus': '#343045',
                'secondary': '#C0B7E8',
                'accent': '#8176AF',
			},
		},
	},
	plugins: []
}