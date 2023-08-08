const dropImg = document.querySelector(".drop-arrow img");
const column2 = document.querySelector(".column2");
const main = document.querySelector("main");
dropImg.addEventListener("click", () => {
  if (column2.style.display == "none") {
    column2.style.display = "block";
    column2.style.marginTop = "0.5rem";
    dropImg.style.rotate = "-180deg";
  } else {
    column2.style.display = "none";
    dropImg.style.rotate = "0deg";
  }
});

// Create Services content in a array object

const servicesArray = [
  {
    img: "img/services/graphic-design.png",
    head: "GRAPHIC DESIGN",
    p: "Good design is essential for creating a strong visual identity and communicating your message effectively. Our graphic design services cover a range of mediums, from print to digital, and are tailored to meet the specific needs of each client.<br><br>Our graphic design services include:<br> Logo and branding design Print collateral design (brochures, business cards, flyers, etc.)<br>Digital collateral design (social media graphics, email newsletters, etc.)<br>Packaging design<br>Illustration and infographic design",
  },
  {
    img: "img/services/app-development.png",
    head: "WEBSITE & MOBILE APP DEVELOPMENT",
    p: "Our expert team builds custom websites and mobile apps tailored to your business needs using the latest technologies, ensuring fast, secure, and user-friendly solutions. We also offer ongoing maintenance and support to ensure your website and mobile app are always up-to-date and optimized for the best user experience. <br> <br> Our website & mobile app development Services Include: <br> Custom Website Development <br> E-Commerce Development<br>CMS Development <br>WordPress Development<br>iOS and Android App Development<br> UI/UX Design<br> Website and Mobile App Maintenance and Support<br>Website and Mobile App Optimization",
  },
  {
    img: "img/services/creative.png",
    head: "BRANDING",
    p: "Your brand is your identity and sets you apart from your competitors. We help businesses and organizations create a strong brand that resonates with their target audience and effectively communicates their values and personality. <br><br> Our branding services include: <br> Brand strategy development <br> Logo design and visual identity development <br> Brand guidelines development <br> Brand messaging and tone of voice",
  },
  {
    img: "img/services/ux-design.png",
    head: "UI/UX DESIGN",
    p: "User experience is a critical component of any successful digital product. We work with businesses and organizations to create intuitive and user-friendly interfaces that engage users and enhance their overall experience. <br><br> Our UI/UX design services include: <br> User research and analysis <br> Information architecture and wireframing <br> UI design and prototyping <br> Usability testing and optimization",
  },
  {
    img: "img/services/edit-image.png",
    head: "PHOTO EDITING",
    p: "we offer a range of photo editing services to help individuals and businesses enhance their images and achieve their desired look. Our experienced team of photo editors use the latest software and techniques to transform your images into works of art. <br> <br> Our Photo Editing Services Include: <br> Color correction and enhancement <br> Retouching (blemish removal, skin smoothing, etc.) <br> Background removal and replacement <br> Image resizing and cropping <br> Photo restoration and repair <br> Image manipulation and compositing <br> Whether you need photos for your website, social media, or print materials, we can help you create stunning visuals that capture your audience's attention.",
  },
  {
    img: "img/services/signs.png",
    head: "GIS MAPPING",
    p: "we specialize in Geographic Information System (GIS) mapping services that help businesses and organizations make informed decisions based on spatial data. Our GIS experts have experience working with a wide range of industries, including government, utilities, real estate, and more. <br><br> Our GIS Mapping Services Include: <br> GIS data analysis and modeling <br> Cartography and map production <br> Spatial database design and development <br> Geocoding and address matching <br> GIS consulting and training <br> Web and mobile GIS application development <br> With our GIS mapping services, you can gain valuable insights into your data and visualize it in a way that is easy to understand and act upon.",
  },
];

let services = document.querySelector("#services");
const readMoreBtn = document.querySelectorAll(".read-more");

let modalWindow = document.createElement("div");
modalWindow.id = "modalWindow";

let modalBox = document.createElement("div");
modalBox.id = "modalBox";

for (let i = 0; i < readMoreBtn.length; i++) {
  const element = readMoreBtn[i];
  element.addEventListener("click", () => {
    services.appendChild(modalWindow);
    modalWindow.appendChild(modalBox);

    let imgcont = document.createElement("img");
    imgcont.src = servicesArray[i].img;

    let contentContainer = document.createElement("div");
    contentContainer.classList.add("contentContainer");

    let cardtitle = document.createElement("h3");
    cardtitle.innerHTML = servicesArray[i].head;

    let carddesc = document.createElement("ul"); // Use <ul> for bullet points

    const serviceDetails = servicesArray[i].p.split("<br>").filter(detail => detail.trim() !== "");
    serviceDetails.forEach(detail => {
      const listItem = document.createElement("li");
      listItem.innerHTML = detail;
      carddesc.appendChild(listItem);
    });

    let readless = document.createElement("p");
    readless.innerHTML = "Read Less";
    readless.classList.add("read-less");

    modalBox.appendChild(imgcont);
    modalBox.appendChild(contentContainer);

    contentContainer.appendChild(cardtitle);
    contentContainer.appendChild(carddesc);
    contentContainer.appendChild(readless);

    readless.addEventListener("click", () => {
      modalWindow.remove();
      modalBox.remove();
      while (modalBox.firstChild) {
        modalBox.removeChild(modalBox.firstChild);
      }
    });

    modalWindow.onclick = () => {
      modalWindow.remove();
      modalBox.remove();
      while (modalBox.firstChild) {
        modalBox.removeChild(modalBox.firstChild);
      }
    };
  });
}