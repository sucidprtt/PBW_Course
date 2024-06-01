const toggleSwitch = document.querySelector('#darkModeToggle');

// Function to set theme based on user preference
const setTheme = (theme) => {
    if (theme === 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
}

// Event listener for dark mode toggle switch
toggleSwitch.addEventListener('change', (event) => {
    if (event.target.checked) {
        setTheme('dark');
    } else {
        setTheme('light');
    }
});

// Initialize theme based on user's preference
if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
    toggleSwitch.checked = true;
    setTheme('dark');
} else {
    toggleSwitch.checked = false;
    setTheme('light');
}
