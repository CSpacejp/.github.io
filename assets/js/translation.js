document.addEventListener("DOMContentLoaded", async function () {
    const translateButton = document.getElementById("translateButton");
    const home_edu_description = document.getElementById("home__edu__description");
    

    const translations = await fetch("https://raw.githubusercontent.com/CSpacejp/CSpacejp.github.io/main/assets/translation.json").then(response => response.json());
  
    let currentLanguage = "en"; // Default language
  
    function updateContent(language) {
      home_edu_description.textContent = translations[language].home__edu__description;
    }
  
    translateButton.addEventListener("click", function () {
      currentLanguage = currentLanguage === "en" ? "ja" : "en";
      updateContent(currentLanguage);
    });
  
    // Initialize content with the default language
    updateContent(currentLanguage);
  });