let certificates_con = document.getElementById("certificates");

let certificates = 
[
    {
        id: 1,
        img: "DSC2021.png",
        alt: "District Skills Competition",
        title: "2021 District Skills Competition",
        description: "Gold Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    },
    {
        id: 2,
        img: "RSC2021.png",
        alt: "Regional Skills Competition",
        title: "2021 Regional Skills Competition",
        description: "Gold Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    },
    {
        id: 3,
        img: "PNSC2021.png",
        alt: "National Skills Competition",
        title: "2021 National Skills Competition",
        description: "Bronze Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    },
    {
        id: 4,
        img: "DSC2022.png",
        alt: "District Skills Competition",
        title: "2022 District Skills Competition",
        description: "Gold Medal in <b>Web Technology</b> as a <b>Expert</b>"
    }
    , {
        id: 5,
        img: "RSC2022.png",
        alt: "Regional Skills Competition",
        title: "2022 Regional Skills Competition",
        description: "Gold Medal in <b>Web Technology</b> as a <b>Expert</b>"
    }
    , {
        id: 6,
        img: "RSC2023.png",
        alt: "Regional Skills Competition",
        title: "2023 District Skills Competition",
        description: "Gold Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    }
    , {
        id: 7,
        img: "IYF.png",
        alt: "International Youth Foundation - Passport to Succes",
        title: "International Youth Foundation - Passport to Success",
        description: "Certificate of Attendance - 4 days Training of Trainers Workshop"
    }
    , {
        id: 8,
        img: "NC2.png",
        alt: "Computer System Servicing NC2",
        title: "Computer System Servicing",
        description: "TESDA National Certificate 2"
    }
    , {
        id: 9,
        img: "NDG.png",
        alt: "NDC Linux Unhatched Course",
        title: "NDC Linux Unhatched Course",
        description: "Focus on the basic Linux System Administration Skills"
    }
    , {
        id: 10,
        img: "oracleplsql.png",
        alt: "Oracle SQL",
        title: "Oracle SQL",
        description: "Successfully completing a free online course in Great Learning Academy"
    },
    {
        id: 11,
        img: "DSC2021.png",
        alt: "District Skills Competition",
        title: "2021 District Skills Competition",
        description: "Gold Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    },
    {
        id: 12,
        img: "TM1.png",
        alt: "Trainers Methodology Level 1",
        title: "Trainers Methodology Level 1",
        description: "Sccessfuly completed the program in TM 1 with 264 hours"
    },
    {
        id: 13,
        img: "PTS.png",
        alt: "Plan Training Session",
        title: "Plan Training Session",
        description: "Certificate of Completion"
    },
    {
        id: 14,
        img: "MTF.png",
        alt: "Maintain Training Facilities",
        title: "Maintain Training Facilities",
        description: "Certificate of Completion"
    },
    {
        id: 15,
        img: "PCPMW.png",
        alt: "Practicing COVID-19 Preventive Measures in the Workplace",
        title: "Certificate of Completion",
        description: "Practicing COVID-19 Preventive Measures in the Workplace"
    },
    {
        id: 16,
        img: "mfiDiploma.png",
        alt: "College Diploma",
        title: "College Diploma - Technical School",
        description: "Certificate in Information Technology"
    },
    {
        id: 17,
        img: "COC.png",
        alt: "OJT Completion",
        title: "On-the-Job Training",
        description: "Completed 1440 hours On-the-Job Training with MFI Polytechnic Institute Inc."
    },
    {
        id: 18,
        img: "COA.png",
        alt: "Training Workshop",
        title: "Training Workshop",
        description: "2-day trainng and workshop entitled \"Faculty Orientation and Training Workshop\""
    },
    {
        id: 19,
        img: "CIC.png",
        alt: "Certificate of Participation",
        title: "Participated in the CIC Academy Course III",
        description: "#DatosMoProtektado"
    },
    // {
    //     id: 20,
    //     img: "DSC2021.png",
    //     alt: "District Skills Competition",
    //     title: "2021 District Skills Competition",
    //     description: "Gold Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    // },
    // {
    //     id: 21,
    //     img: "DSC2021.png",
    //     alt: "District Skills Competition",
    //     title: "2021 District Skills Competition",
    //     description: "Gold Medalist in <b>Web Technology</b> as a <b>Competitor</b>"
    // }

]

certificates.forEach(cert => {

    certificates_con.innerHTML += 
    `
        <div class="cover">
            <div class="cover-img">
                <img src="media/certificates/${cert.img}" alt="${cert.alt}">
            </div>                        
            <div class="shadow">              
            </div>
            <div class="description">
                <h1>${cert.title}</h1>                    
                <p>${cert.description}</p>
            </div>
        </div>
    `
});


// certificates.forEach(cert => {

//     certificates_con.innerHTML +=
//     `
//         <div class="cover">
//             <div class="cover-img">
//                 <img src="media/certificates/${cert.img}.png" alt="${cert.alt}">
//             </div>                
//             <div class="shadow">              
//             </div>
//              <div class="description">
//                 <h1>${cert.title}</h1>                    
//                 <p>${cert.description}</p>
//             </div>
//         </div>
//     `

// });
