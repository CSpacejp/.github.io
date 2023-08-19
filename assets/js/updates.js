
// Assuming publicationsData is an array containing publication data objects
/*
const publicationsData = [
    {
      date: "9 Jul 2023",
      title: "Recruiting New Members",
      subtitle: "Recruitment",
      description: "Are you interested to work in a motivated tech-environment?",
    },
    // Add more publication data objects as needed
    {
        date: "9 Jul 2023",
        title: "Recruiting New Members",
        subtitle: "Recruitment",
        description: "Are you interested to work in a motivated tech-environment?",
    },
];
*/


const publicationsData = [];

async function fetchPublicationData() {
    try {
        const response = await fetch('updates.json');
        const data = await response.json();
        publicationsData.push(...data);
        console.log(publicationsData); // Verify the extracted data

        // Now you can use publicationsData to dynamically populate your webpage
        // For example, populate Swiper slides or other publication sections
    } catch (error) {
        console.error('Error loading publications.json:', error);
    }
}

// Fetch and load publication data from JSON
fetchPublicationData();
  

function createNewPublication(data) {
return `
    <div class="publications__content">
        <div>
            <span class="publications__subtitle">${data.date} | ${data.subtitle}</span>
            <h1 class="publications__title">${data.title}</h1></br>

            <span class="publications__button">
            Read more <i class='bx bx-right-arrow-alt'></i>
            </span>

            <div class="publications__model">
                <div class="publications__model-content">
                    <i class='bx bx-x publications__model-close'></i>

                    <h3 class="publications__model-title">Recruiting new members for <font color="green">CSpace</font></h3>
                    <p class="publications__model-description">
                        ${data.description}
                        </br>
                        <a href=></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    `;
}
  
// Get the container element
const swiperWrapper = document.querySelector(".swiper-slide");

// Loop through the data and insert publication sections
publicationsData.forEach(data => {
  const section = document.createElement("div");
  section.innerHTML = createNewPublication(data);
  swiperWrapper.appendChild(section);
});
  