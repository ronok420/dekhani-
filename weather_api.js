function weatherApi()
{
    axios.get('https://api.openweathermap.org/data/2.5/weather?q=London&units=metric&appid=7915a146b20579db958d4ad92a6c44d1')
    .then((res)=>{
       const temp = res.data.main.temp + `° C`;
       const center = document.querySelector('.center');
       const h1 = document.createElement('h1');
       h1.innerText = temp;
       center.append(h1);
    })
    .catch((err)=>{
        console.log(err);
    })
}

weatherApi();