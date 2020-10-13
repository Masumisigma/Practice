var city = document.getElementById('city');
var postal = document.getElementById('postal');
function callback(data)
{
    city.innerHTML = data.city;
    postal.innerHTML = data.postal;
}
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'https://geolocation-db.com/jsonp';
var h = document.getElementsByTagName('script')[0];
h.parentNode.insertBefore(script, h);