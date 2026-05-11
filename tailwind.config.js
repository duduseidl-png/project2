export default {
    plugins: [require('daisyui')],
    daisyui: {
        themes: [
            {
                teste: {
                    'primary': '#cc0000',      // Azul
                    'secondary': '#ff6b6b',    // Vermelho
                    'accent': '#fbbf24',       // Amarelo
                    'neutral': '#3b4556',
                    'base-100': '#ffffff',
                    'success': '#10b981',
                    'warning': '#f59e0b',
                    'error': '#ef4444',
                },
            },
            'dark',
            'cupcake',
        ],
    },
}
