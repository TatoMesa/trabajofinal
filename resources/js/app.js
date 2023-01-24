import './bootstrap';


/* Uso una api gratuita que me da el valor de las divisas en base al euro, de ahi calculo el valor del dolar del bitcoin y del ethereum en base al peso, para luego mostrarlo en el navegador*/


var fecha = new Date() //defino fecha actual
const dia = fecha.getFullYear() + '-' + fecha.getMonth()+1 + '-' +fecha.getDate()   //la llevo a un formato para poder
                                                                                    //usar la url que maneja la api
const apiUrl = 'https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/'+ dia + '/currencies/eur.json'

fetch(apiUrl).then(respuesta => respuesta.json()).then(data => mostrarDivisas(data)).catch(error => console.log(error));

const etiquetaHtml = document.querySelector('#app')

const mostrarDivisas = (data) => { 
    let hoy = data.date //fecha actual
    let euro = (data.eur.ars).toFixed(3); //cuantos Pesos 1 euro
    let dolar = (euro / data.eur.usd).toFixed(3);   //cuantos pesos 1 dolar
    let bitcoin = (euro / data.eur.btc).toFixed(3);  //cuantos pesos 1 bitcoin
    let ethereum = (euro / data.eur.etc).toFixed(3); //cuantos pesos 1 ethereum
    
    
    let elemento = document.createElement('span')
    elemento.setAttribute("id", "fecha")
    elemento.setAttribute("class", "cotizaciones")
    elemento.appendChild(document.createTextNode(" Hoy: " + hoy))
    etiquetaHtml.appendChild(elemento)
    
    elemento = document.createElement('span')
    elemento.setAttribute("id", "dolar")
    elemento.setAttribute("class", "cotizaciones")
    elemento.appendChild(document.createTextNode(" Dolar: $"+ dolar))
    etiquetaHtml.appendChild(elemento)

    elemento = document.createElement('span')
    elemento.setAttribute("id", "euro")
    elemento.setAttribute("class", "cotizaciones")
    elemento.appendChild(document.createTextNode(" Euro: $"+ euro))
    etiquetaHtml.appendChild(elemento)

    elemento = document.createElement('span')
    elemento.setAttribute("id", "btc")
    elemento.setAttribute("class", "cotizaciones")
    elemento.appendChild(document.createTextNode(" Bitcoin: $"+ bitcoin))
    etiquetaHtml.appendChild(elemento)
    
    elemento = document.createElement('span')
    elemento.setAttribute("id", "etc")
    elemento.setAttribute("class", "cotizaciones")
    elemento.appendChild(document.createTextNode(" Ethereaum: $"+ ethereum))
    etiquetaHtml.appendChild(elemento)
            
}
