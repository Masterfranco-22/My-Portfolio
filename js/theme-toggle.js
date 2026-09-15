const themeToggle = document.querySelector("#theme-toggle");
let savedTheme = null;

try {
  savedTheme = localStorage.getItem("portfolio-theme");
} catch {
  savedTheme = null;
}

const systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

function applyTheme(theme) {
  const isDark = theme === "dark";
  document.documentElement.dataset.theme = isDark ? "dark" : "light";

  if (themeToggle) {
    themeToggle.textContent = isDark ? "☀" : "☾";
    themeToggle.setAttribute(
      "aria-label",
      isDark ? "Switch to light theme" : "Switch to dark theme",
    );
    themeToggle.setAttribute("aria-pressed", String(isDark));
  }
}

applyTheme(savedTheme || (systemPrefersDark ? "dark" : "light"));

themeToggle?.addEventListener("click", () => {
  const nextTheme = document.documentElement.dataset.theme === "dark" ? "light" : "dark";
  try {
    localStorage.setItem("portfolio-theme", nextTheme);
  } catch {
    // Continue applying the theme for this page when storage is blocked.
  }
  applyTheme(nextTheme);
});
