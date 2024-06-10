
document.addEventListener('DOMContentLoaded', function () {

    console.log('Hello from scripter');

    function getCookie(name) {
        let cookieArr = document.cookie.split(';');

        for (let i = 0; i < cookieArr.length; i++) {
            let cookiePair = cookieArr[i].split('=');

            let cookieName = cookiePair[0].trim();
            if (cookieName === name) {
                return decodeURIComponent(cookiePair[1]);
            }
        }

        // Return null if not found
        return null;
    }

    // Usage
    let country_name = "a2simplybetter_country_name";
    let cookieValue = getCookie(country_name);



    let location_popup_container_overlay = document.querySelector('.location_popup_container_overlay');
    let popular_city_list_item = document.querySelectorAll('.popular_city_list_item');
    let other_city_list_item = document.querySelectorAll('.other_city_list_item');


    if (!cookieValue && location_popup_container_overlay) {
        location_popup_container_overlay.style.display = 'flex';
        location_popup_container_overlay.classList.add('show_location_popup');
    }



    // Popular city EventListner
    if (popular_city_list_item) {
        popular_city_list_item.forEach(function (item) {
            item.addEventListener('click', function () {
                showPopup(item);
            });
        });
    }

    // Other cities EventListner
    if (other_city_list_item) {
        other_city_list_item.forEach(function (item) {
            item.addEventListener('click', function () {
                showPopup(item);
            });
        });
    }

    function showPopup(item) {
        location_popup_container_overlay.classList.remove('show_location_popup');
        let country_name = "a2simplybetter_country_name";
        let value = item.textContent.trim(' ');
        let days = 7;
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = country_name + "=" + (value || "") + expires + "; path=/";
    }


});