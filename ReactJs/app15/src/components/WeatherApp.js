import { useEffect, useState } from "react";

function WeatherApp() {

    // state for city name
    let [cityName, setCityName] = useState("Rajkot");

    let [weatherData, setWeatherData] = useState([]);
    let [icon, setIcon] = useState('04d');
    let [iconURL, setIconURL] = useState(`https://openweathermap.org/img/wn/${icon}@4x.png`);
    let [sysData, setSysData] = useState({});
    let [city, setCity] = useState("");
    let [main, setMain] = useState({});
    let [wind, setWind] = useState({});

    // URL for API
    const APIURL = `https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=5a5932a5ccb1805699367b71ff5ca345&units=metric`;


    // Load Weather Data
    function loadWeatherData(){
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                //console.log(result);
                if(result.cod == 200){
                    setIcon(result.weather[0].icon);
                    setWeatherData(result.weather[0]);
                    setSysData(result.sys);
                    setCity(result.name);
                    setMain(result.main);
                    setWind(result.wind);
                }else{
                    alert(`No data found for ${cityName} city.`);
                }
            });
        })
    }

    // onload get weather data
    useEffect(()=>{
        loadWeatherData();
    }, []);

    function formatTime(timeStamp){
        const date = new Date(timeStamp * 1000);
        return date.toLocaleTimeString();
    }

    return <>
        <div className="card w-75 mx-auto my-3">
            <div className="card-header">
                <h1>Weather Information App.</h1>

                <div className="input-group">
                    <input type="text" placeholder="Enter City Name" className="form-control p-3" onInput={(e) => setCityName(e.target.value)}></input>
                    <button type="button" className="btn btn-primary" onClick={()=> loadWeatherData()}>Search</button>
                </div>
            </div>

            <div className="card-body">
                <div className="row">
                    <div className="col-md-6">
                        <img src={iconURL}></img>
                        <h3>{weatherData.main}</h3>
                        <h4>{weatherData.description}</h4>
                    </div>
                    <div className="col-md-6">
                        <h1>{city}<sup>({sysData.country})</sup></h1>

                        <hr/>
                        <div className="row">
                            <div className="col-md-6"><h1>Max <br/>{main.temp_max} &deg;C</h1></div>
                            <div className="col-md-6"><h1>Min <br/>{main.temp_min} &deg;C</h1></div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="card-footer">
                <div className="row">
                    <div className="col-md-4">Wind Speed <br/>{wind.speed}</div>
                    <div className="col-md-4">Wind Degree <br/>{wind.deg}</div>
                    <div className="col-md-4">Wind Gust<br/>{wind.gust}</div>
                </div>

                <div className="row my-3">
                    <div className="col-md-6">Sunrise <br/>{formatTime(sysData.sunrise)}</div>
                    <div className="col-md-6">Sunset <br/>{formatTime(sysData.sunset)}</div>
                </div>
            </div>
        </div>
    </>
}

export default WeatherApp;