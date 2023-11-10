



async function getDoctorsBySpecialization(specialization) {
    const url = `http://localhost/hms/doctor_api.php?specialization=${specialization}`;
    const res = await fetch(url);
    const data = await res.json();
    displaydata(data);
}



const displaydata = data => {
    const speciality = document.getElementsByClassName('dropdown-item');
    let showData = data.data;
    let card = '';
    showData.forEach(element => {
        card += `
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="${element.photos}" class="card-img-top" alt="Doctor Photo">
                    <div class="card-body">
                        <h5 class="card-title">Dr. ${element.doctor_name}</h5>
                        <p class="card-text fs-3">${element.specialization}</p>
                        <a href="#" class="btn btn-primary make-appointment" data-specialization="${element.specialization}">Make Appointment</a>
                    </div>
                </div>
            </div>
        `;
    });
    let row = document.querySelector('.row');
    row.innerHTML = card;

    if (!sessionStorage.getItem('randomPackageID')) {
        sessionStorage.setItem('randomPackageID', Math.floor(Math.random() * 1000) + 1);
    }
    

    // Add click event handler for "Make Appointment" button
    const makeAppointmentButtons = document.querySelectorAll('.make-appointment');
    makeAppointmentButtons.forEach(button => {
        button.addEventListener('click', async event => {
            const specialization = event.target.getAttribute('data-specialization');
            // const package_ID = Math.floor(Math.random() * 1000) + 1;
            const package_ID = sessionStorage.getItem('randomPackageID');
            // const randomPackageID = randomPackageID ;
           
            const randomBillID = Math.floor(Math.random() * 1000) + 1;
            const randomCost = Math.floor(Math.random() * (900 - 500 + 1)) + 500;
            const randomDate = new Date(+(new Date()) - Math.floor(Math.random()*10000000000));
            const billName = specialization;



          
            
           // Fetch patient_ID and patient_name from the patient table (replace 'YOUR_PATIENT_API_ENDPOINT' with the actual API endpoint)
            const patientResponse = await fetch('http://localhost/hms/get_patient_data.php');
            const patientData = await patientResponse.json();
            console.log(patientData); 
            const patientID = patientData.patient_ID;
            const patientName = patientData.patient_name;


          





            // Prepare data to be sent to the server
            const appointmentData = {
                package_ID: package_ID,
                bill_ID: randomBillID,
                bill_name: billName,
                patient_ID: patientID,
                patient_name: patientName,
                hospital_name: 'Your Hospital Name', // You can replace this with the actual hospital name
                date: randomDate.toISOString().slice(0, 19).replace('T', ' '),
                cost: randomCost
            };

            // Send data to the server (replace 'YOUR_APPOINTMENT_API_ENDPOINT' with the actual API endpoint)



            const appointmentResponse = await fetch('create_appointment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(appointmentData)
            });
            
            // Handle the response as needed
            const appointmentResult = await appointmentResponse.json();
            console.log(appointmentResult);
            
        
        });
    });
};
