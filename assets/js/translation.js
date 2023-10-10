document.addEventListener("DOMContentLoaded", async function () {
    const translateButton = document.getElementById("translateButton");
    const notification_id = document.getElementById("notification__id"); //temp
    const donateButton = document.getElementById("donateButton"); //temp
    const home_edu_description = document.getElementById("home__edu__description");
    const learn_more_button = document.getElementById("learn__more__button");
    const about_section_title = document.getElementById("about__section__title");

    const about_title_1 = document.getElementById("about__title__1");
    const about_title_2 = document.getElementById("about__title__2");
    const about_title_3 = document.getElementById("about__title__3");
    const about_description_1 = document.getElementById("about__description__1");
    const about_description_2 = document.getElementById("about__description__2");
    const about_description_3 = document.getElementById("about__description__3");

    const aboutus_title = document.getElementById("aboutus__title");

    const updates_title = document.getElementById("updates__title");

    const contact_title = document.getElementById("contact__title");
    const mailtous = document.getElementById("mailtous");

    const translations = await fetch("https://raw.githubusercontent.com/CSpacejp/CSpacejp.github.io/main/assets/translation.json").then(response => response.json());
  
    let currentLanguage = "en"; // Default language
  
    function updateContent(language) {
      notification_id.textContent = translations[language].notification__id;
      donateButton.textContent = translations[language].donateButton;
      home_edu_description.textContent = translations[language].home__edu__description;
      learn_more_button.textContent = translations[language].learn__more__button;
      about_section_title.innerHTML = translations[language].about__section__title;

      about_title_1.textContent = translations[language].about__title__1;
      about_title_2.textContent = translations[language].about__title__2;
      about_title_3.textContent = translations[language].about__title__3;
      about_description_1.textContent = translations[language].about__description__1;
      about_description_2.textContent = translations[language].about__description__2;
      about_description_3.textContent = translations[language].about__description__3;

      aboutus_title.textContent = translations[language].aboutus__title;

      updates_title.textContent = translations[language].updates__title;
      contact_title.textContent = translations[language].contact__title;
      mailtous.textContent = translations[language].mailtous;
    }
  
    translateButton.addEventListener("click", function () {
      currentLanguage = currentLanguage === "en" ? "ja" : "en";
      updateContent(currentLanguage);
    });
  
    // Initialize content with the default language
    updateContent(currentLanguage);
  });