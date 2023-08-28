document.addEventListener("DOMContentLoaded", async function () {
    const translateButton = document.getElementById("translateButton");
    const home_edu_description = document.getElementById("home__edu__description");
    const learn_more_button = document.getElementById("learn__more__button");
    const about_section_title = document.getElementById("about__section__title");

    const translations = await fetch("https://raw.githubusercontent.com/CSpacejp/CSpacejp.github.io/main/assets/translation.json").then(response => response.json());
  
    let currentLanguage = "en"; // Default language
  
    function updateContent(language) {
      home_edu_description.textContent = translations[language].home__edu__description;
      learn_more_button.textContent = translations[language].learn__more__button;
      about_section_title.textContent = translations[language].about__section__title;
    }
  
    translateButton.addEventListener("click", function () {
      currentLanguage = currentLanguage === "en" ? "ja" : "en";
      updateContent(currentLanguage);
    });
  
    // Initialize content with the default language
    updateContent(currentLanguage);
  });