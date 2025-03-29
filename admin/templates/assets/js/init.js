// Theme Initialization Script
// This script runs immediately and prevents flash of incorrect theme
// You can add any functions that you want loaded before DOM

(function() {
  // Get theme from localStorage or use system preference
  const getStoredTheme = () => localStorage.getItem("theme");
  
  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme();
    if (storedTheme) {
      return storedTheme;
    }
    return window.matchMedia("(prefers-color-scheme: dark)").matches
      ? "dark"
      : "light";
  };

  // Set theme immediately
  const setTheme = (theme) => {
    if (theme === "auto" || theme === null) {
      document.documentElement.setAttribute(
        "data-bs-theme",
        window.matchMedia("(prefers-color-scheme: dark)").matches
          ? "dark"
          : "light"
      );
    } else {
      document.documentElement.setAttribute("data-bs-theme", theme);
    }
  };

  // Apply theme immediately
  setTheme(getPreferredTheme());
})(); 