

php artisan  install:broadcasting


link app.js with vite 
run npm dev 

confirm in the browser 

php artisan make:event

#impleemnt this in event class
shouldBroadcast
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

































// Raw Pusher JS (verbose, complex)
const pusher = new Pusher('key', options);
const channel = pusher.subscribe('private-order.1');
channel.bind('OrderShipped', callback);

// Laravel Echo (clean, simple)
Echo.private('order.1')
    .listen('OrderShipped', callback);
