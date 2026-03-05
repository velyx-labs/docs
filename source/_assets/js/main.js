import Alpine from "alpinejs";
import Prism from "prismjs";
import "prismjs/components/prism-markup";
import "prismjs/components/prism-markup-templating";
import "prismjs/components/prism-bash";
import "prismjs/components/prism-css";
import "prismjs/components/prism-javascript";
import "prismjs/components/prism-jsx";
import "prismjs/components/prism-typescript";
import "prismjs/components/prism-tsx";
import "prismjs/components/prism-json";
import "prismjs/components/prism-yaml";
import "prismjs/components/prism-php";
import "prismjs/components/prism-markdown";
import docsearch from "@docsearch/js";

// Dark mode toggle
function initDarkMode() {
  const toggles = document.querySelectorAll(".dark-mode-toggle");
  if (!toggles.length) return;

  // Check for saved preference or system preference
  const savedTheme = localStorage.getItem("theme");
  const systemDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

  // Apply theme on load
  const isDarkInitial = savedTheme === "dark" || (!savedTheme && systemDark);
  document.documentElement.classList.toggle("dark", isDarkInitial);

  // Toggle theme
  toggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      const isDark = document.documentElement.classList.toggle("dark");
      localStorage.setItem("theme", isDark ? "dark" : "light");
    });
  });
}

// Add copy button to all code blocks
document.addEventListener("DOMContentLoaded", function () {
  window.Alpine = Alpine;
  Alpine.start();
  initDarkMode();

  const docsearchContainer = document.getElementById("docsearch");
  if (docsearchContainer) {
    const appId = docsearchContainer.dataset.appId;
    const indexName = docsearchContainer.dataset.indexName;
    const apiKey = docsearchContainer.dataset.apiKey;

    if (appId && indexName && apiKey) {
      docsearch({
        container: "#docsearch",
        appId,
        indexName,
        apiKey,
        placeholder: "Search docs…",
        translations: {
          button: {
            buttonText: "Search",
            buttonAriaLabel: "Search documentation",
          },
          modal: {
            searchBox: {
              resetButtonTitle: "Clear the query",
              cancelButtonText: "Close",
              cancelButtonAriaLabel: "Close search",
            },
          },
        },
      });
    }
  }
  const codeBlocks = document.querySelectorAll(".prose pre");

  codeBlocks.forEach((block) => {
    // Skip if already has a button or has no-copy-button class
    if (block.querySelector(".copy-button") || block.closest(".no-copy-button")) return;

    const button = document.createElement("button");
    button.className =
      "copy-button cursor-pointer absolute top-2 right-2 p-2 rounded-md bg-muted hover:bg-muted-foreground/20 text-muted-foreground hover:text-foreground transition-opacity opacity-50 group-hover:opacity-100";
    button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>`;
    button.setAttribute("aria-label", "Copy code");

    // Add group class to parent for hover effect
    block.classList.add("group");

    button.addEventListener("click", async () => {
      const code = block.querySelector("code");
      const text = code.textContent;

      try {
        await navigator.clipboard.writeText(text);
        button.classList.add("bg-green-500", "text-white");
        button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>`;

        setTimeout(() => {
          button.classList.remove("bg-green-500", "text-white");
          button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>`;
        }, 2000);
      } catch (err) {
        console.error("Failed to copy:", err);
      }
    });

    block.appendChild(button);
  });

  // Show button on hover
  const style = document.createElement("style");
  style.textContent = `
        .prose pre.group:hover .copy-button,
        .prose pre .copy-button:focus {
            opacity: 1 !important;
        }
    `;
  document.head.appendChild(style);
});
