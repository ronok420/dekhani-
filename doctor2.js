// async function getData() {
//     const url='http://localhost/hms/doctor_api.php';
//     const res= await fetch(url);
//     const data= await res.json();
//     displaydata(data);
        
       
//     }

    async function getDoctorsBySpecialization(specialization) {
        const url = `http://localhost/hms/doctor_api.php?specialization=${specialization}`;
        const res = await fetch(url);
        const data = await res.json();
        displaydata(data);
    }


    
    const displaydata= data => {

        const  speciality=document.getElementsByClassName('dropdown-item');
        console.log(data);
         let showData=data.data
        let card = '';
        showData.forEach((element) => {
            card += `
                <div class="col mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="${element.photos}" class="card-img-top" alt="Doctor Photo">
                        <div class="card-body">
                            <h5 class="card-title">Dr. ${element.doctor_name}</h5>
                            <p class="card-text fs-3">${element.specialization}</p>
                            <a href="#" class="btn btn-primary">Make Appointment</a>
                        </div>
                    </div>
                </div>
            `;
        });
        let row = document.querySelector('.row');
        row.innerHTML = card;



    }
   


// getData();