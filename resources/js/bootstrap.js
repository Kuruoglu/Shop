window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });





//add product to cart

document.querySelector('.icon-num').setAttribute('style', 'display: none')
if (document.querySelector('.add-to-cart')) {
    document.querySelector('.add-to-cart').addEventListener('submit', function (e) {
        e.preventDefault();
        let data = new FormData(this)

        console.log(this)
        axios.post('/cart/add', data)
            .then(function (response) {
                showCart(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        let icon = document.querySelector('.icon-num')

            icon.setAttribute('style', 'display: ');

    })

}



//function render cart in modal-body

function showCart(data) {
    document.querySelector('.modal-body').innerHTML = data;
}
//


//clear cart

if (document.querySelector('.btn-clear-cart')) {

    document.querySelector('.btn-clear-cart').addEventListener('click', function (e) {
        e.preventDefault();
        axios.post('/cart/clear')
            .then(function (response) {
                showCart(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        let icon = document.querySelector('.icon-num')
        icon.setAttribute('style', 'display: none');
})
}
// end clear cart

//delete from cart
document.querySelector('.modal-body').addEventListener('click', function(e) {
    e.preventDefault();

   if (e.target.classList.contains('btn-cart-delete')) {
       axios.post('/cart/delete', {
           id: e.target.getAttribute('data-id')
       })
           .then(function (response) {
               showCart(response.data);
           })
           .catch(function (error) {
               console.log(error);
           });
   }


})


document.querySelector('.modal-body').addEventListener('click', function(e) {
    e.preventDefault();
    if (e.target.classList.contains('plus')) {
        plusFunction(e.target.dataset.id)
    }
    if (e.target.classList.contains('minus')) {
        minusFunction(e.target.dataset.id)
    }

})

const plusFunction = (id) => {

    axios.post('/cart/plus', {
        id
    }).then(res => {
        showCart(res.data)

    }).catch(e => {
        console.log(e)
    })
}
const minusFunction = (id) => {

    axios.post('/cart/minus', {
        id
    }).then(res => {
        showCart(res.data)

    }).catch(e => {
        console.log(e)
    })
}



