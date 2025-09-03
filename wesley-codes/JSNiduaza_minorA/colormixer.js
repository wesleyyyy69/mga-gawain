// Color Mixer

// Function to validate if a color is valid (red, green, or blue)
function isValidColor(color) {
    const validColors = ['red', 'green', 'blue'];
    return validColors.includes(color.toLowerCase());
}

// Function to mix two colors
function mixColors(color1, color2) {
    // Convert colors to lowercase for case-insensitive comparison
    const c1 = color1.toLowerCase();
    const c2 = color2.toLowerCase();
    
    // Check if both colors are valid
    if (!isValidColor(c1) || !isValidColor(c2)) {
        return 'No Data';
    }
    
    // Color mixing logic based on RGB theory
    if (c1 === c2) {
        // Same colors result in the same color
        return capitalizeFirstLetter(c1);
    }
    
    // Different color combinations
    const colorMixes = {
        'redblue': 'Purple',
        'bluered': 'Purple',
        'bluegreen': 'Cyan',
        'greenblue': 'Cyan',
        'greenred': 'Yellow',
        'redgreen': 'Yellow'
    };
    
    return colorMixes[c1 + c2] || 'No Data'; // Fallback
}

// Helper function to capitalize the first letter of a string
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

// Main program
function colorMixer() {
    // Prompt for first color
    const color1 = prompt('Enter color 1 (RGB): ');
    
    // Prompt for second color
    const color2 = prompt('Enter color 2 (RGB): ');
    
    // Mix the colors
    const result = mixColors(color1, color2);
    
    // Display result
    if (result === 'No Data') {
        console.log(`${color1.toLowerCase()} + ${color2.toLowerCase()} = ${result}`);
    } else {
        // Format output for valid combinations
        const formattedColor1 = color1.toUpperCase();
        const formattedColor2 = color2.toUpperCase();
        console.log(`${formattedColor1} + ${formattedColor2} = ${result}`);
    }
}

// Run the color mixer program
colorMixer();
